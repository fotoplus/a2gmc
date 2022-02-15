<?php
/*
str_getcsv(
    string $string,
    string $separator = ",",
    string $enclosure = "\"",
    string $escape = "\\"
): array
*/

#$csv = array_map('str_getcsv', file('arukereso.csv')); 

#print_r($csv);

/*
$data_structure = array(
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
);


function process_csv($file) {

    $file = fopen($file, "r");
    $data = array();

    while (!feof($file)) {
        $data[] = fgetcsv($file, null, ';');
    }

    fclose($file);
    return $data;
}

$file = "arukereso.csv";
$array = process_csv($file);
*/

$file = "arukereso.csv";

$rows = array_map(function($v){return str_getcsv($v, ";");}, explode("\n", $result));
$rows = array_filter($rows);
#$rows = array_map(function($v){return str_getcsv($v, ";");}, file($file,FILE_SKIP_EMPTY_LINES));
$header = array_shift($rows);
$csv = array();
foreach ($rows as $row) {
    $csv[] = array_combine($header, $row);
}

print_r($csv);

?>