<div class="container min-hight">

    <div><?php if ($hotel_location): ?>
            <?php foreach ($hotel_location as $row): ?>

                <div class="well">
                    <h2 align="center"><?= $row->hotel_name ?></h2>
                    
                    <h5 align="center"><i class=" icon-compass"></i><?= $row->hotel_city ?>/<?= $row->hotel_location ?></h5>
                    <h5 align="center"><i class=" icon-phone"></i><?= $row->hotel_phone_office?>/<?= $row->hotel_phone_mobile ?></h5>
                    <h5 align="center"><i class=" icon-mail-forward"></i><?= $row->hotel_email ?></h5>
                    <h5 align="center"><i class=" icon-globe"></i><?= $row->hotel_web_site ?></h5>
                    <?= $row->hotel_discription ?></div>

            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</div>

<div class="pagination pagination-centered">
    <ul>
        <li><?php echo $this->pagination->create_links(); ?></li>
    </ul>
</div>