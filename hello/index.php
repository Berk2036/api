<?php
try{
    echo json_encode(['message'=>"hello"]);
}catch(Exception $e){
    echo json_encode(['error'=>"invalid request!"]);
}
