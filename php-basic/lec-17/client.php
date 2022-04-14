<?php
    $options = array(
        'uri' => 'http://localhost:8080/soap.php',
        'location' => 'http://localhost:8080/soap.php'
    );

    $client = new SoapClient(null, $options);

    var_dump($client->somar(2, 2));
?>