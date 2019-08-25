<?php
    session_start();
    include('../functions/functions.php');
?>
<?php include('../general/head.php');?>
<a href="#" id="scroll" style="display: none;"><span></span></a>    
<?php include('../general/header.php');?>
	<div class="container-fluid text-center">
		<h1>Choose a template to start from</h1>
        <p>Each template is natively responsive and can be fully customized to your liking.</p>
	</div>
	<div class="tab-content">
        <?php
            $templatesData = json_decode(getAllTemplates());
        ?>
        <div class="tab-pane active" id="all" role="tabpanel">
        	<div class="container">
        		<h2>All Templates</h2><hr>
                <div class="row">
            		<?php  
                        foreach($templatesData as $template) {
                            include('templateBlock.php');
                        }  
                    ?>
                </div>
        	</div>
        </div>
        <div class="tab-pane" id="enterprice" role="tabpanel">
        	<div class="container">
        		<h2>Enterprise</h2><hr>
        		<div class="row">
        			<?php  
                        foreach($templatesData as $template) {
                            if (in_array($template->template_id, array("1004643", "1005442", "1005710","1007730","1016497","1017273","1003075","1004110","1013307","1003458","1004111","1004112","1007980","1037395","1011557","1015027","1027444","1062978","1016503","1016512","1016775","1016945","1017847","1021909","1026342","1016202","1045884","1033336","1046917","1047062","1025359","1054739"))){ 
                                    include('templateBlock.php');
                            }
                        }  
                    ?>
        		</div>
        	</div>
        </div>
        <div class="tab-pane" id="destination" role="tabpanel">
        	<div class="container">
        		<h2>Landing Page</h2><hr>
        		<div class="row">
        			<?php
                        foreach($templatesData as $template) {
                            if (in_array($template->template_id, array("1008303", "1009457", "1009459","1034487","1024395","1026287","1057637","1033504","1022517","1016505","1072284","1046918","1047060"))){
                                    include('templateBlock.php');
                            }
                        }
                    ?>
        		</div>
        	</div>
        </div>
        <div class="tab-pane" id="prof" role="tabpanel">
        	<div class="container">
        		<h2>Professional Services</h2><hr>
        		<div class="row">
        			<?php
                        foreach($templatesData as $template) {
                            if (in_array($template->template_id, array("1026026", "1004642", "1005711","1010811","1031169","1031176","1031172","1026311","1041738","1076030","1016502","1003739","1003737","1017022","1007979","1005051","1005445","1009922","1038893","1069287","1076951","1016504","1016507","1016514"))){  
                                    include('templateBlock.php');
                            }
                        }
                    ?>
        		</div>
        	</div>
        </div>
        <div class="tab-pane" id="restau" role="tabpanel">
        	<div class="container">
        		<h2>Food and Nutrition</h2><hr>
        		<div class="row">
        			<?php
                        foreach($templatesData as $template) {
                            if (in_array($template->template_id, array("1003041", "1007187", "1008302","1027884","1027883","1049888","1037599","1045114","1074761","1074762","1074763","1075042","1075979","1076223","1076240","1076444","1077365","243f1d22","1077560","1079120","1002820","1016564","1016516","20060"))){ 
                                    include('templateBlock.php');
                            }
                        }
                    ?>
        		</div>
        	</div>
        </div>
        <div class="tab-pane" id="vide" role="tabpanel">
        	<div class="container">
        		<h2>Empty</h2><hr>
        		<div class="row">
        			<?php
                        foreach($templatesData as $template) {
                            if (in_array($template->template_id, array("1003460", "1003459", "1012450","1015028","1031575","1024394","1027437","1023876","1004113","1021410","1003738","1047061"))){ 
                                    include('templateBlock.php');
                            }
                        }
                    ?>
        		</div>
        	</div>
        </div>
        <div class="tab-pane" id="boutique" role="tabpanel">
        	<div class="container">
        		<h2>Online Store</h2><hr>
        		<div class="row">
        			<?php
                        foreach($templatesData as $template) {
                            if (in_array($template->template_id, array("1005052", "1007423", "1015026","1031170","1016500","1026341","1007731","1031175","1023873","1016499","1003040","1016508","1016515","1032084","1032085","1057989","1077696","1077974","20023","1046091","1047059","1077347"))){ 
                                    include('templateBlock.php');
                            }
                        }
                    ?>
        		</div>
        	</div>
        </div>
        <div class="tab-pane" id="evenements" role="tabpanel">
        	<div class="container">
        		<h2>Events</h2><hr>
        		<div class="row">
        			<?php
                        foreach($templatesData as $template) {
                            if (in_array($template->template_id, array("1009165", "1002714", "1003735","1004580","1005444","1031576","1048358","1005663","1038889","1016513"))){
                                    include('templateBlock.php');
                            }
                        }
                    ?>
        		</div>
        	</div>
        </div>
        <div class="tab-pane" id="folio" role="tabpanel">
        	<div class="container">
        		<h2>Portfolio and CV</h2><hr>
        		<div class="row">
        			<?php
                        foreach($templatesData as $template) {
                            if (in_array($template->template_id, array("1002713", "1013306"))){ 
                                    include('templateBlock.php');
                            }
                        }
                    ?>
        		</div>
        	</div>
        </div>
        <div class="tab-pane" id="art" role="tabpanel"> 
            <div class="container"> 
                <h2>Art of Living and Health</h2><hr> 
                <div class="row">   
                    <?php   
                        foreach($templatesData as $template) {  
                            if (in_array($template->template_id, array("1002716", "1002715","1003736","1009838","1031173","1029064","1075961"))){   
                                    include('templateBlock.php');   
                            }   
                        }   
                    ?>  
                </div>  
            </div>  
        </div>
        <div class="tab-pane" id="voyages" role="tabpanel">
        	<div class="container">
        		<h2>Travelling</h2><hr>
        		<div class="row">
        			<?php
                        foreach($templatesData as $template) {
                            if (in_array($template->template_id, array("1000772", "1009458","1029063","1016505","1016511","1018724","1042175","1046242","1058286","1053148"))){
                                    include('templateBlock.php');
                            }
                        }
                    ?>
        		</div>
        	</div>
        </div>
        <div class="tab-pane" id="education" role="tabpanel">
        	<div class="container">
        		<h2>Community and Education</h2><hr>
        		<div class="row">
        			<?php
                        foreach($templatesData as $template) {
                            if (in_array($template->template_id, array("1003734", "1012895","1072891","1015401","1016509","1016506"))){ 
                                    include('templateBlock.php');
                            }
                        }
                    ?>
        		</div>
        	</div>
        </div>
        <div class="tab-pane" id="blog" role="tabpanel">
        	<div class="container">
        		<h2>Blog</h2><hr>
        		<div class="row">
        			<?php
                        foreach($templatesData as $template) {
                            if (in_array($template->template_id, array("1002785","1059485","1060503","1077193","20063"))){ 
                                    include('templateBlock.php');
                            }
                        }
                    ?>
        		</div>
        	</div>
        </div>
    </div>
<?php include('../general/footer.php');?>
<script>
    jQuery(document).ready(function(){ 
	    jQuery("#menu-toggle").click(function(e) {
	      	e.preventDefault();
	      	jQuery("#wrapper").toggleClass("toggled");
	    });

	    jQuery(window).scroll(function(){ 
	        if (jQuery(this).scrollTop() > 100) { 
	            jQuery('#scroll').fadeIn(); 
	        } else { 
	            jQuery('#scroll').fadeOut(); 
	        } 
	    }); 
	    jQuery('#scroll').click(function(){ 
	        jQuery("html, body").animate({ scrollTop: 0 }, 600); 
	        return false; 
	    }); 
	});
</script>