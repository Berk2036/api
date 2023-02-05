<?php
try{
    echo json_encode(['message'=>"I'm fine"]);
}catch(Exception $e){
    echo json_encode(['error'=>"invalid request!"]);
}
