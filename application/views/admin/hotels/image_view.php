<?php if ($company_list): ?>

    <?php foreach ($company_list as $row): ?>


        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?= $row->hotel_name ?>
                    <small>Wellcome to your Admin Page</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="Visible">Simple</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-6">


                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Main Image</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>



                                        </form>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->hotel_image1 ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                           </td>
                                    </tr>

                                    <tr>
                                   <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                   </tr>


                                </table>
                            </div>
                            <!-- /.box-body -->

                        </div>
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Hotel Image 2</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form2/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>



                                    </ul>
                                </div>
                            </div>
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->hotel_image2 ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>                            </div>
                            <!-- /.box-body -->

                        </div>
                        <!-- /.box -->

                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Hotel Image 3</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form3/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->hotel_image3 ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>
                            </div>
                            <!-- /.box-body -->

                        </div>


                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Hotel Image 4</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form4/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->hotel_image4 ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>                            </div>
                            <!-- /.box-body -->

                        </div>

                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Hotel Image 5</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form5/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->hotel_image5 ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>                            </div>
                            <!-- /.box-body -->

                        </div>

                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Hotel Image 6</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form6/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->hotel_image6 ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>                            </div>
                            <!-- /.box-body -->

                        </div>

                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Hotel Image 7</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form7/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->hotel_image7 ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>                            </div>
                            <!-- /.box-body -->

                        </div>


                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Single Room Image</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form8/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>



                                    </ul>
                                </div>
                            </div>
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->hotel_single_image ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>                            </div>
                            <!-- /.box-body -->

                        </div>


                        <!-- /.box -->
                    </div>
                    <!-- /.col -->


                    <div class="col-md-6">


                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Twin Room Image</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form9/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->hotel_twin_image ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>                            </div>
                            <!-- /.box-body -->

                        </div>
                        <!-- /.box -->
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Suit Room image</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">





                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form10/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>

                                    </ul>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->hotel_suit_image ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>
                            </div>
                            <!-- /.box-body -->

                        </div>



                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Presidential Suit Image</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form11/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->	hotel_presidential_image ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>
                            </div>
                            <!-- /.box-body -->

                        </div><div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Meeting Hall Image</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form12/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->mhall_image ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>
                            </div>
                            <!-- /.box-body -->

                        </div><div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Swimming Pool Image</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form13/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->pool_image ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>
                            </div>
                            <!-- /.box-body -->

                        </div><div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Country View Image</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form14/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->hotel_country_view ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>
                            </div>
                            <!-- /.box-body -->

                        </div><div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Gym Image</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form15/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->gym_image ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>
                            </div>
                            <!-- /.box-body -->

                        </div>




                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Wedding Hall Image</h3>

                                <div class="box-tools">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <a href=<?php echo site_url('hag22673627bet8001niki1base5621ac/upload_form16/' . $row->hotel_id) ?> class="btn btn-info flat btn-sm"><span class="glyphicon glyphicon-upload"></span> Upload</a>


                                    </ul>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                    <tr>


                                        <td id="bkc">
                                            <img src="<?php echo base_url(); ?><?= $row->whall_image ?>" class="img-polaroid"
                                                 width="250" height="200"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="bkc"><span class="badge bg-green">Visible</span></td>
                                    </tr>


                                </table>
                            </div>
                            <!-- /.box-body -->

                        </div>



                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->



            </section>
            <!-- /.content -->
        </div>

    <?php endforeach; ?>

<?php endif; ?>