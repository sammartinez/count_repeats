<?php

    class RepeatCounter
    {

        function counterRepeat($user_word, $user_string)
        {
            $user_string = preg_replace('/[^A-Za-z 0-9]/','',$user_string);
            $input_array = explode(" ", $user_string);
            $user_word = strtolower($user_word);
            $count = 0;
            $error_message = -101;

                //if the user doesn't enter anything for the word
                if($user_word == " ") {
                    return $error_message;
                }

                //if the user doesn't enter anything for the sentence to check on
                elseif ($user_string == " ") {
                    return $error_message;
                }

                //otherwise take the array and check for matches
                else {
                    foreach($input_array as $word) {
                        if($user_word == $word) {
                            $count++;
                        }
                    }
                    //return the number of times the word is in the sentence
                    return $count;
                }
        }
    }


 ?>
