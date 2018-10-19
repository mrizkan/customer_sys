<?php include('inc/header.php') ?>
<link href="<?php base_url()?>plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />
<style>
    @media (min-width: 544px){

        .new-1 {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        .new-1 th, .new-1 td {
            border: none;
            text-align: left;
            padding: 8px;
        }
    }

</style>
<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <?php include('inc/top_bar.php') ?>


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php $this->load->view('inc/leftbar'); ?>

    </div>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Customer Details</b></h4>

                            <!-- <?php
/*                            $noti=$this->session->flashdata('msg');
                            if(isset($noti)){
                                */?>

                                <div class="alert alert-warning" role="alert">
                                    <?/*= $this->session->flashdata('msg'); */?>
                                </div>

                            --><?php /*}  */ ?>

                            <table id="datatable-buttons" class="table table-striped table-bordered new-1 ">
                                <thead>
                                <tr>
                                    <th style="width: 2%">Reference Number</th>
                                    <th style="width: 20%">Customer Name</th>
                                    <th>Address</th>
                                    <th style="width: 10%">Mobile Number</th>
                                    <th>Option</th>

                                </tr>
                                </thead>


                                <tbody>
                                <?php
                                if ($cdata->num_rows() > 0) {
                                    foreach ($cdata->result() as $row) {
                                        ?>
                                        <tr>
                                            <td width="1%"><?php echo $row->rnum; ?></td>
                                            <td><?php echo $row->cname; ?></td>
                                            <td><?php echo $row->address; ?></td>
                                            <td><?php echo $row->mobile; ?></td>
                                            <td><a href="<?= base_url() . 'Vcustomer/dview/' . $row->cid ?>">
                                                    <button type="button"
                                                            class="btn btn-warning-outline waves-effect waves-light">
                                                        View
                                                    </button>
                                                </a> &nbsp;
                                                <a href="<?= base_url() . 'Vcustomer/cprint/' . $row->cid ?>">
                                                    <button type="button"
                                                            class="btn btn-dark-outline waves-effect waves-light" id="sa-params">
                                                        Print
                                                    </button>
                                               </a> &nbsp;
                                                <a href="<?= base_url() . 'Vcustomer/cprint/' . $row->cid ?>">
                                                    <button type="button"
                                                            class="btn btn-danger-outline waves-effect waves-light" id="sa-params">
                                                        Delete
                                                    </button>
                                                </a>
                                                </td>

                                        </tr>


                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td>No Data Found</td>
                                    </tr>

                                <?php

                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <?php include('inc/footer.php') ?>

                <script src="<?php base_url() ?>plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>


                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#datatable').DataTable();

                        //Buttons examples
                        var table = $('#datatable-buttons').DataTable({
                            lengthChange: false,
                            buttons: ['copy', 'excel', 'pdf', 'colvis']
                        });

                        table.buttons().container()
                            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
                    });

                </script>