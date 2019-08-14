<?php 
    include('../functions/functions.php');    

    if (!empty($_POST)): 
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];

        $result = getCustomerAccount($email);
        $website = getSiteByAccount($email);

        if ($result == 'available'){

            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;

            header('Location: ../templatesPage/index.php');
        }elseif($result != 'available'){

            if ($website == 'none') {

                $_SESSION['firstname'] = $firstname;
                $_SESSION['lastname'] = $lastname;
                $_SESSION['email'] = $email;

                header('Location: ../templatesPage/index.php');
            }else{

                header('Location: error.php');
            }
        }
?>
   
<?php else: ?>

<div class="card">
    <h5 class="card-header special-color white-text text-center py-4" lang="en">
        <strong>Create Account</strong>
    </h5>
    <div class="card-body px-lg-5 pt-0">                
        <form class="text-center" style="color: #757575;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="text" name="firstname" id="firstname" class="form-control" required="required">
                        <label for="firstname" lang="en">First name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <input type="text" name="lastname" id="lastname" class="form-control" required="required">
                        <label for="lastname" lang="en">Last name</label>
                    </div>
                </div>
            </div>
            <div class="md-form mt-0">
                <input type="email" name="email" id="email" class="form-control" required="required">
                <label for="email" lang="en">E-mail</label>
            </div>
            <button class="btn btn-success btn-rounded btn-block my-4 z-depth-0" type="submit" id="regBtn" lang="en">Proceed to Templates</button>
        </form>
        <p lang="en">Already has an account?<a href="" lang="en">Login</a></p>
    </div>
</div>
<?php endif; ?>