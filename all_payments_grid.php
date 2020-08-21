<?php 
    include 'functions.php';
?>

<table class="table table-hover table-responsive" id="dtBasicExample" >
    <thead>
    <tr class="">
        <!-- <input type="submit" name="sort" value="id_uplate"> -->
    
        <!-- <form method="GET" action="">
        <th scope="col" class="text-nowrap sortable asc" id="jedan" value="jedanv"><input type="submit" name="sortV" value="<?php//  if(isset($_GET['sortV'])){$varVal = $_GET['sortV']; if(strpos($varVal, '-') == true){ $varVal = ltrim($varVal, '-'); echo $varVal; } else{ if(strpos($varVal, '-' ) == false){echo $varVal = '-' . $varVal;}else { echo $varVal; } }}else echo 'id_uplate'; ?>" class="sortBtn sortA">Payment ID</th>
        <th scope="col" class="text-nowrap sortable"><input type="submit" name="sortV" value="<?php // if(isset($_GET['sortV'])){$varVal = $_GET['sortV']; if(strpos($varVal, '-') == true){ $varVal = ltrim($varVal, '-'); echo $varVal; } else{ if(strpos($varVal, '-' ) == false){echo $varVal = '-' . $varVal;}else { echo $varVal; } }}else echo 'datum_uplate'; ?>" class="sortBtn sortA">Date</th>
        <th scope="col" class="text-nowrap sortable"><input type="submit" name="sortV" value="konto" class="sortBtn sortA">Account</th>
        <th scope="col" class="text-nowrap sortable"><input type="submit" name="sortV" value="iznos" class="sortBtn sortA">Amount</th>
        <th scope="col" class="text-nowrap sortable"><input type="submit" name="sortV" value="ime_firme" class="sortBtn sortA">Company</th>
        </form> -->
        <th scope="col" class="text-nowrap sortable pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute('id_uplate'); ?>" class="sortBtn sortA" data-file='all_payments_grid.php'>Payment ID</th>
        <th scope="col" class="text-nowrap sortable pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute('datum_uplate'); ?>" class="sortBtn sortA" data-file='all_payments_grid.php'>Date</th>
        <th scope="col" class="text-nowrap sortable pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute('konto');  ?>" class="sortBtn sortA" data-file='all_payments_grid.php'>Account</th>
        <th scope="col" class="text-nowrap sortable pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute('iznos');   ?>" class="sortBtn sortA" data-file='all_payments_grid.php'>Amount</th>
        <th scope="col" class="text-nowrap sortable pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute('ime_firme'); ?>" class="sortBtn sortA" data-file='all_payments_grid.php'>Company</th>
    </tr>
    </thead>
    <tbody>
    <?php $db->db_all_payments(); ?>
</tr>
    </tbody>
</table>

