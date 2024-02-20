<!DOCTYPE html> 
<html> 

<head> 
	<link href= 
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'> 

	<script src= 
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'> 
	</script> 

	<script src= 
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'> 
	</script> 

    {{-- <link rel="stylesheet" href="{{ asset('css/multi.css') }}"> --}}

    <style>
        .step-container {
            position: relative;
            text-align: center;
            transform: translateY(-43%);
        }

        .step-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fff;
            border: 5px solid #007bff;
            line-height: 30px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            cursor: pointer; /* Added cursor pointer */
        }

        .step-line {
            position: absolute;
            top: 16px;
            left: 50px;
            width: calc(100% - 100px);
            height: 2px;
            background-color: #007bff;
            z-index: -1;
        }
    
    #multi-step-form{
		overflow-x: hidden;
	}
    </style>

    <script>
        var currentStep = 1;
        var updateProgressBar;

        function displayStep(stepNumber) {
            if (stepNumber >= 1 && stepNumber <= 5) {
                $(".step-" + currentStep).hide();
                $(".step-" + stepNumber).show();
                currentStep = stepNumber;
                updateProgressBar();
            }
        }

        $(document).ready(function() {
            $('#multi-step-form').find('.step').slice(1).hide();
        
            $(".next-step").click(function() {
            if (currentStep < 5) {
                $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
                currentStep++;
                setTimeout(function() {
                $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
                updateProgressBar();
                }, 500);
            }
            });

            $(".prev-step").click(function() {
            if (currentStep > 1) {
                $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
                currentStep--;
                setTimeout(function() {
                $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
                $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
                updateProgressBar();
                }, 500);
            }
            });

            updateProgressBar = function() {
            var progressPercentage = ((currentStep - 1) / 4) * 100;
            $(".progress-bar").css("width", progressPercentage + "%");
            }
        });

        var subjectObject = {
            "Dhaka": {
                "Mirpur": ["Mirpur TSO", "Kafrul"],
                "Paltan": ["New Paltan", "Old Pantan"],
                "Gulshan": ["Gulshan 1", "Gulshan 2"]    
            },
            "Rajshahi": {
                "Sadar": ["RCC"],
                "Puthia": ["Puthia"]
            },
            "Natore": {
                "Gurudaspur": ["Hat Gurudaspur", "Sabgari", "Khubjipur"],
                "Sadar": ["Sadar"]
            },
            "Barishal": {
                "Gouronodi": ["Gouronodi"],
                "Sadar": ["Sadar"]
            }
        }
        window.onload = function() {
            var subjectSel = document.getElementById("district");
            var topicSel = document.getElementById("thana");
            var chapterSel = document.getElementById("postoffice");
            for (var x in subjectObject) {
                subjectSel.options[subjectSel.options.length] = new Option(x, x);
            }
            subjectSel.onchange = function() {
                //empty Chapters- and Topics- dropdowns
                chapterSel.length = 1;
                topicSel.length = 1;
                //display correct values
                for (var y in subjectObject[this.value]) {
                topicSel.options[topicSel.options.length] = new Option(y, y);
                }
            }
            topicSel.onchange = function() {
                //empty Chapters dropdown
                chapterSel.length = 1;
                //display correct values
                var z = subjectObject[subjectSel.value][this.value];
                for (var i = 0; i < z.length; i++) {
                chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
                }
            }
        }
    </script>

	{{-- <link rel="stylesheet" href="multi.css">  --}}
</head> 

