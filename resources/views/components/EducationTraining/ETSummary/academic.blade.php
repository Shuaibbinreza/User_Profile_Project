<div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Academic Summary
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- Academic 1 -->
            <div class="mb-5">
                <div class="row justify-content-lg-between">

                    <div class="col-4">
                        <div>
                            <h6>Academic 1</h6>
                            <br>
                        </div>
                        <div>
                            <h6> Level of Education </h6>
                            <p>Bachelor/Honors</p>
                        </div>
                        <div>
                            <h6>Concentration/ Major/Group</h6>
                            <p>Concentration/ Major/Group</p>
                        </div>
                        <div>
                            <h6>Institute Name </h6>
                            <p>American International University-Bangladesh</p>
                        </div>
                        <div>
                            <h6>Result </h6>
                            <p>Grade</p>
                        </div>
                        <div>
                            <h6>Scale </h6>
                            <p>4</p>
                        </div>
                        <div>
                            <h6>Duration (Years) </h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <div>
                            <h6></h6>
                            <br>
                            <p></p>
                        </div>
                        <div>
                            <h6>Exam/Degree Title</h6>
                            <p>Bachelor in Engineering (BEngg)</p>
                            <br>
                            <br>
                        </div>
                        <div>
                            <h6></h6>
                            <p></p>
                            <br>
                        </div>
                        <div>
                            <h6></h6>
                            <p></p>
                            <br>
                        </div>
                        <div>
                            <h6>CGPA</h6>
                            <p>3.5</p>
                        </div>
                        <div>
                            <h6>Year of Passing </h6>
                            <p>2023</p>
                        </div>
                        <div>
                            <h6>Achievement </h6>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 ">
                        <div class="d-flex">
                            <button type="button" class="border-0 bg-white text-primary"
                                data-bs-toggle="modal" data-bs-target="#educationEdit"
                                data-bs-whatever="@mdo"> <i class="fa-solid fa-pen-to-square"
                                    style="color: #376ac3;"></i> <span class="fw-bolder">Edit</span>
                            </button>
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal"
                                data-bs-target="#deleteModel" class="border-0 bg-white">
                                <i class="fa-solid fa-trash-can" style="color: #cb1111;"></i> <span
                                    class="text-danger fw-bolder">Delete</span>
                            </button>
                        </div>

                        <!--Delete Modal -->
                        <div class="modal fade" id="deleteModel" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><i
                                                class="fa-solid fa-trash-can fa-xl"
                                                style="color: #cb1111;"></i> Delete!
                                        </h1>
                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure, you want to delete this record?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancle</button>
                                        <button type="button"
                                            class="btn btn-danger">Yes,Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade " id="educationEdit" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit
                                        </h1>
                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="d-flex gap-4">
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">First
                                                        Name:</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Last
                                                        Name:</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="d-flex gap-4">
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Father's
                                                        Name:</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Mother's
                                                        Name:</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="d-flex gap-4">
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Date
                                                        of Birth</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Gender</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="d-flex gap-4">
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Religion</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Marital
                                                        Status</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="d-flex gap-4">
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Nationality</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">National Id</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="d-flex gap-4">
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Passport
                                                        Number</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Passport Issue
                                                        Date</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="d-flex gap-4">
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Primary
                                                        Mobile</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Secondary
                                                        Mobile</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="d-flex gap-4">
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Emergency
                                                        Contact</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Primary Email
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="d-flex gap-4">
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Alternate
                                                        Email</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Blood
                                                        Group</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="d-flex gap-4">
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Height
                                                        (meters)</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Weight (kg)</label>
                                                    <input type="text" class="form-control"
                                                        id="recipient-name">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-start gap-3">
                                        <button type="button" class="btn btn-success"
                                            data-bs-dismiss="modal">Save</button>
                                        <button type="button"
                                            class="btn btn-secondary">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Academic 2 -->
            
            <!-- Academic 3 -->
            

            <form id="educationForm" style="display: none;">
                <div class="p-2 ">
                    <h6 class="fw-bolder">Academic </h6>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="levelOfEducation" class="form-label">Level of Education</label>
                        <!-- <input type="text" class="form-control" id="levelOfEducation" value="Secondary" disabled> -->
                        <select class="form-select" id="levelOfEducation">
                            <option selected>Select</option>
                            <option value="1">Board 1</option>
                            <option value="2">Board 2</option>
                            <option value="3">Board 3</option>
                        </select>

                    </div>
                    <div class="col-md-6">
                        <label for="examTitle" class="form-label">Exam/Degree Title</label>
                        <!-- <input type="text" class="form-control" id="examTitle" value="SSC" disabled> -->
                        <select class="form-select" id="examTitle">
                            <option selected>Select</option>
                            <option value="1">Board 1</option>
                            <option value="2">Board 2</option>
                            <option value="3">Board 3</option>
                        </select>
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="concentration"
                            class="form-label">Concentration/Major/Group</label>
                        <input type="text" class="form-control" id="concentration">
                    </div>
                    <div class="col-md-6">
                        <label for="board" class="form-label">Board</label>
                        <select class="form-select" id="board">
                            <option selected>Select</option>
                            <option value="1">Board 1</option>
                            <option value="2">Board 2</option>
                            <option value="3">Board 3</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="instituteName" class="form-label">Institute Name</label>
                        <input type="text" class="form-control" id="instituteName">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="foreignInstitute">
                            <label class="form-check-label" for="foreignInstitute">This is a foreign
                                institute</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="result" class="form-label">Result</label>
                        <!-- <input type="text" class="form-control" id="levelOfEducation" value="Secondary" disabled> -->
                        <select class="form-select" id="result">
                            <option selected>Select</option>
                            <option value="1">Board 1</option>
                            <option value="2">Board 2</option>
                            <option value="3">Board 3</option>
                        </select>

                    </div>
                    <div class="col-md-6">
                        <label for="yearOFpassing" class="form-label">Year of Passing</label>
                        <!-- <input type="text" class="form-control" id="examTitle" value="SSC" disabled> -->
                        <select class="form-select" id="yearOFpassing">
                            <option selected>Select</option>
                            <option value="1">Board 1</option>
                            <option value="2">Board 2</option>
                            <option value="3">Board 3</option>
                        </select>
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="duration" class="form-label">Duration (Years)</label>
                        <input type="text" class="form-control" id="duration">


                    </div>
                    <div class="col-md-6">
                        <label for="achivement" class="form-label">Achievement</label>
                        <input type="text" class="form-control" id="achivement">

                    </div>

                </div>

                <!-- Add the rest of the form fields here -->
                <div class="mb-4">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary"
                        id="cancelEducationBtn">Cancel</button>
                </div>
            </form>
            <div class="border border-3 border-success px-2 py-2 mb-1 w-25 zoom-on-hover  text-success"
                type="button" id="addEducationBtn">
                <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i> Add a Education
                (If Required)
            </div>
        </div>
    </div>
