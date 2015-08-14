<?php

    class RepeatCounter
    {

        function counterRepeat($user_word, $user_string)
        {
            //removes any special characters that are not a string
            $user_string = preg_replace('/[^A-Za-z 0-9]/','',$user_string);

            //takes the sentence the user inputs and converts each word into a string
            $input_array = explode(" ", $user_string);

            //converts the word the user is searching for into lowercase
            $user_word = strtolower($user_word);

            //starting point for how many times the word appears in the sentence
            $count = 0;

            //if the user doesn't enter anything for the word
            if($user_word == " ") {
                return "Please enter a word to check for";
            }

            //if the user doesn't enter anything for the sentence to check on
            elseif ($user_string == " ") {
                return "Please enter your sentence";
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
