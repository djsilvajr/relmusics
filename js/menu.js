function logoutckview() {
    $('#logoutModal').modal('show');
}

function logoutck(){
    window.location.href = 'controller/logout.php'
}

function recusaLogout() {
    $('#logoutModal').modal('hide');
}