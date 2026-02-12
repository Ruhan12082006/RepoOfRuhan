<?php

    $age = $_POST['age'];

    if($age>=18)
    {
     echo "he/she is eligible for voting";  
    }
    else
        {
            echo "not valid for voting";
        }
?>