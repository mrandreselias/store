<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP AND FONT AWASOME-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <title>webStore</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <a class="navbar-brand text-light" href="#">Store-app</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item ">
        <a class="nav-link text-light" href="/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="register.php">Sign Up Here!</a>
      </li>
    </ul>

</nav> 

<?php 
    
if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    if($username == "" || $password == ""){
        ?>
            <div class="container mt-5 w-50">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <label> Empty Fields!</label>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        <?php
    }else{
        include("db.php");
        $result = mysqli_query($conn,$query);

            if($result->num_rows > 0){
                session_start();
                $_SESSION['user'] = $username;
                header('location: index.php');
            }
            else{
            ?>
                    <div class="container mt-5 w-50">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <label> Incorrect Password or UserName!</label>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
            <?php
                }
            }
           
    }
?>

    <div class="container">
        <div class="row mt-5 mx-auto w-50"> 
                <div class="card card-body">
                <h3 class="text-center text-secondary card-title">Login</h3>
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="UserName">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" type="submit" name="login">Enter</button>
                        </div>
                    </form>
                    <a class="text-center" style="text-decoration:none;" href="">forgoted your password ?</a>
                </div>
            
        </div>
    </div>
<?php include("/includes/footer.php");?>