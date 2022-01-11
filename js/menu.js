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

function gerenciadorScreen() {
    $('#gerenciadorModal').modal('show');
}