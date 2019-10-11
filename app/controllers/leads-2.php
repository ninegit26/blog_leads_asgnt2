<?php
    include("app/db/db.php");

    if (isset($_POST['download-btn'])) {
        $http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
        $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote_addr = $_SERVER['REMOTE_ADDR'];

        if (!empty($http_client_ip)) {
            $ip_address = $http_client_ip;
        } else if (!empty($http_x_forwarded_for)) {
            $ip_address = $http_x_forwarded_for;
        } else {
            $ip_address = $remote_addr;
        }
        
        $_POST['ds_ip_lead'] = $ip_address;
        $_POST['in_parceiro'] = 1;
        unset($_POST['download-btn']);
        
        $lead = create("leads", $_POST);

        header("Location: http://beabla.com/ebooks/E-BOOK JOGO.pdf"); 
        exit();
    }
?>