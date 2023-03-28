<form action="#" method="GET">
    <input type="text" placeholder="Enter email id" name="email">
    <input type="submit" value="submit" name="submit">
</form>
<?php
if(isset($_GET['email'])){
    if(preg_match("/[a-zA-Z_\.\-0-9]+[@][a-z]+[.][a-z]+/",$_GET['email'])){
        echo "Success";
    }else{
        echo "Please fill valid email";
    }
}
?>
