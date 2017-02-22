<?php
    class RepeatCounter
    {
        function findTheWord($input2,$input)
        {
            $input = (string)strtolower($input);
            $input2 = explode(" " , $input2);
            // var_dump($input2);

            $count = 0;

            // $count = substr_count($input2,$input);
            for($i = 0; $i <= count($input2); $i++) {
                if($input2[$i] == $input) {
                    $test+=$input2[$i];


                        echo  "yay";

                    // return $count;
                    // foreach($test as $tester => $value){

                    // }
                }




            }

        }
    }




?>
<?php
    class RepeatCounter
    {
        function findTheWord($input2,$input)
        {
            $input = ($input);
            $input2 = explode(" " , $input2);
            $input2 = array_map('strtolower', $input2);
            $count = 0;
            for($i = 0; $i <= count($input2); $i++) {
                if($input2[$i] == $input) {
                    $test+=$input2[$i];
                    $count++;
                }
            }return $count;
        }
    }

?>
