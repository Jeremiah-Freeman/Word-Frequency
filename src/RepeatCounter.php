<?php
    class RepeatCounter
    {
        function countRepeats($input2,$input)
        {
            $count = 0;
            $ignore_these = array("");
            $input = str_replace("","",strtolower($input));
            $input2 = explode(" " , (string)($input2));
            $input2 = array_map('strtolower', $input2);

            for($i = 0; $i <= count($input2); $i++) {
                if($input2[$i] == $input) {
                    $count++;
                }
            }return $count;
        }
    }
?>
