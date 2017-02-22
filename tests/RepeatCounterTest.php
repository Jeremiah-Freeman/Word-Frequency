<?php

    require_once 'src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats()
        {
           //Arrange
           $test_countRepeats = new RepeatCounter;
           $input = "love";
           $input2 = "how much Love it too much love";

           //Act
           $result = $test_countRepeats->countRepeats($input2,$input);

           //Assert
           $this->assertEquals( 2 , $result );
       }
   }
?>
