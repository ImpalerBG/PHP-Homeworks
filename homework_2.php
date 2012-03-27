<?php    
    $my_array = range(20, 1000, 37);
    
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
    
    function find_3_prime()
    {
        $cnt = 0;
        foreach($GLOBALS["my_array"] as $i)
        {
            if(is_prime($i))
            {
                if(++$cnt == 3)
                {
                    echo $i."<br/>";
                    return;
                }
            }
        }
    }
    find_3_prime();
    
    function check_exist()
    {
        $arr = $GLOBALS["my_array"];
        $numbers = array(146, 284, 871);
        foreach($numbers as $i)
        if(in_array($i, $arr))
        {
            echo "The number $i exist in the array <br/>";
        }
        else
        {
           echo "The number $i does not exist in the array <br/>";
        }
    }
    check_exist();
?>
