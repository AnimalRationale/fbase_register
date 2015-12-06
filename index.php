<?
$startDate = "2014-03-06";
$endDate = "2018-12-04";
$date = date("Y-m-d");

if ($date >= $startDate && $date < $endDate) {
    include "registration.htm";}
else {
    include "noregistration.htm";
}
?>
