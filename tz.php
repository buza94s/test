<?php
class MyClass {
    public function isIpInRange($ip, $IpRange){
        $input_ip = ip2long ($ip);
        $arr_ip = explode ( '/' , $IpRange);
        $foot_ip = ip2long ($arr_ip[0]);
        $head_ip = $foot_ip + pow(2, (32-$arr_ip[1]));
        if($input_ip > $head_ip or $input_ip < $foot_ip)
            return false;
        else 
            return true;
    }
}
?>
