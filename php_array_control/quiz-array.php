<?php
/**
 * 29/09/2020
 * Sorting Array
 */
include 'data_siswa.php';

$temp_arr=array();
$filter_form="all";
$filter_next=false;


foreach($data_siswa as $value)
{
    if($value[1]==$filter_form && $value[3]==$filter_next || ($filter_form==="all" && $value[3]==$filter_next))
    {
        if($value[3]){
            $lulus="Lulus";
        }else{
            $lulus="Belum lulus";
        }
            $temp_arr[]=[$value[0],$value[1],$lulus];
    }
}

asort($temp_arr);
print_r($temp_arr);
