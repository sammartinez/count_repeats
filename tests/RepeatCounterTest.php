<?php

    require_once __DIR__."/../src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        //Checks to see if a is going to equal 1
        function test_counterRepeat_oneLetterWord()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "a";
            $input2 = "a";

            $result = $test_RepeatCounter->counterRepeat($input1, $input2);

            $this->assertEquals(1, $result);
        }

        function test_counterRepeat_oneLetterWordTwice()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "a";
            $input2 = "a unicorn can only eat a cup of food";

            $result = $test_RepeatCounter->counterRepeat($input1, $input2);

            $this->assertEquals(2, $result);
        }
    }


 ?>
