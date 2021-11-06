<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "холбогдсон байна.";
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <header class="header">
          <div class="logo"> <img src="ajillii.png" alt="logo baihgui" height="50px" width=250px> </div>
          <div class="main" >
              <ul>
                  <li><a href="ajliin bairuud" > Ажлын байрууд    </a> </li>
                  <li><a href="newtreh" > Нэвтрэх                 </a> </li>
                  <li><a href="burtguuleh" > Бүртгүүлэх           </a> </li>
              </ul>
   </div>
    <div >
        <form class="row"  method="POST"  >
            <div class="col-6">
                <label  > Овог</label> 
                <input type="text" class="form-control" id="exampleInputEmail1"  name="firstname" >  <hr>
            </div> 
            <div class="col-6">
                <label >Нэр</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="lastname" > <hr>
            </div>  
            <div class="col-3">
                <label >Хүйс</label> <br>
                 <input type="radio" class="" id="exampleInputPassword1" name="gender"> Эр <br>
                 <input type="radio" class="" id="exampleInputPassword1" name="gender">  Эм <hr>
            </div>  
            <div class="col-12">
                <label >Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1"  name="email">  <hr>
            </div>
            <div class="col-12">
                <label >Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">  <hr> 
            </div>

            <div class="col-3 ">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">  
                <label class="form-check-label" >Check me out </label> <hr> 
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        </form>
        
    </div>
    
  






</body>
</html>