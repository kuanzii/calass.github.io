function performConversion() {
    let inputValue = parseFloat(document.getElementById('inputValue').value);
    let checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    let result = '';

    if (checkboxes.length === 0) {
        result = 'Please select at least one conversion unit.';
    } else {
        checkboxes.forEach(checkbox => {
            let conversionType = checkbox.value;
            let convertedValue = 0;

            switch (conversionType) {
                case 'mm':
                    convertedValue = inputValue * 1000;
                    break;
                case 'cm':
                    convertedValue = inputValue * 100;
                    break;
                case 'm':
                    convertedValue = inputValue;
                    break;
                case 'km':
                    convertedValue = inputValue / 1000;
                    break;
                default:
                    result = 'Invalid conversion type';
            }

            result += `${convertedValue} ${conversionType}, `;
        });

        // Remove the trailing comma and space
        result = result.slice(0, -2);
    }

    document.getElementById('result').innerText = `Result: ${result}`;
}
