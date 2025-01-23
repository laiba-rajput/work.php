<!--1 start basic html heading -->
<h2>hello world</h2>
<!--2 php mein work ko print karnay ka tareeqa -->
<?php
   echo "welcome php";
   ?>
<!--3 use php for html heading tag -->
<h1>welcome <?php echo "php work";?></h1>

<?php
//variables
$name = "laiba";
$pass = 55555;
echo $name. "<br>" . $pass;
//conditions
echo"<br>";
if($name == "laiba" && $pass == 123456){
    echo "login sucessfully";
}
else{
    echo"invalid username or password";
}
echo "<br>";
//for loop
for ($i = 0; $i < 101; $i++) {
    echo "this is: $i <br>";
}
//while loop
echo "<br>";
$i = 101;
while ($i > 0) {
    echo "this is: $i <br>";
    $i--;
}
//array
$array = array("ayesha","laiba","zoya");
//echo $array[0];
//array with foreach loop
 foreach($array as $value){
    echo $value ."&nbsp";
 }
?>
