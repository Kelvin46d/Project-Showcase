// script.js

const generateBtn = document.getElementById('generate');
const copyBtn = document.getElementById('copy');
const passwordField = document.getElementById('password');
const lengthField = document.getElementById('length');
const uppercaseField = document.getElementById('uppercase');
const lowercaseField = document.getElementById('lowercase');
const numbersField = document.getElementById('numbers');
const symbolsField = document.getElementById('symbols');
const tooltip = document.getElementById('tooltip');

// Random character generators
const randomFunc = {
    upper: () => String.fromCharCode(Math.floor(Math.random() * 26) + 65),
    lower: () => String.fromCharCode(Math.floor(Math.random() * 26) + 97),
    number: () => String.fromCharCode(Math.floor(Math.random() * 10) + 48),
    symbol: () => '!@#$%^&*()_+[]{}|;:,.<>?'.charAt(Math.floor(Math.random() * 21)),
};

// Generate Password
generateBtn.addEventListener('click', () => {
    const length = +lengthField.value;
    const hasUpper = uppercaseField.checked;
    const hasLower = lowercaseField.checked;
    const hasNumber = numbersField.checked;
    const hasSymbol = symbolsField.checked;

    passwordField.value = generatePassword(hasUpper, hasLower, hasNumber, hasSymbol, length);
    tooltip.classList.remove('show'); // Hide tooltip when generating a new password
});

// Copy to Clipboard
copyBtn.addEventListener('click', () => {
    const password = passwordField.value;

    if (!password) {
        alert('No password to copy. Please generate one first.');
        return;
    }

    // Copy password to clipboard
    navigator.clipboard.writeText(password).then(() => {
        const tooltipContainer = copyBtn; // Reference the button
        tooltipContainer.classList.add('show'); // Add the show class
        setTimeout(() => tooltipContainer.classList.remove('show'), 2000); // Hide tooltip after 2 seconds
    }).catch(err => {
        alert('Failed to copy password. Try again.');
        console.error(err);
    });
});

// Function to generate password
function generatePassword(upper, lower, number, symbol, length) {
    let generatedPassword = '';
    const typesCount = upper + lower + number + symbol;
    const typesArray = [{ upper }, { lower }, { number }, { symbol }].filter(item => Object.values(item)[0]);

    if (typesCount === 0) {
        return 'Select at least one option';
    }

    for (let i = 0; i < length; i += typesCount) {
        typesArray.forEach(type => {
            const funcName = Object.keys(type)[0];
            generatedPassword += randomFunc[funcName]();
        });
    }

    return generatedPassword.slice(0, length);
}
