
<?php

try{
    // $headers=getallheaders();
    // if(!isset($headers['auth']) || $headers['auth']!='d4d82f57-204f-445f-b711-4c782aa79e76') throw new Exception('error');

    if(isset($_GET['city']) && $_GET['city']==="london"){
        date_default_timezone_set('Europe/London');
        echo json_encode(['message'=>"It's ".date("g \\t\o i a")]);
    }
    
    if(isset($_POST['city']) && $_POST['city']==="london"){
        date_default_timezone_set('Europe/London');
        echo json_encode(['message'=>"It's ".date("g \\t\o i a")]);
    }

}catch(Exception $e){
    echo json_encode(['error'=>"invalid request!"]);
}