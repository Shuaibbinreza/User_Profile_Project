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
                                        {{-- <div class="col-4"> --}}
                                            <div>
                                                <h6>Present Address</h6>
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <p> <b>House No:</b> {{$address->houseno}} </p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <p><b>Post Office:</b> {{$address->post_office}}</p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm">
                                                        <p> <b>Thana/Upazila:</b> {{$address->thana}} </p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <p><b>District:</b> {{$address->district}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <h6> Permanent Address</h6>
                                                <p>Same as Present Address</p>
                                            </div>
                                        {{-- </div> --}}
                                        <div class="col-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>