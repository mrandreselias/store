<?php
   include('/includes/head.html');
  
    if(!isset($_POST['register'])){
       
        include('./includes/register.html');
        
    }else{

        include('db.php');
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordconfirm = $_POST['passwordconfirm'];
        
        //validate data


        $query = "INSERT INTO users(name,lastname,username,email,password) VALUES ('$name','$lastname','$username','$email','$password')";
        $result = mysqli_query($conn,$query);
        
        if($result == true){
        
        ?>
            <div class="container mx-auto mt-3 w-50">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <center><label class="text-center"> User Registred Successfully!</label></center>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        <?php
        include('./includes/register.html');
        include('/includes/footer.php');
        }else{
            
        ?>
        <div class="container mx-auto mt-3 w-50">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <center><label class="text-center"> A Error has Ocurred!</label></center>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php
    include('./includes/register.html');
    include('/includes/footer.php');
        }

    }
   
    include('/includes/footer.php');
?>