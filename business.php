<!-- header iclude -->
<?php include 'includes/header.php' ?>

        <!-- main-content -->
        <div class="container py-5 my-5">

           <div class="row">
              <div class="col-12 d-flex align-middle">
                <img src="images/logo.png" width="50" height="50" alt="bank logo">
                <h1 class="d-inline pl-3">Business Payments</h1>
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

          <div class="row shadow-1 py-3 mb-3" id="payments">
            <div class="col-12 py-3">
              <h3 class="mb-4">Payment Reports</h3>
              <p> <mark>All Payments</mark> - Payments report of all companies. </p>
              <p> <mark>Top Payments</mark> - Payments report for the account with the largest number of payments </p>
              <p> <mark>No Payments</mark> - List of companies that did not have payments for an account </p>
            </div>

            <div class="col-12">
                <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                    <li class="nav-item ">
                      <a class="nav-link tabMy px-1 px-sm-3 active bg-pills" name="report1" id="pills-home-tab" data-toggle="pill" href="#pills-report1" role="tab" aria-controls="pills-home" aria-selected="true">All Payments</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-1 tabMy px-sm-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Top Payments</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-1 tabMy px-sm-3" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">No Payments</a>
                    </li>
                  </ul>

                  <!-- content -->
                  <div class="tab-content" id="pills-tabContent">


                    <!-- 1st query -->
                    <div class="tab-pane fade show active w-100" id="pills-report1" role="tabpanel" aria-labelledby="pills-home-tab">
                        <p> <em>*Payments report of all companies</em> </p>
                          <?= $db->renderFile('all_payments_grid.php', ['db' => $db]) ?>
                    </div><!-- /.1st query-->



                     <!-- 2nd query -->
                     <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <p> <em>*List of companies that did not have payments for an account</em> </p>
                        <?= $db->renderFile('no_payments_grid.php', ['db' => $db]) ?>
                    </div>
                    <!-- 2nd query -->



                    <!-- 3rd query -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <p> <em>*Payments report for the account with the largest number of payments</em> </p>
                        <?php echo $db->renderFile('top_payments_grid.php', ['db' => $db]); ?>
                    </div>
                    <!-- /.3rd query -->
                  </div><!-- /.content -->

                </div><!-- /.col-12 -->
            </div><!-- /.row-shadow -->
          <!-- </div> -->

        </div><!--/.main-content -->


<!--  include footer -->
<?php include 'includes/footer.php'; ?>
