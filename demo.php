<?php
declare(strict_types=1);

include_once ("classA.php");
include_once ("classB.php");
include_once ("classC.php");
include_once ("interface.php");



class Demo {

// Cau 2.c
//    public function typeAReturnB(): A {
//     echo __FUNCTION__ . "<br/>";
//     return new B();
// }


//Type A
// trường hợp 1
public function typeAReturnA(): A {
    echo __FUNCTION__ . "<br/>";
    return new A();
}


// trường hợp 2
public function typeAReturnB(): A {
    echo __FUNCTION__ . "<br/>";
    return new B();
}

// trường hợp 3
public function typeAReturnC(): A {
    echo __FUNCTION__ . "<br/>";
    return new C();
}

// trường hợp 4
public function typeAReturnI(): A {
    echo __FUNCTION__ . "<br/>";
    return new I();
}

// trường hợp 5
public function typeAReturnNull(): A {
    echo __FUNCTION__ . "<br/>";
    return null;
}


//Type B
// trường hợp 6
public function typeBReturnA(): B {
    echo __FUNCTION__ . "<br/>";
    return new A();
}

// trường hợp 7
public function typeBReturnB(): B {
    echo __FUNCTION__ . "<br/>";
    return new B();
}

// trường hợp 8
public function typeBReturnC(): B {
    echo __FUNCTION__ . "<br/>";
    return new C();
}

// trường hợp 9
public function typeBReturnI(): B {
    echo __FUNCTION__ . "<br/>";
    return new I();
}

// trường hợp 10
public function typeBReturnNull(): B {
    echo __FUNCTION__ . "<br/>";
    return null;
}


//Type C
// trường hợp 11
public function typeCReturnA(): C {
    echo __FUNCTION__ . "<br/>";
    return new A();
}

// trường hợp 12
public function typeCReturnB(): C {
    echo __FUNCTION__ . "<br/>";
    return new B();
}

// trường hợp 13
public function typeCReturnC(): C {
    echo __FUNCTION__ . "<br/>";
    return new C();
}

// trường hợp 14
public function typeCReturnI(): C {
    echo __FUNCTION__ . "<br/>";
    return new I();
}

// trường hợp 15
public function typeCReturnNull(): C {
    echo __FUNCTION__ . "<br/>";
    return null;
}


//Type I
// trường hợp 16
public function typeIReturnA(): I {
    echo __FUNCTION__ . "<br/>";
    return new A();
}

// trường hợp 17
public function typeIReturnB(): I {
    echo __FUNCTION__ . "<br/>";
    return new B();
}

// trường hợp 18
public function typeIReturnC(): I {
    echo __FUNCTION__ . "<br/>";
    return new C();
}

// trường hợp 19
public function typeIReturnI(): I {
    echo __FUNCTION__ . "<br/>";
    return new I();
}

// trường hợp 20
public function typeIReturnNull(): I {
    echo __FUNCTION__ . "<br/>";
    return null;
}

//Type Nu;;
// trường hợp 21
public function typeNullReturnA(): Null {
    echo __FUNCTION__ . "<br/>";
    return new A();
}

// trường hợp 22
public function typeNullReturnB(): Null {
    echo __FUNCTION__ . "<br/>";
    return new B();
}

// trường hợp 23
public function typeNullReturnC(): Null {
    echo __FUNCTION__ . "<br/>";
    return new C();
}

// trường hợp 24
public function typeNullReturnI(): Null {
    echo __FUNCTION__ . "<br/>";
    return new I();
}

// trường hợp 25
public function typeNullReturnNull(): Null {
    echo __FUNCTION__ . "<br/>";
    return null;
}

}


$classDemo = new Demo;
// Cau 2d
// $classDemo->typeAReturnB();


// Cau3
//Type A
// $classDemo->typeAReturnA();
// $classDemo->typeAReturnB();
// $classDemo->typeAReturnC();
// $classDemo->typeAReturnI();
// $classDemo->typeAReturnNull();

//Type B
// $classDemo->typeBReturnA();
// $classDemo->typeBReturnB();
// $classDemo->typeBReturnC();
// $classDemo->typeBReturnI();
// $classDemo->typeBReturnNull();

//Type C
// $classDemo->typeCReturnA();
// $classDemo->typeCReturnB();
// $classDemo->typeCReturnC();
// $classDemo->typeCReturnI();
// $classDemo->typeCReturnNull();

//Type I
// $classDemo->typeIReturnA(); 
// $classDemo->typeIReturnB();
// $classDemo->typeIReturnC();
// $classDemo->typeIReturnI();
// $classDemo->typeIReturnNull();

//Type Null
// $classDemo->typeNullReturnA();
// $classDemo->typeNullReturnB();
// $classDemo->typeNullReturnC();
// $classDemo->typeNullReturnI();
// $classDemo->typeNullReturnNull();