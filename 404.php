<?php
function do404() {
    http_response_code(404);
}

if(array_key_exists('err404',$_POST)){
   do403();
}
?>