<?php
    class RepeatCounter
    {
        function findTheWord($input2,$input)
        {
            $input = (string)$input;
            $input2 = (string)$input2;

            $count = substr_count($input2,$input);
            return $count;

        }
    };




?>
