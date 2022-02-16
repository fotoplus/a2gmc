<?php
/*
    0   => 'identifier',
    1   => 'code',
    2   => 'category',
    3   => 'manufacturer',
    4   => 'name',
    5   => 'description',
    6   => 'net_price',
    7   => 'price',
    8   => 'image_url',
    9   => 'product_url',
    10  => 'delivery_time',
    11  => 'delivery_cost'
*/

if($result):
    $rows = array_map(function($v){return str_getcsv($v, ";");}, explode("\n", $result));
    $rows = array_filter($rows);
    $header = array_shift($rows);
    $csv = array();
    foreach ($rows as $row) {
        $csv[] = array_combine($header, $row);
    }
    #unset($row);
endif;
#unset($result);
#print_r($csv);

?>