<?php
try{
    echo json_encode(['message'=>"It's ".date("g \\t\o i a")]);  
}catch(Exception $e){
    echo json_encode(['error'=>"invalid request!"]);
}
