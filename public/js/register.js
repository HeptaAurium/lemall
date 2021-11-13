let timeout;

let password = document.getElementById('password')
let strengthBadge = document.getElementById('StrengthDisp')


let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))')

function StrengthChecker(PasswordParameter) {

    if (strongPassword.test(PasswordParameter)) {
        strengthBadge.style.color = "green"
        strengthBadge.textContent = 'Your password is Strong'
    } else if (mediumPassword.test(PasswordParameter)) {
        strengthBadge.style.color = 'blue'
        strengthBadge.textContent = 'Your password is Medium'
    } else {
        strengthBadge.style.color = 'red'
        strengthBadge.textContent = 'Your password is Weak'
    }
}

password.addEventListener("input", () => {

    strengthBadge.style.display = 'block'
    clearTimeout(timeout);

    timeout = setTimeout(() => StrengthChecker(password.value), 500);

    if (password.value.length !== 0) {
        strengthBadge.style.display != 'block'
    } else {
        strengthBadge.style.display = 'none'
    }
})

function matchPassword() {
    var pw1 = document.getElementClassName("pswd1");
    var pw2 = document.getElementByClassName("pswd2");
    if (pw1 != pw2) {
        alert("Passwords did not match");
    } else {
        alert("Password created successfully");
    }
}
$('input.partial_name').on('change', function(e) {
    e.preventDefault();

    var fname = $('#fname').val(),
        lname = $('#lname').val();

    var name = fname + " " + lname;

    $('#full_name').val(name);
});

$(document).on('click', '.btn-sign-up', function(e) {
    e.preventDefault();

    var required = $('input.required'),
        greenLight = true;
    $('.help-text').remove();

    for (var i = 0; i < required.length; i++) {
        var val = required[i].value,
            elem = required[i],
            msg = '<small class="help-text text-danger">This field is required!</small>';

        if (val == "") {
            $(msg).insertAfter($(elem));
            greenLight = false;
        }
    }

    var pw1 = $('#password').val();
    var pwd2 = $('#confirm-password').val();
    var msg, pwd_element = $('.password');


    if (pw1 != pwd2) {
        msg = '<small class="help-text text-danger">Passwords do not match!</small>';
        $(msg).insertAfter($(pwd_element));
        greenLight = false;
    }


    if (greenLight) {
        $('form#form-registration').submit();
    }
});