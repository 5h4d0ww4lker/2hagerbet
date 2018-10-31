<div class="row-fluid breadcrumbs margin-bottom-40">
    <div class="container">
        <div class="span6">
           <div class="tab-style-1">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href=<?php echo site_url('directories/tour_guides') ?>>Tour Guides</a></li>
                        <li><a href=<?php echo site_url('directories/car_rentals') ?>>Car Rentals</a></li>
                       


                    </ul>
                </div>
<br/><br/>
            <h1>Tour Guide Directories</h1>


                <form method="post"
                      action="<?php echo base_url('index.php/service_providers/search_tour_guides') ?>">

                <input type="text"
                       class="form-control"
                       id="bar"
                       name="search_term"

                       placeholder="By Name, location" required="required">
                <button type="submit"class="btn green" id="bar2"><i class=" icon-search"></i> Go!</button></h1>
            </form>
            


        </div>





    </div>
</div>
