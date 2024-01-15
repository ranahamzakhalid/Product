<?php 
$db= "hamza";
$host = "localhost";
$user = "root";
$password = "";
$connection  = mysqli_connect($host,$user,$password,$db);

if($connection)
{
    echo "Connection Successful";
}
else
{
    die("connection failed");
}

if(isset($_POST['btn']))
{
    $Name = $_POST['product'];
    $Description = $_POST['des'];
    $Price = $_POST['price'];
    $Quantity = $_POST['qty'];

    $query = "INSERT into productform (Name,Description,Price,QTY) VALUES ('$Name','$Description','$Price','$Quantity')";
    
if ($connection->query($query) === TRUE) {
    echo '<script>
    window.location.href = "home.php";
    </script>';
}
else
{
    echo "Not Inserted";
}
}
?>