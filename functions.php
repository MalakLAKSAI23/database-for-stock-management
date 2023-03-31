<?php
function filterRequest($requestname){
    return htmlspecialchars(strip_tags($_POST[$requestname]));
}

?>