<?php

        $url = "https://develop.datacrm.la/anieto/anietopruebatecnica/webservice.php?operation=getchallenge&username=prueba";

        $GetToken = file_get_contents($url);

        $tokenString = substr($GetToken,35,-51);

        $accesskey = md5($tokenString.'Vn4HOWtkJOsPX7t');

        $data_post = http_build_query(
          array(
            'operation' => 'login',
            'username' => 'prueba',
            'accessKey' => $accesskey
          )
        );

        $options = array(
          'http' =>
          array(
            'method' => "POST",
            'header' => "Content-Type: application/x-www-form-urlencoded ",
            'content' => $data_post
          )
        );

        $sessionName = '';

        $urlLogin = "https://develop.datacrm.la/anieto/anietopruebatecnica/webservice.php";

        $context = stream_context_create($options);
        $response = file_get_contents($urlLogin, false, $context);

        $sessionName = substr($response, 41, -64);

        $urlQuery = "https://develop.datacrm.la/anieto/anietopruebatecnica/webservice.php?operation=query&sessionName=$sessionName&query=select%20*%20from%20Contacts;";

        /*$ch = curl_init($urlQuery);
        $response = curl_exec($ch);*/

?>