<?php
function do404() {
    http_response_code(500);
}

if(array_key_exists('err500',$_POST)){
   do403();
}
?>