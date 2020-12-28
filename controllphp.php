
<?php




//connect database
$conn = mysqli_connect("localhost","root","","injection-machine");

//check connection

if(!$conn)
{
    echo 'connect erorr'. mysqli_connect_error(); }

if ($_SERVER["REQUEST_METHOD"] == "POST"){


$run = $_POST['run'];
$stop = $_POST['stop'];
$quantity = $_POST['quantity'];




$sql = "INSERT INTO table1 (ONN,OFF,NUM) VALUES('$run','$stop','$quantity')";
if (mysqli_query($conn,$sql)){

	echo $quantity ."  has been added";}
	else{
echo "Error" . $sql . "<br>" . mysqli_error($conn);
	}
} 



    ?>