
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
      <?php include 'navbar.php';?>
<div class="container form " style=" margin-left: 30%;  margin-top: 10%;" >
    <div  class="row">
        <form class=""  method="POST" action="register.php" >
            <div class="col-3" >
                <label  > Овог</label> 
                <input type="text" class="form-control" id="exampleInputEmail1"  name="firstname" > 
            </div> 
            <div class="col-3">
                <label >Нэр</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="lastname" > 
            </div>  
            <div class="col-3">
                <label >Хүйс</label> <br>
                 <input type="radio" class="" id="exampleInputPassword1" name="gender"> Эр 
                 <input type="radio" class="" id="exampleInputPassword1" name="gender">  Эм 
            </div>  
            <div class="col-3">
                <label >Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1"  name="email">  
            </div>
            <div class="col-3">
                <label >Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"> 
            </div>
            <div class="col-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">  
                <label class="form-check-label" >Check me out </label> 
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        </form>
    </div>
</div>


</body>
</html>


<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>