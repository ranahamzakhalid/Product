<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Product Form</title>
    <style>
        form {
         border-style: solid;
         border: 2px solid rgb(143, 129, 129);
         padding: 20px;
         border-radius: 15px;
         width: fit-content;
         text-align: justify;
         align-content: center;
         margin: 100px 500px 300px 500px;
         background-color: rgb(247, 247, 247);
         }
        .submit
         {
           background-color:gray;
           color: white;
           height: 25px;
           line-height: 35%;
           width : 40%;
           font-size: 14px;
           cursor: pointer;
           margin: 7% 25% 0;
         }
         .wel
         {
            margin: 30px 10px 0 0;
         }
         .p
         {
            margin: o 20px 0 0;
         }
         .mar
         {
            margin :35px 0 0 0;
         }

    </style>
 </head>
 <body>
     <div>
         <div>
                 <nav class="navbar navbar-expand-lg navbar-light bg-light">
                     <a class="navbar-brand" href="#">Navbar</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <b><a class="nav-item link" href="home.php">Home</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <b><a class="nav-item link" href="productform.php">Product</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <b><a class="nav-item -link" href="#">Logout</a></b>
                      </div>
                    </div>
                  </nav>
                 </div>
             <div class="mar">
         <Marquee style="background-color:gray; font-size: larger;color: white;"scrollamount="10"direction="right"> Product Form </Marquee>
     </div>
                 
         <Form  action="pd.php" method="POST">

             <div align="center" class="p">
                     <h2><u>Product</u></h2>
                 </div>
                 <br>
                 <div class="input-box">
                     <input type="text" placeholder="Product Name" name="product" required/>
                     <label>Name</label>
                 </div>
                 <br>
                 <div class="input-box">
                     <input type="text" placeholder="Description" name="des" required/>
                     <label>Description</label>
                 </div>
                 <br>
                 <div class="input-box">
                     <input type="text"placeholder="Price" name="price" required/>
                     <label>Price</label>
                 </div>
                 <br>
                 <div class="input-box">
                     <input type="text" placeholder="Qty" name="qty" required/>
                     <label>Quantity</label>
                 </div>
                 <div class="input-name">
                     <input type="submit" class="submit" value="GO" name="btn">
                 </div>
             </div>
         </form>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>