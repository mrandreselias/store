<?php?>
<div class="container-fluid mb-4">
    <div class="row">
        <?php
            include('db.php');
            $query = "SELECT * FROM products";
            $result = mysqli_query($conn,$query);

            if(!$result){
                echo "<h3>Error</h3>";
            }
            else{
                $row = mysqli_num_rows($result);
                $cont = $result->fetch_assoc();
                
                for($i = 0; $i < $row ; $i++){
                    ?>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($cont['image'])?>" alt="" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h3 class="card-title"><strong><?php echo $cont['name']; ?></strong></h3>
                                <p class="card-text text-justify"><?php echo $cont['description'];?></p>
                            </div>
                            <div class="card-footer">
                                 <h3 class="card-text"><?php echo 'Price:'.$cont['price'].'$ und.'; ?></h3>
                             </div>
                             <div class="card-footer">
                                 <button class="btn btn-block btn-info"><i class="fas fa-shopping-cart"></i>Add to Car</button>
                             </div>
                        </div>
                    </div>
                    <?php
                }

            }
        ?>
    </div>
</div>