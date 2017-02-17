<?php
    class RepeatCounter
    {
        function findTheWord($input2,$input)
        {
            $input = (string)strtolower($input);
            $input2 = (string)strtolower($input2);

            $count = substr_count($input2,$input);
            return $count;

        }
    };




?>
