<?php
    class RepeatCounter
    {
        function countRepeats($sentence,$searched_Word)
        {
            $count = 0;
            $searched_Word = strtolower($searched_Word);
            $sentence = explode(" " , (string)($sentence));
            $sentence = array_map('strtolower', $sentence);

            for($i = 0; $i <= count($sentence); $i++) {
                if($sentence[$i] == $searched_Word) {
                    $count++;
                }
            }return $count;
        }
    }
?>
