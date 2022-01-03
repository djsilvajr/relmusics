
function cadastrar(){
    var formDataCadastro = $('#frmCadastro').serializeArray(); 
    $.ajax({
        type: 'POST',
        url: 'controller/usuario_cadastra.php',
        data: formDataCadastro,
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

function login(){
    var formDataLogin = $('#frmLogin').serializeArray(); 
    $.ajax({
        type: 'POST',
        url: 'controller/usuario_login.php',
        data: formDataLogin,
        success: function( result ) {
            let retorno = result;
            let obj = JSON.parse(retorno);
            
            if( obj.status == 'success' ) {
                window.location.replace('menu.php');
                //console.log("correto")
            }else{
                $('#senhaModal').modal('show');
                return
            }

        }
    });
}

function ok(){
    $('.ui.mini.modal').modal('hide')
;
}