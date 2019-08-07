<?php  
    include('../api/api.php');

    function getSSOLink($account,$siteName,$target) {

        $SSOAPIURL = 'https://api.duda.co/api/accounts/sso/' . $account . '/link';
        if($target) {
            $SSOAPIURL .= '?target=' . $target . '&site_name=' . $siteName;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, $SSOAPIURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $output = curl_exec($ch);
        
        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 200) {

            curl_close($ch);

            $output = json_decode($output);

            $ssolink = $output->url . '&asNew=true';

            header('Location:' . $ssolink);

        } else {
            curl_close($ch);
            die('Error getting SSO link: '. $output . '<br/>');
        }
    }

    function getResetPass($account) {

        $RESETPASSURL = 'https://api.duda.co/api/accounts/reset-password/'.$account;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, $RESETPASSURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        $output = curl_exec($ch);

        
        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 200) {
            curl_close($ch);
            $output = json_decode($output);

            $resetpasslink = $output->reset_url;

            return $resetpasslink;
            
        } else {
            curl_close($ch);
            http_response_code(400);
            die('Error getting reset link: '. $output . '<br/>');
        }
    }    

    function getTemplate($template_id) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, 'https://api.dudamobile.com/api/sites/multiscreen/templates/'.$template_id);
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

    function getCustomerAccount($username) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, 'https://api.duda.co/api/accounts/'.$username);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $output = curl_exec($ch);
        $available = 'available';

        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 200) {
            curl_close($ch);
            return $output;
        } else {
            curl_close($ch);
            http_response_code(400);
            return $available;
        }
    }

    function getSiteByAccount($username) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, 'https://api.duda.co/api/accounts/grant-access/'.$username.'/sites/multiscreen');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $output = curl_exec($ch);
        $website = 'none';

        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 200) {
            curl_close($ch);
            return $output;
        } else {
            curl_close($ch);
            http_response_code(400);
            return $website;
        }
    }

    function grantAccountAccess($account,$siteName) {

        $data = '{"permissions":["INSITE",
          "RESET",
          "SEO",
          "STATS_TAB",
          "REPUBLISH",
          "EDIT",
          "BLOG",
          "PUSH_NOTIFICATIONS",
          "PUBLISH",
          "CUSTOM_DOMAIN"]
        }';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, 'https://api.duda.co/api/accounts/'.$account.'/sites/'.$siteName.'/permissions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        
        $output = curl_exec($ch);
        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 204) {
            curl_close($ch);
            return true;
        } else {
            curl_close($ch);
            http_response_code(400);
            die('Granting access failed, error: '. $output . '<br/>');
        }
    }

    function grantCompleteAccountAccess($account,$siteName) {

        $data = '{"permissions":[
            "STATS_TAB",
            "EDIT",
            "E_COMMERCE",
            "PUBLISH",
            "REPUBLISH",
            "DEV_MODE",
            "INSITE",
            "SEO",
            "BACKUPS",
            "CUSTOM_DOMAIN",
            "RESET",
            "BLOG",
            "PUSH_NOTIFICATIONS",
            "LIMITED_EDITING",
            "SITE_COMMENTS",
            "CONTENT_LIBRARY"
        ]}';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, 'https://api.duda.co/api/accounts/'.$account.'/sites/'.$siteName.'/permissions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        
        $output = curl_exec($ch);
        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 204) {
            curl_close($ch);
            return true;
        } else {
            curl_close($ch);
            http_response_code(400);
            die('Granting access failed, error: '. $output . '<br/>');
        }
    }

    function createSite($template_id) {

        $data = array("template_id"=>$template_id);
        $data = json_encode($data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL,'https://api.duda.co/api/sites/multiscreen/create');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        $output = curl_exec($ch);

        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 200) {
            $output = json_decode($output);
            return $output->site_name;
        } else {
            http_response_code(400);
            die('Create Site error: ' . $output);
        }
    }

    function createCustomerAccount($account,$firstname,$lastname,$email) {

        $data = array("account_name"=>$account,"first_name"=>$firstname,"last_name"=>$lastname,"email"=>$email);
        $data = json_encode($data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL,'https://api.duda.co/api/accounts/create');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        $output = curl_exec($ch);

        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 204) {
            curl_close($ch);
            return $account;
        } else {
            curl_close($ch);
            http_response_code(400);
            die('Account creation failed, error: '. $output . '<br/>');
        }
    }

    function updateCustomerAccount($account,$firstname,$lastname) {

        $data = array("first_name"=>$firstname,"last_name"=>$lastname);
        $data = json_encode($data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL,'https://api.duda.co/api/accounts/update/'.$account);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        $output = curl_exec($ch);

        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 204) {
            curl_close($ch);
            return $account;
        } else {
            curl_close($ch);
            http_response_code(400);
            die('Account creation failed, error: ' . $output . '<br/>');
        }
    } 

    function deleteAccount($account) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL,'https://api.duda.co/api/accounts/'.$account);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        $output = curl_exec($ch);

        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 204) {
            curl_close($ch);
            return $account;
        } else {
            curl_close($ch);
            http_response_code(400);
            die('Account deletion failed, error: ' . $output . '<br/>');
        }
    }        
?>