<form action="#" method="GET">
    <label for="">User Name : </label>
    <input type="text" name="user">
    <br><br>
    <label for="">Password :</label>
    <input type="text" name="pswd"><br> 
    <input type="submit" value="submit"  name="submit">
</form>
<?php
if(isset($_GET['submit'])){
    if(isset($_GET['user'])&& $_GET['pswd']){
        if($_GET['user']=="admin" && $_GET['pswd']=="12345"){
            echo "Success";
        }else{
            echo "Wrong Details";
            error_log('[' . date("F j, Y, g:i a e O") . ']' ." " ."user id= ".$_GET['user']." Password= ".$_GET['pswd']."\n", 3 ,"./error.log");
        }
    }
}
?>