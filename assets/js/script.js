$('input[type=number]').on('mousewheel', function(e) {
  $(e.target).blur();
});

$(document).ready(function(){
		$('#nik').blur(function(){
			$('#pesan').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
			var nik = $(this).val();

			$.ajax({
				url 	: 'content/LaporanController.php',
				type	: 'POST',
				data 	: 'nik='+nik,
				success	: function(data){
					$('#pesan').html(data);
				}
			});

		});
	});
