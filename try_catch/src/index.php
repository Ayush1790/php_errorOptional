<form action="#" method="GET">
    <input type="text" placeholder="Enter email id" name="email">
    <input type="submit" value="submit" name="submit">
</form>
<?php
try{
    if(preg_match("/[a-zA-Z_\.\-0-9]+[@][a-z]+[.][a-z]+/",$_GET['email'])){
        echo "Success";
    }else{
        throw new Exception("Please fill valid email");
    }
}catch(Exception $e){
    echo $e->getMessage();
}
?>
