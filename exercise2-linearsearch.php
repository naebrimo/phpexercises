<?php
    class ArrayCls
    {
        function linearSearch($needle, $array)
        {
            foreach($array as $array)
            {
                if($needle === $array) return TRUE;
            }
            return FALSE;
        }
    }
        
    $action = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

    $arrayCls = new ArrayCls;
    $input1 = null;
    $input2 = null;

    if(isset($_GET['input1'])) $input1 = $_GET['input1'];
    if(isset($_GET['input2'])) $input2 = $_GET['input2'];
    if(!is_array($input2) && !is_null($input2)) $input2 = explode(',', $input2);


    if(!is_null($input1) && !is_null($input2))
    {
        if($arrayCls->linearSearch($input1, $input2))
        {
            echo '"'. $input1 .'" is in the array: '. json_encode($input2);
        }
        else
        {
            echo '"'. $input1 .'" is NOT in the array: '. json_encode($input2);
        }
        echo '<br>';
    }
    
    echo 'Enter number to search and array to search into:';
    echo '<form action="'.$action.'" method="GET">';
        echo '<input type="text" name="input1" value="'. $input1 .'" placeholder="Number to search">';
        if(!is_null($input2))
        {
            $input2 = implode(',', $input2);
        }
        echo '<input type="text" name="input2" value="'. $input2 .'" placeholder="Array to search into">';
        echo '<button type="submit" name="submit" value="submit">Go</button>';
    echo '</form>';