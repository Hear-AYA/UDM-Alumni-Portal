<?php
 require_once "../ADMIN DASH/connect/connect.php";
    session_start();

    extract($_GET);


    $num_str = sprintf("%06d", mt_rand(100000, 999999));


    $sql = "UPDATE regsinfo SET verify_number='$num_str' WHERE email='$to'";
    

    

    function send_email($to, $sender, $html_body, $subject,$num_str){

        $apikey="api-8B39FC6E529711EE8796F23C91C88F4E";
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
            curl_setopt($curl, CURLOPT_URL, "https://api.smtp2go.com/v3/email/send");
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array(

                "api_key" => $apikey,
                "to" => array(0 => $to),
                "sender" => $sender,
                "subject" => $subject,
                "html_body" => $html_body,
                "text_body" => "Your Verification number is ".$num_str,

            )));

              echo$result = curl_exec($curl);
              $object = json_decode($result, true);
               if($object['data']['succeeded'] >= 1){
                return true;
               }else{
                return false;
               }
    }

    if($conn->query($sql)===TRUE){

        if(send_email($to,'support@alcarom.com',$body,$subject,$num_str)){
            if($_SESSION['verified_account']){
                header('location: login.php?success=Email sent');
            }else{
                header('location: verification.php?email='.$to);
            }
        }

    }

    


?>