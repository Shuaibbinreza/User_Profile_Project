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
            

            <!-- <form id="educationForm" style="display: none;">
                <div class="p-2 ">
                    <h6 class="fw-bolder">Academic </h6>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="levelOfEducation" class="form-label">Level of Education</label>
                        
                        <select class="form-select" id="levelOfEducation">
                            <option selected>Select</option>
                            <option value="1">Board 1</option>
                            <option value="2">Board 2</option>
                            <option value="3">Board 3</option>
                        </select>

                    </div>
                    <div class="col-md-6">
                        <label for="examTitle" class="form-label">Exam/Degree Title</label>
                        
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
                        <select class="form-select" id="result">
                            <option selected>Select</option>
                            <option value="1">Board 1</option>
                            <option value="2">Board 2</option>
                            <option value="3">Board 3</option>
                        </select>

                    </div>
                    <div class="col-md-6">
                        <label for="yearOFpassing" class="form-label">Year of Passing</label>
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

                //Add the rest of the form fields here 
                <div class="mb-4">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary"
                        id="cancelEducationBtn">Cancel</button>
                </div>
            </form> -->
            <form id="educationForm"  
                style="display: none;" method="POST" 
                enctype="multipart/form-data"
                action="{{ route('education.create') }}">
                @csrf
                @method('POST')
                <div class="p-2 ">
                    <h6 class="fw-bolder">Academic </h6>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="levelOfEducation" class="form-label">Level of Education</label>
                        <!-- <input type="text" class="form-control" id="levelOfEducation" value="Secondary" disabled> -->
                        <select name="education_level" 
                                {{-- data-control="select2"  --}}
                                data-placeholder="Degree Level.." 
                                class="form-select border border-secondary" 
                                id="education_level" required>
                            <option value="" selected>Select a Level</option>
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
                        <input type="text" class="form-control" id="concentration" name="major">
                    </div>
                    <div class="col-md-6" id="boardDiv">
                        <label for="board" class="form-label">Board</label>
                        <select name="board" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Board.." 
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
                        <input type="text" class="form-control" id="instituteName" name="education_institute">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="foreignInstitute" name="foreigninstitute">
                            <label class="form-check-label" for="foreignInstitute">This is a foreign
                                institute</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <h4 class="form-label">Educational Periood</h4>
                    <div class="col-sm">
                        <label for="education_start" class="form-label">Start Date</label>
                        <input type="date" placeholder="Educational Start" 
                            name="education_start" 
                            autocomplete="off" id="edustart"
                            class="form-control bg-transparent"/>
                        <span id="error-edustart" class="text-danger"></span> 
                    </div>  
                    <div class="col-sm edDiv" id="educationEnd" style="display: block">
                        <label for="education_end" class="form-label">End Date</label>
                        <input type="date" 
                            placeholder="Educational End" 
                            id="edEnd" name="education_end" 
                            autocomplete="off" 
                            class="form-control bg-transparent"  />
                    </div>                       
                    <div class="form-group form-check ms-5 mt-5">
                        <input type="checkbox" class="form-check-input" 
                            id="continueCheck" name="educationCK">
                        <label class="form-check-label" for="exampleCheck1">Still Studying Here</label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="result" class="form-label">Result</label>
                        <!-- <input type="text" class="form-control" id="levelOfEducation" value="Secondary" disabled> -->
                        <select class="form-select" id="resulttype" name="resulttype">
                            <option value="">Select</option>
                            <option value="Grade">Grade</option>
                            <option value="FirstDiv">First Division</option>
                            <option value="Appeared">Appeared</option>
                            <option value="Enrolled">Enrolled</option>
                            <option value="Pass">Pass</option>
                            <option value="Awarded">Awarded</option>
                            <option value="Do not mention">Do not mention</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="yearOFpassing" class="form-label">Year of Passing</label>
                        <!-- <input type="text" class="form-control" id="examTitle" value="SSC" disabled> -->
                        <select class="form-select" id="yearOFpassing" data-control="select2" name="year_of_passing">
                            <option selected>Select</option>
                        </select>
                    </div>                    
                </div>

                <div class="row mb-3">
                    <div class="col-sm">
                        <div id="marksDiv" style="display: none;">
                            <label for="result" class="form-label">Marks %</label>
                            <input type="text" class="form-control" id="marks" name="marks" placeholder="Marks %">
                        </div>
                        <div id="cgpaDiv">
                            <label for="result" class="form-label">CGPA</label>
                            <input type="text" class="form-control" id="cgpa" name="cgpa" placeholder="CGPA">
                        </div>
                    </div>
                    
                    <div class="col-sm" id="resscale" aria-disabled="true">
                        <label for="scale" class="form-label">Scale</label>
                        <!-- <input type="text" class="form-control" id="examTitle" value="SSC" disabled> -->
                        <select class="form-select" id="scale" name="scale">
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
                        <input type="text" class="form-control" id="duration" name="duration">
                    </div>
                    <div class="col-md-6">
                        <label for="achivement" class="form-label">Achievement</label>
                        <input type="text" class="form-control" id="achivement" name="achievement">

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

@if ($posts->isEmpty())
    <p>No posts found.</p>
@else
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->education_title }}</li>
        @endforeach
    </ul>
@endif