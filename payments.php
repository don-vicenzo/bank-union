<?php 
// require_once 'config.php';
// $db = new Database();
?>

<!-- header iclude -->
<?php include 'includes/header.php' ?>

        <!-- main-content -->
        <div class="container py-5 my-5">

        <?php 
            // Get values from input fields
            if(isset($_POST['submit'])) {
                if(!empty($_POST['account']) && !empty($_POST['amount']) && !empty($_POST['company'])) {
                    $account = $_POST['account'];
                    $account = preg_replace("/[^a-zA-Z0-9]+/", "", $account);
                    $amount = $_POST['amount'];
                    $amount = preg_replace("/[^a-zA-Z0-9]+/", "", $amount);
                    $company = $_POST['company'];
                
                    $db->db_newPayment($account, $amount, $company);
                } else {
                    echo "<div class='alert alert-danger'>
                            <strong>Fields can not be empty!</strong>
                        </div>";
                }
            }

        ?>
          
           <div class="row">
              <div class="col-12 d-flex align-middle">
                <img src="images/logo.png" width="50" height="50" alt="bank logo">
                <h1 class="d-inline pl-3">Make a safe payment</h1>
              </div>
           </div>

           <div class="row my-4">
            <div class="col-md-10 col-12">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet eius totam nemo laboriosam! Voluptatem enim dolorum corrupti obcaecati repellendus nesciunt atque unde, perspiciatis dolorem nihil hic quia veniam earum nostrum deleniti recusandae delectus voluptas minima odit. At officia iusto beatae.</p>
            </div>
            <div class="col-md-2">
                &nbsp;
            </div>
          </div>

          <div class="row shadow-1 py-3 mb-3">
            <div class="col-12 py-2">
              <h3 class="pb-3">Payment form</h3>
              <p class="pb-0 mb-1">Here you can easily make a payment on some account.</p>
              <p>Enter account, amount, choose your Company and let us to take care for the rest.</p>
             
            </div>


            <div class="col-12">
              
                <form action="payments.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Account number (6 digits)</label>
                            <input type="text"  class="form-control" name="account" id="account" pattern="\d*" minlength="6" maxlength="6" placeholder="e.g. 123456" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="price">Amount $</label>
                            <input type="number" class="form-control" name="amount" id="amount" step=".01" min="1.00" max="9999999999999.99" placeholder="e.g. 1000.00" required>
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputState">Your Company</label>
                        <select name="company" class="form-control">
                           <?php  $db->get_allCompanies(); ?>
                        </select>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                            <p>I read and agree to our <a href="termsAndConditions.php">Terms and Conditions</a></p>
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9 col-lg-11">
                            <button type="submit" name="submit" class="btn btn-primary px-4">Pay</button>
                            <img src="images/secure.png" alt="100% secure" title="100% Secure Payment" height="80" width="83">
                           
                        </div>
                        <div class="col-3 col-lg-1 d-flex my-auto">
                            <img class="ml-auto" src="images/logo.png" width="60" height="60" alt="bank logo">
                        </div>
                    </div>
                    
                </form>

            </div><!-- /.col-12  -->

          </div>

        </div><!--/.main-content -->



<!--  include footer -->
<?php include 'includes/footer.php'; ?>