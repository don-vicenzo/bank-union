<!-- header iclude -->
<?php include 'includes/header.php' ?>

        <!-- main-content -->
        <div class="container py-5 my-5">

        <?php
            // Get values from input fields
            if(isset($_POST['submit'])) {
                if(!empty($_POST['company_name']) && !empty($_POST['country']) && !empty($_POST['adress'])) {
                    $company_name = trim($_POST['company_name']); 
                    $company_name = preg_replace("/[^a-zA-Z0-9]+/", "", $company_name);
                    $country = trim($_POST['country']);
                    $country = preg_replace("/[^a-zA-Z0-9]+/", "", $country);
                    $adress = trim($_POST['adress']);
                    $adress = preg_replace("/[^a-zA-Z0-9]+/", "", $adress);
                
                    if (!$db->db_newCompany($company_name, $country, $adress)) {
                        echo "<div class='alert alert-danger'>
                        <strong>Company already exist!</strong> Enter different name. 
                        </div>";
                    }
                    
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
                    <h1 class="d-inline pl-3">Enter Company Details</h1>
                </div>
           </div>

           <div class="row mt-4">
               <div class="col-12">
                <form method="POST" action="create_company.php">
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" aria-describedby="company_name" placeholder="Company Name" required>
                            <!-- <small id="" class="form-text text-muted">We'll never share your private data with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                        </div>
                        <div class="form-group">
                            <label for="adress">Adress</label>
                            <input type="text" class="form-control" id="adress" name="adress" placeholder="Adress" required>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">I read and agree to our <a href="termsAndConditions.php">Terms and Conditions</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
               </div>
           </div>

        </div><!--/.main-content -->

<!--  include footer -->
<?php include 'includes/footer.php'; ?>