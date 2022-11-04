<?php
$email = "abc_xyz@grepsr.com";
$pattern = "/[a-zA-Z0-9]+/";
preg_match_all($pattern, $email, $output_array);
print_r($output_array[0]);
