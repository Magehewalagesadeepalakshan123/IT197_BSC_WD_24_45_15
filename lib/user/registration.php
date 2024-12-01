<?php

$result = userRegistration($_POST['username'], $_POST['useremail'], $_POST['userpass'], $_POST['userphone'], $_POST['userNic']);

echo($result);

?>