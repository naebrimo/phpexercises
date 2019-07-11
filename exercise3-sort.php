<?php
    class ArrayCls
    {
        public function sortAscending($array)
        {
            for ($i = 0; $i < count($array); $i++)
            {
                for($j = $i + 1; $j < count($array); $j++)
                {
                    if ($array[$i] > $array[$j])
                    {
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $temp;
                    }
                }
            }
            return $array;
        }
        public function sortDescending($array)
        {   
            $data = array();
            $sortedAscending = $this->sortAscending($array);
            for($i = count($sortedAscending) - 1; $i >= 0; $i--)
            {
                array_push($data, $sortedAscending[$i]);
            }
            return $data;
        }
    }

    $arrayCls = new ArrayCls;
    $array = array(2,9,96,6,7,3,96,333,0);
    
    echo 'Unsorted Array : '.json_encode($array) .'<br>';
    echo 'Sorted Array (Ascending): '.json_encode($arrayCls->sortAscending($array)) .'<br>';
    echo 'Sorted Array (Descending): '.json_encode($arrayCls->sortDescending($array)) .'<br>';


