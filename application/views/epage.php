<?php
/**
 * Created by PhpStorm.
 * User: Rizkan
 * Date: 8/9/2018
 * Time: 8:05 PM
 */?>



<?php include('inc/header.php') ?>
<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <?php include('inc/top_bar.php') ?>


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php $this->load->view('inc/leftbar'); ?>

    </div>

    <!----- insert button styling-->
    <style>

        .button-list {
            overflow: hidden;
        }
    </style>
    <!----- insert button styling-->
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Edit Customer Details</h4>
                        </div>
                        <?php
                        $noti = $this->session->flashdata('msg');
                        if (isset($noti)) {
                            ?>

                            <div class="alert alert-warning" role="alert">
                                <?= $this->session->flashdata('msg'); ?>
                            </div>

                        <?php } ?>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <?= form_open('Customer/cupdate'); ?>
                        <?php  foreach ($data["fetch_data"]->result() as $row) {    ?>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-12 ">

                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Customer Name</label>
                                                <input type="text" class="form-control" required  name="cname"
                                                       placeholder="Customer Name" data-parsley-id="34"
                                                       value="<?php echo $row->cname; ?>">
                                                <input type="text" class="form-control" hidden  name="cid" data-parsley-id="34"
                                                       value="<?php echo $row->cid; ?>">

                                            </fieldset>
                                        </div>

                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Reference Number</label>
                                                <input type="text" class="form-control"  name="rnum"
                                                       placeholder="Reference Number" data-parsley-id="56"
                                                       value="<?php echo $row->rnum; ?>">

                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="date" value="<?php echo $row->date; ?>" id="datepicker">
                                                        <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <input type="text" class="form-control"  name="address"
                                                       placeholder="Address" data-parsley-id="34"
                                                       value="<?php echo $row->address; ?>">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Age</label>
                                                <input type="text" class="form-control"  name="age"
                                                       placeholder="Age" data-parsley-maxlength="2"
                                                       data-parsley-type="number" data-parsley-id="34"
                                                       value="<?php echo $row->age; ?>">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Mobile Number</label>
                                                <input type="text" class="form-control" required  name="mobile"
                                                       placeholder="Mobile Number" data-parsley-minlength="10"
                                                       data-parsley-type="number" data-parsley-id="34"
                                                       value="<?php echo $row->mobile; ?>">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Remarks/Symptams</label>
                                                <input type="text" class="form-control" name="remark"
                                                       placeholder="Remarks/Symptams" data-parsley-id="34"
                                                       value="<?php echo $row->remark; ?>">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Physical Condition/History</label>
                                                <input type="text" class="form-control" name="history"
                                                       placeholder="Physical Condition/History" data-parsley-id="34"
                                                       value="<?php echo $row->history; ?>">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>


                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <h4>Refraction</h4>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">U.V.A. (R)</label>
                                                <input type="text" class="form-control" name="uva1"
                                                       placeholder="U.V.A." data-parsley-id="34"
                                                       value="<?php echo $row->uva1; ?>">

                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">P.H. (R)</label>
                                                <input type="text" class="form-control" name="ph1"
                                                       placeholder="P.H." data-parsley-id="34"
                                                       value="<?php echo $row->ph1; ?>">

                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">U.V.A. (L)</label>
                                                <input type="text" class="form-control" name="uva2"
                                                       placeholder="U.V.A." data-parsley-id="34"
                                                       value="<?php echo $row->uva2; ?>">

                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">P.H. (L)</label>
                                                <input type="text" class="form-control" name="ph2"
                                                       placeholder="P.H." data-parsley-id="34"
                                                       value="<?php echo $row->ph2; ?>">

                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">6M</label>
                                                <input type="text" class="form-control" name="m6m1"
                                                       placeholder="6M" data-parsley-id="34"
                                                       value="<?php echo $row->m6m1; ?>">

                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">6M</label>
                                                <input type="text" class="form-control" name="m6m2"
                                                       placeholder="6M" data-parsley-id="34"
                                                       value="<?php echo $row->m6m2; ?>">

                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">N.P.C.</label>
                                                <input type="text" class="form-control" name="npc"
                                                       placeholder="N.P.C." data-parsley-id="34"
                                                       value="<?php echo $row->npc; ?>">

                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Version</label>
                                                <input type="text" class="form-control" name="version"
                                                       placeholder="Version" data-parsley-id="34"
                                                       value="<?php echo $row->version; ?>">

                                            </fieldset>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">ć-HbRx</label>
                                                <input type="text" class="form-control" name="hbrx1"
                                                       placeholder="ć-HbRx" data-parsley-id="34"
                                                       value="<?php echo $row->hbrx1; ?>">

                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1" style="margin-left: 49%">R</label>

                                                <input type="text" class="form-control" name="hbrx2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->hbrx2; ?>">

                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1" style="margin-left: 49%">L</label>
                                                <input type="text" class="form-control" name="hbrx3"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->hbrx3; ?>">

                                            </fieldset>
                                        </div>

                                    </div>

                                </div><!-- end col -->


                            </div><!-- end row -->
                        </div>


                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <h4>THE PRESCRIPTION</h4>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1" style="margin-left: 49%">R</label>
                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="DIST">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1"><br></label>
                                                <input type="text" class="form-control"  name="r1"
                                                       placeholder="" data-parsley-id="56"
                                                       value="<?php echo $row->r1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Sph:</label>
                                                <input type="text" class="form-control"  name="sph1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->sph1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Cyl:</label>
                                                <input type="text" class="form-control" name="cyl1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->cyl1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Axis:</label>
                                                <input type="text" class="form-control" name="axis1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->axis1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Sph:</label>
                                                <input type="text" class="form-control"  name="sph2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->sph2; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Cyl:</label>
                                                <input type="text" class="form-control" name="cyl2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->cyl2; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Axis:</label>
                                                <input type="text" class="form-control" name="axis2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->axis1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1" style="margin-left: 49%">L</label>
                                                <input type="text" class="form-control"  name="l1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->l1; ?>">

                                            </fieldset>

                                        </div>


                                        <!-- second row-->
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="NEAR">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control"  name="r2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->r2; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control"  name="sph3"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->sph3; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="cyl3"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->l1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="axis3"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->axis3; ?>">

                                            </fieldset>

                                        </div>

                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control"  name="sph4"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->sph4; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="cyl4"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->cyl4; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="axis4"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->axis4; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control"  name="l2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->l2; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-4 ">
                                        </div>
                                        <div class="col-lg-4 ">
                                            <small class="text-muted">Ophthalmoscope/Opthalmoscope
                                            </small>
                                        </div>
                                        <div class="col-lg-4 ">
                                        </div>


                                    </div>

                                </div><!-- end col -->


                            </div><!-- end row -->
                        </div>

                        <!--next cardbord box-->
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="row">
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="Cornea">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="cornea1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->cornea1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="cornea2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->cornea2; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="Iris">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="iris1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->iris1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="iris2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->iris2; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="Media">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="media1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->media1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="media2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->media2; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1"><br></label>
                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="Fundus">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">
                                                <textarea class="form-control" id="description" name="fundus1"
                                                          rows="3" placeholder=""><?php echo $row->fundus1; ?></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">
                                                <textarea class="form-control" id="description" name="fundus2"
                                                          rows="3" placeholder=""><?php echo $row->fundus2; ?></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="A/C">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="ac1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->ac1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="ac2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->ac2; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="P/C">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="pc1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->pc1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="pc2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->pc2; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="I.O.P.">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="iop1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->iop1; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="iop2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->iop2; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-12 ">
                                            <small class="text-muted">Diagnosis/Remarks
                                            </small>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <textarea class="form-control"  id="description"
                                                          name="diagnosis"
                                                          rows="3" placeholder=""><?php echo $row->diagnosis; ?></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Lense Model</label>
                                                <input type="text" class="form-control"  name="lense"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->lense; ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-6 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Total Amount</label>
                                                <input type="text" class="form-control"  name="total"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo $row->total; ?>">

                                            </fieldset>

                                        </div>




                                    </div>

                                </div><!-- end col -->


                            </div><!-- end row -->
                            <div class="button-list">
                                <button type="submit" class="btn btn-primary" style="float: right">Update</button>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php echo form_close(); ?>

                    </div><!-- end col -->
                </div>
                <!-- end row -->


                <!-- end row -->


                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

    </div>
    <!-- End content-page -->


    <?php include('inc/footer.php') ?>
