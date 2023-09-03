<?php

/**
 * Author:      Summary
 * Description: ...
 * Website:     www.crm-support.ir
 */
try {
    // The url you wish to send the POST request to
    $url = $_GET['protocol']. '://'. $_GET['domain'] .'/api/v1/workflows/submit';
    // The data you want to send via POST
    $fields = [
        'Request' => 'Done'
    ];
    // Url-ify the data for the POST
    $fields_string = http_build_query($fields);
    // Open connection
    $ch = curl_init();
    // Set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
    // So that curl_exec returns the contents of the cURL; rather than echoing it
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
    // Execute post
    $result = curl_exec($ch);
    print('OK');
}
catch(Exception $ex) {
    print('Exception:' . $ex -> getMessage());
}
