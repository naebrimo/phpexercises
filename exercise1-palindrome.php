<?php
    class Str
    {
        public function isPalindrome($string = null, $strict = FALSE) : bool
        {
            if($strict == FALSE) $string = strtolower($string);
            $stringReverse = '';
            $i = 0;
            while(isset($string[$i]))
            {
                $stringReverse = $string[$i].$stringReverse;
                $i++;
            }
            return $string === $stringReverse;
        }
    }

    $action = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

    $string = new Str;
    $input1 = null;
    if(isset($_GET['input1'])) $input1 = $_GET['input1'];
    if(!is_null($input1))
    {
        if($string->isPalindrome($input1))
        {
            echo '<strong>"'.$input1.'"</strong> is a Palindrome.';
        }
        else
        {
            echo '<strong>"'.$input1.'"</strong> is NOT a Palindrome.';
        }
        echo '<br>';
    }
    echo 'Enter string to test:';
    echo '<form action="'.$action.'" method="GET">';
        echo '<input type="text" name="input1" value="'. $input1 .'">';
        echo '<button type="submit" name="submit" value="submit">Go</button>';
    echo '</form>';


