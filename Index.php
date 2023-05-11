<?php
$con=mysqli_connect('localhost:3306', 'root', 'root', 'test');
if(isset($_POST['sb']))
{
$fname=$_POST['user'];
$lname=$_POST['loser'];
$email=$_POST['em'];
$num=$_POST['num'];
$query="INSERT INTO great(FNAME, LNAME, EMAIL, NUMBER) VALUES('$fname','$lname','$email','$num')";
$run=mysqli_query($con,$query);
if($run=="true"){
echo"submitted";
}
else{
echo"not submitted";
}
}
?>
