<div class="container min-hight">

    <div><?php if ($guest_house_location): ?>
            <?php foreach ($guest_house_location as $row): ?>

                <div class="well">
                    <h2 align="center"><?= $row->guest_house_name ?></h2>
                    <h5 align="center"><i class=" icon-star"></i>&nbsp;<?= $row->star_level ?></h5>
                    <h5 align="center"><i class=" icon-compass"></i><?= $row->guest_house_city ?>/<?= $row->guest_house_location ?></h5>
                    <h5 align="center"><i class=" icon-phone"></i><?= $row->guest_house_phone_office?>/<?= $row->guest_house_phone_mobile ?></h5>
                    <h5 align="center"><i class=" icon-mail-forward"></i><?= $row->guest_house_email ?></h5>
                    <h5 align="center"><i class=" icon-globe"></i><?= $row->guest_house_web_site ?></h5>
                    <?= $row->guest_house_discription ?></div>

            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</div>

