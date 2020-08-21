<?php

require_once 'config.php';

$db = new Database();
// $db->db_connect();
// echo "<table style='border: 2px solid black;'>";
// $db->db_all_payments();
// $db->db_noPayment();
// $db-> db_paymentReport(); 
// echo "</table>";

// echo basename($_SERVER['PHP_SELF']);
// echo "<br>";
// echo "test";
// echo PHP_EOL;

// echo $varVal;

// $sortAttribute = '-mesec_d';
// $sortAttribute2 = substr($sortAttribute, 1);
// echo $sortAttribute2;


// Test pagination
$result_per_page = 10;
$query = "SELECT * FROM uplata LIMIT 0,10";
$res = mysqli_query($db->conn, $query);
$number_of_results = mysqli_num_rows($res);

while($row = mysqli_fetch_array($res)) {
    echo "ID: " . $row['id_firme']  . "| amount: " .  $row['iznos']  . "<br>";
}

// number of total pages
$number_of_pages =  ceil($number_of_results / $result_per_page);

// which page number visitor is currently on
if(!isset($_GET['page'])) {
    $page = 1;
}else {
    $page = $_GET['page'];
}

$page_first_result = ($page-1) * $result_per_page;

for($page = 1; $page <= $number_of_pages; $page++ ) {
    echo '<a href="test.php?page=' . $page . '">' . $page .  '</a>';
}

?>

