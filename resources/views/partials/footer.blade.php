<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; Smart University Theme By
				<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/popper/popper.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
	<script src="{{ asset('assets/js/pages/sparkline/sparkline-data.js') }}"></script>
	<!-- Common js-->
	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('assets/js/layout.js') }}"></script>
	<script src="{{ asset('assets/js/theme-color.js') }}"></script>
	<!-- material -->
	<script src="{{ asset('assets/plugins/material/material.min.js') }}"></script>
	<!-- chart js -->
	<script src="{{ asset('assets/plugins/chart-js/Chart.bundle.js') }}"></script>
	<script src="{{ asset('assets/plugins/chart-js/utils.js') }}"></script>
	<script src="{{ asset('assets/js/pages/chart/chartjs/home-data.js') }}"></script>
	<!-- summernote -->
	<script src="{{ asset('assets/plugins/summernote/summernote.js') }}"></script>
	<script src="{{ asset('assets/js/pages/summernote/summernote-data.js') }}"></script>

	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
	<!-- data tables -->
	<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/js/pages/table/table_data.js') }}"></script>
	<script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js') }}"></script>
	<script>
        
    $(document).on("click", "#delete", function(e){

        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Are you sure to delete ??", function(confirmed){

            if (confirmed) {
                window.location.href =link;
            };
        });

    }); 


    </script>

     <script type="text/javascript">
            $(function () {
                $('#datetimepicker5').datetimepicker({
                    defaultDate: "11/1/2013",
                    disabledDates: [
                        moment("12/25/2013"),
                        new Date(2013, 11 - 1, 21),
                        "11/22/2013 00:53"
                    ]
                });
            });
        </script>


