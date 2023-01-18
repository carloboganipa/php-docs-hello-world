<?php
function do400() {
    http_response_code(400);
}

if(array_key_exists('err400',$_POST)){
   do400();
}
?>