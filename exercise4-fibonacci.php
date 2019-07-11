<?php
    class MathSequences extends MathConstants
    {
        public function fibonacci($length = 1)
        {
            $data = array();
            $phi = (1 + sqrt(5)) / 2;
            for($i = 0; $i < $length; $i++)
            {
                array_push($data, floor((pow($phi, $i) - pow(1 - $phi, $i)) / sqrt(5)));
            }
            return $data;

        }
    }

    $mathCls = new MathSequences;
    
    echo '[0,1,1,2,3,5,8,13,21,34]';
    echo '<br>';
    print_r(json_encode($mathCls->fibonacci(10)));