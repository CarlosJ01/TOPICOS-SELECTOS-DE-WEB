let myCaptcha = new jCaptcha({
    el: '.jCaptcha',
    canvasClass: 'jCaptchaCanvas',
    canvasStyle: {
        // required properties for captcha stylings:
        width: 100,
        height: 15,
        textBaseline: 'top',
        font: '15px Arial',
        textAlign: 'left',
        fillStyle: '#ddd'
    },
    // set callback function for success and error messages:
    callback: ( response, $captchaInputElement, numberOfTries ) => {
        if ( response == 'success' ) {
            $captchaInputElement.classList.remove('error');
            $captchaInputElement.classList.add('success');
            alert('Captcha Resuelto');
        }
        if ( response == 'error' ) {
            $captchaInputElement.classList.remove('success');
            $captchaInputElement.classList.add('error');
            $captchaInputElement.placeholder = 'Intenta otra vez';
            
            if (numberOfTries === 3) {
                $captchaInputElement.classList.add('disabled');
                $captchaInputElement.placeholder = 'Numero de intentos acabados';
                $captchaInputElement.setAttribute('disabled', 'true');
                document.getElementById('submit').setAttribute('disabled', 'true');
            }
        }
    }
});

(function() {
    document.getElementById('form-captcha').onsubmit = function (e) {  
        e.preventDefault();
        myCaptcha.validate();
    }
 })();