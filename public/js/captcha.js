// JavaScript code for captcha generation and validation
var captcha = generateCaptcha();
document.getElementById('captcha').value = captcha;

function generateCaptcha() {
    // Generate untuk captcha dengan match random dan floor
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var captchaString = '';
    for (var i = 0; i < 6; i++) {
        captchaString += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return captchaString;
}

function validateCaptcha() {
    var userInput = document.getElementById('captchaInput').value;
    if (userInput === captcha) {
        // Captcha is correct, proceed with form submission
        alert('Captcha is correct. Logging in...');
    } else {
        // Captcha is incorrect, reset captcha fields
        alert('Captcha is incorrect. Please try again.');
        captcha = generateCaptcha();
        document.getElementById('captcha').value = captcha;
        document.getElementById('captchaInput').value = '';
    }
}
