<?php
    class MathChecks
    {
        public function isPrimeNumber($integer)
        {
            if(!is_int($integer) || $integer < 2) return FALSE;
            for ($i = 2; $i <= sqrt($integer); $i++)
            { 
                if ($integer % $i == 0) return FALSE;
            } 
            return TRUE;
        }
    }

    $mathChecks = new MathChecks;
    $input = 20;
    print_r($mathChecks->isPrimeNumber($input));