<?php

class Database
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'banka_uplate';
    public $conn, $all_payments, $no_payments, $date, $account, $amount, $company_name, $payment_id, $company_id, $month, $total_amount, $query3, $res3, $country, $total_pages, $file;

    # Database connection
    public function __construct(){
       $this->conn = mysqli_connect ($this->host, $this->username, $this->password, $this->database);
       if(!$this->conn) die( "Connection error! " . mysqli_connect_errno($this->conn));
    }

    # 1st query - Payments report of all companies by months in table
    public function db_all_payments() {
        $sortAttribute = isset($_GET['sortV']) ? $_GET['sortV'] : 'datum_uplate';
        
        # Check if DESC order and cut '-' from $sortAttribute
        if(ltrim($sortAttribute, "-") == $sortAttribute){
            $newSortAtt = ltrim($sortAttribute, "-");
            $newSortAtt = ltrim($sortAttribute, "-");
            $sortParam = " DESC";
            // echo "newSort is: $newSortAtt <br>";
            // echo $sortParam;
        }else {
            $newSortAtt = ltrim($sortAttribute, "-");
            $sortParam = " ASC";
            // echo "newSort is: $newSortAtt <br>";
            // echo "sada je ASC sort";
        }

        # Create query with 2 parameters
        $query = "SELECT u.id_uplate, DATE_FORMAT(u.datum_uplate, '%M %D %Y') AS datum, u.konto, u.iznos, f.id_firme, f.ime_firme
        FROM uplata AS u
        INNER JOIN firma AS f
        ON u.id_firme=f.id_firme
        WHERE u.konto IS NOT NULL
        GROUP BY datum_uplate
        ORDER BY $newSortAtt $sortParam";

        $this->all_payments = mysqli_query($this->conn, $query);

        while($row = mysqli_fetch_array($this->all_payments)) {
            $this->payment_id = $row['id_uplate'];
            $this->date = $row['datum'];
            $this->account = $row['konto'];
            $this->amount = $row['iznos'];
            $this->company_name = $row['ime_firme'];

            echo "<tr>";
            echo "<td class='text-nowrap'>{$this->payment_id}</td>";
            // echo "<td>" . date('m-D-Y',strtotime($this->date)) . "</td>";
            echo "<td class='text-nowrap'>{$this->date}</td>";
            echo "<td>{$this->account}</td>";
            echo "<td>{$this->amount}$</td>";
            echo "<td>{$this->company_name}</td>";
            echo "</tr>";
        }
    }


    # 3rd query - Payments report by months for the account with the largest number of payments
    public function db_paymentReport() {
        $sortAttribute = isset($_GET['sortV']) ? $_GET['sortV'] : '-mesec_d';
        $query1 = "CREATE TEMPORARY TABLE rezultat(
            mesec_d datetime,
            mesec varchar(100),
            konto varchar(6),
            ukupno_uplata int
         )";

        # Check if DESC order
        if(ltrim($sortAttribute, "-") == $sortAttribute){
            $orderParam = "DESC";
        }else {
            $orderParam = "ASC";
        }
       
        mysqli_query($this->conn, $query1);
       # Call stored procedure
        $query = "CALL GetAllProducts('{$sortAttribute}', '{$orderParam}')";

        #error report (for test)
        //  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $result = mysqli_query($this->conn, $query) or die("query failed:" . mysqli_errno($this->conn));

        while($row = mysqli_fetch_array($result)) {
            $this->month = $row['mesec'];
            $this->account = $row['konto'];
            $this->total_amount = $row['ukupno_uplata'];

            echo "<tr>";
            echo "<td class='text-nowrap'>{$this->month}</td>";
            echo "<td>{$this->account}</td>";
            echo "<td>{$this->total_amount}</td>";
            echo "</tr>";
        }

    }


    # 2nd query - List of companies that did not have payments for an account
    public function db_noPayment() {
        $sortAttribute = isset($_GET['sortV']) ? $_GET['sortV'] : 'id_firme';
        
        # Check if DESC order and cut '-' from $sortAttribute
        if(ltrim($sortAttribute, "-") == $sortAttribute){
            $newSortAtt = ltrim($sortAttribute, "-");
            $newSortAtt = ltrim($sortAttribute, "-");
            $sortParam = " DESC";
        }else {
            $newSortAtt = ltrim($sortAttribute, "-");
            $sortParam = " ASC";
        }

        # Create query
        $this->query3 = "SELECT f.id_firme, f.ime_firme, f.country FROM firma AS f
        LEFT JOIN uplata AS u ON f.id_firme = u.id_firme
        WHERE u.konto IS NULL
        ORDER BY $newSortAtt $sortParam";


        $this->res3 = mysqli_query($this->conn, $this->query3);

        while($row = mysqli_fetch_array($this->res3)) {
            $this->company_id = $row['id_firme'];
            $this->company_name = $row['ime_firme'];
            $this->country = $row['country'];

            echo "<tr>";
            // echo "<td>{$this->company_id}</td>";
            echo "<td class='text-nowrap'>{$this->company_name}</td>";
            echo "<td class='text-nowrap'>{$this->country}</td>";
            echo "</tr>";
        }
    }

    # Insert new payment method
    public function db_newPayment($account, $amount, $company) {
        $sql = "INSERT INTO uplata (konto, iznos, id_firme)
                VALUES ({$account}, {$amount}, {$company})";

        $res = mysqli_query($this->conn, $sql);
        if(!$res) {
            die("INSERT error! " . mysqli_errno($this->conn));
        } else {
            echo "<div class='alert alert-success'>
                    <strong>Your payment has been processed successfully!</strong> Thank you for your business and your trust. It is our pleasure to work with you.
                  </div>";
        }
    }


    # Get all companies in select form for payments method
    public function get_allCompanies() {
        $query = "SELECT ime_firme, id_firme FROM firma";
        $result =   mysqli_query($this->conn, $query);

        if(!$result) die("Error to show" . mysqli_errno($this->conn));

        while($row = mysqli_fetch_array($result)) {
            $company = $row['ime_firme'];
            $company_id = $row['id_firme'];

            echo "<option value='{$company_id}'>{$company}</option>";
        }
    }

    # Insert new company method
    public function db_newCompany($company_name, $country, $adress) {
        $sql2 = "SELECT ime_firme FROM firma";
        $res2 = mysqli_query($this->conn, $sql2);
        // $row2 = mysqli_fetch_array($res2);
        while($row = mysqli_fetch_array($res2))  {
            $name_company = $row['ime_firme'];
        }

        # Check if company already exist
        if($company_name === $name_company) {
            return false;
        }else {
            $sql = "INSERT INTO firma (ime_firme, country, adress)
            VALUES ('{$company_name}', '{$country}', '{$adress}')";
            $res2 = mysqli_query($this->conn, $sql);
            echo "<div class='alert alert-success'>
                    <strong>Thanks for joining us, World Union Bank.</strong> Check your Company in our <a href='companies.php'>team list!</a>
                  </div>";
        }

        return true;
    }

    # Get all companies for show-list method
    public function get_allCompanies2() {
        $query = "SELECT ime_firme, id_firme, country, adress FROM firma";
        $result =   mysqli_query($this->conn, $query);

        if(!$result) die("Error to show" . mysqli_errno($this->conn));

        # Show only count number to user instead of company id
        $count = 1;
        while($row = mysqli_fetch_array($result)) {
            // $company_id = $row['id_firme'];
            $company = $row['ime_firme'];
            $country = $row['country'];
            $adress = $row['adress'];

            echo "<tr>";
            // echo "<td>{$company_id}</td>";
            echo "<td>{$count}</td>";
            echo "<td class='text-nowrap'>{$company}</td>";
            echo "<td class='text-nowrap'>{$country}</td>";
            echo "<td class='text-nowrap'>{$adress}</td>";
            echo "</tr>";
            $count++;
        }
    }


    # Number of all-time payments by company method
    public function getAllPaymentsAdmin() {
        $query = "SELECT f.ime_firme, COUNT(u.id_uplate) AS 'broj_uplata', u.id_firme AS kompanija FROM uplata u
        LEFT JOIN firma f ON u.id_firme = f.id_firme
        GROUP BY u.id_firme";
        $result = mysqli_query($this->conn, $query);
        if(!$result) die("Error to show" . mysqli_errno($this->conn));

        # Output
        while($row = mysqli_fetch_array($result)) {
            $company = $row['ime_firme'];
            $numOfPayments = $row['broj_uplata'];

            echo "<tr>";
            echo "<td class='text-nowrap'>{$company}</td>";
            echo "<td class='text-nowrap'>{$numOfPayments}</td>";
            echo "</tr>";
        }
    }

    # Render database All Payyments content from file
    public function renderFile($file, $vars=null) {
        if (is_array($vars) && !empty($vars)) {
            extract($vars);
        }
        ob_start();
        include $file;
        return ob_get_clean();
    }
}

?>
