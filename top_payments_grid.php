<?php 
    include 'functions.php';
    // require 'config.php';
?>

<table class="table table-hover table-responsive" id="dtBasicExample">
    <thead>
        <tr>
            <th scope="col" class="sortable text-nowrap pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute('mesec_d'); ?>" class="sortBtn sortA" data-file='top_payments_grid.php'>Month</th>
            <th scope="col" class="sortable text-nowrap pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute('konto'); ?>"  class="sortBtn sortA" data-file='top_payments_grid.php'>Account</th>
            <th scope="col" class="sortable text-nowrap pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute('ukupno_uplata'); ?>" class="sortBtn sortA" data-file='top_payments_grid.php'>Total payments</th>
        </tr>
    </thead>
    <tbody>
        <?php   $db->db_paymentReport(); ?>
    </tbody>
</table>


                           
                               