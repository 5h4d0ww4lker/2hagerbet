


                                <!-- BEGIN CONTAINER -->
                                <div class="container min-hight">
                                    <!-- BEGIN PRICING OPTION1 -->




                                    <div class="row-fluid margin-bottom-40">

                                        <?php if ($tour_guide_location): ?>
                                        <?php foreach ($tour_guide_location as $row): ?>
                                        <div class="span3 pricing pricing-active">
                                            <div class="pricing-head pricing-head-active">
                                                <h3><?= $row->tg_name ?></h3>

                                            </div>
                                            <ul class="pricing-content unstyled">
                                                <img src="<?php echo base_url(); ?><?= $row->tg_image1 ?>"
                                                     class="img-responsive" id="img_thumb"/>
                                                <li><i class=" icon-compass"></i> <?= $row->tg_location ?>&nbsp;, &nbsp;<?= $row->tg_city ?></li>
                                               
                                                <li><i class=" icon-phone"></i> <?= $row->phone_mobile ?>/<?= $row->phone_office ?></li>


                                                <li><i class="icon-mail-forward"></i> <?= $row->tg_email ?></li>
                                                <li><i class="icon-globe"></i> <?= $row->web_site ?></li>
                                            </ul>
                                            <div class="pricing-footer">


                                                <a href=<?php echo site_url('service_providers/load_tour_guide_details/' . $row->tg_id) ?> class="btn purple">Visit</a>
                                            </div>
                                        </div>
                                            <?php endforeach; ?>

                                        <?php endif; ?>
                                    </div>
                                    <!-- END PRICING OPTION1 -->




                                    <div class="clearfix margin-bottom-10"></div>


                                </div>
                                <!-- END CONTAINER -->







<div class="pagination pagination-centered">
    <ul>
        <li><?php echo $this->pagination->create_links(); ?></li>
    </ul>
</div>


