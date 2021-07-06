<?php
// Example 5-1
echo "<h3>Example 5-1</h3>";
echo strrev(" .dlrow olleH");   // Reverse
echo str_repeat("Hip ", 2);     // Repeat
echo strtoupper("hooray!");     // Uppercase
?>

<br>

<?php
// Example 5-2
// php function은 소문자로 인식한다.(case insensitive)
echo "<h3>Example 5-2</h3>";
echo fix_names("WILLIAM", "henry", "gatES");

function fix_names($n1, $n2, $n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return $n1 . " " . $n2 . " " . $n3;
}
?>

<br>

<?php
// Example 5-3
echo "<h3>Example 5-3</h3>";
$names = fix_names2("WILLIAM", "henry", "gatES");
echo $names[0] . " " . $names[1] . " " . $names[2];

function fix_names2($n1, $n2, $n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return array($n1, $n2, $n3);
}
?>

<br>

<?php
// Example 5-4
echo "<h3>Example 5-4</h3>";
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_names3($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3;

function fix_names3(&$n1, &$n2, &$n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
}
?>

<br>

<?php
// Example 5-5
echo "<h3>Example 5-5</h3>";
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a . " " . $a2 . " " . $a3 . "<br>";
fix_names4();
echo $a1 . " " . $a2 . " " . $a3;

function fix_names4()
{
    global $a1;
    $a1 = ucfirst(strtolower($a1));
    global $a2;
    $a2 = ucfirst(strtolower($a2));
    global $a3;
    $a3 = ucfirst(strtolower($a3));
}

?>

<br>

<?php
// Example 5-6, 7, 8
echo "<h3>Example 5-6, 7, 8</h3>";
// include "library.php";
// include_once "library.php";
// require_once "library.php";
// include가 아닌 require_once만 사용한다.
// require는 파일을 찾을 수 없다면 에러를 표시해주지만 다른 것은 에러없이 실행된다.
// 실행 도중 다시 require한다면 여러번 중복되어 require된다. -> 에러 발생
// C의 #ifndef처럼 어떤 라이브러리가 불러와있다면 더 이상 불러오지 않도록 하는 기능인 듯 하다.
?>

<br>

<?php
// Example 5-9
echo "<h3>Example 5-9</h3>";
if (function_exists("array_combine")) {
    echo "Function exists";
} else {
    echo "Function does not exist - better write our own";
}
?>

<br>

<?php
// Example 5-10
echo "<h3>Example 5-10</h3>";
$object = new User;
print_r($object);   // print_readable

class User
{
    public $names, $password;

    function save_user()
    {
        echo "Save User code goes here";
    }
}
?>

<br>

<?php
// Example 5-11
echo "<h3>Example 5-11</h3>";
$object = new User2;
print_r($object);
echo "<br>";

$object->name = "Joe";
$object->password = "mypass";
print_r($object);
echo "<br>";

$object->save_user();

class User2
{
    public $name, $password;

    function save_user()
    {
        echo "Save User code goes here";
    }
}
?>

<br>

<?php
// Example 5-12
// Copying an object?
echo "<h3>Example 5-12</h3>";
$object1 = new User3();
$object1->name = "Alice";
$object2 = $object1;
// php는 reference를 assignment
// $object1 === $object2 // True
$object2->name = "Amy";

echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name . "<br>";

class User3
{
    public $name;
}

?>

<br>

<?php
// Example 5-13
// Cloning an object!
echo "<h3>Example 5-13</h3>";
$object1 = new User4();
$object1->name = "Alice";
$object2 = clone $object1;
$object2->name = "Amy";

echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name . "<br>";

class User4
{
    public $name;
}

?>

<br>

<?php
// Example 5-14, 15, 16
// Constructor & Destructor & Methods
echo "<h3>Example 5-14, 15, 16</h3>";
class User5
{
    public $name, $password;
    function __construct($name, $password)
    {
        echo "---User class constuctor---<br>";
        $this->name = $name;
        $this->password = $password;
    }
    function __destruct()
    {
        echo "---User class destructor---<br>";
    }
    function get_password()
    {
        return $this->password;
    }
}
$user = new User5("Amy", "1234");   // constructor 호출
print_r($user);
echo "<br>";
echo "user's password : " . $user->get_password() . "<br>";
$user = null;   // destructor 호출
?>

<br>

<?php
// Example 5-17
echo "<h3>Example 5-17</h3>";
$object1 = new User6();
$object1->name = "Alice";

echo $object1->name;

class User6
{
}
?>

<br>

<?php
// Example 5-18
echo "<h3>Example 5-18</h3>";
class Test
{
    public $name = "Paul Smith";
    public $age = 42;
    // public $time = time();      // invalid
    // public $score = $level * 2; // invalid
}
?>

<br>

<?php
// Example 5-19
echo "<h3>Example 5-19</h3>";
Translate::lookup();

class Translate
{
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH = 2;
    const GERMAN = 3;

    static function lookup()
    {
        echo self::SPANISH;
    }
}
?>

<br>

<?php
// Example 5-20
echo "<h3>Example 5-20</h3>";
class Example
{
    // 접근지정자(제한자)
    var $name = "Michael";
    public $age = 23;
    protected $usercount;

    private function admin()
    {
    }
}
?>

<br>

<?php
// Example 5-21
echo "<h3>Example 5-21</h3>";
User7::pwd_string();

class User7
{
    static function pwd_string()
    {
        echo "Please enter your password";
    }
}

?>

<br>

<?php
// Example 5-22
echo "<h3>Example 5-22</h3>";
$temp = new Test2();

echo "Test A: ", Test2::$static_property . "<br>";
echo "Test B: ", $temp->get_sp() . "<br>";
echo "Test C: ", $temp->static_property . "<br>";

class Test2
{
    static $static_property = "I'm static";

    function get_sp()
    {
        return self::$static_property;
    }
}
?>

<br>

<?php
// Example 5-23
echo "<h3>Example 5-23</h3>";
$object = new Subscriber;
$object->name = "Fred";
$object->password = "pword";
$object->phone = "012 345 6789";
$object->email = "fred@bloggs.com";
$object->display();

class User8
{
    public $name, $password;

    function save_user()
    {
        echo "Save User code goes here";
    }
}

class Subscriber extends User8
{
    public $phone, $email;

    function display()
    {
        echo "Name :  " . $this->name . "<br>";
        echo "Pass :  " . $this->password . "<br>";
        echo "Phone : " . $this->phone . "<br>";
        echo "Email : " . $this->email;
    }
}
?>

<br>

<?php
// Example 5-24
echo "<h3>Example 5-24</h3>";
$object = new Son;
$object->test();
$object->test2();

class Dad
{
    function test()
    {
        echo "[Class Dad] I am your Father<br>";
    }
}

class Son extends Dad
{
    function test()
    {
        echo "[Class Son] I am Luke<br>";
    }
    function test2()
    {
        parent::test();
    }
}
?>

<br>

<?php
// Example 5-25
echo "<h3>Example 5-25</h3>";
$object = new Tiger();

echo "Tigers have...<br>";
echo "Fur: " . $object->fur . "<br>";
echo "Stripes: " . $object->stripes;

class Wildcat
{
    public $fur;

    function __construct()
    {
        $this->fur = "TRUE";
    }
}

class Tiger extends Wildcat
{
    public $stripes;

    function __construct()
    {
        parent::__construct();
        $this->stripes = "TRUE";
    }
}
?>

<br>