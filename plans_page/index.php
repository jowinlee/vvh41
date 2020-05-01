<?php include('../general/head.php');?>
<?php   
    $sitename = isset($_GET['sitename']) ? $_GET['sitename'] : 'novalue';
    if ($sitename == 'novalue') :
        header('Location: ../templatesPage');
?>
<?php else: ?>
<div class="container my-5">
    <div class="card-group">
        <div class="card mb-4">
            <div class="primary-color-dark pt-3">
                <h3 class="card-title font-weight-bold text-center text-white">Personnel</h3> 
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded-0 active" id="personnel-mensuel-tab" data-toggle="tab" href="#personnel-mensuel" role="tab" aria-controls="personnel-mensuel"
                      aria-selected="true">Mensuel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-0" id="personnel-annuel-tab" data-toggle="tab" href="#personnel-annuel" role="tab" aria-controls="personnel-annuel"
                      aria-selected="false">Annuel</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content p-3" id="personelTabContent">
                <div class="tab-pane fade show active" id="personnel-mensuel" role="tabpanel" aria-labelledby="personnel-mensuel-tab">
                    <div class="text-center py-3">
                        <h1 class="card-title">0.01€ to test</h1>
                        <p class="card-text">/mensuel</p>
                    </div>
                    <ul class="list-group justify-content-start py-3">
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i> Cras justo odio
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Dapibus ac facilisis in
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Morbi leo risus
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Porta ac consectetur ac
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Vestibulum at eros
                            </small>
                        </li>
                    </ul>
                    <!-- paypal button to be rendered -->
                    <div class="paypal-buttons" data-desc="personel" data-subs="m" data-site-code="<?php echo $sitename ?>" data-value="0.01"></div>
                </div>
                <div class="tab-pane fade" id="personnel-annuel" role="tabpanel" aria-labelledby="personnel-annuel-tab">
                    <div class="text-center py-3">
                        <h1 class="card-title">144.00€</h1>
                        <p class="card-text">12.00€ <small>/mensuel</small></p>
                    </div>
                    <ul class="list-group justify-content-start py-3">
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i> Cras justo odio
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Dapibus ac facilisis in
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Morbi leo risus
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Porta ac consectetur ac
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Vestibulum at eros
                            </small>
                        </li>
                    </ul>
                    <!-- paypal button to be rendered -->
                    <div class="paypal-buttons" data-desc="personel" data-subs="y" data-site-code="<?php echo $sitename ?>" data-value="144.00"></div>
                </div>              
            </div>   
        </div>
        <div class="card mb-4">
            <div class="stylish-color-dark pt-3">
                <h3 class="card-title font-weight-bold text-center text-white">Entreprise</h3> 
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded-0 active" id="entreprise-mensuel-tab" data-toggle="tab" href="#entreprise-mensuel" role="tab" aria-controls="entreprise-mensuel"
                      aria-selected="true">Mensuel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-0" id="entreprise-annuel-tab" data-toggle="tab" href="#entreprise-annuel" role="tab" aria-controls="entreprise-annuel"
                      aria-selected="false">Annuel</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content p-3" id="entrepriseTabContent">
                <div class="tab-pane fade show active" id="entreprise-mensuel" role="tabpanel" aria-labelledby="entreprise-mensuel-tab">
                    <div class="text-center py-3">
                        <h1 class="card-title">21.00€</h1>
                        <p class="card-text">/mensuel</p>
                    </div>
                    <ul class="list-group justify-content-start py-3">
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i> Cras justo odio
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Dapibus ac facilisis in
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Morbi leo risus
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Porta ac consectetur ac
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Vestibulum at eros
                            </small>
                        </li>
                    </ul>
                    <!-- paypal button to be rendered -->
                    <div class="paypal-buttons" data-desc="entreprise" data-subs="m" data-site-code="<?php echo $sitename ?>" data-value="21.00"></div>
                </div>
                <div class="tab-pane fade" id="entreprise-annuel" role="tabpanel" aria-labelledby="entreprise-annuel-tab">
                    <div class="text-center py-3">
                        <h1 class="card-title">204.00€</h1>
                        <p class="card-text">17.00€ <small>/mensuel</small></p>
                    </div>
                    <ul class="list-group justify-content-start py-3">
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i> Cras justo odio
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Dapibus ac facilisis in
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Morbi leo risus
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Porta ac consectetur ac
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Vestibulum at eros
                            </small>
                        </li>
                    </ul>
                    <!-- paypal button to be rendered -->
                    <div class="paypal-buttons" data-desc="entreprise" data-subs="y" data-site-code="<?php echo $sitename ?>" data-value="204.00"></div>
                </div>              
            </div>   
        </div>
        <div class="card mb-4">
            <div class="default-color-dark pt-3">
                <h3 class="card-title font-weight-bold text-center text-white">Commerce Basic</h3> 
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded-0 active" id="commercebasic-mensuel-tab" data-toggle="tab" href="#commercebasic-mensuel" role="tab" aria-controls="commercebasic-mensuel"
                      aria-selected="true">Mensuel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-0" id="commercebasic-annuel-tab" data-toggle="tab" href="#commercebasic-annuel" role="tab" aria-controls="commercebasic-annuel"
                      aria-selected="false">Annuel</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content p-3" id="commercebasicTabContent">
                <div class="tab-pane fade show active" id="commercebasic-mensuel" role="tabpanel" aria-labelledby="commercebasic-mensuel-tab">
                    <div class="text-center py-3">
                        <h1 class="card-title">28.00€</h1>
                        <p class="card-text">/mensuel</p>
                    </div>
                    <ul class="list-group justify-content-start py-3">
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i> Cras justo odio
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Dapibus ac facilisis in
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Morbi leo risus
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Porta ac consectetur ac
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Vestibulum at eros
                            </small>
                        </li>
                    </ul>
                    <!-- paypal button to be rendered -->
                    <div class="paypal-buttons" data-desc="commercebasic" data-subs="m" data-site-code="<?php echo $sitename ?>" data-value="28.00"></div>
                </div>
                <div class="tab-pane fade" id="commercebasic-annuel" role="tabpanel" aria-labelledby="commercebasic-annuel-tab">
                    <div class="text-center py-3">
                        <h1 class="card-title">288.00€</h1>
                        <p class="card-text">24.00€ <small>/mensuel</small></p>
                    </div>
                    <ul class="list-group justify-content-start py-3">
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i> Cras justo odio
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Dapibus ac facilisis in
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Morbi leo risus
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Porta ac consectetur ac
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Vestibulum at eros
                            </small>
                        </li>
                    </ul>
                    <!-- paypal button to be rendered -->
                    <div class="paypal-buttons" data-desc="commercebasic" data-subs="y" data-site-code="<?php echo $sitename ?>" data-value="288.00"></div>
                </div>              
            </div>   
        </div>
        <div class="card mb-4">
            <div class="bg-dark pt-3">
                <h3 class="card-title font-weight-bold text-center text-white">Commerce Avancé</h3> 
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded-0 active" id="commerceavance-mensuel-tab" data-toggle="tab" href="#commerceavance-mensuel" role="tab" aria-controls="commerceavance-mensuel"
                      aria-selected="true">Mensuel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-0" id="commerceavance-annuel-tab" data-toggle="tab" href="#commerceavance-annuel" role="tab" aria-controls="commerceavance-annuel"
                      aria-selected="false">Annuel</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content p-3" id="commerceavanceTabContent">
                <div class="tab-pane fade show active" id="commerceavance-mensuel" role="tabpanel" aria-labelledby="commerceavance-mensuel-tab">
                    <div class="text-center py-3">
                        <h1 class="card-title">40.00€</h1>
                        <p class="card-text">/mensuel</p>
                    </div>
                    <ul class="list-group justify-content-start py-3">
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i> Cras justo odio
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Dapibus ac facilisis in
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Morbi leo risus
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Porta ac consectetur ac
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Vestibulum at eros
                            </small>
                        </li>
                    </ul>
                    <!-- paypal button to be rendered -->
                    <div class="paypal-buttons" data-desc="commerceavance" data-subs="m" data-site-code="<?php echo $sitename ?>" data-value="40.00"></div>
                </div>
                <div class="tab-pane fade" id="commerceavance-annuel" role="tabpanel" aria-labelledby="commerceavance-annuel-tab">
                    <div class="text-center py-3">
                        <h1 class="card-title">432.00€</h1>
                        <p class="card-text">36.00€ <small>/mensuel</small></p>
                    </div>
                    <ul class="list-group justify-content-start py-3">
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i> Cras justo odio
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Dapibus ac facilisis in
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Morbi leo risus
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Porta ac consectetur ac
                            </small>
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <small>
                                <i class="fas fa-check mr-5"></i>Vestibulum at eros
                            </small>
                        </li>
                    </ul>
                    <!-- paypal button to be rendered -->
                    <div class="paypal-buttons" data-desc="commerceavance" data-subs="y" data-site-code="<?php echo $sitename ?>" data-value="432.00"></div>
                </div>              
            </div>   
        </div>
    </div>   
