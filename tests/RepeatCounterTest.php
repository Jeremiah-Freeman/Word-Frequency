<?php

    require_once 'src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_findWordMatch()
        {
           //Arrange
           $test_findTheWord = new RepeatCounter;
           $input = "love";
           $input2 = "how much love it too much love";

           //Act
           $result = $test_findTheWord->findTheWord($inpu2,$input);

           //Assert
           $this->assertEquals( 2 , $result );
       }

   };



?>
