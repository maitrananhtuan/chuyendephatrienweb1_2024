<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3069">

    <!-- License Warning -->
    <div class="license-warning bg-warning text-dark text-center py-2">
        <strong>Dev License:</strong> This installation of WHMCS is running under a Development License and is not authorized to be used for production use. Please report any cases of abuse to abuse@whmcs.com
    </div>

    <!-- News Section -->
    <div class="container mt-5 news-container">
        <h2 class="news-header">News</h2>
        <!-- First News Item -->
        <div class="news-item mb-5">
            <div class="d-flex align-items-center">
                <div class="date-box text-center">
                    <span class="date">May 6th</span>
                </div>
                <h3 class="news-title mb-0 ms-3"><a href="">Welcome To WHMCS</a></h3>
            </div>
            <p class="news-content">
            “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae deleniti, reiciendis molestias id harum, magnam nulla quaerat quod praesentium, quos sequi? Laudantium, nisi tempora accusamus, aliquam quisquam vel. Nihil, laborum. Thank you for choosing WHMCS Template! Welcome to WHMCS! You have made a great choice and we want to help you get up ...
                <a href="#" class="read-more">Read More »</a><br>
                ”
            </p>
        </div>

        <!-- Second News Item -->
        <div class="news-item">
            <div class="d-flex align-items-center">
                <div class="date-box text-center">
                    <span class="date">Sept 6th</span>
                </div>
                <h3 class="news-title mb-0 ms-3"><a href="">Thank you for choosing WHMCS 7 Template!</a></h3>
            </div>
            <p class="news-content">
            “Thank you for choosing WHMCS Template! Welcome to WHMCS! You have made a great choice and we want to help you get up and running as quickly as possible. This is a sample announcement. Announcements are a great way to keep your customers informed about news and special offers. You can edit or delete this announcement by logging into the admin area ...
                <a href="#" class="read-more">Read More »</a><br>
                ”
            </p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5">
        Powered by <a href="#">WHMCompleteSolution</a>
    </footer>
</div>
