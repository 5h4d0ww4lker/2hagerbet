<div class="row-fluid breadcrumbs margin-bottom-40">
    <div class="container">
        <div class="span6">


            <div class="tab-style-1">
                <ul class="nav nav-tabs">
                    <li><a href=<?php echo site_url('directories/accommodations') ?>>Hotels</a></li>
                    <li class="active"><a href=<?php echo site_url('directories/restaurants_and_clubs') ?>>Restaurants</a></li>
                    <li><a href=<?php echo site_url('directories/guest_houses') ?>>Guest Houses</a></li>



                </ul>
            </div>
           <br/><br/>

            <h1>Restarant Directories</h1>
                <form method="post"
                      action="<?php echo base_url('index.php/directories/search_restaurants') ?>">

                    <input type="text"
                           class="form-control"
                           id="bar"
                           name="search_term"

                           placeholder="By Name, location, star level" required="required">
                    <button type="submit"class="btn green" id="bar2"><i class=" icon-search"></i> Go!</button></h1>
            </form>

        

        </div>

        <div class="span6">
            <ul class="pull-right breadcrumb">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                        Cities
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_inside_adiss') ?>  class="list-group-item"
                               id="left_sider">Addiss<span class="badge pull-right" id="counter">64</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_inside_adama') ?>  class="list-group-item"
                               id="left_sider">Adama<span class="badge pull-right" id="counter">0</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_inside_debre_zeit') ?>  class="list-group-item"
                               id="left_sider">Bishoftu<span class="badge pull-right" id="counter">0</span></a></li>

                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_inside_dire_dawa') ?>  class="list-group-item"
                               id="left_sider">Dire Dawa<span class="badge pull-right" id="counter">0</span></a></li>
                        <li class="last"><a
                                href=<?php echo site_url('directories/get_list_of_restaurants_inside_bahir_dar') ?>  class="list-group-item"
                                id="left_sider">Bahir Dar<span class="badge pull-right" id="counter">0</span></a></li>
                    </ul>
                </li> <span class="divider">|</span>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                        Inside Addis
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_bole') ?>  class="list-group-item"
                               id="left_sider">Bole<span class="badge pull-right" id="counter">46</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_cazanches') ?>  class="list-group-item"
                               id="left_sider">Cazanchis<span class="badge pull-right" id="counter">4</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_4_kilo') ?>  class="list-group-item"
                               id="left_sider">4 Kilo<span class="badge pull-right" id="counter">0</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_piassa') ?>  class="list-group-item"
                               id="left_sider">Piassa<span class="badge pull-right" id="counter">0</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_22_mazoria') ?>  class="list-group-item"
                               id="left_sider">22 Mazoria<span class="badge pull-right" id="counter">6</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_megenagna') ?>  class="list-group-item"
                               id="left_sider">Megenagna<span class="badge pull-right" id="counter">1</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_sar_bet') ?>  class="list-group-item"
                               id="left_sider">Sar Bet<span class="badge pull-right" id="counter">4</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_saris') ?>  class="list-group-item"
                               id="left_sider">Saris<span class="badge pull-right" id="counter">0</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_asko') ?>  class="list-group-item"
                               id="left_sider">Asko<span class="badge pull-right" id="counter">0</span></a></li>

                    </ul>
                </li> <span class="divider">|</span>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                        By Class
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_luxury') ?>  class="list-group-item"
                               id="left_sider">Luxury<span class="badge pull-right"
                                                           id="counter">17</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_standard') ?>  class="list-group-item"
                               id="left_sider">Standard<span class="badge pull-right"
                                                             id="counter">20</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_medium') ?>  class="list-group-item"
                               id="left_sider">Medium<span class="badge pull-right"
                                                           id="counter">12</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_ordinary') ?>  class="list-group-item"
                               id="left_sider">Ordinary<span class="badge pull-right"
                                                             id="counter">8</span></a></li>
                        <li>
                            <a href=<?php echo site_url('directories/get_list_of_restaurants_low') ?>  class="list-group-item"
                               id="left_sider">Low<span class="badge pull-right"
                                                        id="counter">0</span></a></li>
                    </ul>




            </ul>
        </div>
    </div>
</div>
