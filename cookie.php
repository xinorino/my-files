<?php
$name = "php_class";
$value = "Olayemi is a good girl";
setcookie($name, $value, time()+86400);
?>
<html>
    <body>
        <?php
if (isset($_COOKIE[$name])){
    echo "yes, the cookie class is set ";
    echo"<br>";
    echo "and the value is: ".$_COOKIE[$name];
}
else {echo "the cookie class is not set";};
?>
</body>
</html>

