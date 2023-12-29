@extends('Client.layouts.layout')
@section('content')
    <div class="card card-default">
        <div class="card-header" style="background-color:#FC6178">
            <h2 style=" margin: 0px 10px 10px 10px; color:aliceblue;">Register Mortgage Loan Applicants</h2>

            <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-nav-with-icon" role="button"
                aria-expanded="false" aria-controls="collapse-nav-with-icon"> </a>


        </div>
        <div class="card-body">
            <div class="collapse" id="collapse-nav-with-icon">

            </div>
            {{-- <div class="border p-6"> --}}
            <ul class="nav nav-tabs mb-3" id="pills-tab2" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-tabs-home2" role="tab"
                        aria-controls="nav-tabs " aria-selected="true">
                        <i class="mdi mdi-account"></i>
                        Personal Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile2" role="tab"
                        aria-controls="nav-profile" aria-selected="false">
                        <i class="mdi mdi-star-outline"></i>
                        Professional Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-Mortgage-tab" data-toggle="pill" href="#nav-Mortgage" role="tab"
                        aria-controls="nav-profile" aria-selected="false">
                        <i class="mdi mdi-account-check"></i>
                        Mortgage Items</a>
                </li>

            </ul>
            <div class="tab-content mt-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-tabs-home2" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">Name<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="name">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">NIC<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-card-details"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="NIC">
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Address<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-google-maps" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="address">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Mobile Number<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-cellphone-iphone"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="phone">
                                    </div>

                                </div>
                            </div>


                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Home phone number</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-phone-classic" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="Homephone">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Email Address</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-email" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="emailAddress">
                                    </div>

                                </div>
                            </div>

                            <br><br>

                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Upload Profile image as
                                        jpg/png/jpeg</label>
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload Profile image</p>
                                                <input type="file" multiple data-max_length="20" name='tutorPropic[]'
                                                    class="upload__inputfile" />
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap" id="tutorPropicPreview"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload NIC image</p>
                                                <input type="file" multiple data-max_length="20" name='tutornNICpic[]'
                                                    class="upload__inputfile" />
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                                    <label class="text-dark font-weight-medium">Gender<span>
                                            <div class="container">

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label>
                                                            <input id="male" type="radio" name="gender"
                                                                value="male" />
                                                            <span class="radio"></span>
                                                            <span class="label">Male</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>
                                                            <input id="female" type="radio" name="gender"
                                                                value="female" />
                                                            <span class="radio"></span>
                                                            <span class="label">Female</span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                </div>

                            </div>

                            <div class="container" style="position: relative; top:20px;">

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-5">
                                            <label class="text-dark font-weight-medium">Describe </label>
                                            <div class="input-group mb-3">
                                                <textarea class="form-control rounded-left" placeholder="" rows="4" id="description" cols="50"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-Mortgage" role="tabpanel" aria-labelledby="nav-Mortgage-tab">
                    <div class="card-body">
                        <div class="container">
                            <h3 style="text-align: center">SELECT TYPE OF MORTGAGE</h3>
                            <br>
                            <div class="row">

                                <div class="col-xl-6">
                                    <div class="mb-5">
                                        <label class="text-dark font-weight-medium">Selected Language<span
                                                style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text mdi mdi-comment-processing-outline"
                                                    id="basic-addon1"></span>
                                            </div>
                                            <select id="language" class="form-select form-control">
                                                <option value="">Select</option>
                                                <option value="Sinhala">Sinhala</option>
                                                <option value="English">English</option>
                                                <option value="Tamil">Tamil</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-5">
                                        <label class="text-dark font-weight-medium">Type<span
                                                style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text mdi  mdi-briefcase
                                                "
                                                    id="basic-addon1"></span>
                                            </div>
                                            <select id="Type" class="form-select form-control">
                                                <option value="">Full Time</option>
                                                <option value="Sinhala">Part Time</option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-5">
                                        <label class="text-dark font-weight-medium">Current Occupation<span
                                                style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text mdi mdi-book-open-page-variant"
                                                    id="basic-addon1"></span>
                                            </div>
                                            <input type="text" class="form-control" name="currentOccupation"
                                                id="currentOccupation">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-5">
                                        <label class="text-dark font-weight-medium">Experience<span
                                                style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text mdi mdi-book-open-page-variant"
                                                    id="basic-addon1"></span>
                                            </div>
                                            <input type="text" class="form-control" name="experience"
                                                id="experience">
                                        </div>

                                    </div>
                                </div>


                                <div class="col-xl-6">
                                    <div class="mb-5">
                                        <label class="text-dark font-weight-medium">Subject<span
                                                style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text mdi mdi-book-open-page-variant"
                                                    id="basic-addon1"></span>
                                            </div>
                                            <input type="text" class="form-control" name="Subject" id="Subject">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-5">
                                        <label class="text-dark font-weight-medium">Selected level<span
                                                style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text mdi mdi-account-question"
                                                    id="basic-addon1"></span>
                                            </div>
                                            <select id="selected_level" name="selected_level"
                                                class="form-select form-control">
                                                <option value="">Select</option>
                                                <option value="pre school">Pre school</option>
                                                <option value="Primary">Primary</option>
                                                <option value="Grade 6 - 9">Grade 6 - 9</option>
                                                <option value="Ordinary Level">Ordinary Level</option>
                                                <option value="Advance Level">Advance Level</option>
                                                <option value="Under graduate level">Under graduate level</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="col-md-6" style="margin: 0px 10px 10px 0px; padding:20px;">
                                        <button type="button" class="btn btn-outline-primary" id="adSubjectToTable">Add
                                            Subject</button>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11" style="margin: 0px 10px 10px 40px; padding:20px;">
                                    <table id="selected_subject_level" class="table">
                                        <tbody>
                                            <!-- Data will be appended here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <button class='btn btn-danger ' id="submitApplicant">Submit</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <div class="input-group mb-3 text-center"> <!-- Add the text-center class here -->
                                        <h4>Ordinary Level exam details</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Year of O/L Exam</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-calendar"></span>
                                        </div>
                                        <input type="text" class="form-control" id="YearofOLExam">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">O/L Index Number<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-check" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="OLIndexNumber">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">O/L Result</label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control rounded-left" placeholder="" rows="4" id="OLResult" cols="50"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Upload Result Sheet as image</label>
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload O/L Result Sheet</p>
                                                <input type="file" multiple data-max_length="20"
                                                    name='OLResultSheetpic[]' class="upload__inputfile" />
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <div class="input-group mb-3 text-center"> <!-- Add the text-center class here -->
                                        <h4>Advance Level exam details</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Year of A/L Exam</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-calendar"></span>
                                        </div>
                                        <input type="text" class="form-control" id="YearofALExam">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">A/L Index Number<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-check" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="ALIndexNumber">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">A/L Result</label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control rounded-left" placeholder="" rows="4" id="ALResult" cols="50"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Upload Result Sheet as image</label>
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload A/L Result Sheet</p>
                                                <input type="file" multiple data-max_length="20"
                                                    name='ALResultSheetpic[]' class="upload__inputfile" />
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <div class="input-group mb-3 text-center"> <!-- Add the text-center class here -->
                                        <h4>Advance Qualification</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">

                                <label for="middle-name" class="label-align">Select Qualification Type <span
                                        class="required">*</span></label>
                                <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                    <select id="QualificationType" name="QualificationType"
                                        class="form-control form-select ">
                                        <option value="Certificate">Certificate</option>
                                        <option value="Advance Certificate">Advance Certificate</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Higher Diploma">Higher Diploma</option>
                                        <option value="Degree">Degree</option>
                                        <option value="Postgraduate Diploma">Postgraduate Diploma</option>
                                        <option value="Master's Degree">Master's Degree</option>
                                        <option value="Phd">Phd</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-xl-4">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Nature of Qualification</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi-book-minus"></span>
                                        </div>
                                        <input type="text" class="form-control" id="NatureofQualification">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-4">
                                <label for="middle-name" class="label-align">Year<span class="required">*</span></label>

                                <input type="text" id="completeYear" name="completeYear" class="form-control ">
                            </div>


                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 ">
                                <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <label class="upload__btn">
                                            <p>Upload Certificate Images</p>
                                            <input type="file" multiple data-max_length="20"
                                                id="other_Certificate_images" name='other_Certificate_images[]'
                                                class="upload__inputfile" />
                                        </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
                                </div>
                                <div id="preview-container"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea id="quolificationDescription" name="quolificationDescription" class="form-control form-select"
                                    rows="4">More...</textarea>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6" style="margin: 0px 10px 10px 0px; padding:20px;">
                                <button type="button" class="btn btn-outline-primary" id="adToTable">AD Item</button>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11" style="margin: 0px 10px 10px 40px; padding:20px;">
                                <table id="itemTable" class="table">
                                    <tbody>
                                        <!-- Data will be appended here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-xl-12">
                            <div class="mb-5">
                                <label class="text-dark font-weight-medium">Describe previous loans, If any</label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control rounded-left" placeholder="" rows="4" id="QualificationMoreDescription"
                                        cols="50"></textarea>
                                </div>

                            </div>
                        </div>




                    </div>

                </div>
            </div>

            {{-- 
            </div> --}}
        </div>
    </div>
