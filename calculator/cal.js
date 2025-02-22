function appendToDisplay(value) {
    document.getElementsByClassName('display').value += value;
}

function clearDisplay() {
    document.getElementsByClassName('display').value = '';
}

function calculate() {
    try {
        const result = eval(document.getElementsByClassName('display').value);
        document.getElementsByClassName('display').value = result;
    } catch (error) {
        document.getElementsByClassName('display').value = 'Error';
    }
}