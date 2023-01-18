<?php
function do403() {
    http_response_code(403);
}

if(array_key_exists('err403',$_POST)){
   do403();
}
?>