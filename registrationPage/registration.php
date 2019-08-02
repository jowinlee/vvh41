<?php if (!empty($_POST)): 
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['email'] = $_POST['email'];

    header('Location: ../templatesPage/index.php');
?>
   
<?php else: ?>
<div class="card">
    <h5 class="card-header special-color white-text text-center py-4">
        <strong>Create Account</strong>
    </h5>
    <div class="card-body px-lg-5 pt-0">                
        <form class="text-center" style="color: #757575;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
            <button class="btn btn-success btn-rounded btn-block my-4 z-depth-0" type="submit" id="regBtn">Proceed to Templates</button>             
        </form>
    </div>
</div>
<?php endif; ?>