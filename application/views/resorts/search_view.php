 <h2 align="center">Search Results</h2>
    <!-- BEGIN CONTAINER -->   
    <div class="container min-hight">

        <!-- BEGIN BLOG -->
        <div class="row-fluid">
            <!-- BEGIN LEFT SIDEBAR -->  

 <?php if ($resort_location): ?>
                                        <?php foreach ($resort_location as $row): ?>





            <div class="span8 blog-posts margin-bottom-40">
                <div class="row-fluid">
                    <div class="span4">
                        <!-- BEGIN CAROUSEL -->            
                        <div class="front-carousel">
                            <div id="myCarousel" class="carousel slide">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <img src="<?php echo base_url(); ?><?= $row->resort_image1 ?>" alt="" id="img_searcher" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo base_url(); ?><?= $row->resort_image2 ?>" alt="" id="img_searcher" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo base_url(); ?><?= $row->resort_image3 ?>" alt="" id="img_searcher" class="img-responsive">
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
                    </div>
                    <div class="span8">
                        <h2><a href="blog_item.html"><?= $row->resort_name ?></a></h2>
                        <ul class="blog-info">
                            <li><i class="icon-home"></i> </i> <?= $row->resort_city ?>/<?= $row->resort_location ?></li>
                             <li><i class=" icon-phone"></i> <?= $row->resort_phone_mobile ?>/<?= $row->resort_phone_office ?></li>
                           <li><i class="icon-globe"></i> <?= $row->resort_web_site ?></li>
                        </ul>

                        <ul class="blog-info">
                            <li><i class="icon-mail-forward"></i> <?= $row->resort_email ?></li>
                            <li><i class=" icon-star"></i> <?= $row->star_level ?></li>
                           <li><i class="icon-road"></i> <?= $row->resort_direction ?></li>
                        </ul>
                        <p><?= $row->resort_discription?></p>
                          <a href=<?php echo site_url('resorts/booking/' . $row->resort_id) ?> class="btn green">Book Now <i class="m-icon-swapright m-icon-white"></i></a>
                                                <a href=<?php echo site_url('resorts/load_resort_details/' . $row->resort_id) ?> class="btn purple">Visit</a>
                    </div>
                </div>
                <hr class="blog-post-sep">
               
               
                         
            </div>



 








            <!-- END LEFT SIDEBAR -->

             <!-- BEGIN RIGHT SIDEBAR -->            
            <div class="span3 blog-sidebar">
                <!-- BEGIN RECENT NEWS -->                            
                <h3>Advertisements</h3>
                <div class="recent-news margin-bottom-10">
                    <div class="row-fluid margin-bottom-10">
                        <div class="span3">
                            <img src="<?php echo base_url(); ?>advert/advertise here.JPG" alt="">                        
                        </div>
                        <div class="span9 recent-news-inner">
                            <h3><a href="#">Advertise Here</a></h3>
                            <p>FREE For three months trial period.</p>
                        </div>                        
                    </div>
                    <div class="row-fluid margin-bottom-10">
                        <div class="span3">
                            <img src="<?php echo base_url(); ?>advert/advertise here.JPG" alt="">                        
                        </div>
                        <div class="span9 recent-news-inner">
                            <h3><a href="#">Advertise Here</a></h3>
                            <p>FREE For three months trial period.</p>
                        </div>                        
                    </div>
                  
                </div>
                <!-- END RECENT NEWS -->                            


               

            </div>
            <!-- END RIGHT SIDEBAR -->   


            <?php endforeach; ?>

                                        <?php endif; ?>
         
        </div>
        <!-- END BEGIN BLOG -->
    </div>
    <!-- END CONTAINER -->