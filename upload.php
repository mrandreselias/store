<?php
    include('includes/header.php');

    if(!isset($_POST['upload'])){
        include('includes/upload.html');
    }else{
        include('db.php');
        $name = $_POST['name'];
        $price = $_POST['price'];
        $descript = $_POST['description'];
        $existence = $_POST['existence'];
        $category = $_POST['category'];
        $image = addslashes(file_get_contents($_FILES['img']['tmp_name']));
        
        $query = "INSERT INTO products(name,price,description,existence,category,image) VALUES ('$name',$price,'$descript',$existence,'$category','$image')";
        $result = mysqli_query($conn,$query);

        if(!$result){
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
            include('/includes/upload.html');
            include('/includes/footer.php');
        }else{
            ?>
            <div class="container mx-auto mt-3 w-50">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <center><label class="text-center"> Product Uploaded Successfly!</label></center>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <?php
        }
    
    }

    include('includes/footer.php');
?>
