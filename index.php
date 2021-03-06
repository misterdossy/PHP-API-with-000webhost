<?php
/*
    LINKS THAT HELPED IN THE CREATION OF THIS SCRIPT
    https://stackoverflow.com/questions/4064444/returning-json-from-a-php-script
*/

header('Content-type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order = [ 'order_ID' => 301684,
            'first_name' => 'Juan',
            'last_name' => 'dela Cruz',
            'order' => [
                'dalgona' => 1,
                'fries' => 1
            ],
            'address' => 'Jesus St, Pandacan, Manila, 1011 Metro Manila'
        ];
    echo json_encode($order);
} else {
    http_response_code(405);
    echo '{"Error": "Method not supported."}';
}

?>