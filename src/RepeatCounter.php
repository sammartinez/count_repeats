<?php

    class RepeatCounter
    {

        function counterRepeat($user_word, $user_string)
        {
            $user_string = preg_replace('/[^A-Za-z 0-9]/','',$user_string);
            $input_array = explode(" ", $user_string);
            $user_word = strtolower($user_word);
            $count = 0;

            if($user_word == " ") {
                return "Please enter a valid word";
            } else {
                foreach($input_array as $word) {
                    if($user_word == $word) {
                        $count++;
                    }
                }
                return $count;
            }
        }
    }


 ?>
