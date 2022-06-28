<!-- GET method -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    string: <input type="text" name="str" value="get value">
    <input type="submit" name="submit" value="submit get">
</form>

<!-- POST method -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    string: <input type="text" name="str" value="post value">
    <input type="submit" name="submit" value="submit post">
</form>

<?php
echo "<br/>GET value: ";
if (isset($_GET['submit'])) {
    echo $_GET['str'];
}
echo "<br/>POST value: ";
if (isset($_POST['submit'])) {
    echo $_POST['str'];
}
echo "<br/>REQUEST value: ";
if (isset($_REQUEST['submit'])) {
    echo $_REQUEST['str'];
}
?>