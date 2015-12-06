<?
$startDate = "2015-11-26";
$endDate = "2015-12-04";
$date = date("Y-m-d");

if ($date >= $startDate && $date < $endDate) {
    include "registration.htm";}
else {
    include "noregistration.htm";
}
?>
