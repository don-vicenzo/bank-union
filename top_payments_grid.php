<?php 
    include 'functions.php';
    // require 'config.php';
    include_once 'params.php';
?>

<table class="table table-hover table-responsive" id="dtBasicExample">
    <thead>
        <tr>
            <th scope="col" class="sortable text-nowrap pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute(MESEC_D); ?>" class="sortBtn sortA" data-file='top_payments_grid.php'>Month</th>
            <th scope="col" class="sortable text-nowrap pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute(KONTO); ?>"  class="sortBtn sortA" data-file='top_payments_grid.php'>Account</th>
            <th scope="col" class="sortable text-nowrap pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute(UKUPNO_UPLATA); ?>" class="sortBtn sortA" data-file='top_payments_grid.php'>Total payments</th>
        </tr>
    </thead>
    <tbody>
        <?php   $db->db_paymentReport(); ?>
    </tbody>
</table>


                           
                               