@endsection
@include('Client.layouts.footerlink')
<script>
    jQuery(document).ready(function() {
        ImgUpload();
    });

    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $(".upload__inputfile").each(function() {
            $(this).on("change", function(e) {
                imgWrap = $(this).closest(".upload__box").find(".upload__img-wrap");
                var maxLength = $(this).attr("data-max_length");

                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function(f, index) {
                    if (!f.type.match("image.*")) {
                        return;
                    }

                    if (imgArray.length > maxLength) {
                        return false;
                    } else {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        } else {
                            imgArray.push(f);

                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var html =
                                    "<div class='upload__img-box'><div style='background-image: url(" +
                                    e.target.result +
                                    ")' data-number='" +
                                    $(".upload__img-close").length +
                                    "' data-file='" +
                                    f.name +
                                    "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                            };
                            reader.readAsDataURL(f);
                        }
                    }
                });
            });
        });

        $("body").on("click", ".upload__img-close", function(e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();
        });
    }

    $(document).ready(function() {
        var login_id = '{{ session('user_id') }}';

        $('#staffmembers').multiselect({
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            placeholder: 'Search and select collectors',
            allowClear: true,
            buttonWidth: '100%',

        });




        $("#goldTypeSelect").change(function() {
            var OtherGoldItem = $("#OtherGoldItem");
            var goldTypeSelect = $(this).val();
            if (goldTypeSelect === "Others") {

                OtherGoldItem.show();

            } else {
                OtherGoldItem.hide();
            }
        })
        var mortgageType = '';


        var mortgageDataArray = []; // Create an empty array to store the mortgage data

        var mortgageSubType = ''; // Initialize mortgageSubType
        var rowData = '';
        $('.mortgage_sub_type').on('change', function() {
            mortgageSubType = $(this).val();
        });

        $("#adToTable").click(function() {
            // Get the selected values from the dropdowns
            var NatureofQualification = $("#NatureofQualification")
                .val(); // Assuming you have this field for gold items
            var completeYear = $("#completeYear").val();
            var quolificationDescription = $("#quolificationDescription").val();
            var QualificationType = $("#QualificationType").val();


            // Get the selected images
            var images = $("#other_Certificate_images")[0].files;

            // Check if both dropdowns have valid selections
            if (QualificationType) {
                // Create an object to store the data for this row
                rowData = {
                    NatureofQualification: NatureofQualification,
                    completeYear: completeYear,
                    QualificationType: QualificationType,
                    quolificationDescription: quolificationDescription,
                    images: []
                };

                // Push the selected images into the images array of the rowData object
                for (var i = 0; i < images.length; i++) {
                    rowData.images.push(images[i]);
                }

                // Push the rowData object into the mortgageDataArray
                mortgageDataArray.push(rowData);

                // Create a new row in the table with a "Remove" button
                if ($("#itemTable tbody tr").length === 0) {
                    $("#itemTable tbody").append(
                        "<tr style='background-color: #1F305E; color: white;'><th >Qualification</th><th>Nature of Qualification</th><th>complete Year</th><th>Description</th><th>Images</th><th>Action</th></tr>"
                    );
                }
                var newRow = "<tr><td class='table_font_color'>" + QualificationType +
                    "</td><td class='table_font_color'>" +
                    NatureofQualification + "</td><td class='table_font_color'>" + completeYear +
                    "</td><td class='table_font_color'>" + quolificationDescription +
                    "</td><td>";

                // Append image previews
                for (var i = 0; i < images.length; i++) {
                    newRow += "<img src='" + URL.createObjectURL(images[i]) +
                        "' width='50' height='50'>";
                }

                newRow +=
                    "</td><td><button class='btn btn-danger btn-remove-row'><i class='mdi mdi-delete'></i></button></td></tr>";

                $("#itemTable tbody").append(newRow);
            }

            // Reset the dropdowns and fields to their initial state
            // $("#Mortgage_Type").val("");
            $("#NatureofQualification").val("");
            $("#completeYear").val("");

            $("#QualificationType").val("");
            $("#quolificationDescription").val("");
            $("#other_Certificate_images").val(null); // Clear the file input
            $("#tutorPropicPreview").empty(); // Clear the image preview

        });

        var SelectedSubject = [];
        var newRowData = '';
        $("#adSubjectToTable").click(function() {
            // Get the selected values from the dropdowns
            var selected_level = $("#selected_level").val();
            var Subject = $("#Subject").val(); // Assuming you have this field for gold items


            if (Subject) {
                newRowData = {
                    selected_level: selected_level,
                    Subject: Subject,

                };

                SelectedSubject.push(newRowData);

                // Create a new row in the table with a "Remove" button
                if ($("#selected_subject_level tbody tr").length === 0) {
                    $("#selected_subject_level tbody").append(
                        "<tr style='background-color: #1F305E; color: white;'><th >Gold Type</th><th>Total Carat</th><th>Action</th></tr>"
                    );
                }
                var newRow = "<tr><td class='table_font_color'>" + Subject +
                    "</td><td class='table_font_color'>" +
                    selected_level +
                    "</td>";

                // Append image previews

                newRow +=
                    "</td><td><button class='btn btn-danger btn-remove-row'><i class='mdi mdi-delete'></i></button></td></tr>";

                $("#selected_subject_level tbody").append(newRow);
            }

            // Reset the dropdowns and fields to their initial state
            // $("#Mortgage_Type").val("");
            $("#selected_level").val("");
            $("#Subject").val("");

        });


        // Preview uploaded images
        $("#other_Certificate_images").change(function() {
            var previewContainer = $("#other_Certificate_images");
            previewContainer.empty();

            var images = this.files;
            for (var i = 0; i < images.length; i++) {
                var img = $("<img>").attr("src", URL.createObjectURL(images[i])).css({
                    width: "100px",
                    height: "auto",
                    margin: "5px"
                });
                previewContainer.append(img);
            }
        });



        // Remove table row when the "Remove" button is clicked
        $(document).on("click", ".btn-remove-row", function() {
            var rowIndex = $(this).closest("tr").index();
            mortgageDataArray.splice(rowIndex, 1); // Remove the corresponding data from the array
            $(this).closest("tr").remove();
        });



        $(document).on('click', '#submitApplicant', function(e) {
            e.preventDefault();

            var name = $('#name').val();
            var nic = $('#NIC').val();
            var address = $('#address').val();
            var phone = $('#phone').val();
            var Homephone = $('#Homephone').val();
            var emailAddress = $('#emailAddress').val();
            var description = $('#description').val();
            var QualificationMoreDescription = $('#QualificationMoreDescription').val();

            var OLIndexNumber = $('#OLIndexNumber').val();
            var YearofOLExam = $('#YearofOLExam').val();
            var OLResult = $('#OLResult').val();

            var YearofALExam = $('#YearofALExam').val();
            var ALIndexNumber = $('#ALIndexNumber').val();
            var ALResult = $('#ALResult').val();

            var currentOccupation = $('#currentOccupation').val();
            var experience = $('#experience').val();

            var quolificationDescription = $('#quolificationDescription').val();



            var language = $('#language').val();
            var Type = $('#Type').val();




            var gender;
            if ($('#male').is(':checked')) {
                gender = 'male';
            } else if ($('#female').is(':checked')) {
                gender = 'female';
            }


            var tutornNICpic = $('input[name="tutornNICpic[]"]').prop('files');
            var tutorPropic = $('input[name="tutorPropic[]"]').prop('files');

            var OLResultSheetpic = $('input[name="OLResultSheetpic[]"]').prop('files');
            var ALResultSheetpic = $('input[name="ALResultSheetpic[]"]').prop('files');



            var isValid = true;
            var errorMessage = '';

            // Perform individual validation checks for each input field
            if (name.trim() === '') {
                errorMessage += 'Name is required.<br>';
                isValid = false;
            }
            if (address.trim() === '') {
                errorMessage += 'Address is required.<br>';
                isValid = false;
            }
            if (phone.trim() === '') {
                errorMessage += 'phone number is required.<br>';
                isValid = false;
            }




            if (!isValid) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    html: errorMessage,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    confirmButtonText: 'OK',
                });
                return;
            } else {
                var formData = new FormData();
                // Add the customer data to the FormData object


                formData.append('login_id', login_id);
                formData.append('name', name);
                formData.append('nic', nic);
                formData.append('address', address);
                formData.append('email', emailAddress);
                formData.append('phone', phone);
                formData.append('gender', gender);
                formData.append('Homephone', Homephone);
                formData.append('description', description);


                formData.append('OLIndexNumber', OLIndexNumber);
                formData.append('YearofOLExam', YearofOLExam);
                formData.append('OLResult', OLResult);

                formData.append('YearofALExam', YearofALExam);
                formData.append('ALIndexNumber', ALIndexNumber);
                formData.append('ALResult', ALResult);

                formData.append('QualificationMoreDescription', QualificationMoreDescription);

                formData.append('language', language);
                formData.append('Type', Type);


                formData.append('currentOccupation', currentOccupation);
                formData.append('experience', experience);


                $.each(mortgageDataArray, function(i, rowData) {
                    formData.append('quolificationData[' + i + '][NatureofQualification]',
                        rowData
                        .NatureofQualification);
                    formData.append('quolificationData[' + i + '][quolificationDescription]',
                        rowData
                        .quolificationDescription);
                    // Append mortgageSubType
                    formData.append('quolificationData[' + i + '][QualificationType]', rowData
                        .QualificationType);
                    formData.append('quolificationData[' + i + '][completeYear]', rowData
                        .completeYear);

                    // Append the images to formData
                    $.each(rowData.images, function(j, image) {
                        formData.append('quolificationData[' + i + '][images][]',
                            image);
                    });
                });
                $.each(SelectedSubject, function(i, newRowData) {
                    formData.append('SubjectData[' + i + '][Subject]',
                        newRowData
                        .Subject);
                    formData.append('SubjectData[' + i + '][selected_level]', newRowData
                        .selected_level);

                });



                $.each(tutornNICpic, function(i, file) {
                    formData.append('tutornNICpic[]', file);
                });
                $.each(tutorPropic, function(i, file) {
                    formData.append('tutorPropic[]', file);
                });
                $.each(OLResultSheetpic, function(i, file) {
                    formData.append('OLResultSheetpic[]', file);
                });
                $.each(ALResultSheetpic, function(i, file) {
                    formData.append('ALResultSheetpic[]', file);
                });



                $.ajax({
                    url: "{{ route('store.tutor') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        Swal.fire(
                            'Good job!',
                            data.message,
                            'success'
                        );
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';

                            // Loop through the validation errors and construct an error message
                            for (var field in errors) {
                                errorMessage += errors[field][0] + '<br>';
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                html: errorMessage,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                confirmButtonText: 'OK',
                            });
                        } else {
                            alert('Form submission failed!');
                        }
                    }
                    // location.reload();
                });

            }

        });
    });
</script>
