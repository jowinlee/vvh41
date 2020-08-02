<?php include('../functions/functions.php'); ?>
<?php include('../general/head.php'); ?>
<?php include('../general/header.php'); ?>
<?php
    session_start();
    $sitename = $_SESSION['site'];
?>
<div class="container">
    <div class="row">
        <div class="col-xs-1 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="card">
                <h5 class="card-header special-color white-text text-center py-4" lang="en">
                    <strong>Create Billing Account</strong>
                </h5>
                <div class="card-body px-lg-5 pt-0 mt-4">                
                    <form class="text-center" style="color: #757575;" method="post" action="" data-ms-form="signup">
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <input type="email" name="email" id="email" class="form-control" data-ms-member="email" required >
                                    <label for="email">E-mail</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <input type="password" name="pass" id="pass" class="form-control" data-ms-member="password" required >
                                    <label for="pass">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" name="sitename" id="sitename" class="form-control" data-ms-member="site-name" value="<?php echo $sitename; ?>" required >
                                    <label for="sitename">Site name</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-rounded btn-block my-4 z-depth-0" type="submit" id="regBtn">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-1 col-sm-3 col-md-3 col-lg-3"></div>
    </div>      
</div>
<?php include('../general/footer.php'); ?>