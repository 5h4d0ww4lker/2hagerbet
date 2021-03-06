<?php if ($company_list): ?>

    <?php foreach ($company_list as $row): ?>


        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?= $row->resort_name ?>
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
                                <h3 class="box-title">Normal Rooms</h3>

                            </div>
                            <div class="box-body">


                                <form method="post"
                                      action="<?php echo base_url('index.php/hag70178731nikki5362045182basepath66321097reac/update_rp') ?>">
                                    <div class="box-body">

                                        <input class="hidden" type="hidden" value=" <?= $row->resort_id ?> "  name="resort_id">


                                        <label>Single Room</label>
                                        <input class="form-control" type="text" value=" <?= $row->resort_single_room_price ?>" name="resort_single_room_price1" maxlength="10">

                                          <label>Twin Room</label>
                                        <input class="form-control" type="text" value=" <?= $row->resort_twin_room_price ?>" name="resort_twin_room_price1" maxlength="10">


                            </div>

                            <!-- /.box-body -->

                        </div></div>





                        <!-- /.box -->
                    </div>
                    <!-- /.col -->


                    <div class="col-md-6">


                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Special Rooms</h3>


                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                <table class="table table-bordered table-striped">

                                 <label>Suit Room</label>
                                        <input class="form-control" type="text" value="<?= $row->resort_suit_room_price ?>"  name="resort_suit_room_price1" maxlength="10">


                                        <label>Presidential Suit</label>
                                        <input class="form-control" type="text" value=" <?= $row->resort_presidential_suit_price ?>" name="resort_presidential_suit_price1" maxlength="10">


 <div class="form-group">
                                                <label>Max Room Price Range</label>
                                                <select class="form-control" name="rooms_from1" value="<?= $row->rooms_from ?>">
                                                    <option id="sel">500ETB</option>
                                                    <option id="sel">1000ETB</option>
                                                    <option id="sel">1500ETB</option>
                                                    <option id="sel">2000ETB</option>
                                                    <option id="sel">More Than 2000</option>

                                                </select>
                                            </div>



                                        <br/>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success pull-right btn-md flat"><span class="glyphicon glyphicon-save">Save</span> </button>

                                        </div>


                                </table>
                                </form>
                            </div>
                            <!-- /.box-body -->

                        </div>
                        <!-- /.box -->




                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->


                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>

    <?php endforeach; ?>

<?php endif; ?>





















