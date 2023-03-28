<?php
function customError($errno, $errstr, $errfile, $errline)
{
    switch ($errno) {
        case 1:
            echo "Error";
            break;
        case 2:
            echo "Warning";
            break;
        case 8:
            echo "Notice";
            break;
        case 256:
            echo "user error";
            break;
        case 512:
            echo "user warning";
            break;
        case 1024:
            echo "user Notice";
            break;            
    }
}
set_error_handler("customError");
echo $test."<br>";
echo 5/0;

?>