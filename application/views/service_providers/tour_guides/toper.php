<?php if ($tour_guide_location): ?>
<?php foreach ($tour_guide_location as $row): ?>




<div class="row-fluid breadcrumbs margin-bottom-40">
    <div class="container">
        <div class="span4">
            <h2> <?= $row->tg_name ?></h2>
        </div>
        
    </div>
</div>

    <?php endforeach; ?>

<?php endif; ?>