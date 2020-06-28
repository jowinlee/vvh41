<?php
define("API_USER","21a8a02175");
define("API_PASS","YbUN6Q74wolb");

function getAllTemplates() {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, 'https://api.dudamobile.com/api/sites/multiscreen/templates');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    //execute cURL call
    $output = curl_exec($ch);

    //check result for correct HTTP code
    if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 200) {
        curl_close($ch);
        return $output;
    } else {
        curl_close($ch);
        http_response_code(400);
        die('Error getting templates details: '. $output . '<br/>');
    }
}

//check if post request contains template ID
// if (isset($_POST["template_id"])) {
    
// //create site
// $siteName = createSite($_POST["template_id"]);

// //create account with tmp info
// $date = new DateTime();
// $tempAcctName = 'tmp_' . uniqid() . '_' . $date->getTimestamp();
// $account = createCustomerAccount($tempAcctName);

// //grant access
// grantAccountAccess($account,$siteName);

// //generate & print sso link
// echo getSSOLink($account,$siteName,'EDITOR');

// //prevent rest of page from loading and kill other php commands
// die();
// }
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <div class="row top" style="background:#f1f1f1">
            <div class="col s12 center-align">
                <h4 class="">Choose a template to start from</h4>
                <p>Each template is natively responsive and can be fully customized to your liking.</p>
            </div>
        </div>
<div class="container">

<?php

$templatesData = json_decode(getAllTemplates());

echo '<div class="row">';
//loop through each item of the template data and display in a card style layout
foreach($templatesData as $template) {
    echo '<div class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img class="materialboxed" src="' . $template->thumbnail_url . '">
          <a class="btn-floating tooltipped halfway-fab waves-effect waves-light red start-building" data-tooltip="Start editing this template" data-template-id="' . $template->template_id . '"><i class="material-icons">mode_edit</i></a>
        </div>
        <div class="card-content">
          <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
          <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
        </div>
        <div class="card-action">
          <a data-template-id="' . $template->template_id . '" href="#" class="start-building">Start with this template</a>
        </div>
      </div>
    </div>';

}
echo '</div>';

?>


</div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <!--   <script> $(document).ready(function(){$('.materialboxed').materialbox();});
        function createWebsite(tmpID) {
            var request = jQuery.ajax({
                url:window.location.pathname,
                beforeSend:function() {
                  //display click notification while AJAX call is in progress
                  Materialize.toast('Creating your website now..', 10000) 
                },
                method:"POST",
                data:{"template_id":tmpID}
            });

        request.success(function(d){
            var respData = d;
            console.log(respData);
            //display success message
            Materialize.toast('Successfully created website',10000);
            Materialize.toast('Sending you to edit..', 500,'', function(){ window.location = respData;
                })
        });
        
        //handle falures to create
        request.fail(function(d,sts,err){
            Materialize.toast('Website creation failed: ' + d, 5000)
            });
        }
        //find each start building links (both pencils and links) and call createwebsite function with template ID
        $('.start-building').each(function(e) {
            $(this).on('click',function(tmpID){
                var tmpID = $(this).data('template-id');
                createWebsite(tmpID);

            })
        })
      </script> -->
    </body>
  </html>