<?php
    include 'functions.php';
    // require 'config.php';
    include_once 'params.php';
?>

<table class="table table-hover" id="dtBasicExample">
    <thead>
        <tr>
            <!-- <th scope="col" class="">Company ID</th> -->
            <th scope="col" class="sortable"><input type="button" name="sortV" value="<?= $getSortAttribute(IME_FIRME); ?>" class="sortBtn sortA" data-file='no_payments_grid.php'>Company name</th>
            <th scope="col" class="sortable"><input type="button" name="sortV" value="<?= $getSortAttribute(COUNTRY); ?>" class="sortBtn sortA" data-file='no_payments_grid.php'>Country</th>
        </tr>
    </thead>
    <tbody>
        <?php  $db->db_noPayment(); ?>
    </tbody>
    
</table>
