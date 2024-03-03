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
                                    <img src="{{$ProfileImage->profile_image}}" alt="" class="img-w">
                                    <h5 class="text-white py-2 bg-primary col-2  text-center">Change Photo</h5>
                                </div>
                                <div class="">
                                    <div class="row justify-content-lg-between">
                                        <div class="col-4">
                                            <div>
                                                <h6>First Name</h6>
                                                <p>{{$personal->first_name}}</p>
                                            </div>
                                            <div>
                                                <h6> Father's Name</h6>
                                                <p>{{$personal->father_name}}</p>
                                            </div>
                                            <div>
                                                <h6>Date of Birth</h6>
                                                <p>{{$dob->user_birthday}}</p>
                                            </div>
                                            <div>
                                                <h6>Religion</h6>
                                                <p>{{$personal->religion}}</p>
                                            </div>
                                            <div>
                                                <h6>Nationality</h6>
                                                <p>{{$personal->nationality}}</p>
                                            </div>
                                            <div>
                                                <h6>Passport Number</h6>
                                                <p>{{$personal->passport_number}}</p>
                                            </div>
                                            <div>
                                                <h6>Primary Mobile</h6>
                                                <p>{{$personal->primary_mobile}}</p>
                                            </div>

                                            <div>
                                                <h6>Emergency Contact</h6>
                                                <p>{{$personal->primary_mobile}}</p>
                                            </div>

                                            <div>
                                                <h6>Alternate Email</h6>
                                                <p>{{$personal->alternate_email}}</p>
                                            </div>

                                            <div>
                                                <h6>Height (Meter)</h6>
                                                <p>{{$personal->primary_mobile}}</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-3">
                                            <div>
                                                <h6>Last Name</h6>
                                                <p> {{$personal->last_name}} </p>
                                            </div>
                                            <div>
                                                <h6>Mother's Name</h6>
                                                <p>{{$personal->mother_name}}</p>
                                            </div>
                                            <div>
                                                <h6>Gender</h6>
                                                <p> {{$personal->gender}} </p>
                                            </div>
                                            <div>
                                                <h6>Marital Status</h6>
                                                <p> {{$personal->maritial_status}} </p>
                                            </div>

                                            <div>
                                                <h6>National ID</h6>
                                                <p> {{$personal->national_id}} </p>
                                            </div>

                                            <div>
                                                <h6>Passport Issue Date</h6>
                                                <p>Single</p>
                                            </div>

                                            <div>
                                                <h6>Secondary Mobile</h6>
                                                <p> {{$personal->secondary_mobile}} </p>
                                            </div>

                                            <div>
                                                <h6>Primary Email</h6>
                                                <p> {{Auth::user()->email}} </p>
                                            </div>

                                            <div>
                                                <h6>Blood Group</h6>
                                                <p> {{$personal->blood_group}} </p>
                                            </div>

                                            <div>
                                                <h6>Weight</h6>
                                                <p> {{$personal->weight}} </p>
                                            </div>
                                        </div>
                                        <div class="col-1 ">


                                            <button type="button" class="border-0 bg-white text-primary"
                                                data-bs-toggle="modal" data-bs-target="#personalEdit"
                                                data-bs-whatever="@mdo"> <i class="fa-solid fa-pen-to-square"
                                                    style="color: #376ac3;"></i> Edit
                                            </button>
                                            {{-- Modal for Editing --}}
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
                                                            <form action="/submit-form/{{$personal->id}}/update" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="d-flex gap-4">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">First Name:</label>
                                                                        <input type="text" class="form-control" name="first_name"
                                                                            id="recipient-name" placeholder="{{$personal->first_name}}"
                                                                            value="{{old('first_name', $personal->first_name)}}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Last Name:</label>
                                                                        <input type="text" class="form-control" value="{{old('last_name', $personal->last_name)}}"
                                                                            id="recipient-name" name="last_name">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-4">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Father's Name:</label>
                                                                        <input type="text" class="form-control" value="{{old('father_name', $personal->father_name)}}"
                                                                            id="recipient-name" name="father_name">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Mother's
                                                                            Name:</label>
                                                                            <input type="text" class="form-control" value="{{old('mother_name', $personal->mother_name)}}"
                                                                            id="recipient-name" name="mother_name">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-4">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Date of Birth</label>
                                                                        <input type="date" class="form-control"
                                                                            id="recipient-name" value="{{old('dob', $personal->dob)}}"
                                                                            name="dob">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Gender</label>
                                                                        <input type="text" class="form-control"
                                                                            id="recipient-name" name="gender" 
                                                                            value="{{old('gender', $personal->gender)}}">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-4">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Religion</label>
                                                                        <input type="text" class="form-control"
                                                                            id="recipient-name" name="religion" 
                                                                            value="{{old('religion', $personal->religion)}}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Marital
                                                                            Status</label>
                                                                        <input type="text" class="form-control" value="{{old('maritial_status', $personal->maritial_status)}}"
                                                                            id="recipient-name" name="maritial_status">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-4">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Nationality</label>
                                                                        <input type="text" class="form-control" value="{{old('nationality', $personal->nationality)}}"
                                                                            id="recipient-name" name="nationality">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">National Id</label>
                                                                        <input type="text" class="form-control" value="{{old('national_id', $personal->national_id)}}"
                                                                            id="recipient-name" name="national_id">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-4">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Passport
                                                                            Number</label>
                                                                        <input type="text" class="form-control" 
                                                                            value="{{old('passport_number', $personal->passport_number)}}"
                                                                            id="recipient-name" name="passport_number">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Passport Issue
                                                                            Date</label>
                                                                        <input type="date" class="form-control"
                                                                            value="{{old('passport_issue_date', $personal->passport_issue_date)}}"
                                                                            id="recipient-name" name="passport_issue_date">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-4">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Primary
                                                                            Mobile</label>
                                                                        <input type="text" class="form-control"
                                                                            id="recipient-name" value="{{old('primary_mobile', $personal->primary_mobile)}}"
                                                                            name="primary_mobile" >
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Secondary
                                                                            Mobile</label>
                                                                        <input type="text" class="form-control"
                                                                            id="recipient-name" value="{{old('secondary_mobile', $personal->secondary_mobile)}}"
                                                                            name="secondary_mobile">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-4">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Emergency
                                                                            Contact</label>
                                                                        <input type="text" class="form-control"
                                                                            id="recipient-name" name="emergency_contact"
                                                                            value="{{old('erergency_contact', $personal->emergency_contact)}}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Primary Email
                                                                        </label>
                                                                        <input type="email" class="form-control"
                                                                            value="{{old('email', Auth::user()->email)}}"
                                                                            id="recipient-name" name="email" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-4">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Alternate
                                                                            Email</label>
                                                                        <input type="email" class="form-control"
                                                                            value="{{old('alternate_email', $personal->alternate_email)}}"
                                                                            id="recipient-name" name="alternate_email">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Blood Group</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{old('blood_group', $personal->blood_group)}}"
                                                                            id="recipient-name" name="blood_group">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-4">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Height
                                                                            (meters)</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{old('height', $personal->height)}}"
                                                                            id="recipient-name" name="height">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Weight (kg)</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{old('weight', $personal->Weight)}}"
                                                                            id="recipient-name" name="weight">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer d-flex justify-content-start gap-3">
                                                                    <button class="btn btn-success"
                                                                        data-bs-dismiss="modal" type="submit">Save</button>
                                                                    <button type="button"
                                                                        class="btn btn-secondary">Close</button>
                                                                </div>
                                                            </form>
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