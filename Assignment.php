<?php
//Q1 
//a
$str = "Utkarsh Singh <br>";
echo strtoupper($str);

//b
$str = "UTKARSH SINGH <br>";
echo strtolower($str);

//c
$str = "uTKarsh <br>";
echo ucfirst($str);

//d

$str = "uTkarSH <br>";
echo ucwords($str);

//Q2

$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."<br>";

//Q3

$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'The specific word is present.'."<br>";
 }
else
 {
    echo 'The specific word is not present.'."<br>";
 }

 //Q4

 $x =  20;            
$str1 = (string)$x; 
if ($x === $str1) 
{
  echo "They are the same"."<br>";
}
else
{
echo "They are not same"."<br>";
}


//Q5


$str1 = 'ak@creation.com';
echo substr($str1, -3)."<br>";

//Q6


$value1 = 65.45;
$value2 = 104.35;
echo sprintf("%1.2f", $value1+$value2)."<br>";

//Q7

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(6)."<br>";

//Q8

$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."<br>"; 

//Q9

$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n<br>");


//Q10

$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky."."<br>";
$arra1 = explode("<br>", $str);
var_dump($arra1);


?>