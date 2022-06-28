SET COOKIES
<?php
setcookie("xcookie", "value of x");
setcookie("ycookie", "value of y", time() + 10);
setcookie("zcookie", "value of z", time() + 3600);
?>

<?php
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>