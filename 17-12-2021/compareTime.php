<?php
    date_default_timezone_set('Asia/Yekaterinburg');
    function CompareTime( $timeSet ):int {
        $temp = explode('-',date("H-i"));
        $time = ($temp[0]) * 60 + $temp[1];

        $temp = explode('-',$timeSet);
        $timeSet = $temp[0] * 60 + $temp[1];
        return ($time > $timeSet) ?  1 : -1;
    }