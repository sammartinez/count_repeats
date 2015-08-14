<?php

    require_once __DIR__."/../src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        //Checks to see if a is going to equal 1
        function test_counterRepeat_oneLetterWord()
        {
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "a";
            $user_string = "a";

            $result = $test_RepeatCounter->counterRepeat($user_word, $user_string);

            $this->assertEquals(1, $result);
        }

        function test_counterRepeat_oneLetterWordTwice()
        {
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "a";
            $user_string = "a unicorn can only eat a cup of food";

            $result = $test_RepeatCounter->counterRepeat($user_word, $user_string);

            $this->assertEquals(2, $result);
        }

        function test_counterRepeat_multipleLetterWordOnce()
        {
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "bear";
            $user_string = "bear is a dog that sam owns";

            $result = $test_RepeatCounter->counterRepeat($user_word, $user_string);

            $this->assertEquals(1, $result);
        }

        function test_counterRepeat_multipleLetterWordTwice()
        {
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "tacos";
            $user_string = "i love tacos tacos are a way of life";

            $result = $test_RepeatCounter->counterRepeat($user_word, $user_string);

            $this->assertEquals(2, $result);
        }

        function test_counterRepeat_lowercaseWord()
        {
            $test_RepeatCounter = new RepeatCounter;
            $user_word = "Tacos";
            $user_string = "i love tacos tacos are a way of life";

            $result = $test_RepeatCounter->counterRepeat($user_word, $user_string);

            $this->assertEquals(2, $result);
        }
    }


 ?>
