<?php 
$db= "hamza";
$host = "localhost";
$user = "root";
$password = "";
$connection  = mysqli_connect($host,$user,$password,$db);

if($connection)
{
    echo "";
}
else
{
    die("connection failed");
}
    $query ="Select * from productform";
    $result = $connection->query($query);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<thead>
         <th>ID</th>
         <th>Name</th>
         <th>Description</th>
         <th>Price</th>
         <th>QTY</th>
         </thead";

    echo "<tbody>";
  while($row = $result->fetch_assoc()) {
         $id   = $row['id'];
         $Name = $row['Name'];
         $Description = $row['Description'];
         $Price = $row['Price'];
         $QTY   = $row['QTY'];
         
         echo "<tr>
         <th scope=".$row['id'].">".$row['id']."</th>
         <td>".$Name."</td>
         <td>".$Description."</td>
         <td>".$Price."</td>
         <td>".$QTY."</td>
         </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>