	<div class="footer-2-3 container-xxl mx-auto  p-0" style="font-family: 'Poppins', sans-serif; background-color: #391484; position: absolute">
	

			<div class="border-color info-footer">
				<div class="">
					<hr class="hr" />
				</div>
				<div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
					
					<nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
						<p style="margin: 0">Copyright © 2021 DAPODES</p>
					</nav>
				</div>
			</div>
		</div>
      
      
      <script src="<?php echo base_url();?>assets/js/script.js"></script>
      <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
      <script src="<?php echo base_url();?>assets/js/umkm.js"></script>
	   <link rel="stylesheet" href="<?= base_url() ?>assets/js/datatables.net-bs4/css/dataTables.bootstrap4.min.js">
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/datatables.net-select-bs4/css/select.bootstrap4.min.js">
     
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <script>
        $(function () {
			$('input, select').on('focus', function () {
				$(this).parent().find('.input-group-text').css('border-color', '#80bdff');
			});
			$('input, select').on('blur', function () {
				$(this).parent().find('.input-group-text').css('border-color', '#ced4da');
			});
		});
      </script>
	  <script>
	  // disable mousewheel on a input number field when in focus
		// (to prevent Cromium browsers change the value when scrolling)
		$(document).ready(function(){
		$('#nik').blur(function(){
			$('#pesan').html('<img style="margin-left:10px; width:10px" src="<?php echo base_url();?>assets/images/loading.gif">');
			var nik = $(this).val();

			$.ajax({
				type	: 'POST',
				url 	: 'content/LaporanController/proses_laporan',
				data 	: 'nik'+nik,
				// type	: 'json'
				success	: function(data){
					$('#pesan').html(data);
				}
			})

		});
	});
	  </script>
    </body>
  </html>
