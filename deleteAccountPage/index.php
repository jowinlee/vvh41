<?php include('../functions/functions.php'); ?>
<?php include('../general/head.php'); ?>
<?php include('../general/header.php'); ?>
<?php
   
    if (!empty($_POST)): 

        $email = $_POST['email'];

        deleteAccount($email);

        echo "<div class='container'><h1 class='text-success mt-5'>Client "+$email+" has been Deleted!</h1></div>";

?>
<?php else: ?>
    <div class="container">      
        <div class="row">            
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 py-5 mx-auto d-block">
                <div class="card">
                    <h5 class="card-header special-color white-text py-4" lang="en">Delete Account</h5>
                    <div class="card-body px-lg-5 pt-5">                
                        <form style="color: #757575;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">                            
                            <div class="md-form mt-0">
                                <input type="email" name="email" id="email" class="form-control" required="required">
                                <label for="email" lang="en">E-mail</label>
                            </div>
                            <button class="btn btn-success btn-rounded btn-block my-4 z-depth-0" type="submit" lang="en">Delete Account</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>      
    </div>
<?php include('../general/footer.php'); ?>
<?php endif; ?>