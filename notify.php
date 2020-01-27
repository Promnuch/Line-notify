<!-- vr7VgNmx6njs8savjo1BjP1q9dgmdPhLsN3dBwdMmrE --> 


<?php

    require("insert.php");
    
    $header = "Test Line Notify";
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $messageFix = $_POST['message'];

    $message = $header.
                "\n"."ชื่อจริง: ".$firstname.
                "\n"."อีเมล: ".$email.
                "\n"."ปัญหาการใช้งาน: ".$messageFix;

    
        if( $firstname <> "" || $email <> "" || $messageFix <> ""){
            sendlinemesg();
            header('Content-type: text/html; charset=utf8');
            $res = notify_message($message);
            header("location: index.php");
        }
    


    function sendlinemesg() {
        define('LINE_API', "https://notify-api.line.me/api/notify");
        define('LINE_TOKEN', "vr7VgNmx6njs8savjo1BjP1q9dgmdPhLsN3dBwdMmrE");

        function notify_message($message){
            $queryData = array('message' => $message);
            $queryData = http_build_query($queryData, '','&');
            $headerOption = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                                ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                                ."Content-Length: ".strlen($queryData)."\r\n",
                    'content' => $queryData
                )
            );
            $context = stream_context_create($headerOption);
            $result = file_get_contents(LINE_API, FALSE, $context);
            $res = json_decode($result);
            return $res;

        }

    }
    
?>

