<?php if ($company_list): ?>

<?php foreach ($company_list as $row): ?>


<aside class="main-sidebar">


            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo base_url(); ?><?= $row->hotel_image1 ?>" class="img-polaroid"
                             width="400" height="300"/>
                    </div>
                    <div class="pull-left info">
                        <p><?= $row->hotel_name ?></p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Active</a>


                    </div>
                </div>

                <!-- search form (Optional) -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="treeview">



                        <a href="#"><span class="glyphicon glyphicon-edit">&nbsp;Update</span></a>
                        <ul class="treeview-menu">
                            <li class="active"><a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/update_basic_info') ?>>Basic Info</a></li>
                            <li class="active"><a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/update_services') ?>>Services</a></li>
                            <li class="active"><a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/update_room_services') ?>>Room Services</a></li>
                            <li class="active"><a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/update_room_prices') ?>>Room Prices</a></li>
                            <li class="active"><a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/update_available_room_types') ?>>Available room Types</a></li>
                            <li class="active"><a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/update_available_food_items') ?>>Food Items</a></li>
                            <li class="active"><a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/update_available_drink_items') ?>>Drink Items</a></li>


                        </ul>
                    </li>
                    <li>  <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/get_images') ?>><span class="glyphicon glyphicon-picture">&nbsp;Pictures</span></a></li>

                    <li class="treeview">
                        <a href="#"><span class="glyphicon glyphicon-bed">&nbsp;Bookings</span></a>
                        <ul class="treeview-menu">
                            <li> <a xlass="hidden" href=<?php echo site_url('hag22673627bet8001niki1base5621ac/booking_enquiries/' . $row->hotel_id) ?>>Booking Enquiries</a></li>
                            <li> <a xlass="hidden" href=<?php echo site_url('hag22673627bet8001niki1base5621ac/booking_pending/' . $row->hotel_id) ?>>Pending Payment</a></li>
                            <li> <a xlass="hidden" href=<?php echo site_url('hag22673627bet8001niki1base5621ac/booking_canceled/' . $row->hotel_id) ?>>Canceled</a></li>
                            <li> <a xlass="hidden" href=<?php echo site_url('hag22673627bet8001niki1base5621ac/booking_approved/' . $row->hotel_id) ?>>Approved</a></li>
                            <li> <a xlass="hidden" href=<?php echo site_url('hag22673627bet8001niki1base5621ac/booking_completed/' . $row->hotel_id) ?>>Completed</a></li>
                        </ul>
                    </li>
                    <li>  <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/events') ?>><span class="glyphicon glyphicon-calendar">&nbsp;Events</span></a></li>
                    <li>  <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/rooms') ?>><span class="glyphicon glyphicon-align-justify">&nbsp;Rooms</span></a></li>
                    <li>  <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/requests') ?>><span class="glyphicon glyphicon-question-sign">&nbsp;Requests</span></a></li>
                    <li>  <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/message') ?>><span class="glyphicon glyphicon-envelope">&nbsp;Message</span></a></li>

                    <li>  <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/support') ?>><span class="glyphicon glyphicon-header">&nbsp;Support</span></a></li>

                    <li>  <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/settings') ?>><span class="glyphicon glyphicon-wrench">&nbsp;Settings</span></a></li>

                    <li>  <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/get_client_contents') ?>><span class="glyphicon glyphicon-home">&nbsp;Home</span></a></li>


                    <li>  <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/general') ?>><span class="glyphicon glyphicon-piggy-bank">&nbsp;General</span></a></li>

                    <li> <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/logout') ?>><span class="glyphicon glyphicon-off">&nbsp;Logout</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>



    <?php endforeach; ?>

<?php endif; ?>