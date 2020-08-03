<?php include('../general/head.php');?>
  <style type="text/css">
    *:before{
        font-family: 'Font Awesome\ 5 Free';        
    }
    .nav-link.active:before{
        content: "\f192";
    }
    .nav-link:before{
        content: "\f111";
    }
</style>
<?php
    session_start();
    if (isset($_GET['sitename'])){
        $_SESSION['site'] = $_GET['sitename'];
        $_SESSION['account'] = $_GET['accountname'];
    }
?>
<div class="container my-5">
    <div class="row mx-0">
        <div class="col">
            <ul class="nav nav-tabs d-block border-bottom-0" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link border-0 text-dark d-inline px-0 active" id="mensuel-tab" data-toggle="tab" href="#mensuel" role="tab" aria-controls="mensuel" aria-selected="true">
                        Mensuel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-0 text-dark d-inline px-0" id="annuel-tab" data-toggle="tab" href="#annuel" role="tab" aria-controls="annuel" aria-selected="false">
                        Annuel
                    </a>
                </li>  
            </ul>            
        </div>
        <div class="col">
            <p>Plans simples. Prix ​​simples. Ne payez que ce dont vous avez vraiment besoin. Tous les plans sont accompagnés d'un support client primé 24h / 24 et 7j / 7. Modifiez ou annulez votre plan à tout moment.</p>
        </div>
    </div>  
    <div class="tab-content mt-4">
        <div class="tab-pane fade show active" id="mensuel" role="tabpanel" aria-labelledby="mensuel-tab">
            <div class="row mx-0">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2">
                    <div class="card">
                        <div class="bg-dark pt-3">
                            <h3 class="card-title font-weight-bold text-center text-white">Personnel</h3>                
                        </div>
                        <div class="text-center py-3">
                            <h1 class="card-title">15.00€</h1>
                            <p class="card-text">/mensuel</p>
                        </div>
                        <p class="text-center"><a data-ms-membership="5f26db89d9b4360004cd3f7d" href="signup.php" class="btn btn-elegant"> Subscribe </a><br>Free 15 Days Trial!</p>
                        <?php include('../plans_page/personnel.php');?>
                        <div class="paypal-buttons px-2" data-desc="personel" data-subs="m" data-value="15.00"></div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2">
                    <div class="card">
                        <div class="bg-dark pt-3">
                            <h3 class="card-title font-weight-bold text-center text-white">Entreprise</h3> 
                        </div>
                        <div class="text-center py-3">
                            <h1 class="card-title">21.00€</h1>
                            <p class="card-text">/mensuel</p>
                        </div>
                        <p class="text-center"><a data-ms-membership="5f12bfc68385a50004513f1b" href="signup.php" class="btn btn-elegant"> Subscribe </a><br>Free 15 Days Trial!</p>
                        <?php include('../plans_page/entreprise.php');?>
                        <div class="paypal-buttons px-2" data-desc="entreprise" data-subs="m" data-value="21.00"></div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2">
                    <div class="card">
                        <div class="bg-dark pt-3">
                            <h3 class="card-title font-weight-bold text-center text-white">Commerce Basic</h3>
                        </div>
                        <div class="text-center py-3">
                            <h1 class="card-title">28.00€</h1>
                            <p class="card-text">/mensuel</p>
                        </div>
                        <p class="text-center"><a href="#/ms/signup/5f12c0923b974a0004c9a504" class="btn btn-elegant"> Subscribe </a><br>Free 15 Days Trial!</p>
                        <?php include('../plans_page/commerce_basic.php');?>
                        <div class="paypal-buttons px-2" data-desc="commercebasic" data-subs="m" data-value="28.00"></div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2">
                    <div class="card">
                        <div class="bg-dark pt-3">
                            <h3 class="card-title font-weight-bold text-center text-white">Commerce Avancé</h3> 
                        </div>
                        <div class="text-center py-3">
                            <h1 class="card-title">40.00€</h1>
                            <p class="card-text">/mensuel</p>
                        </div>
                        <p class="text-center"><a href="#/ms/signup/5f12c0f7169e140004728a68" class="btn btn-elegant"> Subscribe </a><br>Free 15 Days Trial!</p>
                        <?php include('../plans_page/commerce_avance.php');?>
                        <div class="paypal-buttons px-2" data-desc="commerceavance" data-subs="m" data-value="40.00"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="annuel" role="tabpanel" aria-labelledby="annuel-tab">
            <div class="row mx-0">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2">
                    <div class="card">
                        <div class="bg-dark pt-3">
                            <h3 class="card-title font-weight-bold text-center text-white">Personnel</h3>                
                        </div>
                        <div class="text-center py-3">
                            <h1 class="card-title">144.00€</h1>
                            <p class="card-text">12.00€ <small>/mensuel</small></p>
                        </div>
                        <p class="text-center"><a href="#/ms/signup/5f12c015705fe10004a81a47" class="btn btn-elegant"> Subscribe </a><br> Free 15 Days Trial!</p>
                        <?php include('../plans_page/personnel.php');?>
                        <div class="paypal-buttons px-2" data-desc="personel" data-subs="y" data-value="144.00"></div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2">
                    <div class="card">
                        <div class="bg-dark pt-3">
                            <h3 class="card-title font-weight-bold text-center text-white">Entreprise</h3> 
                        </div>
                        <div class="text-center py-3">
                            <h1 class="card-title">204.00€</h1>
                            <p class="card-text">17.00€ <small>/mensuel</small></p>
                        </div>
                        <p class="text-center"><a href="#/ms/signup/5f12c0518385a50004513f1f" class="btn btn-elegant"> Subscribe </a><br> Free 15 Days Trial!</p>
                        <?php include('../plans_page/entreprise.php');?>
                        <div class="paypal-buttons px-2" data-desc="entreprise" data-subs="y" data-value="204.00"></div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2">
                    <div class="card">
                        <div class="bg-dark pt-3">
                            <h3 class="card-title font-weight-bold text-center text-white">Commerce Basic</h3>
                        </div>
                        <div class="text-center py-3">
                            <h1 class="card-title">288.00€</h1>
                            <p class="card-text">24.00€ <small>/mensuel</small></p>
                        </div>
                        <p class="text-center"><a href="#/ms/signup/5f12c0bf169e140004728a67" class="btn btn-elegant"> Subscribe </a><br> Free 15 Days Trial!</p>
                        <?php include('../plans_page/commerce_basic.php');?>
                        <div class="paypal-buttons px-2" data-desc="commercebasic" data-subs="y" data-value="288.00"></div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-2">
                    <div class="card">
                        <div class="bg-dark pt-3">
                            <h3 class="card-title font-weight-bold text-center text-white">Commerce Avancé</h3> 
                        </div>
                        <div class="text-center py-3">
                            <h1 class="card-title">432.00€</h1>
                            <p class="card-text">36.00€ <small>/mensuel</small></p>
                        </div>
                        <p class="text-center"><a href="#/ms/signup/5f12c129dfeab6000466d92e" class="btn btn-elegant"> Subscribe </a><br> Free 15 Days Trial!</p>
                        <?php include('../plans_page/commerce_avance.php');?>
                        <div class="paypal-buttons px-2" data-desc="commerceavance" data-subs="y" data-value="432.00"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../general/foot.php');?>
<script type="text/javascript">
    
</script>
