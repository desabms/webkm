$('input[type=number]').on('mousewheel', function(e) {
  $(e.target).blur();
});

$(document).ready(function(){
		$('#nik').blur(function(){
			$('#pesan').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
			var nik = $(this).val();

			$.ajax({
				type	: 'POST',
				url 	: 'content/LaporanController.php',
				data 	: 'nik='+nik,
				success	: function(data){
					$('#pesan').html(data);
				}
			})

		});
	});