<body> 
	<div id="container" class="container mt-5">
        <div class="progress px-1" style="height: 3px;">
            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="step-container d-flex justify-content-between">
            <div class="step-circle" onclick="displayStep(1)">1</div>
            <div class="step-circle" onclick="displayStep(2)">2</div>
            <div class="step-circle" onclick="displayStep(3)">3</div>
            <div class="step-circle" onclick="displayStep(4)">4</div>
            <div class="step-circle" onclick="displayStep(5)">5</div>
        </div>

        <form id="multi-step-form" action={{route('submit.store')}} method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="step step-1">
            <!-- Step 1 form fields here -->
                <h3>Your Present Address</h3><br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <label for="district" class="form-label">District</label>
            
                            <select name="district" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Discrict.." 
                                class="form-select form-select-solid form-select-sm border border-secondary" id="district" required>
                                <option value="select" selected="selected">Select a District</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="field1" class="form-label">Thana/Upazila</label>
            
                            <select name="thana" aria-label="Select thana" data-control="select2" data-placeholder="Select your thana.." 
                                class="form-select form-select-solid form-select-sm border border-secondary" id="thana">
                                <option value="select">Select Thana/Upazila</option>
                                <option value="Gurudaspur" class="text-primary">
                                    Gurudaspur</option>
                                <option value="Mirpur" class="text-primary">
                                    Mirpur</option>
                                <option value="Khilgaon" class="text-primary">
                                    Khilgaon</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="postoffice" class="form-label">Post Office</label>
            
                            <select name="post_office" aria-label="Select post office" data-control="select2" data-placeholder="Select your post office.." 
                                class="form-select form-select-solid form-select-sm border border-secondary" id="postoffice">
                                <option value="select">Select Post office</option>
                                <option value="Sabgari" class="text-primary">
                                    Sabgari</option>
                                <option value="Mirpur TSO" class="text-primary">
                                    Mirpur TSO</option>
                                <option value="Aftabnagor" class="text-primary">
                                    Aftabnagor</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm">
                            <label for="houseno" class="form-label">House No./Road/Village</label>
            
                            <input type="text" class="form-control" id="houseNo" name="houseno" placeholder="House No./Road/Village" required>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-6">
                            <label for="field1" class="form-label">Alternat Mobile Number</label>
                            <i class="bi bi-question-circle-fill fw-bold text-dark align-item-end"></i>
                            <br>
                            <br>
                            <input type="text" class="form-control" id="altphone" name="alt_mobile" placeholder="House No./Road/Village">
                        </div>
                    </div>
                </div>
                {{-- <div class="mb-3">
                </div> --}}
                <br>
                <button type="button" class="btn btn-primary next-step ms-5">Next</button>
            </div>

            {{-- Age --}}
            <div class="step step-2">
                <!-- Step 2 form fields here -->
                <h3>Age</h3>
                <br>
                <div class="container align-item-center w-50">
                    <h3>Date of Birth</h3>
                    <div class="row">
                        <div class="col-4">
                            <h5>Day</h5>
                            <select name="day" aria-label="Select a day" data-control="select2" data-placeholder="Date" 
                                class="form-select form-select-solid form-select-lg border border-secondary">
                                <option value="select">Select Date</option>
                                <option value="1" class="text-primary">
                                1</option>
                                <option value="2" class="text-primary">
                                    2</option>
                                <option value="3" class="text-primary">
                                    3</option>
                                <option value="4" class="text-primary">
                                    4</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <h5>Month</h5>
                            <select name="month" aria-label="Select Month" data-control="select2" data-placeholder="Select Month" 
                                class="form-select form-select-solid form-select-lg border border-secondary">
                                <option value="month">Select Month</option>
                                <option value="January" class="text-primary">January</option>
                                <option value="February" class="text-primary">February</option>
                                <option value="March" class="text-primary">March</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <h5>Year</h5>
                            <select name="year" aria-label="Select year" data-control="select6" data-placeholder="Select Year.." 
                                class="form-select form-select-solid form-select-lg border border-secondary">
                                <option value="year">Select year</option>
                                <option value="2024" class="text-primary">
                                    2024</option>
                                <option value="2023" class="text-primary">
                                    2023</option>
                                <option value="2025" class="text-primary">
                                    2025</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-primary prev-step">Previous</button>
                    <button type="button" class="btn btn-primary next-step">Next</button>
                </div>
            </div>

            <div class="step step-3">
                <!-- Step 3 form fields here -->
                <h3>Select Your Job Type</h3>
                <br>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <label for="field1" class="form-label">Select Job Category</label>

                            <select name="jobcategory" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select Job category.." 
                                class="form-select form-select-solid form-select-lg border border-secondary">
                                <option value="jobcategory">Select a Job Category</option>
                                <option value="Accounting/Finance" class="text-primary">
                                Accounting/Finance</option>
                                <option value="Education/Training" class="text-primary">
                                    Education/Training</option>
                                <option value="IT/Telecommunication" class="text-primary">
                                    IT/Telecommunication</option>
                            </select>
                        </div>                        
                    </div>
                    <br><br>

                    <div class="row bg-secondary p-5 pb-10">
                        <div class="col-sm">
                            <label for="field1" class="form-label">Select Work Type</label>

                            {{-- <select name="worktype" aria-label="Select Work Type" data-control="select2" data-placeholder="Select Work Type.." 
                                class="form-select form-select-solid form-select-lg border border-secondary" id="worktype">
                                <option value="">Select Work Type</option>
                                <option value="C++" class="text-primary">
                                C++</option>
                                <option value="Laravel" class="text-primary">
                                    Laravel</option>
                                <option value="Spring Boot" class="text-primary">
                                    Spring Boot</option>
                            </select> --}}
                            <div id="selectedValues"></div><br><br>
                            <select name="worktype" aria-label="Select Work Type" onchange="updateSelectedValues(this)" 
                                data-control="select2" data-placeholder="Select Work Type.." 
                                class="form-select form-select-solid form-select-lg border border-secondary" id="worktype">
                                <option value="">Select Work Type</option>
                                <option value="C++" class="text-primary">
                                C++</option>
                                <option value="Laravel" class="text-primary">
                                    Laravel</option>
                                <option value="Spring Boot" class="text-primary">
                                    Spring Boot</option>
                            </select>



                        </div>                        
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-sm">
                            <label for="field1" class="form-label">Do you have any experience?</label><br><br>
                            <input class="form-check-input" onclick="showInputField()" type="radio" name="exp" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>

                            <input class="form-check-input" onclick="hideInputField()" type="radio" name="exp" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                            <br><br>
                            <div id="inputFieldContainer" style="display: block;">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="name" class="text-gray-700 fw-semibold fs-20">Latest Company Name</label>
                                        <input type="text" placeholder="Company Name" name="companyname" autocomplete="off" class="form-control bg-transparent"/>
                                    </div>  
                                    <div class="col-sm">
                                        <label for="designation" class="text-gray-700 fw-semibold fs-20">Latest Designation</label>
                                        <input type="text" placeholder="designation" name="designation" autocomplete="off" class="form-control bg-transparent"/>
                                    </div>                       
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="name" class="text-gray-700 fw-semibold fs-20">Employment Periood</label>
                                        <input type="date" placeholder="Start Date" name="workstart" autocomplete="off" class="form-control bg-transparent"/>
                                    </div>  
                                    <div class="col-sm">
                                        <label for="name" class="text-gray-700 fw-semibold fs-20"></label>
                                        <input type="date" placeholder="Last Date" name="workend" autocomplete="off" class="form-control bg-transparent"/>
                                    </div>                       
                                </div>
                            </div>
                            <br><br>
                            <button type="button" class="btn btn-primary prev-step">Previous</button>
                            <button type="button" class="btn btn-primary next-step">Next</button>
                        </div>                        
                    </div>
                    <br>
                    {{-- <x-job_exp_radio/> --}}
                </div>
            </div>

            <div class="step step-4">
                <!-- Step 4 form fields here -->
                <h1>Educational Qualifications</h1>
                <br><br>
                <h4>Description of Institutional Education</h4>
                <div class="row">
                    <div class="col-sm">
                        <label for="field1" class="form-label">Do you have any Academic Education?</label><br><br>
                        <input class="form-check-input" onclick="showInputFieldEdu()" type="radio" name="job" id="flexRadioDefaultEdu1" checked>
                        <label class="form-check-label" for="flexRadioDefaultEdu1">
                            Yes
                        </label>

                        <input class="form-check-input" onclick="hideInputFieldEdu()" type="radio" name="job" id="flexRadioDefaultEdu2" >
                        <label class="form-check-label" for="flexRadioDefaultEdu2">
                            No
                        </label>
                        <br><br>
                        <div id="inputFieldContainerEdu" style="display: block;">
                            <div class="row">
                                <div class="col-sm">
                                    <label for="name" class="text-gray-700 fw-semibold fs-20">Latest Education</label>
                                    <input type="text" placeholder="Education" name="education" autocomplete="off" class="form-control bg-transparent"/>
                                </div>  
                                <div class="col-sm">
                                    <label for="name" class="text-gray-700 fw-semibold fs-20">Latest Institute</label>
                                    <input type="text" placeholder="Latest Institute" name="institute" autocomplete="off" class="form-control bg-transparent"/>
                                </div>                       
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-sm">
                                    <label for="name" class="text-gray-700 fw-semibold fs-20">Educational Periood</label>
                                    <input type="date" placeholder="Educational Start" name="educationstart" autocomplete="off" class="form-control bg-transparent"/>
                                </div>  
                                <div class="col-sm">
                                    <label for="name" class="text-gray-700 fw-semibold fs-20"></label>
                                    <input type="date" placeholder="Educational End" name="educationend" autocomplete="off" class="form-control bg-transparent"/>
                                </div>                       
                            </div>
                        </div>
                        <br><br>
                    </div>                        
                </div>
                <button type="button" class="btn btn-primary prev-step">Previous</button>
                <button type="button" class="btn btn-primary next-step">Next</button>
            </div>

            <div class="step step-5">
                <!-- Step 5 form fields here -->
                <h3>Profile Image</h3>
                <div class="image-input image-input-outline align-item-center" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                    <!--begin::Preview existing avatar-->
                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
                    <!--end::Preview existing avatar-->
                    <!--begin::Label-->
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                        <i class="ki-duotone ki-pencil fs-7">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--begin::Inputs-->
                        <input type="file" name="profile_image" />
                        {{-- <input type="hidden" name="profile_image_remove" /> --}}
                        <!--end::Inputs-->
                    </label>
                    <!--end::Label-->
                    <!--begin::Cancel-->
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                        <i class="ki-duotone ki-cross fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <!--end::Cancel-->
                    <!--begin::Remove-->
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                        <i class="ki-duotone ki-cross fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <!--end::Remove-->
                </div>
                <br>
                <br>
                <button type="button" class="btn btn-primary prev-step">Previous</button>
                <button type="submit" class="btn btn-success" onclick="submitForm()">Submit</button>
            </div>
        </form>
    </div>

    {{-- <p>{{ config('auth.global_variable') }}</p> --}}

    <script>
        function showInputField() {
            document.getElementById('inputFieldContainer').style.display = 'block';
        }
    
        function hideInputField() {
            document.getElementById('inputFieldContainer').style.display = 'none';
        }

        function showInputFieldEdu() {
            document.getElementById('inputFieldContainerEdu').style.display = 'block';
        }
    
        function hideInputFieldEdu() {
            document.getElementById('inputFieldContainerEdu').style.display = 'none';
        }

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
        var valueDiv = document.createElement("h3");
        valueDiv.innerHTML = selectedValue;

        // Create checkboxes
        var checkboxContainer = document.createElement("div");
        checkboxContainer.className = "form-group d-inline-block";
        var checkboxes = {};
        for (var i = 0; i < checkboxLabels.length; i++) {
            var checkbox = document.createElement("input");
            checkbox.type = "checkbox";
            checkbox.className = "form-check-input border border-dark border-2";
            checkbox.id = "checkbox" + i;
            checkboxes[checkboxLabels[i].toLowerCase()] = false; // Initialize all checkboxes as false
            checkbox.addEventListener('change', function() {
                checkboxes[this.id.replace('checkbox', '').toLowerCase()] = this.checked;
            });
            var checkboxLabel = document.createElement("label");
            checkboxLabel.className = "form-check-label mr-3 text-dark";
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
{{-- <script src="{{ asset('js/multi.js') }}"></script>  --}}

</html> 
