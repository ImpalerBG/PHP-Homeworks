<html>

<?php
    
    function is_prime($var)
    {
        for($i = 2; $i < ($var / 2); $i++)
        {
            if($var % $i == 0)
            {
                return false;
            }
        }
        return true;
    }

    $number = $_GET["number"];
    if(!is_numeric($number))
    {
        echo "<font color='red'> The parameter is not a number </font>";
        exit;
    }
    
    if($number < 0 || $number > 19999)
    {
        echo "<br/><font color='red'>The parameter is not within the range [0,19999]</font>";
    }
    
    if(is_prime($number))
    {
        echo "<p> The number $number is prime</p>";
    }
    else
    {
        echo "<br/><font color='blue'> The number $number is NOT prime</font>";
    }
    
    #<font> e deprecated no nqma smisyl ot CSS za ne6to takova
?>

</html>