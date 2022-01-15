function logoutckview() {
    $('#logoutModal').modal('show');
}

function logoutck(){
    window.location.href = 'controller/logout.php'
}

function recusaLogout() {
    $('#logoutModal').modal('hide');
}

function fecharGerenciador() {
    $('#gerenciadorModal').modal('hide');

}

function convertDigitIn(str){
    return str.split('-').reverse().join('/');
 }

function gerenciadorScreen() {
    $('#gerenciadorModal').modal('show');
    $("#tableProjetos td").remove(); 
    $.ajax({
        type: 'GET',
        url: 'controller/pesquisaProjeto.php',
        success: function( resultado ){
            let retorno = resultado;
            let result = JSON.parse(retorno);
           
           //console.log(  );
           var table = document.getElementById('tableProjetosTbody');
        
              for ( var i = 0; i < result.length; i++ ){
                  
                  var split_criacao = result[i].criacao_datahora.split(' ');
                  criacao_data = convertDigitIn(split_criacao[0])
                  criacao_hora = split_criacao[1]

                  if(result[i].edicao_datahora != ''){
                    var split_edicao = result[i].edicao_datahora.split(' ');
                    edicao_data = convertDigitIn(split_edicao[0])
                    edicao_hora = split_edicao[1]
                  }else{
                    edicao_data = ""
                    edicao_hora = ""
                  }




                  var row =   `<tr> <td>${result[i].nome}</td> <td>${criacao_data} ${criacao_hora} </td> <td>${edicao_data} ${edicao_hora}</td> <td>${result[i].publicado}</td> </tr>`

                  table.innerHTML += row;
              }


        }

    });
    
}