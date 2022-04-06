let form = document.querySelector('.js-form'),
    formInputs = document.querySelectorAll('.js-input'),
    inputEmail = document.querySelector('.js-input-email'),
    inputPassword = document.querySelector('.js-input-password');

    function validateEmail(email) {
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }   

    function validatePassword(password) {
        let re2 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^\w\s]).{6,}/;
        return re2.test(String(password));
    }

    form.onsubmit = function () {
        let emailVal = inputEmail.value,
            passwordVal = inputPassword.value,
            emptyInputs = Array.from(formInputs).filter(input => input.value === '');

            formInputs.forEach(function (input) {
                if (input.value === '') {
                    input.classList.add('error');
                } else {
                    input.classList.remove('error');
                    return false;
                }
            });

            

            if(!validateEmail(emailVal)) {
                console.log('email not valid');
                inputEmail.classList.add('error');
                return false;
            } else {
                inputEmail.classList.remove('error');
            }    
            
            if(!validatePassword(passwordVal)) {
                console.log('password not valid');
                inputPassword.classList.add('error');
                return false;
            } else {
                inputPassword.classList.remove('error');
            }
}
