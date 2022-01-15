function formAdicionarProjeto(){
    $('#modalAdicionarProjeto').modal('show');

}

function adicionarProjeto(){
    formAdicionarArray = $('#frmAdicionarProjeto').serializeArray();


    $.ajax({
        type: 'POST',
        url: 'controller/projeto_adiciona.php',
         data: formAdicionarArray,
          success: function( result ) {
            let retorno = result;
            let obj = JSON.parse(retorno);

            if( obj.status == 'success'){
                $('#modalSucesso').modal('show');
            }
            
          }
    });

}