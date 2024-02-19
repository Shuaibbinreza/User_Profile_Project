<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <form action="/submit-form" method="POST" id="mainForm">
        @csrf
    
        <!-- Input field to enter values -->
        <input type="text" id="inputField" placeholder="Enter value">
    
        <!-- Button to add value to array -->
        <button type="button" onclick="addValueToArray()">Add New</button>
    
        <!-- Container to display added values -->
        <div id="addedValues"></div>
    
        <!-- Hidden input field to store array -->
        <input type="hidden" name="valuesArray" id="valuesArrayInput">
    
        <!-- Button to submit form -->
        <button type="button" onclick="submitForm()">Submit</button>
    </form>
    
    <script>
        // Array to store values
        var valuesArray = [];
    
        // Function to add value to array
        function addValueToArray() {
            // Get the value from the input field
            var value = document.getElementById('inputField').value;
    
            // Add the value to the array
            valuesArray.push(value);
    
            // Display the added values
            document.getElementById('addedValues').innerHTML += '<p>' + value + '</p>';
        }
    
        // Function to submit the form
        function submitForm() {
            // Assign the array values to the hidden input field in JSON format
            document.getElementById('valuesArrayInput').value = JSON.stringify(valuesArray);
            
            // Submit the form
            document.getElementById('mainForm').submit();
        }
    </script> --}}

    <form action="/submit-form" method="POST">
        @csrf
    
        <input type="radio" name="option" value="yes" onclick="showInputField()"> Yes
        <input type="radio" name="option" value="no" onclick="hideInputField()"> No
    
        <!-- Initially hidden input field -->
        <div id="inputFieldContainer" style="display: none;">
            <input type="text" name="additional_field" id="additionalField" placeholder="Additional Field">
        </div>
    
        <button type="submit">Submit</button>
    </form>
    
    <script>
        function showInputField() {
            document.getElementById('inputFieldContainer').style.display = 'block';
        }
    
        function hideInputField() {
            document.getElementById('inputFieldContainer').style.display = 'none';
        }
    </script>    
    
</body>
</html>