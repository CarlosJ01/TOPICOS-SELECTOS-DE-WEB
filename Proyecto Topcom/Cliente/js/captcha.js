let variables = {
    captcha: false
};
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
        fillStyle: '#000'
    },
    // set callback function for success and error messages:
    callback: ( response, $captchaInputElement, numberOfTries ) => {
        if ( response == 'success' ) {
            $captchaInputElement.classList.remove('error');
            $captchaInputElement.classList.add('success');
            variables.captcha = true;
        }
        if ( response == 'error' ) {
            $captchaInputElement.classList.remove('success');
            $captchaInputElement.classList.add('error');
            toastr.warning('Captcha equivocado, vuelva a intentar');
            $('#btnRegistro').attr("disabled", false);
            
            if (numberOfTries === 3) {
                $captchaInputElement.classList.add('disabled');
                toastr.error('Numero de intentos acabados');
                $captchaInputElement.setAttribute('disabled', 'true');
                $('#btnRegistro').attr("disabled", true);
            }
        }
    }
});