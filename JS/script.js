var nameError = document.getElementById('name-error');
var emailError = document.getElementById('email-error');
var loginError = document.getElementById('login-error');
var passwordError = document.getElementById('password-error');
var confirmpasswordError= document.getElementById('confirm-password-error');
var submitError = document.getElementById('submit-error');

function validateName(){
    var name = document.getElementById('contact-name').value;

    if (name.length < 2){
        nameError.innerHTML = 'Minimum 2 symbols';
    }
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]&/)){
        nameError.innerHTML = 'Write name and surname';
        return false;
    }
    nameError.innerHTML = 'valid';
    return true;
}

function validateLogin(){
    var login = document.getElementById('contact-login').value;
    if (login.length < 6){
        loginError.innerHTML = 'Minimum 6 symbols';
    }
    if(!name.match(/^[A-Za-z]&/)){
        nameError.innerHTML = 'Write correct login';
        return false;
    }
    nameError.innerHTML = 'valid';
    return true;

}