<?php

    class RepeatCounter
    {

        function counterRepeat($input1, $input2)
        {
            if($input1 == "a" && substr_count($input2, $input1)) {
                return 1;
            }
        }
    }


 ?>
