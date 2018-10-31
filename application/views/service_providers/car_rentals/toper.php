<?php if ($car_rental_detail): ?>
<?php foreach ($car_rental_detail as $row): ?>




<div class="row-fluid breadcrumbs margin-bottom-40">
    <div class="container">
        <div class="span4">
            <h2> <?= $row->cr_name ?></h2>
        </div>
       
    </div>
</div>

    <?php endforeach; ?>

<?php endif; ?>