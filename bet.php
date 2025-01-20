<?php
// กำหนดเลข 2 หลักที่คงที่ (เช่น 50)
$fixed_number = 99;

// สุ่มเลข 2 หลักเพิ่มเติม
$random_number = rand(10, 99);

// รวมเลข 2 หลักที่คงที่กับเลขสุ่ม
$combined_number = $fixed_number . $random_number;

// แสดงผล
echo "เลขสุ่ม 2 หลัก: " . $random_number;
?>
