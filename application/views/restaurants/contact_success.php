<?php if ($restaurant_detail): ?>
    <?php foreach ($restaurant_detail as $row): ?>

        <!-- BEGIN CONTAINER -->
<div class="container min-hight">
    <div class="row-fluid">
        <div class="span9">
            <h2>You successfully send a service request to <?= $row->restaurant_name ?></h2>


            <ul class="unstyled">
                Request will be Accepted and Valid If:
                <li><i class="icon-ok-circle"></i> The information you gave above is entirely true, accurate and complete.</li>
                <li><i class="icon-ok-circle"></i> Neither <?= $row->restaurant_name ?> nor 2hagerbet.com will give guaranty for each individual requests.</li>
                <li><i class="icon-ok-circle"></i> Sending False enquiries will led to serious accusation and punishable by law.</li>
                <li><i class="icon-ok-circle"></i> Thanx For Choosing <?= $row->restaurant_name ?> .</li>
            </ul>

            For More Information Call<br/>
            <?= $row->restaurant_name ?><br/>
            <?= $row->restaurant_phone_mobile ?>/<?= $row->restaurant_phone_office ?>



            <div class="space20"></div>

        </div>

        <div class="span3">
            <h2>Contacts 2hagerbet.com</h2>
            <address>
                <strong>Greenware Team</strong><br>
                0920469132/0911450088<br>
                Addiss Ababa, Ethiopia<br>

            </address>
            <address>
                <strong>Email</strong><br>
                <a href="#">he@2hagerbet.com</a><br>
                <a href="#">2hagerbet@gmail.com</a>
            </address>


        </div>
    </div>
</div>
<!-- END CONTAINER -->
<?php endforeach; ?>

<?php endif; ?>

