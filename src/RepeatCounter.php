<?php

    class RepeatCounter
    {

        function counterRepeat($user_word, $user_string)
        {
            $error_message = -1;

            if(!empty($user_word) && ctype_alpha($user_word) && !empty($user_string)) {

                $user_replace = preg_replace('/[^\da-z ]/i','',$user_string);
                $string_array = explode(" ", $user_replace);
                $user_word = strtolower($user_word);
                $count = 0;

                foreach($string_array as $word) {
                    if($user_word == $word) {
                        $count++;
                    }
                }
                //return the number of times the word is in the sentence
                return $count;
            }
                else {
                    return $error_message;
            }
        }
    }


 ?>
