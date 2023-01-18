<?php
function do500() {
    http_response_code(500);
}

if(array_key_exists('err500',$_POST)){
   do500();
}
?>