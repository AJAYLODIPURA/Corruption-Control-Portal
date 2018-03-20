
<?php


$pc=$_POST['pc'];
$pd=$_POST['pd'];
$apc=$_POST['apc'];
$cm=$apc-$pc;

$apd=$_POST['apd'];
$tl=$_POST['tl'];
$pa= $_POST['area'];
$pt=$_POST['pt'];
$username=$_POST['username'];


$user='root';
$pass='';
$db='complaint_form';
$conn= new  mysqli('localhost',$user,$pass,$db) or die("unable to connect");
$sql = "INSERT INTO c_form VALUES ('$pc','$pd','$apc','$cm','$apd','$tl','$pa','$pt','$username')";

$ret=mysqli_query($conn,$sql);

if(!$ret)
	echo "user with same email or phone no already registered";
else
	echo "thankyou for registeration";

?>