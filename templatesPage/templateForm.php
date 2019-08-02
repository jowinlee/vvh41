<?php include('../functions/functions.php'); ?>
<?php include('../general/head.php'); ?>
<?php include('../general/header.php'); ?>
    <div class="container">      
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 py-5">
                <?php
                    session_start();
                    
                    $_SESSION['template'] = $_POST["template"];
                    
                    $template_id = $_SESSION['template'];

                    $templatesData = json_decode(getTemplate($template_id));
                    echo '
                    <div class="card">
                        <h5 class="card-header special-color white-text py-4">Selected Template</h5>
                        <img class="card-img-top" src="'. $templatesData->thumbnail_url .'" alt="Selected Template">
                        <div class="card-body">
                            <h4 class="card-title"><a>'. $templatesData->template_name .'</a></h4>
                            <p class="card-text">This is your selected Template.</p>
                        </div>
                    </div>';
                ?>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 py-5">
                <div class="card">
                    <h5 class="card-header special-color white-text py-4">Enter User Account</h5>
                    <div class="card-body px-lg-5 pt-5">                
                        <form style="color: #757575;" action="processTemplate.php" method="post">
                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" name="firstname" id="firstname" class="form-control" required="required">
                                        <label for="firstname">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" name="lastname" id="lastname" class="form-control" required="required">
                                        <label for="lastname">Last name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="md-form mt-0">
                                <input type="email" name="email" id="email" class="form-control" required="required">
                                <label for="email">E-mail</label>
                            </div>
                            <button class="btn btn-success btn-rounded btn-block my-4 z-depth-0" type="submit">Create site</button> 
                            <a href="index.php"><small>Back to templates</small></a>            
                        </form>
                    </div>
                </div>
            </div>
        </div>      
    </div>
<?php include('../general/footer.php'); ?>