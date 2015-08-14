<?php

    require_once __DIR__."/../src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_counterRepeat_oneLetterWord()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "a";

            $result = $test_RepeatCounter->counterRepeat($input_word);

            $this->assertEquals(1, $result);
        }

    }


 ?>
