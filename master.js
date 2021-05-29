getComments();
$(function(){

    $(".btn").on("click", function(){
        var tarefa = $("#n_tarefa").val();
        console.log(tarefa);

        $.ajax({
            url: "load.php",
            method: "POST",
            data: {tarefa: tarefa}
        }).done(function(result){
            $("#n_tarefa").val('');
            console.log(result);
            getComments();
        });
    });
});

function getComments() {
    $.ajax({
        url: 'seleciona.php',
        method: 'GET',
        dataType: 'json',
        
    }).done(function(result){
        var box_comm = document.querySelector('.box_task');
        while(box_comm.firstChild){
            box_comm.firstChild.remove();
        }
        console.log(result);

        if (result !== 'Não selecionado nada.') {
            for (var i = 0; i < result.length; i++) {
                $('.box_task').prepend('<div class="tasks"><h4>' + result[i].tarefa + '</h4></div>');
                
            }
        }

        
    });
}

getComments();