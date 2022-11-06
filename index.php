<?php
echo "<link rel='stylesheet' href='style.css'>";
$people = ["Василий Петрович" => "1959", "Николай Иванович" => "1967", "Марина Афанасьевна" => "1965"];
$str = serialize($people);
$opening1 = fopen("arr.txt", "w+");
$writing = fwrite($opening1, $str);
$opening2 = fopen("arr.txt", "r");
$content = fread($opening2, filesize("arr.txt"));
$newArr = unserialize($content);
// print_r($newArr);
echo "<table>";
echo "<tr><th>Имя и отчество</th><th>Год рождения</th></tr>";
foreach ($newArr as $name => $year) {
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$year</td>";
    echo "</tr>";
}
echo "</table>";
fclose($opening1);
fclose($opening2);
