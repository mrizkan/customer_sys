<?php include('inc/header.php') ?>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <?php include('inc/top_bar.php') ?>
    <style>

        .button-list {
            overflow: hidden;
        }
        .col-sm-10{
            margin-top: 5px;
        }
    </style>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php $this->load->view('inc/leftbar'); ?>

    </div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <!-- Start content -->

        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-8">
                        <div class="page-title-box">
                            <!--<h4 class="page-title">Customer Details</h4>-->

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <?php  foreach ($data["fetch_data"]->result() as $row) {    ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card-box">
                            <!-- <div class="panel-heading">
                                <h4>Invoice</h4>
                            </div> -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-11">

                                        <div class="pull-xs-left m-t-30">
                                            <address>

                                                <strong>Eye with us Opticals</strong><br>
                                                91B, Galle Road,<br>Henamulla,<br>Panadura.<br>
                                                <i class="fa fa-phone"></i> +94 778 280 494
                                            </address>



                                        </div>
                                        <div class="pull-xs-right m-t-30">
                                            <strong style="float: right">Date: <?php echo date("Y/m/d") ?></strong><br>
                                            <img src="<?php echo base_url(); ?>images/logo.png" width="220px" height="100px">

                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->



                                <hr>

                            </div>

                            <div class="col-lg-12 ">
                                <div class="row">
                                    <div class="col-lg-7 ">
                                        <label>Customer Name: &NonBreakingSpace;</label><label><?php echo $row->cname; ?></label>
                                    </div>
                                <div class="col-lg-3 ">
                                        <label>Reference Number: &NonBreakingSpace;</label><label><?php echo $row->rnum; ?></label>
                                    </div>
                                <div class="col-lg-2 ">
                                        <label>Age: &NonBreakingSpace;</label><label><?php echo $row->age; ?></label>
                                    </div>
                                </div>
                                    </div>
                            <div class="col-lg-12 ">
                                <div class="row">
                                    <div class="col-lg-4 ">
                                        <label>Address: &NonBreakingSpace;</label><label><?php echo $row->address; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>Mobile Number: &NonBreakingSpace;</label><label><?php echo $row->mobile; ?></label>
                                    </div>
                                    <div class="col-lg-5 ">
                                        <label>Remarks/Symptams: &NonBreakingSpace;</label><label><?php echo $row->remark; ?></label>
                                    </div>



                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <label>Physical Condition/History: &NonBreakingSpace;</label><label><?php echo $row->history; ?></label>
                                    </div>
                                    </div>
                                <div class="col-lg-12 ">
                                    <div class="row">
                                    <div class="col-lg-3 ">
                                        <label>U.V.A. (R):
                                            &NonBreakingSpace;</label><label><?php echo $row->uva1; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>P.H. (R):
                                            &NonBreakingSpace;</label><label><?php echo $row->ph1; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>U.V.A. (L):
                                            &NonBreakingSpace;</label><label><?php echo $row->uva2; ?></label>
                                    </div>
                                        <div class="col-lg-3 ">
                                            <label>P.H. (L):
                                                &NonBreakingSpace;</label><label><?php echo $row->ph2; ?></label>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="row">

                                    <div class="col-lg-3 ">
                                        <label>6M: &NonBreakingSpace;</label><label><?php echo $row->m6m1; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>6M: &NonBreakingSpace;</label><label><?php echo $row->m6m2; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>N.P.C.: &NonBreakingSpace;</label><label><?php echo $row->npc; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>Version: &NonBreakingSpace;</label><label><?php echo $row->version; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="row">

                                    <div class="col-lg-3 ">
                                        <label>ć-HbRx: &NonBreakingSpace;</label><label><?php echo $row->hbrx1; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>R: &NonBreakingSpace;</label><label><?php echo $row->hbrx2; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>L: &NonBreakingSpace;</label><label><?php echo $row->hbrx3; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <label>THE PRESCRIPTION</label>
                                    </div>
                                </div>
                            </div>

                                    <table width="700px" border="1">
                                        <tr>
                                            <th>R</th>
                                            <th></th>
                                            <th>Sph:</th>
                                            <th>Cyl:</th>
                                            <th>Axis:</th>
                                            <th>Sph:</th>
                                            <th>Cyl:</th>
                                            <th>Axis:</th>
                                            <th>L</th>

                                        </tr>
                                        <tr><th>DIST</th><td><?php echo $row->r1; ?></td><td><?php echo $row->sph1; ?></td><td><?php echo $row->cyl1; ?></td><td><?php echo $row->axis1; ?></td><td><?php echo $row->sph2; ?></td><td><?php echo $row->cyl2; ?></td><td><?php echo $row->axis2; ?></td><td><?php echo $row->l1; ?></td></tr>
                                        <tr><th>NEAR</th><td><?php echo $row->r2; ?></td><td><?php echo $row->sph3; ?></td><td><?php echo $row->cyl3; ?></td><td><?php echo $row->axis3; ?></td><td><?php echo $row->sph4; ?></td><td><?php echo $row->cyl4; ?></td><td><?php echo $row->axis4; ?></td><td><?php echo $row->l2; ?></td></tr>
                                    </table>
                            <br><br>
                            <table width="700px" border="1">
                                <tr>
                                    <th>a</th>
                                    <th>a</th>
                                    <th>a</th>

                                </tr>
                                <tr><th>Cornea</th><td><?php echo $row->cornea1; ?></td><td><?php echo $row->cornea2; ?></td></tr>
                                <tr><th>Iris</th><td><?php echo $row->iris1; ?></td><td><?php echo $row->iris2; ?></td></tr>
                                <tr><th>Media</th><td><?php echo $row->media1; ?></td><td><?php echo $row->media2; ?></td></tr>
                                <tr><th>Fundus</th><td><?php echo $row->fundus1; ?></td><td><?php echo $row->fundus2; ?></td></tr>
                                <tr><th>A/C</th><td><?php echo $row->ac1; ?></td><td><?php echo $row->ac2; ?></td></tr>
                                <tr><th>P/C</th><td><?php echo $row->pc1; ?></td><td><?php echo $row->pc2; ?></td></tr>
                                <tr><th>I.O.P.</th><td><?php echo $row->iop1; ?></td><td><?php echo $row->iop2; ?></td></tr>

                            </table>
                            <!--if want back button will come here-->
                                <div class="col-lg-12 ">
                                    <div class="row">

                                        <div class="col-lg-12 ">
                                            <br>
                                            <label>Diagnosis/Remarks &NonBreakingSpace;</label><label><?php echo $row->diagnosis; ?></label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12 ">
                                    <div class="row">

                                        <div class="col-lg-6 ">
                                            <br>
                                            <label>Lense Model</label><label><?php echo $row->lense; ?></label>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <br>
                                            <label>Total Amount</label><label><?php echo $row->total; ?></label>
                                        </div>

                                    </div>
                                </div>


                    </div>
                <?php } ?>
                </div>
                <!-- end row -->



            </div>
        </div>
    </div>
    <?php include('inc/footer.php') ?>