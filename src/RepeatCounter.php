<?php

    class RepeatCounter
    {

        function counterRepeat($user_word, $user_string)
        {
            //creates a standard error message to use below
            $error_message = -1;

            //checks to see if the user word inputted is a word and of alphabetic form
            //also checks to see if the user string is inputted
            if(!empty($user_word) && ctype_alpha($user_word) && !empty($user_string)) {

                //makes sure that there are no special characters enter within the string.
                //if there is it replaces them with the second argument which is "".
                $user_replace = preg_replace("/[^A-Za-z 0-9 ]/","",$user_string);

                //takes the sentence the user inputs to search through and makes seperate
                //arrays out of them.
                $string_array = explode(" ", $user_replace);

                //makes the user word all lowercase
                $user_word = strtolower($user_word);

                //starting point for the counting how many times the word appears in the string
                $count = 0;

                //looks through the string array to see which words match the users input word
                //if they are equal then the count will add 1 increment
                foreach($string_array as $word) {
                    if($user_word == $word) {
                        $count++;
                    }
                }
                //this will return the number of times the word is in the sentence
                return $count;
            }
                else {
                    return $error_message;
            }
        }
    }


 ?>
