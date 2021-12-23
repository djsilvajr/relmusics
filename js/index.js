
function cadastrar(){
    var formData = $('#frmCadastro').serializeArray(); 
    $.ajax({
        type: 'POST',
        url: 'controller/usuario_cadastra.php',
        data: formData,
        success: function( result ) {
            let retorno = result;
            let obj = JSON.parse(retorno);
            
            if( obj.status == 'success' ) {
                $('#cadastroModal').modal('show');
                return
            }
            if( obj.status == 'email1' ) {
                $('#emailModal').modal('show');
                return
            }
            if( obj.status == 'email2' ) {
                $('#email2Modal').modal('show');
                return
            }
            if( obj.status == 'nome' ) {
                $('#nomeModal').modal('show');
                return
            }
            if( obj.status == 'sobrenome' ) {
                $('#sobrenomeModal').modal('show');
                return
            }
            if( obj.status == 'senhas' ) {
                $('#senhaModal').modal('show');
                return
            }
        }
    });
}

