<?php
$file= 'randomNumbers.txt'; 
$nums=rand(1,100); 
for($i=0;$i<49;$i++){ 
$nums.= ' '; 
$nums.= rand(1,100); 
} 
file_put_contents($file, $nums); 
$myfile = file_get_contents($file); 
$numArray = explode(" ", $myfile); 
echo "<b>Contents of the file are : </b>"; 
foreach($numArray as $v){ 
echo $v." "; 
} 
echo "<br>";echo "<br>"; 
echo "<b>Reading 15 numbers from file : </b>"; 
for($i=0;$i<15;$i++){ 
echo $numArray[$i]." "; 
intval($numArray[$i]); 
} 
echo "<hr>"; 
function getreversearray(&$numArray) 
{
$n = sizeof($numArray);
for($i=$n-1;$i>=0;$i--)
{
echo $numArray[$i]." ";
}
}
getreversearray($numArray);
?>
<?php
//get reverse array 
function getNumber($num)
{
while($num>0)
{
$rem = $num % 10; 
$revnum = ($revnum * 10) + $rem; 
$num = ($num / 10); 
}
return $revnum;
}
function getreversenum(&$numArray) 
{
$n = sizeof($numArray);
for($i=0;$i<=sizeof($numArray);$i++)
{
$x = numArray[i];
echo "".getNumber($x); 
}
}
echo "<br><br>";
//getreversearray($numArray);*/
?>