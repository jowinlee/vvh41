<?php include('../general/head.php');?>
<?php include('../functions/functions.php');?>
<?php
    session_start(); 
   
    $sitename = isset($_GET['sitename']) ? $_GET['sitename'] : 'novalue';
    $_SESSION['sitename'] = $sitename;
    $siteName = isset($_SESSION['sitename']) ? $_SESSION['sitename'] : 'novalue';
    $paid = isset($_GET['paid']) ? $_GET['paid'] : 'novalue';

    if ($paid=="done") {
        // publishSite($siteName);
        echo "<h1>published</h1>";
    }
?>
<div class="container my-5">
    <div class="card-group">
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Card image cap">
                <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ESVMJ9TC6NNL8&sitename=<?php echo $siteName;?>">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body warning-color-dark text-white plan">
                <h4 class="card-title">Personnel -<?php echo $siteName;?>-</h4>
                <p class="card-text text-white">11.00€ <small>/annuel</small></p>
                <a href="#" class="btn btn-primary btn-md plan_buy" data-plan="<?php echo $siteName;?>">Acheter</a>                
            </div>
        </div>
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" alt="Card image cap">
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6PVJR4JYHUSD4">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body warning-color-dark text-white">
                <h4 class="card-title">Entreprice</h4>
                <p class="card-text text-white">17.00€ <small>/annuel</small></p>
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6PVJR4JYHUSD4" class="btn btn-primary btn-md">Acheter</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/77.jpg" alt="Card image cap">
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7EZVXHSW2UEY8">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body warning-color-dark text-white">
                <h4 class="card-title">Commerce Basic</h4>
                <p class="card-text text-white">24.00€ <small>/annuel</small></p>
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7EZVXHSW2UEY8" class="btn btn-primary btn-md">Acheter</a>
            </div>  
        </div>
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/50.jpg" alt="Card image cap">
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=NKQJS5W8PZMXW">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body warning-color-dark text-white">
                <h4 class="card-title">Commerce Avancé</h4>
                <p class="card-text text-white">36.00€ <small>/annuel</small></p>
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=NKQJS5W8PZMXW" class="btn btn-primary btn-md">Acheter</a>
            </div>  
        </div>  
    </div>
    <div class="card-group">
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Card image cap">
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=T92GPQDPSCBJW">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body primary-color-dark text-white">
                <h4 class="card-title">Personnel</h4>
                <p class="card-text text-white">15.00€ <small>/mensuel</small></p>
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=T92GPQDPSCBJW" class="btn btn-primary btn-md">Acheter</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" alt="Card image cap">
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5H869R7K3BL62">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body primary-color-dark text-white">
                <h4 class="card-title">Entreprice</h4>
                <p class="card-text text-white">21.00€ <small>/mensuel</small></p>
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5H869R7K3BL62" class="btn btn-primary btn-md">Acheter</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/77.jpg" alt="Card image cap">
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=A4LB7T7HW9XJ8">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body primary-color-dark text-white">
                <h4 class="card-title">Commerce Basic</h4>
                <p class="card-text text-white">28.00€ <small>/mensuel</small></p>
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=A4LB7T7HW9XJ8" class="btn btn-primary btn-md">Acheter</a>
            </div>  
        </div>
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/50.jpg" alt="Card image cap">
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JK2CTUZXZVJWA">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body primary-color-dark text-white">
                <h4 class="card-title">Commerce Avancé</h4>
                <p class="card-text text-white">40.00€ <small>/mensuel</small></p>
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JK2CTUZXZVJWA" class="btn btn-primary btn-md">Acheter</a>
            </div>  
        </div>  
    </div>
</div>
<?php include('../general/foot.php');?>
<script src="https://www.paypal.com/sdk/js?client-id=AfRj_EOf7J-LDHlbRXxsqHFjfHygyxLhzgCCBUPljzZjEY9u-seJzlnjOqmyqCxunkho3dDnk0x9wvKQ&intent=capture"></script>
<script type="text/javascript">
    $(document).ready(
        function(){
            $('.plan_buy').on('click',function(){
                var site_name = $(this).data('plan');
                buy(site_name);
            });
        }
    );
    function buy(site_name){ 
        paypal.Buttons({
            createOrder: function(data, actions) {
              // This function sets up the details of the transaction, including the amount and line item details.
              console.log(actions);
              return actions.order.create({
                purchase_units: [{
                  reference_id:'test123',
                  amount: {
                    currency_code: "USD",
                    value: '110'               
                  },
                  description:"this is new product",
                  custom_id: site_name
                }]
              });
            },onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                // console.log(details);
                if (details.status=="COMPLETED"){
                    console.log(details.purchase_units[0]["custom_id"]);
                    <?php 
                        publishSite("123");
                    ?>        

                }
              });
            }
        }).render('.plan');        
    }
</script>




