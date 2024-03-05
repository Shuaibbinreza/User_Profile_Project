@php
$nationalities = ['American', 'British' , 'Bangladeshi' , 'Canadian', 'French', 'German']; // Add as many as needed
@endphp


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
                @if ($ProfileImage)
                    <img src="{{$ProfileImage->profile_image}}" alt="" class="img-w">
                @endif
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
                            <p>{{$personal->dob}}</p>
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
                            <p>{{$personal->emergency_contact}}</p>
                        </div>

                        <div>
                            <h6>Alternate Email</h6>
                            <p>{{$personal->alternate_email}}</p>
                        </div>

                        <div>
                            <h6>Height (Meter)</h6>
                            <p>{{$personal->height}}</p>
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
                                        <form action="/submit-form/{{$personal->id}}/update" method="POST" id="myForm">
                                            @csrf
                                            @method('PUT')
                                            <div class="d-flex gap-4">
                                                <div class="mb-3">
                                                    <label for="first_name"
                                                        class="col-form-label">First Name:</label>
                                                    <input type="text" class="form-control" name="first_name"
                                                        id="first_name" placeholder="{{$personal->first_name}}"
                                                        value="{{old('first_name', $personal->first_name)}}">

                                                    <span id="first-name-error" style="color: red; display: none;"></span>
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
                                            <div class="d-flex gap-4" style="width: 100%;">
                                                <div class="mb-3" style="flex-grow: 1;">
                                                    <label for="dob"
                                                        class="col-form-label">Date of Birth</label>
                                                    <input type="date" class="form-control"
                                                        id="dob" value="{{old('dob', $personal->dob)}}"
                                                        name="dob">

                                                    <span id="date-of-birth-error" style="color: red; display: none;"></span>
                                                </div>
                                                <div class="mb-3" style="flex-grow: 1;">
                                                    <label for="gender" class="col-form-label">Gender</label>
                                                    <select class="form-control" id="gender" data-control="select2" name="gender">
                                                        <option value="">Select Gender</option>
                                                        <option value="Male" {{ old('gender', $personal->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                                        <option value="Female" {{ old('gender', $personal->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                                        <option value="Other" {{ old('gender', $personal->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                                                    </select>
                                                    <span id="gender-error" style="color: red; display: none;"></span>

                                                </div>
                                            </div>
                                            <div class="d-flex gap-4" style="width: 100%;">
                                                <div class="mb-3" style="flex-grow: 1;">
                                                    <label for="religion" class="col-form-label">Religion</label>
                                                    <select class="form-control" id="religion" data-control="select2" name="religion">
                                                        <option value="">Select Religion</option>
                                                        <option value="Christianity" {{ old('religion', $personal->religion) == 'Christianity' ? 'selected' : '' }}>Christianity</option>
                                                        <option value="Islam" {{ old('religion', $personal->religion) == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                        <option value="Hinduism" {{ old('religion', $personal->religion) == 'Hinduism' ? 'selected' : '' }}>Hinduism</option>
                                                        <option value="Buddhism" {{ old('religion', $personal->religion) == 'Buddhism' ? 'selected' : '' }}>Buddhism</option>
                                                        <option value="Sikhism" {{ old('religion', $personal->religion) == 'Sikhism' ? 'selected' : '' }}>Sikhism</option>
                                                        <option value="Judaism" {{ old('religion', $personal->religion) == 'Judaism' ? 'selected' : '' }}>Judaism</option>
                                                        <option value="Other" {{ old('religion', $personal->religion) == 'Other' ? 'selected' : '' }}>Other</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3" style="flex-grow: 1;">
                                                    <label for="marital-status" class="col-form-label">Marital Status</label>
                                                    <select class="form-control" id="marital-status" data-control="select2" name="maritial_status">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" {{ old('maritial_status', $personal->maritial_status) == 'Single' ? 'selected' : '' }}>Single</option>
                                                        <option value="Married" {{ old('maritial_status', $personal->maritial_status) == 'Married' ? 'selected' : '' }}>Married</option>
                                                        <option value="Divorced" {{ old('maritial_status', $personal->maritial_status) == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                                        <option value="Widowed" {{ old('maritial_status', $personal->maritial_status) == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                                        <option value="Separated" {{ old('maritial_status', $personal->maritial_status) == 'Separated' ? 'selected' : '' }}>Separated</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-4" style="width: 100%;">
                                                <div class="mb-3" style="flex-grow: 1;">
                                                    <label for="nationality" class="col-form-label">Nationality</label>
                                                    <select class="form-control" id="nationality" data-control="select2" name="nationality">
                                                        <option value="">Select Nationality</option>
                                                        @foreach($nationalities as $nationality)
                                                            <option value="{{ $nationality }}" {{ old('nationality', $personal->nationality) == $nationality ? 'selected' : '' }}>{{ $nationality }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span id="nationality-error" style="color: red; display: none;"></span>
                                                </div>
                                                <div class="mb-3" style="flex-grow: 1;">
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
                                                    <label for="p-mobile"
                                                        class="col-form-label">Primary
                                                        Mobile</label>
                                                    <input type="text" class="form-control"
                                                        id="p-mobile" value="{{old('primary_mobile', $personal->primary_mobile)}}"
                                                        name="primary_mobile" >
                                                    <span id="p-mobile-error" style="color: red; display: none;"></span>
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
                                                    <label for="emergency-contact"
                                                        class="col-form-label">Emergency
                                                        Contact</label>
                                                    <input type="text" class="form-control"
                                                        id="emergency-contact" name="emergency_contact"
                                                        value="{{old('erergency_contact', $personal->emergency_contact)}}">
                                                    <span id="emergency-contact-error" style="color: red; display: none;"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email"
                                                        class="col-form-label">Primary Email
                                                    </label>
                                                    <input type="email" class="form-control"
                                                        value="{{old('email', Auth::user()->email)}}"
                                                        id="email" name="email" readonly>
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
                                                    <label for="blood-group" class="col-form-label">Blood Group</label>
                                                    <select class="form-control" id="blood-group" data-control="select2" name="blood_group">
                                                        <option value="">Select Blood Group</option>
                                                        <option value="A+" {{ old('blood_group', $personal->blood_group) == 'A+' ? 'selected' : '' }}>A+</option>
                                                        <option value="A-" {{ old('blood_group', $personal->blood_group) == 'A-' ? 'selected' : '' }}>A-</option>
                                                        <option value="B+" {{ old('blood_group', $personal->blood_group) == 'B+' ? 'selected' : '' }}>B+</option>
                                                        <option value="B-" {{ old('blood_group', $personal->blood_group) == 'B-' ? 'selected' : '' }}>B-</option>
                                                        <option value="AB+" {{ old('blood_group', $personal->blood_group) == 'AB+' ? 'selected' : '' }}>AB+</option>
                                                        <option value="AB-" {{ old('blood_group', $personal->blood_group) == 'AB-' ? 'selected' : '' }}>AB-</option>
                                                        <option value="O+" {{ old('blood_group', $personal->blood_group) == 'O+' ? 'selected' : '' }}>O+</option>
                                                        <option value="O-" {{ old('blood_group', $personal->blood_group) == 'O-' ? 'selected' : '' }}>O-</option>
                                                    </select>
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
                                                    type="submit">Save</button>
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