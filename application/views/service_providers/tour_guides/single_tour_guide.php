<?php if ($tour_guide_detail): ?>
<?php foreach ($tour_guide_detail as $row): ?>


 
    <!-- BEGIN CONTAINER -->   
    <div class="container min-hight">
        <!-- BEGIN PORTFOLIO ITEM -->
        <div class="row-fluid margin-bottom-30">
            <!-- BEGIN CAROUSEL -->            
            <div class="span5 front-carousel">
                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <img src="<?php echo base_url(); ?><?= $row->tg_image1 ?>">
                            <div class="carousel-caption">
                                <p><?= $row->tg_name ?></p>
                            </div>
                        </div>
                        <div class="item">
                             <img src="<?php echo base_url(); ?><?= $row->tg_image2 ?>">
                            <div class="carousel-caption">
                                <p><?= $row->tg_name ?></p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url(); ?><?= $row->tg_image3 ?>">
                            <div class="carousel-caption">
                                <p><?= $row->tg_name ?></p>
                            </div>
                        </div>


                         <div class="item">
                            <img src="<?php echo base_url(); ?><?= $row->tg_image4 ?>">
                            <div class="carousel-caption">
                                <p><?= $row->tg_name ?></p>
                            </div>
                        </div>

                         <div class="item">
                            <img src="<?php echo base_url(); ?><?= $row->tg_image5 ?>">
                            <div class="carousel-caption">
                                <p><?= $row->tg_name ?></p>
                            </div>
                        </div>

                         <div class="item">
                            <img src="<?php echo base_url(); ?><?= $row->tg_image6 ?>">
                            <div class="carousel-caption">
                                <p><?= $row->tg_name ?></p>
                            </div>
                        </div>

                         <div class="item">
                            <img src="<?php echo base_url(); ?><?= $row->tg_image7 ?>">
                            <div class="carousel-caption">
                                <p><?= $row->tg_name ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                        <i class="icon-angle-left"></i>
                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                        <i class="icon-angle-right"></i>
                    </a>
                </div>                
            </div>
            <!-- END CAROUSEL -->                             

            <!-- BEGIN PORTFOLIO DESCRIPTION -->            
            <div class="span7">
                <h2>Description</h2>
                <p><?= $row->descripton ?></p>
                
                <br>
                <div class="row-fluid front-lists-v2 margin-bottom-15">
                    <div class="span6">
                        <ul class="unstyled">
                            
                            <li><i class="icon-phone"></i> <?= $row->phone_office ?>/<?= $row->phone_mobile ?></li>
                            <li><i class="icon-mail-forward"></i> <?= $row->tg_email ?></li>
                            <li><i class="icon-globe"></i> <?= $row->web_site ?></li>
                        </ul>
                    </div>
                    <div class="span6">
                        <ul class="unstyled">
                            <li><i class="icon-compass"></i> <?= $row->tg_location ?></li>
                            <li><i class="icon-road"></i> <?= $row->tg_direction ?></li>
                            <li><i class="icon-comments"></i> <?= $row->service_language ?>t</li>
                            <li><i class="icon-truck"></i> <?= $row->service_range ?></li>
                        </ul>
                    </div>
                </div>
               
            </div>
            <!-- END PORTFOLIO DESCRIPTION -->            
        </div>
        <!-- END PORTFOLIO ITEM --> 


        <div class="clearfix"></div>

        
    </div>
    <!-- END CONTAINER -->
    <?php endforeach; ?>

<?php endif; ?>