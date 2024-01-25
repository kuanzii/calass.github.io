<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="calculator.js" defer></script>
    <title>Conversion Calculator</title>
</head>
<body>
    <header>
        <h1>Conversion Calculator</h1>
    </header>
    <main>
        <label for="inputValue">Enter Value:</label>
        <input type="number" id="inputValue">
        
        <p>Select Conversion:</p>
        
        <label for="mmCheckbox">
            <input type="checkbox" id="mmCheckbox" value="mm"> Millimeter
        </label>
        
        <label for="cmCheckbox">
            <input type="checkbox" id="cmCheckbox" value="cm"> Centimeter
        </label>
        
        <label for="mCheckbox">
            <input type="checkbox" id="mCheckbox" value="m"> Meter
        </label>
        
        <label for="kmCheckbox">
            <input type="checkbox" id="kmCheckbox" value="km"> Kilometer
        </label>
        
        <button onclick="performConversion()">Convert</button>
        
        <p id="result"></p>
    </main>
</body>
</html>
