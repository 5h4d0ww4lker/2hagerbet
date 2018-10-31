<?php $counter = 0; $number_of_inputs = count($restaurant_location); ?> 
<?php foreach ($restaurant_location as $row):?> 
<?php if($counter%4 == 0) echo '<div class="contaner">'; ?> 




    
                                        <div class="span3 pricing pricing-active">
                                            <div class="pricing-head pricing-head-active">
                                                <h3><?= $row->restaurant_name ?></h3>

                                            </div>
                                            <ul class="pricing-content unstyled">
                                                <img src="<?php echo base_url(); ?><?= $row->restaurant_image1 ?>"
                                                     class="img-responsive" id="img_thumb"/>
                                                <li><i class=" icon-compass"></i> <?= $row->restaurant_location ?>&nbsp;, &nbsp;<?= $row->restaurant_city ?></li>
                                                <li><i class=" icon-star"></i> <?= $row->restaurant_class ?></li>
                                                <li><i class=" icon-phone"></i> <?= $row->restaurant_phone_mobile ?>/<?= $row->restaurant_phone_office ?></li>


                                                <li><i class="icon-mail-forward"></i> <?= $row->restaurant_email ?></li>
                                                <li><i class="icon-globe"></i> <?= $row->restaurant_web_site ?></li>
                                            </ul>
                                            <div class="pricing-footer">


                                                <a href=<?php echo site_url('restaurants/reservation/' . $row->restaurant_id) ?> class="btn green">Reserve <i class="m-icon-swapright m-icon-white"></i></a>
                                                <a href=<?php echo site_url('restaurants/load_restaurant_details/' . $row->restaurant_id) ?> class="btn purple">Visit</a>
                                            </div>
                                        </div>


<?php if($counter%4 == 3 || $counter == $number_of_inputs - 1) 
echo '</div>'; $counter++; ?> 
<?php endforeach ?>

<div class="clearfix margin-bottom-10"></div>
<div class="pagination pagination-centered">
    <ul>
        <li><?php echo $this->pagination->create_links(); ?></li>
    </ul>
</div>