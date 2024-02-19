<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dropdown Selection</title>
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <!-- Selected values display -->
    <div id="selectedValues"></div>

    <!-- Form containing the dropdown -->
    <form id="multi-step-form" action="/submit-form" method="POST">
        @csrf
        <div class="form-group">
            <!-- Dropdown -->
            <select name="dropdown" id="dropdown" class="form-control" onchange="updateSelectedValues(this)">
                <option value="value1">Self</option>
                <option value="value2">Job</option>
                <option value="value3">Training</option>
                <option value="value4">University</option>
                <option value="value5">NTVQF</option>
            </select>
        </div>
        <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
    </form>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Array to store selected values
    var selectedValues = [];
    var checkboxLabels = ["Self", "Job", "Training", "University", "NTVQF"];

    function updateSelectedValues(dropdown) {
        // Get the selected value
        var selectedValue = dropdown.value;
        
        // Display the selected value and remove button on a new line
        var selectedValuesDiv = document.getElementById("selectedValues");
        var selectedValueContainer = document.createElement("div");
        selectedValueContainer.className = "selectedValueContainer";
        var valueDiv = document.createElement("div");
        valueDiv.innerHTML = selectedValue;

        // Create checkboxes
        var checkboxContainer = document.createElement("div");
        checkboxContainer.className = "form-group d-inline-block";
        var checkboxes = {};
        for (var i = 0; i < checkboxLabels.length; i++) {
            var checkbox = document.createElement("input");
            checkbox.type = "checkbox";
            checkbox.className = "form-check-input";
            checkbox.id = "checkbox" + i;
            checkboxes[checkboxLabels[i].toLowerCase()] = false; // Initialize all checkboxes as false
            checkbox.addEventListener('change', function() {
                checkboxes[this.id.replace('checkbox', '').toLowerCase()] = this.checked;
            });
            var checkboxLabel = document.createElement("label");
            checkboxLabel.className = "form-check-label mr-3";
            checkboxLabel.setAttribute("for", "checkbox" + i);
            checkboxLabel.innerHTML = checkboxLabels[i];
            var checkboxWrapper = document.createElement("div");
            checkboxWrapper.className = "form-check form-check-inline";
            checkboxWrapper.appendChild(checkbox);
            checkboxWrapper.appendChild(checkboxLabel);
            checkboxContainer.appendChild(checkboxWrapper);
        }

        // Create a remove button for the value
        var removeBtn = document.createElement("button");
        removeBtn.innerHTML = "Remove";
        removeBtn.className = "btn btn-danger";
        removeBtn.onclick = function () {
            // Remove the value from the array
            var index = selectedValues.findIndex(obj => obj.value === selectedValue);
            if (index !== -1) {
                selectedValues.splice(index, 1);
            }
            // Remove the value and the remove button from the displayed values
            selectedValuesDiv.removeChild(selectedValueContainer);
        };

        // Append the value, checkboxes, and remove button to the selected values div
        selectedValueContainer.appendChild(valueDiv);
        selectedValueContainer.appendChild(checkboxContainer);
        selectedValueContainer.appendChild(removeBtn);
        selectedValuesDiv.appendChild(selectedValueContainer);

        // Store the selected value and checkbox states in the array
        selectedValues.push({
            value: selectedValue,
            ...checkboxes
        });

        // Clear the dropdown
        dropdown.selectedIndex = 0;

        // Print the selected values array (for demonstration purposes)
        console.log(selectedValues);
    }

    function submitForm() {
        // Serialize the array and store it in a hidden input field
        var serializedValues = JSON.stringify(selectedValues);
        var hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'selected_values';
        hiddenInput.value = serializedValues;
        document.getElementById('multi-step-form').appendChild(hiddenInput);

        // Submit the form
        document.getElementById("multi-step-form").submit();
    }
</script>
</body>
</html>
