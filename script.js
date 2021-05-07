$(document).ready(function(){ 
	$('#form1').on('submit', function(event){
		event.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			url: "cria_tarefa.php",
			method: "POST",
			data: formData,
			dataType: "JSON",
			success:function(response) {
				if(!response.error) {
					$('#fomr1')[0].reset();
					$('#n_tarefa').val('');
					showComments();
				} else if(response.error){

				}
			}
		})
	});	
});

function showComments() {
	$.ajax({
		url:"selecionar.php",
		method:"POST",
		success:function(response) {
			$('.conteudo').html(response);
		}
	})
}