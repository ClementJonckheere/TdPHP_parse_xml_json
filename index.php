<?php
function readcsv($csv){
    $file = fopen($csv, 'r');
    $data = [];
    $headers = fgetcsv($file, 1024);

    while (($line = fgetcsv($file, 1024)) !== false) {
        $data[] = $line;
    }

    fclose($file);
    return $data;
}

$csv = 'source/students.csv';
$csv = readcsv($csv);
print_r($csv);

$sum = 0;
$count = 0;

foreach ($csv as $row) {
    if (isset($row[2]) && is_numeric($row[2])) {
        $sum += (float) $row[2];
        $count++;
    }
}

if ($count > 0) {
    $average = $sum / $count;
    echo "Moyenne des âges : $average";
} else {
    echo "Aucune donnée valide pour calculer la moyenne.";
}
?>
