<?php
    class RepeatCounter
    {
        function findTheWord($input,$input2)
        {
            $input = "love";
            $input2 = "when is love to much love";

            $count = substr_count($input2,$input);
            return $count;

        }
    }




?>
