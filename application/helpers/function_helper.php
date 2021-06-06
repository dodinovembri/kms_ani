<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    if (!function_exists('check_role')) {
        function check_role($role_id)
        {
            if ($role_id == 0) {
                return "Administrator";
            }elseif ($role_id == 1) {
                return "Kasi";
            }elseif ($role_id == 2) {
                return "Staff Ahli";
            }elseif ($role_id == 3) {
                return "Visitor";
            }
        }
    }

    if (!function_exists('check_sex')) {
        function check_sex($sex)
        {
            if ($sex == 0) {
                return "Female";
            }elseif ($sex == 1) {
                return "Male";
            }
        }
    }   
    
    if (!function_exists('check_status')) {
        function check_status($status)
        {
            if ($status == 0) {
                return "Inactive";
            }elseif ($status == 1) {
                return "Active";
            }
        }
    }  
    
    if (!function_exists('check_status_tacit')) {
        function check_status_tacit($status)
        {
            if ($status == 0) {
                return "Inactive/ Not Validated";
            }elseif ($status == 1) {
                return "Accepted/ Validated by Admin";
            }elseif ($status == 2) {
                return "Waiting Validate";
            }elseif ($status == 3) {
                return "Rejected by Admin";
            }elseif ($status == 4) {
                return "Accepted/ Validated by Kasi";
            }elseif ($status == 5) {
                return "Rejected by Kasi";
            }
        }
    }  

    function badCharHeuristic($str, $size, &$badchar)
    {
        for ($i = 0; $i < 256; $i++)
            $badchar[$i] = -1;

        for ($i = 0; $i < $size; $i++)
            $badchar[ord($str[$i])] = $i;
    }

    if (!function_exists('SearchString')) {
        function SearchString($str, $pat) {
            $m = strlen($pat);
            $n = strlen($str);
            $i = 0;

            badCharHeuristic($pat, $m, $badchar);

            $s = 0;
            while ($s <= ($n - $m))
            {
                $j = $m - 1;

                while ($j >= 0 && $pat[$j] == $str[$s + $j])
                    $j--;

                if ($j < 0)
                {
                    $arr[$i++] = $s;
                    $s += ($s + $m < $n) ? $m - $badchar[ord($str[$s + $m])] : 1;
                }
                else
                    $s += max(1, $j - $badchar[ord($str[$s + $j])]);
            }

            for ($j = 0; $j < $i; $j++)
            {
                $result[$j] = $arr[$j];
            }

            if (empty($result)) {
                $result = '';
            }
            return $result;
        }
    }
?>