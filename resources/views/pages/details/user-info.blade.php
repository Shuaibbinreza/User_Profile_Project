<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BdJob</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/style.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/61d92adc5f.js" crossorigin="anonymous"></script>
</head>

<body class="container">

    <header>
        <ul class="nav nav-pills my-3 justify-content-center col-auto bg-light mx-auto" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active px-5" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true"><i class="fa-solid fa-user"></i> <br> Personal </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i
                        class="fa-solid fa-graduation-cap"></i><br> Education/Training</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-employment-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-employment" type="button" role="tab" aria-controls="pills-employment"
                    aria-selected="false"><i class="fa-solid fa-clipboard-user"></i> <br>Employment</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-information-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-information" type="button" role="tab" aria-controls="pills-information"
                    aria-selected="false"><i class="fa-solid fa-bars"></i><br> Other Information</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-accomplishment-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-accomplishment" type="button" role="tab" aria-controls="pills-accomplishment"
                    aria-selected="false"><i class="fa-solid fa-book-atlas"></i> <br> Accomplishment</button>
            </li>
        </ul>
    </header>

    <main>
        <div class="tab-content" id="pills-tabContent">
            <!-- personal part -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Personal Details
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="mb-5">
                                    <img src="images/kamrul.jpeg" alt="" class="img-w">
                                    <h5 class="text-white py-2 bg-primary col-2  text-center">Change Photo</h5>
                                </div>
                                <div class="">
                                    <div class="row justify-content-lg-between">
                                        <div class="col-4">
                                            <div>
                                                <h6>First Name</h6>
                                                <p>Kamrul</p>
                                            </div>
                                            <div>
                                                <h6> Father's Name</h6>
                                                <p>MD.Kamal Hossen</p>
                                            </div>
                                            <div>
                                                <h6>Date of Birth</h6>
                                                <p>06/09/2000</p>
                                            </div>
                                            <div>
                                                <h6>Religion</h6>
                                                <p>Islam</p>
                                            </div>
                                            <div>
                                                <h6>Primary Mobile</h6>
                                                <p>01798135862</p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div>
                                                <h6>Last Name</h6>
                                                <p>Hasan</p>
                                            </div>
                                            <div>
                                                <h6>Mother's Name</h6>
                                                <p>Shamima Akter</p>
                                            </div>
                                            <div>
                                                <h6>Gender</h6>
                                                <p>Male</p>
                                            </div>
                                            <div>
                                                <h6>Marital Status</h6>
                                                <p>Single</p>
                                            </div>
                                            <div>
                                                <h6>Secondary Mobile</h6>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="col-1 ">


                                            <button type="button" class="border-0 bg-white text-primary"
                                                data-bs-toggle="modal" data-bs-target="#personalEdit"
                                                data-bs-whatever="@mdo"> <i class="fa-solid fa-pen-to-square"
                                                    style="color: #376ac3;"></i> Edit
                                            </button>
                                            <div class="modal fade " id="personalEdit" tabindex="-1"
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
                                                                            class="col-form-label">First Name:</label>
                                                                        <input type="text" class="form-control"
                                                                            id="recipient-name">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Last Name:</label>
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
                                                                            class="col-form-label">Date of Birth</label>
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
                                                                            class="col-form-label">Blood Group</label>
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
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Address Details
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-lg-between">
                                        <div class="col-4">
                                            <div>
                                                <h6>Present Address</h6>
                                                <p>Basundhora Bolck C, Kuril, Dhaka</p>
                                            </div>
                                            <div>
                                                <h6> Permanent Address</h6>
                                                <p>Same as Present Address</p>
                                            </div>
                                        </div>
                                        <div class="col-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Career and Application Information
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-lg-between">
                                        <div class="col-4">
                                            <div>
                                                <h6>Objective</h6>
                                                <p>Kamrul</p>
                                            </div>
                                            <div>
                                                <h6>Present Salary</h6>
                                                <p>20000</p>
                                            </div>
                                            <div>
                                                <h6>Looking for (Job Level)</h6>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <h6></h6>
                                                <p></p>
                                            </div>
                                            <div>
                                                <h6>Expected Salary</h6>
                                                <p></p>
                                            </div>
                                            <div>
                                                <h6>Available for (Job Nature)</h6>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Preferred Areas
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-lg-between">
                                        <div class="col-4">
                                            <div>
                                                <h6>Preferred Job Categories</h6>
                                                <h6>Functional</h6>
                                            </div>
                                            <div>
                                                <h6>IT/Telecommunication</h6>
                                                <p>Preferred Job Location</p>
                                                <p>Inside Bangladesh </p>
                                            </div>
                                            <div>
                                                <h6>Outside Bangladesh</h6>
                                                <p>Add your preferred organization type (max 12)</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <h6>Special Skills </h6>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Disability Information (if any)
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-lg-between">
                                        <div class="col-4">
                                            <div>
                                                <h6>National Disability ID</h6>
                                                <h6>You didn't mention your ID yet.</h6>
                                            </div>
                                            <div>
                                                <p>If you are a person with disability and have no Disability ID Number,
                                                    please contact i2i support +88 01730369802 by Call/ SMS/ WhatsApp
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Education/Training part -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div class="accordion" id="accordionExample">
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
                                <div class="mt-5">
                                    <div class="row justify-content-lg-between">
                                        <div class="col-4">
                                            <div>
                                                <h6>Academic 2</h6>
                                                <br>
                                            </div>
                                            <div>
                                                <h6> Level of Education </h6>
                                                <p>Higher Secondary</p>
                                            </div>
                                            <div>
                                                <h6>Concentration/ Major/Group</h6>
                                                <p>Science</p>
                                            </div>
                                            <div>
                                                <h6>Institute Name </h6>
                                                <p>Mahilara Degree College</p>
                                            </div>
                                            <div>
                                                <h6>Result </h6>
                                                <p>Grade</p>
                                            </div>
                                            <div>
                                                <h6>Scale </h6>
                                                <p>5</p>
                                            </div>
                                            <div>
                                                <h6>Duration (Years) </h6>
                                                <p>2</p>
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
                                                <p>HSC</p>
                                            </div>
                                            <div>
                                                <h6>Board </h6>
                                                <p>Barishal</p>
                                                <br>
                                            </div>
                                            <div>
                                                <h6></h6>
                                                <p></p>
                                                <br>
                                            </div>
                                            <div>
                                                <h6>CGPA</h6>
                                                <p>5</p>
                                            </div>
                                            <div>
                                                <h6>Year of Passing </h6>
                                                <p>2018</p>
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
                                <!-- Academic 3 -->
                                <div class="my-5">
                                    <div class="row justify-content-lg-between">
                                        <div class="col-4">
                                            <div>
                                                <h6>Academic 3</h6>
                                                <br>
                                            </div>
                                            <div>
                                                <h6> Level of Education </h6>
                                                <p>Secondary</p>
                                            </div>
                                            <div>
                                                <h6>Concentration/ Major/Group</h6>
                                                <p>Science</p>
                                            </div>
                                            <div>
                                                <h6>Institute Name </h6>
                                                <p>Palordi School And College</p>
                                            </div>
                                            <div>
                                                <h6>Result </h6>
                                                <p>Grade</p>
                                            </div>
                                            <div>
                                                <h6>Scale </h6>
                                                <p>5</p>
                                            </div>
                                            <div>
                                                <h6>Duration (Years) </h6>
                                                <p>2</p>
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
                                                <p>SSC</p>
                                            </div>
                                            <div>
                                                <h6>Board </h6>
                                                <p>Barishal</p>
                                                <br>
                                            </div>
                                            <div>
                                                <h6></h6>
                                                <p></p>
                                                <br>
                                            </div>
                                            <div>
                                                <h6>CGPA</h6>
                                                <p>5</p>
                                            </div>
                                            <div>
                                                <h6>Year of Passing </h6>
                                                <p>2016</p>
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

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Training Summary
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-lg-between">
                                        <div class="col-12">
                                            <div class="">
                                                <div class="text-center" id="trainingSummary">
                                                    <i class="fa-solid fa-inbox fa-2xl " style="color: #2a8335;"></i>
                                                    <p class="mt-4">Currently no data exists! Please click on the
                                                        following
                                                        <br>
                                                        button to add your training information.
                                                    </p>
                                                </div>

                                                <form class="row" id="trainingForm" style="display:   none;">
                                                    <div class="p-3">
                                                        <h6 class="fw-bolder">Training</h6>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="trainingTitle" class="form-label">Training
                                                                    Title</label>
                                                                <input type="text" class="form-control"
                                                                    id="trainingTitle">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="country" class="form-label">Country</label>
                                                                <input type="text" class="form-control" id="country">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="topicsCovered" class="form-label">Topics
                                                                    Covered</label>
                                                                <input type="text" class="form-control"
                                                                    id="topicsCovered">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="trainingYear" class="form-label">Training
                                                                    Year</label>
                                                                <select class="form-select" id="trainingYear">
                                                                    <option selected>Select</option>
                                                                    <!-- Add options for years -->
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="institute"
                                                                    class="form-label">Institute</label>
                                                                <input type="text" class="form-control" id="institute">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="duration"
                                                                    class="form-label">Duration</label>
                                                                <input type="text" class="form-control" id="duration">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="location"
                                                                    class="form-label">Location</label>
                                                                <input type="text" class="form-control" id="location">
                                                            </div>
                                                        </div>

                                                        <div class="row p-3">
                                                            <div class="col-md-12">
                                                                <button type="submit"
                                                                    class="btn btn-success me-2">Save</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    id="cancelTrainingBtn">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="zoom-on-hover d-flex justify-content-center"
                                                    id="addTrainingBtn" type="button">
                                                    <div
                                                        class="text-success border border-3 border-success px-2 py-2 w-auto">
                                                        <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                        Add
                                                        Training Summary (If Required)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Professional Certification Summary
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-lg-between">
                                        <div class="col-12">
                                            <div class="">
                                                <div class="text-center" id="certificationSummary">
                                                    <i class="fa-solid fa-inbox fa-2xl " style="color: #2a8335;"></i>
                                                    <p class="mt-4">Currently no data exists! Please click on the
                                                        following button to add your <br> professional certification
                                                        .
                                                    </p>
                                                </div>

                                                <form class="row" id="certificationForm" style="display: none;">
                                                    <div class="p-3">
                                                        <h6 class="fw-bolder"> Achivement Certificate </h6>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="certificationTitle"
                                                                    class="form-label">Certification</label>
                                                                <input type="text" class="form-control"
                                                                    id="certificationTitle">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="institute"
                                                                    class="form-label">Institute</label>
                                                                <input type="text" class="form-control" id="institute">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="location"
                                                                    class="form-label">Location</label>
                                                                <input type="text" class="form-control" id="location">
                                                            </div>
                                                            <div class="col-md-6 mb-3 ">

                                                                <label for="Duration" class="form-label">Duration <span
                                                                        class="icon-question"> ? </span> </label>
                                                                <div class="d-flex gap-3">
                                                                    <div class="col-md-3 ">
                                                                        <input type="date" class="form-control "
                                                                            id="startDate">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="date" class="form-control"
                                                                            id="endDate">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="row p-3">
                                                            <div class="col-md-12">
                                                                <button type="submit"
                                                                    class="btn btn-success me-2">Save</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    id="cancelCertificationBtn">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="zoom-on-hover d-flex justify-content-center"
                                                    id="addCertificationBtn" type="button">
                                                    <div
                                                        class="text-success border border-3 border-success px-2 py-2 w-auto">
                                                        <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                        Add Certificate Summary (If Required)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <h6></h6>
                                            <p></p>
                                        </div>
                                        <div>
                                            <h6>Expected Salary</h6>
                                            <p></p>
                                        </div>
                                        <div>
                                            <h6>Available for (Job Nature)</h6>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Employment part -->
            <div class="tab-pane fade" id="pills-employment" role="tabpanel" aria-labelledby="pills-employment-tab"
                tabindex="0">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Employment History
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-lg-between">
                                        <div class="col-12">
                                            <div class="">
                                                <div class="text-center" id="experienceSummary">
                                                    <i class="fa-solid fa-inbox fa-2xl " style="color: #2a8335;"></i>
                                                    <p class="mt-4">Currently no data exists! Please click on the
                                                        following <br>
                                                        button to add your employment information.</p>
                                                </div>

                                                <form id="employmentHistory" style="display: none;">

                                                    <div class="p-1 mb-1">
                                                        <h5 class="fw-bolder">Add Experience</h5>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="Company Name" class="form-label">Level of
                                                                Education</label>
                                                            <input type="text" class="form-control" id="nameOfcompany">


                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="examTitle" class="form-label">Exam/Degree
                                                                Title</label>
                                                            <input type="text" class="form-control"
                                                                id="companyBusiness">

                                                        </div>

                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="designation"
                                                                class="form-label">Designation</label>
                                                            <input type="text" class="form-control" id="designation">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="department"
                                                                class="form-label">Department</label>
                                                            <input type="text" class="form-control" id="department">
                                                            <!-- <select class="form-select" id="board">
                                                      <option selected>Select</option>
                                                      <option value="1">Board 1</option>
                                                      <option value="2">Board 2</option>
                                                      <option value="3">Board 3</option>
                                                    </select> -->
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <label for="employmentPeriod" class="form-label">Employment
                                                                Period</label>
                                                            <div class="d-flex gap-3">
                                                                <div class="col-md-6">
                                                                    <input type="date" class="form-control"
                                                                        id="startDate">
                                                                    <div class="form-check mt-2">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="currentlyWorking">
                                                                        <label class="form-check-label"
                                                                            for="currentlyWorking">Currently
                                                                            Working</label>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="date" class="form-control"
                                                                        id="endDate">
                                                                </div>


                                                            </div>



                                                        </div>
                                                        <!-- <div class="col-md-6">
                                                      <label for="endDate" class="form-label"></label>
                                                      <input type="date" class="form-control" id="endDate" >
                                                      
                                                    </div> -->

                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <label for="instituteName" class="form-label">Institute
                                                                Name</label>
                                                            <textarea rows="4" class="form-control"
                                                                id="instituteName"></textarea>

                                                        </div>
                                                    </div>



                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <label for="companyLocation" class="form-label">Company
                                                                Location</label>
                                                            <input type="text" class="form-control"
                                                                id="companyLocation">

                                                        </div>

                                                    </div>

                                                    <!-- Add the rest of the form fields here -->
                                                    <div class="row p-3">
                                                        <div class="col-md-12">

                                                            <button type="submit" class="btn btn-success">Save</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                id="cancelHistorybtn">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="zoom-on-hover d-flex justify-content-center"
                                                    id="addEmploymentHistorybtn" type="button">
                                                    <h6 class="text-success border border-3 border-success mx-5 py-2 ">
                                                        <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                        Add Experience (If Required)</ </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Employment History (For Retired Army Person)
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="row justify-content-lg-between">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <div class="">
                                                <i class="fa-solid fa-inbox fa-2xl " style="color: #2a8335;"></i>
                                                <p class="mt-4">
                                                    If you are a retired army person then you can give that
                                                    information by clicking <br> on the following button.</p>
                                            </div>
                                            <div>
                                                <h6 class="text-success border border-3 border-success mx-5 py-2 ">
                                                    <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                    Add Education (If Required)</ </div>
                                            </div>
                                        </div>
                                        <div class="col-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                </div>
            </div>

            <!-- Other Information part -->
            <div class="tab-pane fade" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab"
                tabindex="0">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Skill
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row justify-content-lg-between mb-5">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <div class="">
                                                <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                                                <p class="mt-4">
                                                    Currently no data exists! Please click on the following button to
                                                    add your skill.</p>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button
                                                    class="text-success border border-3 border-success py-2 px-3 w-auto bg-white ">
                                                    <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                    Add Skill
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-lg-between mb-5">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <div class="">
                                                <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                                                <p class="mt-4">
                                                    Currently no data exists! Please click on the following button to
                                                    add your Skill <br> Description.</p>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button
                                                    class="text-success border border-3 border-success py-2 px-3 w-auto bg-white ">
                                                    <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                    Add Skill Description
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-lg-between mb-5">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <div class="">
                                                <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                                                <p class="mt-4">
                                                    Currently no data exists! Please click on the following button to
                                                    add your <br>Extracurricular Activities.</p>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button
                                                    class="text-success border border-3 border-success py-2 px-3 w-auto bg-white ">
                                                    <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                    Add Extracurricular Activities
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Language Proficiency
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row justify-content-lg-between mb-5">
                                        <div class="col-12">
                                            <div class="">
                                                <div class="text-center" id="languageSummary">
                                                    <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                                                    <p class="mt-4">
                                                        Currently no data exists! Please click on the following button
                                                        to add your <br>language proficiency.</p>
                                                </div>

                                                <form id="languageAdd" style="display: none;">
                                                    <div class="p-1 mb-1">
                                                        <h5 class="fw-bolder">Language </h5>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="language" class="form-label">Language</label>
                                                            <input type="text" class="form-control" id="language"
                                                                placeholder="Enter Language">
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="reading" class="form-label">Reading</label>
                                                            <select class="form-select" id="reading">
                                                                <option selected>Select</option>
                                                                <option value="beginner">Beginner</option>
                                                                <option value="intermediate">Intermediate</option>
                                                                <option value="advanced">Advanced</option>
                                                                <option value="fluent">Fluent</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="writing" class="form-label">Writing</label>
                                                            <select class="form-select" id="writing">
                                                                <option selected>Select</option>
                                                                <option value="beginner">Beginner</option>
                                                                <option value="intermediate">Intermediate</option>
                                                                <option value="advanced">Advanced</option>
                                                                <option value="fluent">Fluent</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="speaking" class="form-label">Speaking</label>
                                                            <select class="form-select" id="speaking">
                                                                <option selected>Select</option>
                                                                <option value="beginner">Beginner</option>
                                                                <option value="intermediate">Intermediate</option>
                                                                <option value="advanced">Advanced</option>
                                                                <option value="fluent">Fluent</option>
                                                            </select>
                                                        </div>

                                                    </div>


                                                    <div class="row p-2">
                                                        <div class="col-md-12">

                                                            <button type="submit" class="btn btn-success">Save</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                id="cancelbtn">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="d-flex justify-content-center">
                                                    <button
                                                        class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                        id="addLanguagebtn">
                                                        <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                        Add language
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Link Accounts
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row justify-content-lg-between mb-5">
                                        <div class="col-12">
                                            <div class="">
                                                <div class="text-center" id="accountSummary">
                                                    <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                                                    <p class="mt-4">
                                                        There is currently no data! To add your Link, kindly click the
                                                        following button. <br>You can add maximum three links.</p>
                                                </div>

                                                <form id="accountAdd" style="display: none;">
                                                    <div class="p-1 mb-1">
                                                        <h5 class="fw-bolder">Account Link </h5>
                                                    </div>
                                                    <div class="row mb-3">

                                                        <div class="col-md-4">
                                                            <label for="acount" class="form-label">Choose
                                                                Account</label>
                                                            <select class="form-select" id="account">
                                                                <option selected>Facebook</option>
                                                                <option value="beginner">LinkedIn</option>
                                                                <option value="intermediate">GitHub</option>
                                                                <option value="advanced">YouTube</option>
                                                                <option value="fluent">Others</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-8">
                                                            <label for="url" class="form-label">URL</label>
                                                            <input type="text" class="form-control" id="url"
                                                                placeholder="Enter URL">
                                                        </div>


                                                    </div>


                                                    <div class="row p-2">
                                                        <div class="col-md-12">

                                                            <button type="submit" class="btn btn-success">Save</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                id="canceladdbtn">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>


                                                <div class="d-flex justify-content-center">
                                                    <button
                                                        class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                        id="linkAccountbtn">
                                                        <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                        Add Link
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    References
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row justify-content-lg-between mb-5">
                                        <div class="col-12">
                                            <div class="">
                                                <div class="text-center" id="referenceSummary">
                                                    <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                                                    <p class="mt-4">
                                                        Currently no data exists! Please click on the following button
                                                        to add your <br>reference.</p>
                                                </div>

                                                <form class="" id="referenceAdd" style="display: none;">
                                                    <div class="p-1 mb-1">
                                                        <h5 class="fw-bolder">Reference </h5>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="name" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="name"
                                                                placeholder="Enter Name">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="designation"
                                                                class="form-label">Designation</label>
                                                            <input type="text" class="form-control" id="designation"
                                                                placeholder="Enter Designation">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="organization"
                                                                class="form-label">Organization</label>
                                                            <input type="text" class="form-control" id="organization"
                                                                placeholder="Enter Organization">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email"
                                                                placeholder="Enter Email">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="relation" class="form-label">Relation</label>
                                                            <select class="form-select" id="relation">
                                                                <option selected>Relative</option>
                                                                <option value="father">Family Friend</option>
                                                                <option value="mother">Academic</option>
                                                                <option value="sibling">Professional</option>
                                                                <option value="spouse">Others</option>
                                                                <!-- Add more options as needed -->
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="mobile" class="form-label">Mobile</label>
                                                            <input type="text" class="form-control" id="mobile"
                                                                placeholder="Enter Mobile Number">
                                                        </div>

                                                    </div>
                                                    <div class="row mb-3">

                                                        <div class="col-md-6">
                                                            <label for="phoneOff" class="form-label">Phone (Off)</label>
                                                            <input type="text" class="form-control" id="phoneOff"
                                                                placeholder="Enter Office Phone Number">
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="phoneRes" class="form-label">Phone (Res)</label>
                                                            <input type="text" class="form-control" id="phoneRes"
                                                                placeholder="Enter Residential Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">

                                                        <div class="col-md-6">
                                                            <label for="address" class="form-label">Address</label>
                                                            <textarea type="text" class="form-control" id="address"
                                                                rows="3" placeholder="Enter Address"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- Add the rest of the form fields here -->
                                                    <div class="row p-1">
                                                        <div class="col-md-12">

                                                            <button type="submit" class="btn btn-success">Save</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                id="referanceCancelBtn">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>


                                                <div class="d-flex justify-content-center">
                                                    <button
                                                        class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover "
                                                        id="referanceAddBTN">
                                                        <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                        Add Reference
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accomplishment part -->
            <div class="tab-pane fade" id="pills-accomplishment" role="tabpanel"
                aria-labelledby="pills-accomplishment-tab" tabindex="0">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <!-- accomplishment -->
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-lg-between">
                                        <div class="">
                                            <div class="">
                                                <div class="text-center" id="accomplishmentText">
                                                    <i class="fa-solid fa-inbox fa-2xl " style="color: #2a8335;"></i>
                                                    <p class="mt-4">Currently no data exists! Select & add your
                                                        portfolio url, Papers/Journal, <br>
                                                        Publications, etc to enhance your profile</p>
                                                </div>
                                                <div class="d-flex justify-content-center gap-3">

                                                    <!-- Portfolio button -->
                                                    <div class="" id="activeForm">
                                                        <form id="portfolioForm" style="display: none;">
                                                            <div class="">
                                                                <h6 class="fw-bolder">Portfolio (Max 2) </h6>


                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Title<span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">URL</label>
                                                                    <input type="" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Description<span
                                                                            class="text-danger">*</span></label>
                                                                    <div class="form-floating">
                                                                        <textarea class="form-control"
                                                                            placeholder="Leave a comment here"
                                                                            id="floatingTextarea2"
                                                                            style="height: 100px"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Add the rest of the form fields here -->
                                                            <div class="mb-4">
                                                                <button type="submit"
                                                                    class="btn btn-success">Save</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    id="cancelPortfolioBtn">Close</button>
                                                            </div>
                                                        </form>
                                                        <button
                                                            class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                            type="button" id="addPortfolioBtn">
                                                            <i class="fa-solid fa-plus fa-sm"
                                                                style="color: #04710b;"></i> Portfolio
                                                        </button>
                                                    </div>


                                                    <!-- Publications button -->
                                                    <div class="" id="publicationActiveForm">

                                                        <form id="publicationForm" style="display: none;">
                                                            <div class="">
                                                                <h5 class="fw-bolder text-success">Publication <span
                                                                        class="text-muted fw-bolder">(<span
                                                                            class="font-italic">Max 5</span>)</span>
                                                                </h5>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Title<span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Issued On</label>
                                                                    <input type="date" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>


                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">URL</label>
                                                                    <input type="" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Description<span
                                                                            class="text-danger">*</span></label>
                                                                    <div class="form-floating">
                                                                        <textarea class="form-control"
                                                                            placeholder="Leave a comment here"
                                                                            id="floatingTextarea2"
                                                                            style="height: 100px"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Add the rest of the form fields here -->
                                                            <div class="mb-4">
                                                                <button type="submit"
                                                                    class="btn btn-success">Save</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    id="cancelPublicationBtn">Close</button>
                                                            </div>
                                                        </form>
                                                        <button
                                                            class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                            type="button" id="addPublicationsBtn">
                                                            <i class="fa-solid fa-plus fa-sm"
                                                                style="color: #04710b;"></i> Publication
                                                        </button>

                                                    </div>

                                                    <!-- Awards/ Honors button -->
                                                    <div class="" id="awardActiveForm">

                                                        <form id="awardForm" style="display: none;">
                                                            <div class="">
                                                                <h5 class="fw-bolder text-success">Awards/Honors <span
                                                                        class="text-muted fw-bolder">(<span
                                                                            class="font-italic">Max 5</span>)</span>
                                                                </h5>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Title<span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Issued On</label>
                                                                    <input type="date" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>


                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">URL</label>
                                                                    <input type="" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Description<span
                                                                            class="text-danger">*</span></label>
                                                                    <div class="form-floating">
                                                                        <textarea class="form-control"
                                                                            placeholder="Leave a comment here"
                                                                            id="floatingTextarea2"
                                                                            style="height: 100px"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Add the rest of the form fields here -->
                                                            <div class="mb-4">
                                                                <button type="submit"
                                                                    class="btn btn-success">Save</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    id="cancelAwardBtn">Close</button>
                                                            </div>
                                                        </form>
                                                        <button
                                                            class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                            type="button" id="addAwardsBtn">
                                                            <i class="fa-solid fa-plus fa-sm"
                                                                style="color: #04710b;"></i> Awards/Honors
                                                        </button>

                                                    </div>


                                                    <!-- Projects -->

                                                    <div class="" id="projectActiveForm">

                                                        <form id="projectForm" style="display: none;">
                                                            <div class="">
                                                                <h5 class="fw-bolder text-success">Projects <span
                                                                        class="text-muted fw-bolder">(<span
                                                                            class="font-italic">Max 5</span>)</span>
                                                                </h5>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Title<span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Issued On</label>
                                                                    <input type="date" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>


                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">URL</label>
                                                                    <input type="" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Description<span
                                                                            class="text-danger">*</span></label>
                                                                    <div class="form-floating">
                                                                        <textarea class="form-control"
                                                                            placeholder="Leave a comment here"
                                                                            id="floatingTextarea2"
                                                                            style="height: 100px"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Add the rest of the form fields here -->
                                                            <div class="mb-4">
                                                                <button type="submit"
                                                                    class="btn btn-success">Save</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    id="cancelProjectBtn">Close</button>
                                                            </div>
                                                        </form>
                                                        <button
                                                            class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                            type="button" id="addProjectBtn">
                                                            <i class="fa-solid fa-plus fa-sm"
                                                                style="color: #04710b;"></i>Projects
                                                        </button>

                                                    </div>

                                                    <!-- Others -->

                                                    <div class="" id="othersActiveForm">

                                                        <form id="othersForm" style="display: none;">
                                                            <div class="">
                                                                <h5 class="fw-bolder text-success">Others <span
                                                                        class="text-muted fw-bolder">(<span
                                                                            class="font-italic">Max 5</span>)</span>
                                                                </h5>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Title<span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Issued On</label>
                                                                    <input type="date" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>


                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">URL</label>
                                                                    <input type="" class="form-control" id=""
                                                                        aria-describedby="">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Description<span
                                                                            class="text-danger">*</span></label>
                                                                    <div class="form-floating">
                                                                        <textarea class="form-control"
                                                                            placeholder="Leave a comment here"
                                                                            id="floatingTextarea2"
                                                                            style="height: 100px"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Add the rest of the form fields here -->
                                                            <div class="mb-4">
                                                                <button type="submit"
                                                                    class="btn btn-success">Save</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    id="cancelOthersBtn">Close</button>
                                                            </div>
                                                        </form>
                                                        <button
                                                            class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                            type="button" id="addOthersBtn">
                                                            <i class="fa-solid fa-plus fa-sm"
                                                                style="color: #04710b;"></i> Others
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

    <script>
        document.getElementById("addEducationBtn").addEventListener("click", function () {
            document.getElementById("educationForm").style.display = "block";
        });

        document.getElementById("cancelEducationBtn").addEventListener("click", function () {
            document.getElementById("educationForm").style.display = "none";
        });
    </script>


    <!-- For Training -->
    <script>
        document.getElementById("addTrainingBtn").addEventListener("click", function () {
            document.getElementById("trainingForm").style.display = "block";
            document.getElementById("trainingSummary").style.display = "none"
        });

        document.getElementById("cancelTrainingBtn").addEventListener("click", function () {
            document.getElementById("trainingForm").style.display = "none";
            document.getElementById("trainingSummary").style.display = "block"
        });
    </script>

    <!-- For Emoloyment History -->
    <script>
        document.getElementById("addEmploymentHistorybtn").addEventListener("click", function () {
            document.getElementById("employmentHistory").style.display = "block";
            document.getElementById("experienceSummary").style.display = "none";
        });

        document.getElementById("cancelHistorybtn").addEventListener("click", function () {
            document.getElementById("employmentHistory").style.display = "none";
            document.getElementById("experienceSummary").style.display = "block";
        });
    </script>

    <!-- For Certification -->
    <script>
        document.getElementById("addCertificationBtn").addEventListener("click", function () {
            document.getElementById("certificationForm").style.display = "block";
            document.getElementById("certificationSummary").style.display = "none";
        });

        document.getElementById("cancelCertificationBtn").addEventListener("click", function () {
            document.getElementById("certificationForm").style.display = "none";
            document.getElementById("certificationSummary").style.display = "block";

        });
    </script>
    <!-- For Language -->
    <script>
        document.getElementById("addLanguagebtn").addEventListener("click", function () {
            document.getElementById("languageAdd").style.display = "block";
            document.getElementById("languageSummary").style.display = "none";
        });

        document.getElementById("cancelbtn").addEventListener("click", function () {
            document.getElementById("languageAdd").style.display = "none";
            document.getElementById("languageSummary").style.display = "block";
        });
    </script>

    <!-- For Account -->

    <script>
        document.getElementById("linkAccountbtn").addEventListener("click", function () {
            document.getElementById("accountAdd").style.display = "block";
            document.getElementById("accountSummary").style.display = "none";
        });

        document.getElementById("canceladdbtn").addEventListener("click", function () {
            document.getElementById("accountAdd").style.display = "none";
            document.getElementById("accountSummary").style.display = "block";
        });
    </script>

    <!-- For Reference -->
    <script>
        document.getElementById("referanceAddBTN").addEventListener("click", function () {
            document.getElementById("referenceAdd").style.display = "block";
            document.getElementById("referenceSummary").style.display = "none";
        });

        document.getElementById("referanceCancelBtn").addEventListener("click", function () {
            document.getElementById("referenceAdd").style.display = "none";
            document.getElementById("referenceSummary").style.display = "block";
        });
    </script>
    <!-- For Accomplishment  -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // For Portfolio
            var addPortfolioBtn = document.getElementById("addPortfolioBtn");
            var portfolioForm = document.getElementById("portfolioForm");
            var cancelPortfolioBtn = document.getElementById("cancelPortfolioBtn");
            var activeForm = document.getElementById("activeForm");

            var accomplishmentText = document.getElementById("accomplishmentText");
            // For Publications
            var addPublicationsBtn = document.getElementById("addPublicationsBtn");
            var publicationActiveForm = document.getElementById("publicationActiveForm")
            var publicationForm = document.getElementById("publicationForm");
            var cancelPublicationBtn = document.getElementById("cancelPublicationBtn");

            // For Awards/ Honors

            var awardActiveForm = document.getElementById("awardActiveForm");
            var awardForm = document.getElementById("awardForm");
            var cancelAwardBtn = document.getElementById("cancelAwardBtn");
            var addAwardsBtn = document.getElementById("addAwardsBtn");

            // For Projects

            var projectActiveForm = document.getElementById("projectActiveForm");
            var projectForm = document.getElementById("projectForm");
            var cancelProjectBtn = document.getElementById("cancelProjectBtn");
            var addProjectBtn = document.getElementById("addProjectBtn");

            // For Others

            var othersActiveForm = document.getElementById("othersActiveForm");
            var othersForm = document.getElementById("othersForm");
            var cancelOthersBtn = document.getElementById("cancelOthersBtn");
            var addOthersBtn = document.getElementById("addOthersBtn");

            // For Portfolio
            addPortfolioBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "none";
                addPublicationsBtn.style.display = "none";
                addAwardsBtn.style.display = "none";
                addProjectBtn.style.display = "none";
                addOthersBtn.style.display = "none";
                portfolioForm.style.display = "block";
                activeForm.style.width = "100%";
                accomplishmentText.style.display = "none";
                publicationForm.style.display = "none";
            });

            cancelPortfolioBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "block";
                addPublicationsBtn.style.display = "block";
                addAwardsBtn.style.display = "block"
                addProjectBtn.style.display = "block";
                addOthersBtn.style.display = "block";
                portfolioForm.style.display = "none";
                accomplishmentText.style.display = "block";
                activeForm.style.width = "";

            });

            // For Publications
            addPublicationsBtn.addEventListener("click", function () {
                addPublicationsBtn.style.display = "none";
                addPortfolioBtn.style.display = "none";
                addAwardsBtn.style.display = "none";
                addProjectBtn.style.display = "none";
                addOthersBtn.style.display = "none";
                publicationForm.style.display = "block";
                publicationActiveForm.style.width = "100%";
                accomplishmentText.style.display = "none";
                portfolioForm.style.display = "none";
            });

            cancelPublicationBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "block";
                addPublicationsBtn.style.display = "block";
                addAwardsBtn.style.display = "block"
                addProjectBtn.style.display = "block";
                addOthersBtn.style.display = "block";
                publicationForm.style.display = "none";
                accomplishmentText.style.display = "block";
                publicationActiveForm.style.width = "";

            });

            // For Awards/ Honors
            addAwardsBtn.addEventListener("click", function () {
                addPublicationsBtn.style.display = "none";
                addPortfolioBtn.style.display = "none";
                addAwardsBtn.style.display = "none";
                addProjectBtn.style.display = "none";
                addOthersBtn.style.display = "none";
                awardForm.style.display = "block";
                awardActiveForm.style.width = "100%";
                accomplishmentText.style.display = "none";
                // portfolioForm.style.display = "none";
            });

            cancelAwardBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "block";
                addPublicationsBtn.style.display = "block";
                addAwardsBtn.style.display = "block"
                addProjectBtn.style.display = "block";
                addOthersBtn.style.display = "block";
                awardForm.style.display = "none";
                accomplishmentText.style.display = "block";
                awardActiveForm.style.width = "";

            });


            // Projects
            addProjectBtn.addEventListener("click", function () {
                addPublicationsBtn.style.display = "none";
                addPortfolioBtn.style.display = "none";
                addAwardsBtn.style.display = "none";
                addProjectBtn.style.display = "none";
                addOthersBtn.style.display = "none";
                projectForm.style.display = "block";
                projectActiveForm.style.width = "100%";
                accomplishmentText.style.display = "none";
                // portfolioForm.style.display = "none";
            });

            cancelProjectBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "block";
                addPublicationsBtn.style.display = "block";
                addAwardsBtn.style.display = "block"
                addProjectBtn.style.display = "block";
                addOthersBtn.style.display = "block";
                projectForm.style.display = "none";
                accomplishmentText.style.display = "block";
                projectActiveForm.style.width = "";

            });

            // For Others
            addOthersBtn.addEventListener("click", function () {
                addPublicationsBtn.style.display = "none";
                addPortfolioBtn.style.display = "none";
                addAwardsBtn.style.display = "none";
                addProjectBtn.style.display = "none";
                addOthersBtn.style.display = "none";
                othersForm.style.display = "block";
                othersActiveForm.style.width = "100%";
                accomplishmentText.style.display = "none";
                // portfolioForm.style.display = "none";
            });

            cancelOthersBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "block";
                addPublicationsBtn.style.display = "block";
                addAwardsBtn.style.display = "block"
                addProjectBtn.style.display = "block";
                addOthersBtn.style.display = "block";
                othersForm.style.display = "none";
                accomplishmentText.style.display = "block";
                othersActiveForm.style.width = "";

            });
        });
    </script>

</body>

</html>