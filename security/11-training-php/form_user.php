<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Hàm giải mã ID
function decodeId($encodedId)
{
    return base64_decode($encodedId);
}

$user = NULL; //Add new user
$_id = NULL;



if (!empty($_GET['id'])) {
    $_id = decodeId($_GET['id']);
    $user = $userModel->findUserById($_id); //Update existing user
}

if (!empty($_POST['submit'])) {

    // Hàm validate dữ liệu đầu vào
    function validateInput($data)
    {
        $errors = [];

        // Validate tên người dùng (name)
        if (empty($data['name'])) {
            $errors['name'] = "Tên người dùng là bắt buộc.";
        } else if (!preg_match('/^[a-zA-Z0-9]{5,15}$/', $data['name'])) {
            $errors['name'] = "Tên người dùng phải có độ dài từ 5 đến 15 ký tự và chỉ chứa các ký tự A-Z, a-z, 0-9.";
        }

        // Validate mật khẩu (password)
        if (empty($data['password'])) {
            $errors['password'] = "Mật khẩu là bắt buộc.";
        } else if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $data['password'])) {
            $errors['password'] = "Mật khẩu phải có độ dài từ 5-10 ký tự, bao gồm ít nhất một chữ cái viết thường, một chữ cái viết hoa, một số và một ký tự đặc biệt (~!@#$%^&*()).";
        }

        return $errors;
    }

    // Validate dữ liệu đầu vào
    $errors = validateInput($_POST);

    // Kiểm tra nếu có lỗi, hiển thị lại form với thông báo lỗi
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <!-- CSRF token bảo vệ form -->
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php if (!empty($errors)) { ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors as $error) { ?>
                            <li><?php echo $error; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>

</html>