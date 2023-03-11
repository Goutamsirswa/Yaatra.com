<?php
function inputField($placeholder,$name,$value,$type){
    $ele="<div>
    <input type='$type' name='$name' placeholder='$placeholder' value='$value' class=\"G_input\">
    </div>
    ";
    echo $ele;
}
?>