<div class="container min-hight">

    <div><?php if ($car_rental_location): ?>
            <?php foreach ($car_rental_location as $row): ?>

                <div class="well">
                    <h2 align="center"><?= $row->cr_name ?></h2>
                    
                    <h5 align="center"><i class=" icon-compass"></i><?= $row->cr_city ?>/<?= $row->cr_location ?></h5>
                    <h5 align="center"><i class=" icon-phone"></i><?= $row->phone_office?>/<?= $row->phone_mobile ?></h5>
                    <h5 align="center"><i class=" icon-mail-forward"></i><?= $row->cr_email ?></h5>
                    <h5 align="center"><i class=" icon-globe"></i><?= $row->web_site ?></h5>
                    <?= $row->description ?></div>

            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</div>

<div class="pagination pagination-centered">
    <ul>
        <li><?php echo $this->pagination->create_links(); ?></li>
    </ul>
</div>