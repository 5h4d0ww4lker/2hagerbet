<div class="row-fluid breadcrumbs margin-bottom-40">
    <div class="container">
        <div class="span6">
            <h1>Clubs & Culturals
                <form method="post"
                      action="<?php echo base_url('index.php/clubs/search_clubs') ?>">

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
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_inside_adiss') ?>  class="list-group-item"
                                       id="left_sider">Addiss<span class="badge pull-right" id="counter">129</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_inside_adama') ?>  class="list-group-item"
                                       id="left_sider">Adama<span class="badge pull-right" id="counter">85</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_inside_debre_zeit') ?>  class="list-group-item"
                                       id="left_sider">Bishoftu<span class="badge pull-right" id="counter">85</span></a></li>

                                <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_inside_dire_dawa') ?>  class="list-group-item"
                                       id="left_sider">Dire Dawa<span class="badge pull-right" id="counter">50</span></a></li>
                                <li class="last"><a
                                        href=<?php echo site_url('clubs/get_list_of_clubs_inside_bahir_dar') ?>  class="list-group-item"
                                        id="left_sider">Bahir Dar<span class="badge pull-right" id="counter">19</span></a></li>
                                </ul>
                              </li> <span class="divider">|</span>

                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                                    Inside Addis
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_bole') ?>  class="list-group-item"
                                       id="left_sider">Bole<span class="badge pull-right" id="counter">19</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_cazanches') ?>  class="list-group-item"
                                       id="left_sider">Cazanchis<span class="badge pull-right" id="counter">23</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_4_kilo') ?>  class="list-group-item"
                                       id="left_sider">4 Kilo<span class="badge pull-right" id="counter">43</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_piassa') ?>  class="list-group-item"
                                       id="left_sider">Piassa<span class="badge pull-right" id="counter">32</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_22_mazoria') ?>  class="list-group-item"
                                       id="left_sider">22 Mazoria<span class="badge pull-right" id="counter">31</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_megenagna') ?>  class="list-group-item"
                                       id="left_sider">Megenagna<span class="badge pull-right" id="counter">11</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_sar_bet') ?>  class="list-group-item"
                                       id="left_sider">Sar Bet<span class="badge pull-right" id="counter">12</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_saris') ?>  class="list-group-item"
                                       id="left_sider">Saris<span class="badge pull-right" id="counter">10</span></a></li>
                                <li>
                                    <a href=<?php echo site_url('clubs/get_list_of_clubs_asko') ?>  class="list-group-item"
                                       id="left_sider">Asko<span class="badge pull-right" id="counter">4</span></a></li>

                                </ul>





 </li> <span class="divider">|</span>







 <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                                    With
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                      <li><a href=<?php echo site_url('clubs/food_availablity') ?>  class="list-group-item"
                               id="left_sider">Food Availablity<span
                                    class="badge pull-right" id="counter">112</span></a></li>


                        <li><a href=<?php echo site_url('clubs/with_parking') ?>  class="list-group-item"
                               id="left_sider">Parking<span
                                    class="badge pull-right" id="counter">112</span></a></li>
                                </ul>
                              </li>











 </li> <span class="divider">|</span>












 <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                                    Catagory
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                     
                       <li><a href=<?php echo site_url('clubs/modern_clubs') ?>  class="list-group-item"
                              id="left_sider">Modern<span
                                   class="badge pull-right" id="counter">112</span></a></li>


                       <li><a href=<?php echo site_url('clubs/cultural_clubs') ?>  class="list-group-item"
                              id="left_sider">Cultural<span
                                   class="badge pull-right" id="counter">112</span></a></li>






                             
                                </ul>
               



            </ul>
        </div>
    </div>
</div>
