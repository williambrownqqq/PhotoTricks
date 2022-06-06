<?php
echo "hello world!<br><br>";

$a = 23; // boolean
$b  = "abc"; // string
$c = TRUE; //int

$d = 1.234; // float
$e = 7E-10;
$f = 1.2e3;


//-----------------------------------------------------------
echo 'Variables:<br><br>';
print $a .$b .$c . "<br>"; // print and concatenation
echo $a . "<br>";//print with echo

echo $a.' is '.gettype($a).'<br>';//print integer type
echo $b.' is '.gettype($b).'<br>';//print string type
echo "<br>";
echo "<br>";


//-----------------------------------------------------------
echo 'if else: <br>';
if (is_int($a)) {//checks variable for int
    $a += $a;
    echo 'double integer a: '.$a.'<br>';
}
else{
    echo 'not integer: '."$a<br>";
}

if (is_string($b)) {//checks variable for string
    echo "String: $b";
}
else {
    echo "not String: $b";
}

echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo ' Arrays: <br>';
$array_int = array(1, 2, 3); //int array
var_dump($array_int); // withdraw info about variable

echo "<br>";
foreach ($array_int as $el) {
    echo $el . ' ';
}

echo "<br>";

$array_string = array("a", "b", "c", "d"); //string array
var_dump($array_string);
echo "<br>";

for($i = 0; $i < 4; $i++){
    echo $array_string[$i] . " ";
}

echo "<br>";
echo "<br>";
//-----------------------------------------------------------
echo 'Function: <br>';
function funct($var) //recursion
{
    for($i=0; $i < $var;$i++){
        echo $i."<br>";
    }
   
}

$var = 5;
funct($var);

echo "<br>";

//-----------------------------------------------------------

echo 'Multi-dimensional arrays: <br>';
$myarray = array(
      
    // Default key for each will
    // start from 0
    array("Alex", "Mike", "Shaq"),
    array("Zach", "Nicola", "Kobe")
);
var_dump($myarray); //shows info
echo "<br>";

echo $myarray[1][1];
echo "<br>";
echo $myarray[1][2];
echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo 'String: <br>';
$str1 = "Hello World , Alex !";
$arr1 = explode(" ", $str1); //breaks string

echo "$str1<br>";
var_dump($arr1);
echo "<br>";

$str2 = implode(" ", $arr1); //

print "$str2<br>";
echo "<br>";


//-----------------------------------------------------------
echo 'OOP: <br>';
include_once "Photo.php";
include_once "Video.php";
include_once "EditedPhoto.php";
include_once "Albums.php";
include_once "Singleton.php";

$photo = new Photo("2022", "spring", "4mb");
$photo1 = new Photo("2022", "spring", "8mb");
$video = new Video("2021", "family", "30mb", "20 minutes");
$video1 = new Video("2019", "zoo", "10mb", "10 minutes");
$photo2 = new EditedPhoto("2021", "nature", "8mb", "light");
$photo3 = new EditedPhoto("2020", "friends", "4mb", "Shadow");

echo "photo1: ".$photo;
echo "<br>";
echo "photo2: ".$photo1;
echo "<br>";
echo "photo3: ".$photo2;
echo "<br>";
echo "photo4: ".$photo3;
echo "<br>";
echo "video1: ".$video;
echo "<br>";
echo "video2: ".$video1;
echo "<br>";
echo "<br>";

$album = new Album(array($photo1, $photo2, $photo3));

echo "album: ".$album;
echo "<br>";
$album->add($photo);
$album->add($video);

echo "album: ".$album;
echo "<br>";

$size = $album->get_size();

echo "size: ".$size. " mb";
echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo 'Singleton <br>';
$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

if ($s1 === $s2)
    echo "Singleton works!";
else
    echo "Error!";

echo "<br>";
echo "<br>";
echo "<br>";
?>