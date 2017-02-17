<?php

    require_once 'src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_findWordMatch($input)
        {
           //Arrange
           $test_findWordMatch = new RepeatCounter;
           $input = "love";
           $input2 = "how much love it too much love";

           //Act
           $result = $test_FindTheWord->findTheWord($input);

           //Assert
           $this->assertEquals("2", $result);
       }

    }



?>