</div>

<select id="grades" onchange="showHideDiv()">
    <option value="none">None</option>
    <option value="block">Grade</option>
    <!-- Add more options if needed -->
</select>

<div id="myDiv" style="display: none;">
    <h2>Grade Selected</h2>
    <!-- Content of the div -->
</div>

<script>
    var subjectObject = {
        "PSC/5 Pass": ["PSC","Ebtadaye", "5 Pass", "Others"],
        "JSC/JDC/8 Pass": ["JSC", "JDC", "8 Pass", "Others"],
        "Secondary": ["SSC", "O-Level", "Dakhil(Madrasa)", "SSC (Vocational)", "Others"],
        "Higher Secondary": ["HSC", "A-Level", "Alim(Madrasa)", "HSC (Vocational)", "HSC (BMT)", "Others"],
        "Diploma": ["Diploma in Engineering", "PGT", "Diploma in Automation", "Others"],
        "Bacchelor/Honours": ["Bachellor of Science (BSc)", "Bachelor of Arts (BA)", "Others"],
        "Masters": ["MSc", "MA", "MBA", "Others"],
        "PhD (Doctor of Philosophy)": ["HTML", "CSS", "JavaScript"],
    }
    window.onload = function() {
        var subjectSel = document.getElementById("education_level");
        var techSel = document.getElementById("education_title");
        var resultType = document.getElementById("resulttype");
        var marksField = document.getElementById("marksfield");
        
        // Populate subjects dropdown
        for (var x in subjectObject) {
            subjectSel.options[subjectSel.options.length] = new Option(x, x);
        }
        
        // On subject change, update techs dropdown
        subjectSel.onchange = function() {
            // Empty techs dropdown
            techSel.length = 1;
            // Get selected subject
            var techs = subjectObject[this.value];
            // Populate techs dropdown
            for (var i = 0; i < techs.length; i++) {
                techSel.options[techSel.options.length] = new Option(techs[i], techs[i]);
            }
        }

        // Add event listener for resulttype dropdown
        function showHideDiv() {
            // Get the selected value from the dropdown
            var selectedValue = document.getElementById("grades").value;
            
            // Get the div element
            var divElement = document.getElementById("myDiv");
            
            // Update the display style based on the selected value
            divElement.style.display = selectedValue;
        }
    }
</script>