</div>
<?php include('../general/foot.php');?>
<?php 
    // CLIENT ID for LIVE
    $CLIENT_ID = 'Adh5AfMo_uTdo8DEXEc7QPLY0QNbm9_MUEU6qRLVHTbIl71A5YQds4m0Sr2ZZBvGFWIHaI6N3r16JWRD';    
    // CLIENT ID for SANDBOX
    //$CLIENT_ID = 'AfRj_EOf7J-LDHlbRXxsqHFjfHygyxLhzgCCBUPljzZjEY9u-seJzlnjOqmyqCxunkho3dDnk0x9wvKQ';
?>
<script src="https://www.paypal.com/sdk/js?client-id=<?php echo $CLIENT_ID ?>&intent=capture&currency=EUR"></script>
<script type="text/javascript">
    $(document).ready(
        jQuery('.paypal-buttons').each(function(i,el){
            var button = jQuery(el);
            var site_code = button.attr('data-site-code');
            var value = button.attr('data-value');
            var descript = button.attr('data-desc');
            var subscription = button.attr('data-subs');
            paypal.Buttons({
                createOrder: function(data, actions) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                    purchase_units: [{
                    amount: {
                        currency_code: "EUR",
                        value: value,
                    },
                    description : 'Payment for pubslishing website '+site_code
                    }]
                });
                },
                onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                    // This function shows a transaction success message to your buyer.
                    //console.log('Publishing site code : '+site_code);
                    //alert('Transaction completed by ' + details.payer.name.given_name) + '.';
                    //console.log("details",details)
                    // Add your code here to publish the site... Call a url that publish the site
                    var url = '../checkoutsuccess?sitename='+site_code+'&clientname='+details.payer.name.given_name; //Url redirection that publish the site.
                    window.location.href = url;
                });
                }
            }).render(el);
        })
    );
</script>
<?php endif; ?>