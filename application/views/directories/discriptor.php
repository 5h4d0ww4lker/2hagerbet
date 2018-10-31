<div class="row-fluid breadcrumbs margin-bottom-40">
    <div class="container">
        <div class="span6">
           <div class="tab-style-1">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href=<?php echo site_url('directories/accommodations') ?>>Hotels</a></li>
                        <li><a href=<?php echo site_url('directories/restaurants_and_clubs') ?>>Restaurants</a></li>
                        <li><a href=<?php echo site_url('directories/guest_houses') ?>>Guest Houses</a></li>


                    </ul>
                </div>
<br/><br/>
            <h1>Hotel Directories</h1>


                <form method="post"
                      action="<?php echo base_url('index.php/directories/search_hotels') ?>">

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
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_inside_adiss') ?>  class="list-group-item"
                                       id="left_sider">Addiss<span class="badge pull-right" id="counter">68</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_inside_adama') ?>  class="list-group-item"
                                       id="left_sider">Adama<span class="badge pull-right" id="counter">0</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_inside_debre_zeit') ?>  class="list-group-item"
                                       id="left_sider">Bishoftu<span class="badge pull-right" id="counter">0</span></a></li>

                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_inside_dire_dawa') ?>  class="list-group-item"
                                       id="left_sider">Dire Dawa<span class="badge pull-right" id="counter">0</span></a></li>
                                <li class="last"><a
                                        href=<?php echo site_url('directories/get_list_of_accommodations_inside_bahir_dar') ?>  class="list-group-item"
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
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_bole') ?>  class="list-group-item"
                                       id="left_sider">Bole<span class="badge pull-right" id="counter">46</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_cazanches') ?>  class="list-group-item"
                                       id="left_sider">Cazanchis<span class="badge pull-right" id="counter">7</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_4_kilo') ?>  class="list-group-item"
                                       id="left_sider">4 Kilo<span class="badge pull-right" id="counter">0</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_piassa') ?>  class="list-group-item"
                                       id="left_sider">Piassa<span class="badge pull-right" id="counter">0</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_22_mazoria') ?>  class="list-group-item"
                                       id="left_sider">22 Mazoria<span class="badge pull-right" id="counter">9</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_megenagna') ?>  class="list-group-item"
                                       id="left_sider">Megenagna<span class="badge pull-right" id="counter">4</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_sar_bet') ?>  class="list-group-item"
                                       id="left_sider">Sar Bet<span class="badge pull-right" id="counter">0</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_saris') ?>  class="list-group-item"
                                       id="left_sider">Saris<span class="badge pull-right" id="counter">2</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_asko') ?>  class="list-group-item"
                                       id="left_sider">Asko<span class="badge pull-right" id="counter">4</span></a></li>

                                </ul>
                              </li> <span class="divider">|</span>
               <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                                    By Star Level
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                   <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_5_star') ?>  class="list-group-item"
                                       id="left_sider">5 Star<span class="badge pull-right"
                                                                   id="counter">9</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_4_star') ?>  class="list-group-item"
                                       id="left_sider">4 Star<span class="badge pull-right"
                                                                   id="counter">38</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_3_star') ?>  class="list-group-item"
                                       id="left_sider">3 Star<span class="badge pull-right"
                                                                   id="counter">17</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_2_star') ?>  class="list-group-item"
                                       id="left_sider">2 Star<span class="badge pull-right"
                                                                   id="counter">2</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('directories/get_list_of_accommodations_1_star') ?>  class="list-group-item"
                                       id="left_sider">1 Star<span class="badge pull-right"
                                                                   id="counter">0</span></a></li>
                                </ul>



            </ul>
        </div>
    </div>
</div>
