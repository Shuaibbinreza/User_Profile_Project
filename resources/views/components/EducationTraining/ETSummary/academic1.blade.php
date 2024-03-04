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
            <form id="educationForm">
                @csrf
                <div class="p-2 ">
                    <h6 class="fw-bolder">Academic </h6>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="levelOfEducation" class="form-label">Level of Education</label>
                        <!-- <input type="text" class="form-control" id="levelOfEducation" value="Secondary" disabled> -->
                        <select name="education_level" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Discrict.." 
                            class="form-select border border-secondary" id="education_level" required>
                            <option value="" selected="selected">Select a Level</option>
                        </select>

                    </div>
                    <div class="col-md-6">
                        <label for="examTitle" class="form-label">Exam/Degree Title</label>
                        <!-- <input type="text" class="form-control" id="examTitle" value="SSC" disabled> -->
                        <select name="education_title" aria-label="Select post office" data-control="select2" data-placeholder="Select your post office.." 
                            class="form-select border border-secondary" id="education_title">
                            <option value="">Exam/Degree Title</option>
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
                        <select name="education_level" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Discrict.." 
                            class="form-select border border-secondary" id="board">
                            <option value="" selected="selected">Select Your Board</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Dinajpur">Dinajpur</option>
                            <option value="Cumilla">Cumilla</option>
                            <option value="Chattogram">Chattogram</option>
                            <option value="Jashore">Jashore</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Sylhel">Sylhel</option>
                            <option value="Madrasa">Madrasa</option>
                            <option value="BTEB">BTEB</option>
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
                        <select class="form-select" id="resulttype" name="resulttype">
                            <option value="">Select</option>
                            <option value="block">Grade</option>
                            <option value="none">First Division</option>
                            {{-- <option value="Appeared">Appeared</option>
                            <option value="Enrolled">Enrolled</option>
                            <option value="Pass">Pass</option>
                            <option value="Awarded">Awarded</option>
                            <option value="Do not mention">Do not mention</option> --}}
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
                    <div class="col-sm">
                        <label for="result" class="form-label">CGPA</label>
                        <div id="myDiv" style="display: block;">
                            <input type="text" class="form-control" id="marks" name="marks" placeholder="Marks">
                        </div>
                        <input type="text" class="form-control" id="cgpa" name="cgpa" placeholder="CGPA">
                    </div>
                    
                    <div class="col-sm">
                        <label for="yearOFpassing" class="form-label">Scale</label>
                        <!-- <input type="text" class="form-control" id="examTitle" value="SSC" disabled> -->
                        <select class="form-select" id="yearOFpassing" name="scale">
                            <option selected>Select</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
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

                <div class="col-sm" style="display: none" id="marksfield">
                    <label for="result" class="form-label">Marks %</label>
                    {{-- <input type="text" class="form-control" id="marks" name="marks" placeholder="Marks"> --}}
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

{{-- <label for="grades">Select grade:</label>
    <select id="grades" onchange="showHideDiv()">
        <option value="none">None</option>
        <option value="block">Grade</option>
        <!-- Add more options if needed -->
    </select>
    
    <div id="myDiv">
        <h2>Grade Selected</h2>
        <h2>Grade Selected</h2>
        <!-- Content of the div -->
    </div> --}}
