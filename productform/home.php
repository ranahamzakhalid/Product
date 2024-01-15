
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Home Page</title>
    <style>
         .cont
        {
            
            text-align: top;
            margin: 50px 500px;
            color: white;
        }
        .bd
        {
            background : blue;
        }
    </style>
</head>
<body class="bd">
    <div>
        <form action="#" method="POST">
            <div>
                <div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"></button>
                        
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <b><a class="nav-item link" href="home.php">Home</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <b><a class="nav-item link" href="productform.php">Product</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                            <div class="row">
                            <div class="col md-5">
                            <div class="input-group mb-3">    
                                <select name="sort_numeric">
                                    <option value="">--Select option--</option>
                                    <option value="low-high"> Assending </option>
                                    <option value="high-low"> Descending </option>
                                </select>
                                    <button class= "btn btn-dark btn-sm" name="submit__">Search</button>   
                            </div>
                            </div>
                            </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                            <div class sec>
                                <input  type="text" placeholder="Search" name="search">
                                <button class= "btn btn-dark btn-sm" name="submit_">Search</button>
                            </div>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                            
                            <div class="dis"> 
                                <select >
                                    <option>Display</option>
                                    <option>1</option>
                                    <option>3</option>
                                    <option>5</option>
                                </select>  
                                <button class= "btn btn-dark btn-sm" name="submit">Next</button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        <div class="cont">
            <u><h2> Welcome To My Shop...</h2></u>
                </div>
                    <div>
                        <table width="300px" border="1" cellspacing="0" align="center" class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                            </tr>
                        </thead>
                    <tbody>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>



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

if(isset($_POST['submit__']))
{
        if($_POST["sort_numeric"] =="low-high")
        {
            $sort_option = "ASC";
        }
        else if($_POST["sort_numeric"] =="high-low")
        {
            $sort_option = "DESC";
        }
    $query= "SELECT * from productform order by id $sort_option";
    $query_run =mysqli_query($connection,$query);

    $result= $connection->query($query);
    if($result)
    {                                            
        if(mysqli_num_rows($result)>0)          //$num=mysqli_num_rows($result);
        {                                       //echo $num;
            $row=mysqli_fetch_assoc($result);
            echo '<tbody>
            <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['Name'].'</td>
                <td>'.$row['Description'].'</td>
                <td>'.$row['Price'].'</td>
                <td>'.$row['QTY'].'</td>

            </tr>
            </tbody>';
        }
        else
        {
            echo 'Data no found..';
        }
    }
}



if(isset($_POST['submit_']))
{
    $search=$_POST['search']; 

    $query = "SELECT * from productform where id Like '$search%' OR Name LIKE '$search%' OR Description LIKE '$search%'";
    $result= $connection->query($query);
    if($result)
    {
        //$num=mysqli_num_rows($result);
        //echo $num;
    if(mysqli_num_rows($result)>0)
        {
    
            $row=mysqli_fetch_assoc($result);
            echo '<tbody>
            <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['Name'].'</td>
                <td>'.$row['Description'].'</td>
                <td>'.$row['Price'].'</td>
                <td>'.$row['QTY'].'</td>

            </tr>
            </tbody>';
        }
        else
        {
            echo 'Data no found..';
        }
    }
}

?>



<?php

if(isset($_POST['submit']))
{
    $query = "SELECT * FROM productform LIMIT 2 OFFSET 3";

    $query_run =mysqli_query($connection,$query);

    $result= $connection->query($query);
    if($result)
    {                                            
        if(mysqli_num_rows($result)>0)          //$num=mysqli_num_rows($result);
        {                                       //echo $num;
            $row=mysqli_fetch_assoc($result);
            echo '<tbody>
            <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['Name'].'</td>
                <td>'.$row['Description'].'</td>
                <td>'.$row['Price'].'</td>
                <td>'.$row['QTY'].'</td>
            </tr>
            </tbody>';
        }
        else
        {
            echo 'Data no found..';
        }
    }
}
?>
