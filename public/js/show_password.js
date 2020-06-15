function showPassWord() {
    var pass = document.getElementById('pass');
    var check = document.getElementById('showPass');
    if (check.checked == true) {
        pass.type = 'text';
    }
    else {
        pass.type = 'password';
    }
}