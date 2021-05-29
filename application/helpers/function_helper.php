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
?>