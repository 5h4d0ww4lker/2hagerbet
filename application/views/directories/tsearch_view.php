<div class="container min-hight">

    <div><?php if ($tour_guide_location): ?>
            <?php foreach ($tour_guide_location as $row): ?>

                <div class="well">
                    <h2 align="center"><?= $row->tg_name ?></h2>
                    
                    <h5 align="center"><i class=" icon-compass"></i><?= $row->tg_city ?>/<?= $row->tg_location ?></h5>
                    <h5 align="center"><i class=" icon-phone"></i><?= $row->phone_office?>/<?= $row->phone_mobile ?></h5>
                    <h5 align="center"><i class=" icon-mail-forward"></i><?= $row->tg_email ?></h5>
                    <h5 align="center"><i class=" icon-globe"></i><?= $row->web_site ?></h5>
                    <?= $row->discripton ?></div>

            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</div>

