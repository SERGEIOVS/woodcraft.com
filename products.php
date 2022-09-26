<?php
include 'dbconnection.php';
if(isset($_POST['submit']))
{
$name =$_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
$result = mysqli_query($con, $sql);
if($result)
{
echo"данные добавлены!";



}
else{
    die(mysqli_error($con));
}

}


?>

<!doctype html>
<html lang = "en" >
  <head>
    <!-- Required meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width , initial-scale = 1 " >

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add a product</title>
  </head>
  <body>
    <br>
      <div class = "container">
      <form method="POST">
          
  <div class="form-group">

    <label >Product name</label>
    <input type="text" class="form-control"
    placeholder="введи название продукта"
    name = "name" autocomplete = "off";>

  </div>


  <div class="form-group">

    <label >Product category</label>
    <input type="email" class="form-control"
    placeholder = "введи категорию продукта"
    name = "email" autocomplete = "off";>

    </div>



  <div class="form-group">

    <label >количество</label>
    <input type="text" class="form-control"
    placeholder="введи количество" name = "mobile" autocomplete="off">

</div>

<br>

  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
  
</form>


</div>

  </body>
</html>