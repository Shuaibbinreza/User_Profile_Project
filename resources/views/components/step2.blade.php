<!DOCTYPE html> 
<html> 

    <head> 
    <link href="multiform.bundle.css" rel="stylesheet">
	<link href= 
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<script src= 
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'> 
	</script> 

	<script src= 
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'> 
	</script> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head> 

<body> 

            <div class="step step-1 card">
                <!-- Step 1 form fields here -->
                <div class="card-header">
                    <h2 class="m-5">Your Present Address</h2>
                </div>
                {{-- <hr> --}}
                <div class="container card-body p-5">
                    <div class="row">
                        <div class="col-sm">
                            <label for="district" class="form-label required">District</label>
            
                            <select name="district" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Discrict.." 
                                class="form-select form-select-solid form-select-sm border border-secondary" id="district" required>
                                <option value="" selected="selected">Select a District</option>
                            </select>
                            <div id="district-error" class="text-danger"></div>
                        </div>
                        <div class="col-sm">
                            <label for="field1" class="form-label required">Thana/Upazila</label>
            
                            <select name="thana" aria-label="Select thana" data-control="select2" data-placeholder="Select your thana.." 
                                class="form-select form-select-solid form-select-sm border border-secondary" id="thana">
                                <option value="">Select Thana/Upazila</option>
                            </select>

                            <div id="thana-error" class="text-danger"></div>
                        </div>
                        <div class="col-sm">
                            <label for="postoffice" class="form-label required">Post Office</label>
            
                            <select name="post_office" aria-label="Select post office" data-control="select2" data-placeholder="Select your post office.." 
                                class="form-select form-select-solid form-select-sm border border-secondary" id="postoffice">
                                <option value="">Select Post office</option>
                            </select>
                            <div id="po-error" class="text-danger"></div>
                        </div>
                    </div>
                    {{-- <div id="step-1-error1" class="text-danger"></div> --}}
                    <br>
                    <div class="row">
                        <div class="col-sm">
                            <label for="houseno" class="form-label required">House No./Road/Village</label>
                            <input type="text" class="form-control form-control-sm" id="houseNo" name="houseno" placeholder="House No./Road/Village" required>
                            <div id="house-error" class="text-danger"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <label for="field1" class="form-label required">Alternat Mobile Number</label>
                            <i class="bi bi-question-circle-fill fw-bold text-dark align-item-end"></i>
                            <br>
                            <input type="text" class="form-control form-control-sm" id="altphone" name="alt_mobile" placeholder="Alternate Mobile Number">
                            <div id="phone-error" class="text-danger"></div>
                        </div>
                    </div>
                </div>
                {{-- <div class="mb-3">
                </div> --}}
                <br>

                {{-- <div class="step step-1"> --}}
                    <!-- Step 1 form fields here -->
                    {{-- <h3>Your Present Address</h3> --}}
                    <!-- Other form fields -->
                <div id="step-error" class="text-danger"></div> <!-- Error message container -->
                {{-- </div> --}}
                
                {{-- <button type="button" class="btn btn-primary next-step ms-5">Next</button> --}}
                
                <div class="p-5">
                    <button type="button" class="btn btn-primary next-step ms-5 float-end">Next <i class="fa-solid fa-arrow-right fa-2xl"></i></button>
                </div>
            </div>                        
</body> 

</html> 
