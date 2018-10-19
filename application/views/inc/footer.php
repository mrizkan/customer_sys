<footer class="footer text-right">
    <?php echo date("Y"); ?> © Eye with us Opticals | Developed By <a
            href="https://www.facebook.com/RizkanCreations/"
            target="_blank">Riz Creations</a>. +94 777 943 607
</footer>


</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->

<script src="<?= base_url() ?>js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/detect.js"></script>
<script src="<?= base_url() ?>js/fastclick.js"></script>
<script src="<?= base_url() ?>js/jquery.blockUI.js"></script>
<script src="<?= base_url() ?>js/waves.js"></script>
<script src="<?= base_url() ?>js/jquery.nicescroll.js"></script>
<script src="<?= base_url() ?>js/jquery.scrollTo.min.js"></script>
<script src="<?= base_url() ?>js/jquery.slimscroll.js"></script>
<script src="<?= base_url() ?>plugins/switchery/switchery.min.js"></script>

<!-- Required datatable js -->
<script src="<?= base_url() ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>plugins/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Buttons examples -->
<script src="<?= base_url() ?>plugins/moment/moment.js"></script>

<script src="<?= base_url() ?>plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?= base_url() ?>plugins/mjolnic-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

<script src="<?= base_url() ?>plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>plugins/clockpicker/bootstrap-clockpicker.js"></script>
<script src="<?= base_url() ?>plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url() ?>pages/jquery.form-pickers.init.js"></script>


<script src="<?= base_url() ?>plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>plugins/datatables/jszip.min.js"></script>
<script src="<?= base_url() ?>plugins/datatables/pdfmake.min.js"></script>
<script src="<?= base_url() ?>plugins/datatables/vfs_fonts.js"></script>
<script src="<?= base_url() ?>plugins/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>plugins/datatables/buttons.print.min.js"></script>
<script src="<?= base_url() ?>plugins/datatables/buttons.colVis.min.js"></script>

<!-- Counter Up  -->
<script src="<?= base_url() ?>plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?= base_url() ?>plugins/counterup/jquery.counterup.min.js"></script>



<!-- Sweet Alert js -->

<script src="<?= base_url() ?>plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="<?= base_url() ?>pages/jquery.sweet-alert.init.js"></script>



<!-- App js -->
<script src="<?= base_url() ?>js/jquery.core.js"></script>
<script src="<?= base_url() ?>js/jquery.app.js"></script>




<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar-menu a").each(function () {
            if (this.href == window.location.href) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().click(); // click the item to make it drop
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('form').parsley();
    });
</script>

</body>
</html>