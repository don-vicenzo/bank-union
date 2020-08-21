<!-- header include -->
<?php include 'includes/header.php' ?>

        <!-- main-content -->
        <div class="container py-5 my-5">

           <div class="row">
              <div class="col-12 d-flex align-middle">
                <img src="images/logo.png" width="50" height="50" alt="bank logo">
                <h1 class="d-inline pl-3">Companies</h1>
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
                    <h3 class="mb-3">Our Bussines Partners</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea iure excepturi est corrupti minima aut itaque, deserunt voluptas ullam commodi.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, aliquam itaque expedita sapiente rerum eos facere adipisci accusantium dicta, quam vero! Cumque perferendis aliquam suscipit reiciendis ullam vel, optio laborum distinctio repellendus consequuntur eius accusamus sequi in eveniet. Laboriosam, quidem?
                    </p>

                    <div class="social py-1 text-center">
                        <a href="https://www.apple.com" target="_blank" class="pr-3">
                                <img src="images/apple.png" alt="apple logo" width="130" height="100">
                        </a>
                        <a href="https://www.samsung.com" target="_blank" class="pr-3">
                            <img src="images/samsung.png" alt="apple logo" width="100" height="45">
                        </a>
                        <a href="https://www.nike.com" target="_blank"  class="pr-3">
                            <img src="images/nike.png" alt="apple logo" width="110" height="90">
                        </a>
                        <a href="https://www.ibm.com" target="_blank">
                            <img src="images/ibm.png" alt="apple logo" width="90" height="50">
                        </a>
                        </div><!-- /.social -->

                 </div><!-- /.col-12 -->
            </div><!-- /.row-shadow -->

            <div class="row mt-3">
                <div class="col-12 bg-light mt-4 mb-4">
                    <p class="lead ">Check the list of all companies and join our team!</p>
                    <a href="#collapseContent" class="btn bg-primary text-white mb-3" data-toggle="collapse">Show list</a>
                    <!-- Collapse content -->
                    <div class="collapse" id="collapseContent">
                        <div class="card card-body">

                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr class="">
                                    <th scope="col" class="text-nowrap">#</th>
                                    <th scope="col" class="text-nowrap">Company name</th>
                                    <th scope="col" class="text-nowrap">Country</th>
                                    <th scope="col" class="text-nowrap">Adress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $db->get_allCompanies2(); ?>
                            </tbody>
                        </table>

                        <p class="lead">Join team <a class="btn btn-primary" href="create_company.php">Add company</a></p>
                        </div>
                    </div><!-- /.collapse content -->
                </div>

            </div>

        </div><!--/.main-content -->

<!--  include footer -->
<?php include 'includes/footer.php'; ?>
