<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: application/json');

$q = $_REQUEST["q"];


class DNS{
    public function getDNS($hostname){
    $response = dns_get_record ($hostname , DNS_TXT);
        foreach($response as $result){
            print_r(json_encode($result, JSON_PRETTY_PRINT));;
            
        }       
    }
}
$bullhorn = new DNS;
$bullhorn->getDNS($q);


?>