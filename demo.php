<?php 

    declare(strict_types = 1);

    include_once("A.php");
    include_once("B.php");
    include_once("C.php");
    include_once("I.php");

class Demo {

    //Demo A
    public function typeAReturnA():A{
        echo __FUNCTION__ . "<br>";
        return new A;
    }

    public function typeAReturnB():A{
        echo __FUNCTION__ . "<br>";
        return new B;
    }

    public function typeAReturnC():A{
        echo __FUNCTION__ . "<br>";
        return new C;
    }

    public function typeAReturnI():A{
        echo __FUNCTION__ . "<br>";
        return new I;
    }

    public function typeAReturnNull():A{
        echo __FUNCTION__ . "<br>";
        return null;
    }

    //Demo B
    public function typeBReturnA():B{
        echo __FUNCTION__ . "<br>";
        return new A;
    }

    public function typeBReturnB():B{
        echo __FUNCTION__ . "<br>";
        return new B;
    }

    public function typeBReturnC():B{
        echo __FUNCTION__ . "<br>";
        return new C;

    public function typeBReturnI():B{
        echo __FUNCTION__ . "<br>";
        return new I;
    }

    public function typeBReturnNull():B{
        echo __FUNCTION__ . "<br>";
        return null;
    }

    //Demo C
    public function typeCReturnA():C{
        echo __FUNCTION__ . "<br>";
        return new A;
    }

    public function typeCReturnB():C{
        echo __FUNCTION__ . "<br>";
        return new B;
    }

    public function typeCReturnC():C{
        echo __FUNCTION__ . "<br>";
        return new C;
    }

    public function typeCReturnI():C{
        echo __FUNCTION__ . "<br>";
        return new I;
    }

    public function typeCReturnNull():C{
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Demo I
    public function typeIReturnA():I{
        echo __FUNCTION__ . "<br>";
        return new A;
    }

    public function typeIReturnB():I{
        echo __FUNCTION__ . "<br>";
        return new B;
    }

    public function typeIReturnC():I{
        echo __FUNCTION__ . "<br>";
        return new C;
    }

    public function typeIReturnI():I{
        echo __FUNCTION__ . "<br>";
        return new I;
    }

    public function typeIReturnNull():I{
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Demo Null
    public function typeNullReturnA():null{
        echo __FUNCTION__ . "<br>";
        return new A;
    }

    public function typeNullReturnB():null{
        echo __FUNCTION__ . "<br>";
        return new B;
    }

    public function typeNullReturnC():null{
        echo __FUNCTION__ . "<br>";
        return new C;
    }

    public function typeNullReturnI():null{
        echo __FUNCTION__ . "<br>";
        return new I;
    }

    public function typeNullReturnNull():null{
        echo __FUNCTION__ . "<br>";
        return null;
    }
}

$demo = new Demo();
// chay demo A
// $demo->typeAReturnA();
// $demo->typeAReturnB();
// $demo->typeAReturnC();
// $demo->typeAReturnI();
// $demo->typeAReturnNull();

// chay demo B

// $demo->typeBReturnA();
// $demo->typeBReturnB();
// $demo->typeBReturnC();
// $demo->typeBReturnI();
// $demo->typeBReturnNull();

// chay demo C

// $demo->typeCReturnA();
// $demo->typeCReturnB();
// $demo->typeCReturnC();
// $demo->typeCReturnI();
// $demo->typeCReturnNull();

// chay demo I

// $demo->typeIReturnA();
// $demo->typeIReturnB();
// $demo->typeIReturnC();
// $demo->typeIReturnI();
// $demo->typeIReturnNull();

// chay demo Null

// $demo->typeNullReturnA();
// $demo->typeNullReturnB();
// $demo->typeNullReturnC();
// $demo->typeNullReturnI();
// $demo->typeNullReturnNull();

?>