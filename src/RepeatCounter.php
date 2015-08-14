<?php

    class RepeatCounter
    {

        function counterRepeat($user_word, $user_string)
        {
            $input_array = explode(" ", $user_string);
            $user_word = strtolower($user_word);
            $count = 0;

            foreach($input_array as $word) {
                if($user_word == $word) {
                    $count++;
                }
            }
            return $count;
        }
    }


 ?>
