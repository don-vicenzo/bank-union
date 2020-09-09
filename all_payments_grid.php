<?php 
    include 'functions.php';
    include 'params.php';
?>

<!-- <label for="mySearch">Search for company name</label>
<input type="text" id="mySearch" placeholder="e.g. Apple" title="Type name" class="form-control"> -->

<table class="table table-hover table-responsive" id="dtBasicExample" >
    <thead>
    <tr>
        <th scope="col" class="text-nowrap sortable pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute(ID_UPLATE); ?>" class="sortBtn sortA" data-file='all_payments_grid.php'>Payment ID</th>
        <th scope="col" class="text-nowrap sortable pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute(DATUM_UPLATE); ?>" class="sortBtn sortA" data-file='all_payments_grid.php'>Date</th>
        <th scope="col" class="text-nowrap sortable pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute(KONTO);  ?>" class="sortBtn sortA" data-file='all_payments_grid.php'>Account</th>
        <th scope="col" class="text-nowrap sortable pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute(IZNOS);   ?>" class="sortBtn sortA" data-file='all_payments_grid.php'>Amount</th>
        <th scope="col" class="text-nowrap sortable pr-4"><input type="button" name="sortV" value="<?= $getSortAttribute(IME_FIRME); ?>" class="sortBtn sortA" data-file='all_payments_grid.php'>Company</th>
    </tr>
    </thead>
    <tbody id="myTableSearch">
    <?php $db->db_all_payments(); ?>
</tr>
    </tbody>
</table>

