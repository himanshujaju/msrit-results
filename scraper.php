<?php
echo "<title>MSRIT RESULTS</title>";

$start = 1;
$end = 140;
$branch = "CS";
$year = 13;

if($_GET['year'])
$year = $_GET['year'];

if($_GET['branch'])
$branch = $_GET['branch'];

if($_GET['start'])
$start = $_GET['start'];

if($_GET['end'])
$end = $_GET['end'];

for($x = $start;$x<=$end;$x++)
{
$f; //normalised USN
if($x<10)
	$f="00";
else if($x<100)
	$f="0";
else
	$f="";
	
	$f=$f.$x;
	
 $url = file_get_contents('http://result.msrit.edu/sresult.php?myusn=1MS'.$year.$branch.$f);
 $url = htmlentities($url);
 $url = substr($url,strpos($url,"Name:")+6);
 $name = substr($url,0,strpos($url,"&l"));
 
 $url = substr($url,strpos($url,"SGPA")+4);
 $url = substr($url,strpos($url,"style6")+16);
 $sgpa = substr($url,0,strpos($url,"&l"));
 
 $url = substr($url,strpos($url,"CGPA")+4);
 $url = substr($url,strpos($url,"style6")+16);
 $cgpa = substr($url,0,strpos($url,"&l"));
 $usn = "1MS".$year.$branch.$f;
 if(strlen($name))
 {
 echo "Name : ".$name."<br/>USN : ".$usn."<br/>SGPA : ".$sgpa."<br/>CGPA : ".$cgpa;
 echo "<br/><br/>";
 }
}
?>
