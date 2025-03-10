<?php

echo "<h1>Today's lucky number is " . rand() . "!</h1>";

echo $_SERVER['HTTP_USER_AGENT'] . '<p> is your web browser.';

?>

<form method="post" action="#">
    <label for="name">Your name: <input type="text" name="name" id="name" maxlength="255"></label><br>
</form> 