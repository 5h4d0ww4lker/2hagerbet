<div class="container min-hight">

    <div><?php if ($restaurant_location): ?>
            <?php foreach ($restaurant_location as $row): ?>

                <div class="well">
                    <h2 align="center"><?= $row->restaurant_name ?></h2>
                    <h5 align="center"><i class=" icon-star"></i> <?= $row->restaurant_class ?></h5>
                    <h5 align="center"><i class=" icon-compass"></i><?= $row->restaurant_city ?>/<?= $row->restaurant_location ?></h5>
                    <h5 align="center"><i class=" icon-phone"></i><?= $row->restaurant_phone_office?>/<?= $row->restaurant_phone_mobile ?></h5>
                    <h5 align="center"><i class=" icon-mail-forward"></i><?= $row->restaurant_email ?></h5>
                    <h5 align="center"><i class=" icon-globe"></i><?= $row->restaurant_web_site ?></h5>
                    <?= $row->restaurant_discription ?></div>

            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</div>

<div class="pagination pagination-centered">
    <ul>
        <li><?php echo $this->pagination->create_links(); ?></li>
    </ul>
</div>