<?php

    require_once 'src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_Lower_Case()
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
       function test_Lower_Upper()
       {
          //Arrange
          $test_countRepeats = new RepeatCounter;
          $input = "Love";
          $input2 = "how much Love it too much love";

          //Act
          $result = $test_countRepeats->countRepeats($input2,$input);

          //Assert
          $this->assertEquals( 2 , $result );
      }
      function test_Lower_Upper_Punctuation()
      {
         //Arrange
         $test_countRepeats = new RepeatCounter;
         $input = "Love";
         $input2 = "how much Love it too much love!";

         //Act
         $result = $test_countRepeats->countRepeats($input2,$input);

         //Assert
         $this->assertEquals( 1 , $result );
     }

   }
?>
