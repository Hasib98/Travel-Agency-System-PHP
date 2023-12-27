<?php
// Define two date strings
$dateString1 = '2023-01-15';
$dateString2 = '2023-02-20';

// Create DateTime objects for the two dates
$date1 = new DateTime($dateString1);
$date2 = new DateTime($dateString2);

// Calculate the difference between the two dates
$interval = $date1->diff($date2);

// Get the number of days from the interval
$daysDifference = $interval->days;

// Output the result
echo "The number of days between $dateString1 and $dateString2 is: $daysDifference days.";
?>
