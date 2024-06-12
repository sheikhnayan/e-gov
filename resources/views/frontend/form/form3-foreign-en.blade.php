@extends('frontend.master')

@section('content')
    <!-- modal-dialog Dialog -->
    <div class="modal-dialog">
        <div class="modal-dialog-content">
            <div class="modal-dialog-header">
                <span class="modal-dialog-close" onClick="$('.modal-dialog').hide();">×</span>
                <span class="modal-dialog-title">Notification</span>
            </div>
            <div class="modal-dialog-body">
                <p>Text in the modal-dialog Body</p>
            </div>
            <div class="modal-dialog-footer">
                <div class="modal-dialog-ok" onClick="$('.modal-dialog').hide();">Ok</div>
            </div>
        </div>
    </div>
    <!-- modal-dialog Dialog -->

    <center>
        <!-- mainContent Start -->
        <div class="mainContent">
            <div class="topBar_1975">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="left">
                            <!--
                          <img src="{{ asset('frontendAsset') }}/images/icon_facebook.png" class="shareIcons" style="margin-left: 15px;" />
                          <img src="{{ asset('frontendAsset') }}/images/icon_instagram.png" class="shareIcons" />
                          <img src="{{ asset('frontendAsset') }}/images/icon_tviter.png" class="shareIcons" />
                          -->
                        </td>
                        <td align="right" style="padding-top: 3px;">
                            <a href="{{ asset('frontendAsset') }}/images/instruction_20230904.pdf" target="_blank"
                                style="color:white;text-decoration:none;">Instruction</a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="bank_data.html" target="_blank" style="color:white;text-decoration:none;">Bank
                                details</a>&nbsp;&nbsp;
                            <select id="langSel">
                                <!-- <option value="ky">KG</option> -->
                                <option value="{{ route('form3.ru') }}">RU</option>
                                <option value="{{ route('index.en') }}" selected>EN</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="topBarUnder">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="left" width="40%"><a href="index.html"><img
                                    src="{{ asset('frontendAsset') }}/images/kyrgyz_emblem6d24.png?n=1" class="logo_8789"
                                    height="81" /></a></td>
                        <td align="left"><b>Work permit issue web services<br>
                                Digital nomad issue web services</b></td>
                    </tr>
                </table>
            </div>






            <br><br><br>
            <h2>Registration of personal cabinet</h2><br><br>


            <!-- Date Picker -->
            <script src="scripts/js/zebra_datepicker.js"></script>
            <link href="scripts/css/zebra_datepicker.css" rel="stylesheet" type="text/css" />
            <script language="javascript">
                $(document).ready(function(e) {
                    dateFunctions();
                });

                function dateFunctions() {
                    var fixDate = function(date) {
                        return date < 10 ? "0" + date : date;
                    }
                    var dateStr = new Date();
                    var currDate = fixDate(dateStr.getDate()) + "/" + fixDate(dateStr.getMonth() + 1) + "/" + dateStr.getFullYear();
                    $('#bdate').Zebra_DatePicker({
                        view: 'years',
                        format: 'd/m/Y',
                        direction: ['01/01/1900', currDate]
                    });
                    $('#doc_issue_date').Zebra_DatePicker({
                        view: 'years',
                        format: 'd/m/Y',
                        direction: ['01/01/1986', currDate]
                    });
                    $('.date_ancyal').Zebra_DatePicker({
                        view: 'years',
                        format: 'd/m/Y',
                        direction: -1
                    });
                    $('.date_apaga').Zebra_DatePicker({
                        view: 'years',
                        format: 'd/m/Y',
                        direction: 1
                    });
                }
            </script>
            <!-- Date Picker -->








            

            <form id="form3" action="/register" method="post"
                enctype="multipart/form-data">
                @csrf
                <table cellpadding="4" cellspacing="4">
                    <tr>
                        <td><label class="lab_2899">Surname</label></td>
                        <td><input type="text" name="name" id="lname" class="inp_2556" required="required"
                                value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Name</label></td>
                        <td><input type="text" name="last_name" id="fname" class="inp_2556" required="required"
                                value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Patronymic</label></td>
                        <td><input type="text" name="patronymic" id="pname" class="inp_2556" value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Date of birth</label></td>
                        <td><input type="text" name="dob" id="bdate" class="inp_2556" required="required"
                                value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Place of birth</label></td>
                        <td><input type="text" name="place_of_birth" id="birth_place" class="inp_2556" required="required"
                                value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Gender</label></td>
                        <td><select class="inp_2556" id="gender" name="gender" required="required">
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Country</label></td>
                        <td>
                            <select class="inp_2556" id="doc_country" name="country" required="required">
                                <opti>Select</opti>
                                <optio>Afghanistan</optio>
                                <optio>Aland Islands</optio>
                                <optio>Albania</optio>
                                <optio>Algeria</optio>
                                <optio>American Samoa</optio>
                                <optio>Andorra</optio>
                                <optio>Angola</optio>
                                <optio>Anguilla</optio>
                                <optio>Antarctica</optio>
                                <option>Antigua and Barbuda</option>
                                <option>Argentina</option>
                                <option>Armenia</option>
                                <option>Aruba</option>
                                <option>Australia</option>
                                <option>Austria</option>
                                <option>Azerbaijan</option>
                                <option>Bahamas</option>
                                <option>Bahrain</option>
                                <option>Bangladesh</option>
                                <option>Barbados</option>
                                <option>Belarus</option>
                                <option>Belgium</option>
                                <option>Belize</option>
                                <option>Benin</option>
                                <option>Bermuda</option>
                                <option>Bhutan</option>
                                <option>Bolivia</option>
                                <option>Bosnia and Herzegovina</option>
                                <option>Botswana</option>
                                <option>Bouvet Island</option>
                                <option>Brazil</option>
                                <option>British Virgin Islands</option>
                                <option>British Indian Ocean Territory</option>
                                <option>Brunei Darussalam</option>
                                <option>Bulgaria</option>
                                <option>Burkina Faso</option>
                                <option>Burundi</option>
                                <option>Cambodia</option>
                                <option>Cameroon</option>
                                <option>Canada</option>
                                <option>Cape Verde</option>
                                <option>Cayman Islands</option>
                                <option>Central African Republic</option>
                                <option>Chad</option>
                                <option>Chile</option>
                                <option value="46">China</option>
                                <option>Hong Kong</option>
                                <option>Macao</option>
                                <option>Christmas Island</option>
                                <option>Cocos Islands</option>
                                <option>Colombia</option>
                                <option>Comoros</option>
                                <option>Congo</option>
                                <option>Democratic Republic of the Congo</option>
                                <option>Cook Islands</option>
                                <option>Costa Rica</option>
                                <option>Côte d'Ivoire</option>
                                <option>Croatia</option>
                                <option>Cuba</option>
                                <option>Cyprus</option>
                                <option>Czech Republic</option>
                                <option>Denmark</option>
                                <option>Djibouti</option>
                                <option>Dominica</option>
                                <option>Dominican Republic</option>
                                <option>Ecuador</option>
                                <option>Egypt</option>
                                <option>El Salvador</option>
                                <option>Equatorial Guinea</option>
                                <option>Eritrea</option>
                                <option>Estonia</option>
                                <option>Ethiopia</option>
                                <option>Falkland Islands</option>
                                <option>Faroe Islands</option>
                                <option>Fiji</option>
                                <option>Finland</option>
                                <option>France</option>
                                <option>French Guiana</option>
                                <option>French Polynesia</option>
                                <option>French Southern Territories</option>
                                <option>Gabon</option>
                                <option>Gambia</option>
                                <option>Georgia</option>
                                <option>Germany</option>
                                <option>Ghana</option>
                                <option>Gibraltar</option>
                                <option>Greece</option>
                                <option>Greenland</option>
                                <option>Grenada</option>
                                <option>Guadeloupe</option>
                                <option>Guam</option>
                                <option>Guatemala</option>
                                <option>Guernsey</option>
                                <option>Guinea</option>
                                <option>Guinea-Bissau</option>
                                <option>Guyana</option>
                                <option>Haiti</option>
                                <option>Heard Island and Mcdonald Islands</option>
                                <option>Holy See</option>
                                <option >Honduras</option>
                                <option >Hungary</option>
                                <option >Iceland</option>
                                <option >India</option>
                                <option >Indonesia</option>
                                <option >Iran</option>
                                <option >Iraq</option>
                                <option >Ireland</option>
                                <option >Isle of Man</option>
                                <option >Israel</option>
                                <option >Italy</option>
                                <option >Jamaica</option>
                                <option >Japan</option>
                                <option >Jersey</option>
                                <option >Jordan</option>
                                <option >Kazakhstan</option>
                                <option >Kenya</option>
                                <option >Kiribati</option>
                                <option >Democratic People's Republic of Korea</option>
                                <option >Korea</option>
                                <option >Kuwait</option>
                                <option >Kyrgyzstan</option>
                                <option >Lao PDR</option>
                                <option >Latvia</option>
                                <option >Lebanon</option>
                                <option >Lesotho</option>
                                <option >Liberia</option>
                                <option >Libya</option>
                                <option >Liechtenstein</option>
                                <option >Lithuania</option>
                                <option >Luxembourg</option>
                                <option >Macedonia</option>
                                <option >Madagascar</option>
                                <option >Malawi</option>
                                <option >Malaysia</option>
                                <option >Maldives</option>
                                <option >Mali</option>
                                <option >Malta</option>
                                <option >Marshall Islands</option>
                                <option >Martinique</option>
                                <option >Mauritania</option>
                                <option >Mauritius</option>
                                <option >Mayotte</option>
                                <option >Mexico</option>
                                <option >Micronesia</option>
                                <option >Moldova</option>
                                <option >Monaco</option>
                                <option >Mongolia</option>
                                <option >Montenegro</option>
                                <option >Montserrat</option>
                                <option >Morocco</option>
                                <option >Mozambique</option>
                                <option >Myanmar</option>
                                <option >Namibia</option>
                                <option >Nauru</option>
                                <option >Nepal</option>
                                <option >Netherlands</option>
                                <option >Netherlands Antilles</option>
                                <option >New Caledonia</option>
                                <option >New Zealand</option>
                                <option >Nicaragua</option>
                                <option >Niger</option>
                                <option >Nigeria</option>
                                <option >Niue</option>
                                <option >Norfolk Island</option>
                                <option >Northern Mariana Islands</option>
                                <option >Norway</option>
                                <option >Oman</option>
                                <option >Pakistan</option>
                                <option >Palau</option>
                                <option >Palestinian Territory</option>
                                <option >Panama</option>
                                <option >Papua New Guinea</option>
                                <option >Paraguay</option>
                                <option >Peru</option>
                                <option >Philippines</option>
                                <option >Pitcairn</option>
                                <option >Poland</option>
                                <option >Portugal</option>
                                <option >Puerto Rico</option>
                                <option >Qatar</option>
                                <option >Réunion</option>
                                <option >Romania</option>
                                <option >Russian Federation</option>
                                <option >Rwanda</option>
                                <option >Saint-Barthélemy</option>
                                <option >Saint Helena</option>
                                <option >Saint Kitts and Nevis</option>
                                <option >Saint Lucia</option>
                                <option >Saint-Martin</option>
                                <option >Saint Pierre and Miquelon</option>
                                <option >Saint Vincent and Grenadines</option>
                                <option >Samoa</option>
                                <option >San Marino</option>
                                <option >Sao Tome and Principe</option>
                                <option >Saudi Arabia</option>
                                <option >Senegal</option>
                                <option >Serbia</option>
                                <option >Seychelles</option>
                                <option >Sierra Leone</option>
                                <option >Singapore</option>
                                <option >Slovakia</option>
                                <option >Slovenia</option>
                                <option >Solomon Islands</option>
                                <option >Somalia</option>
                                <option >South Africa</option>
                                <option >South Georgia and the South Sandwich Islands</option>
                                <option >South Sudan</option>
                                <option >Spain</option>
                                <option >Sri Lanka</option>
                                <option >Sudan</option>
                                <option >Suriname</option>
                                <option >Svalbard and Jan Mayen Islands</option>
                                <option >Swaziland</option>
                                <option >Sweden</option>
                                <option >Switzerland</option>
                                <option >Syrian Arab Republic</option>
                                <option >Taiwan</option>
                                <option >Tajikistan</option>
                                <option >Tanzania</option>
                                <option >Thailand</option>
                                <option >Timor-Leste</option>
                                <option >Togo</option>
                                <option >Tokelau</option>
                                <option >Tonga</option>
                                <option >Trinidad and Tobago</option>
                                <option >Tunisia</option>
                                <option >Turkey</option>
                                <option >Turkmenistan</option>
                                <option >Turks and Caicos Islands</option>
                                <option >Tuvalu</option>
                                <option >Uganda</option>
                                <option >Ukraine</option>
                                <option >United Arab Emirates</option>
                                <option >United Kingdom</option>
                                <option >United States of America</option>
                                <option >United States Minor Outlying Islands</option>
                                <option >Uruguay</option>
                                <option >Uzbekistan</option>
                                <option >Vanuatu</option>
                                <option >Venezuela</option>
                                <option >Viet Nam</option>
                                <option >Virgin Islands</option>
                                <option >Wallis and Futuna Islands</option>
                                <option >Western Sahara</option>
                                <option >Yemen</option>
                                <option >Zambia</option>
                                <option >Zimbabwe</option>
                                <option >Metropolitan France</option>
                                <option >British Overseas Territories</option>
                                <option >British National (Overseas)</option>
                                <option >British Overseas citizen</option>
                                <option >British protected person</option>
                                <option >British subject</option>
                                <option >UN Association Employee</option>
                                <option >UN Employee</option>
                                <option >Refugee</option>
                                <option >Refugee</option>
                                <option >Person of undefined citizenship</option>
                                <option >Yugoslavia</option>
                                <option >Zaire</option>
                                <option >EU</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Passport number</label></td>
                        <td><input type="text" name="passport" id="doc_nom" class="inp_2556" required="required"
                                value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Passport issue date</label></td>
                        <td><input type="text" name="date_issue" id="doc_issue_date" class="inp_2556"
                                required="required" value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Passport expiration date</label></td>
                        <td><input type="text" name="date_expire" id="doc_expiration_date"
                                class="inp_2556 date_apaga" required="required" value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Person without citizenship</label></td>
                        <td><input type="checkbox" name="person_without_citizenship" id="bez_grajdanstvo_flag"
                                value="1" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Education</label></td>
                        <td><select class="inp_2556" id="education_level" name="education" required="required">
                                <option value="">Select</option>
                                <option value="higher education">higher education</option>
                                <option value="specialized secondary education">specialized secondary education</option>
                                <option value="secondary education">secondary education</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Family status</label></td>
                        <td><select class="inp_2556" id="family_status" name="family_status" required="required">
                                <option value="">Select</option>
                                <option value="married">married</option>
                                <option value="not married">not married</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Mobile phone</label></td>
                        <td><input type="text" name="mobile" id="mobile_phone" class="inp_2556"
                                required="required" value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Email address</label></td>
                        <td><input type="text" name="email" id="email_address" class="inp_2556"
                                required="required" value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">WhatsApp</label></td>
                        <td><input type="text" name="whatsapp" id="whatsapp_number" class="inp_2556"
                                value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Viber</label></td>
                        <td><input type="text" name="viber" id="Viber_number" class="inp_2556"
                                value="" /></td>
                    </tr>
                    <tr>
                        <td style="padding-top:20px"><label class="lab_2899">Photo</label></td>
                        <td style="padding-top:20px">
                            <table class="file_id_2_table">
                                <tr id="row_file_id_2_1">
                                    <td align="left" valign="top">
                                        <span class="filename" id="file_id_11_text_1">No file selected...</span>
                                        <input type="file" id="file_id_11_1" name="photo"
                                            class="file_upload" />
                                        <label for="file_id_11_1" class="label_browse">browse...
                                        </label>
                                    </td>
                                    {{-- <td align="left" valign="top">
                                        <div class="addBox_disable_9339" id="file_id_2Disabled">Add</div>
                                        <div onClick="addfile_id_2File();" class="addBox_9339" id="file_id_2Active"
                                            style="display:none;">Add</div>
                                        <input type="hidden" value="" id="file_id_2_hidden"
                                            name="file_id_2_hidden" />
                                    </td> --}}
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <script language="javascript">
                        $(document).ready(function(e) {
                            $("#file_id_2_1").change(function() {
                                var filepath = this.value;
                                var m = filepath.match(/([^\/\\]+)$/);
                                var filename = m[1];
                                var filename_array = filename.split('.');
                                var fileType = filename_array[filename_array.length - 1].toLowerCase();
                                if (this.id.indexOf('file_id_2_') != -1) {
                                    if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg') {
                                        showMsg("error", "Photo should be in .jpg, jpeg, .png  format");
                                        return;
                                    }
                                }
                                if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' &&
                                    fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx') {
                                    showMsg("error", "File should be in .pdf, .doc, .docx, .xls, .xlsx format");
                                    return;
                                }
                                if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 4000000) {
                                        showMsg("error",
                                            "The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."
                                            );
                                        $("#file_id_2_1").val("");
                                        return;
                                    }
                                }
                                if (fileType == 'pdf') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 10485760) {
                                        showMsg("error", "The file size can not be more than 10 MB.");
                                        $("#file_id_2_1").val("");
                                        return;
                                    }
                                }
                                $("#file_id_2_text_1").html(filename);
                                var file = $(this)[0].files && $(this)[0].files[0];
                                var img = new Image();
                                img.src = window.URL.createObjectURL(file);
                                img.onload = function() {
                                    var width = img.naturalWidth,
                                        height = img.naturalHeight;
                                    window.URL.revokeObjectURL(img.src);
                                    if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                        if (width < 300 || width > 5000 || height < 300 || height > 5000) {
                                            showMsg("error",
                                                "The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."
                                                );
                                            $("#file_id_2_1").val("");
                                            $("#file_id_2_text_1").html("No file selected...");
                                            return;
                                        }
                                    }
                                    checkfile_id_2Plus();
                                };
                            });
                        });

                        function file_id_2_call(id) {
                            $("#file_id_2_" + id).change(function() {
                                var filepath = this.value;
                                var m = filepath.match(/([^\/\\]+)$/);
                                var filename = m[1];
                                var filename_array = filename.split('.');
                                var fileType = filename_array[filename_array.length - 1].toLowerCase();
                                if (this.id.indexOf('file_id_2_') != -1) {
                                    if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg') {
                                        showMsg("error", "Photo should be in .jpg, jpeg, .png  format");
                                        return;
                                    }
                                }
                                if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType !=
                                    'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx') {
                                    showMsg("error", "File should be in .pdf, .doc, .docx, .xls, .xlsx format");
                                    return;
                                }
                                if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 4000000) {
                                        showMsg("error",
                                            "The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."
                                            );
                                        $("#file_id_2_" + id).val("");
                                        return;
                                    }
                                }
                                if (fileType == 'pdf') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 10485760) {
                                        showMsg("error", "The file size can not be more than 10 MB.");
                                        $("#file_id_2_" + id).val("");
                                        return;
                                    }
                                }
                                $("#file_id_2_text_" + id).html(filename);
                                var file = $(this)[0].files && $(this)[0].files[0];
                                var img = new Image();
                                img.src = window.URL.createObjectURL(file);
                                img.onload = function() {
                                    var width = img.naturalWidth,
                                        height = img.naturalHeight;
                                    window.URL.revokeObjectURL(img.src);
                                    if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                        if (width < 300 || width > 5000 || height < 300 || height > 5000) {
                                            showMsg("error",
                                                "The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."
                                                );
                                            $("#file_id_2_" + id).val("");
                                            $("#file_id_2_text_" + id).html("No file selected...");
                                            return;
                                        }
                                    }
                                };
                            });
                        }
                        var file_id_2Ctn = 1;

                        function addfile_id_2File() {
                            if (!valid_file_count()) {
                                showMsg('error', 'Error file count');
                                return;
                            }
                            if ($("#file_id_2_1").val() != "") {
                                $("#file_id_2Disabled").hide();
                                $("#file_id_2Active").show();
                            } else {
                                $("#file_id_2Active").hide();
                                $("#file_id_2Disabled").show();
                                return;
                            }
                            window.file_id_2Ctn++;
                            var str = '<tr id="row_file_id_2_' + window.file_id_2Ctn +
                                '"><td align="left" valign="top"><span class="filename" id="file_id_2_text_' + window.file_id_2Ctn +
                                '">No file selected...</span><label for="file_id_2_' + window.file_id_2Ctn +
                                '" class="label_browse">browse...<input type="file" id="file_id_2_' + window.file_id_2Ctn +
                                '" name="file_id_2_' + window.file_id_2Ctn +
                                '" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{ asset('frontendAsset') }}/images/delete_btn.png" onclick="removefile_id_2File(\'' +
                                window.file_id_2Ctn + '\');" class="addIcon_9339" /></td></tr>';
                            $(".file_id_2_table").append(str);
                            file_id_2_call(window.file_id_2Ctn);
                        }

                        function checkfile_id_2Plus() {
                            if ($("#file_id_2_1").val() != "") {
                                $("#file_id_2Disabled").hide();
                                $("#file_id_2Active").show();
                            } else {
                                $("#file_id_2Active").hide();
                                $("#file_id_2Disabled").show();
                            }
                        }

                        function removefile_id_2File(id) {
                            $("#row_file_id_2_" + id).remove();
                            checkfile_id_2Plus();
                        }
                    </script>
                    <tr>
                        <td style="padding-top:20px"><label class="lab_2899">Passport page 1</label></td>
                        <td style="padding-top:20px">
                            <table class="file_id_1_table">
                                <tr id="row_file_id_1_1">
                                    <td align="left" valign="top">
                                        <span class="filename" id="file_id_11_text_1">No file selected...</span>
                                        <input type="file" id="file_id_11_1" name="passport_1"
                                            class="file_upload" />
                                        <label for="file_id_11_1" class="label_browse">browse...
                                        </label>
                                    </td>
                                    {{-- <td align="left" valign="top">
                                        <div class="addBox_disable_9339" id="file_id_1Disabled">Add</div>
                                        <div onClick="addfile_id_1File();" class="addBox_9339" id="file_id_1Active"
                                            style="display:none;">Add</div>
                                        <input type="hidden" value="" id="file_id_1_hidden"
                                            name="file_id_1_hidden" />
                                    </td> --}}
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <script language="javascript">
                        $(document).ready(function(e) {
                            $("#file_id_1_1").change(function() {
                                var filepath = this.value;
                                var m = filepath.match(/([^\/\\]+)$/);
                                var filename = m[1];
                                var filename_array = filename.split('.');
                                var fileType = filename_array[filename_array.length - 1].toLowerCase();
                                if (this.id.indexOf('file_id_2_') != -1) {
                                    if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg') {
                                        showMsg("error", "Photo should be in .jpg, jpeg, .png  format");
                                        return;
                                    }
                                }
                                if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' &&
                                    fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx') {
                                    showMsg("error", "File should be in .pdf, .doc, .docx, .xls, .xlsx format");
                                    return;
                                }
                                if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 4000000) {
                                        showMsg("error",
                                            "The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."
                                            );
                                        $("#file_id_1_1").val("");
                                        return;
                                    }
                                }
                                if (fileType == 'pdf') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 10485760) {
                                        showMsg("error", "The file size can not be more than 10 MB.");
                                        $("#file_id_1_1").val("");
                                        return;
                                    }
                                }
                                $("#file_id_1_text_1").html(filename);
                                var file = $(this)[0].files && $(this)[0].files[0];
                                var img = new Image();
                                img.src = window.URL.createObjectURL(file);
                                img.onload = function() {
                                    var width = img.naturalWidth,
                                        height = img.naturalHeight;
                                    window.URL.revokeObjectURL(img.src);
                                    if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                        if (width < 300 || width > 5000 || height < 300 || height > 5000) {
                                            showMsg("error",
                                                "The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."
                                                );
                                            $("#file_id_1_1").val("");
                                            $("#file_id_1_text_1").html("No file selected...");
                                            return;
                                        }
                                    }
                                    checkfile_id_1Plus();
                                };
                            });
                        });

                        function file_id_1_call(id) {
                            $("#file_id_1_" + id).change(function() {
                                var filepath = this.value;
                                var m = filepath.match(/([^\/\\]+)$/);
                                var filename = m[1];
                                var filename_array = filename.split('.');
                                var fileType = filename_array[filename_array.length - 1].toLowerCase();
                                if (this.id.indexOf('file_id_2_') != -1) {
                                    if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg') {
                                        showMsg("error", "Photo should be in .jpg, jpeg, .png  format");
                                        return;
                                    }
                                }
                                if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType !=
                                    'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx') {
                                    showMsg("error", "File should be in .pdf, .doc, .docx, .xls, .xlsx format");
                                    return;
                                }
                                if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 4000000) {
                                        showMsg("error",
                                            "The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."
                                            );
                                        $("#file_id_1_" + id).val("");
                                        return;
                                    }
                                }
                                if (fileType == 'pdf') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 10485760) {
                                        showMsg("error", "The file size can not be more than 10 MB.");
                                        $("#file_id_1_" + id).val("");
                                        return;
                                    }
                                }
                                $("#file_id_1_text_" + id).html(filename);
                                var file = $(this)[0].files && $(this)[0].files[0];
                                var img = new Image();
                                img.src = window.URL.createObjectURL(file);
                                img.onload = function() {
                                    var width = img.naturalWidth,
                                        height = img.naturalHeight;
                                    window.URL.revokeObjectURL(img.src);
                                    if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                        if (width < 300 || width > 5000 || height < 300 || height > 5000) {
                                            showMsg("error",
                                                "The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."
                                                );
                                            $("#file_id_1_" + id).val("");
                                            $("#file_id_1_text_" + id).html("No file selected...");
                                            return;
                                        }
                                    }
                                };
                            });
                        }
                        var file_id_1Ctn = 1;

                        function addfile_id_1File() {
                            if (!valid_file_count()) {
                                showMsg('error', 'Error file count');
                                return;
                            }
                            if ($("#file_id_1_1").val() != "") {
                                $("#file_id_1Disabled").hide();
                                $("#file_id_1Active").show();
                            } else {
                                $("#file_id_1Active").hide();
                                $("#file_id_1Disabled").show();
                                return;
                            }
                            window.file_id_1Ctn++;
                            var str = '<tr id="row_file_id_1_' + window.file_id_1Ctn +
                                '"><td align="left" valign="top"><span class="filename" id="file_id_1_text_' + window.file_id_1Ctn +
                                '">No file selected...</span><label for="file_id_1_' + window.file_id_1Ctn +
                                '" class="label_browse">browse...<input type="file" id="file_id_1_' + window.file_id_1Ctn +
                                '" name="file_id_1_' + window.file_id_1Ctn +
                                '" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{ asset('frontendAsset') }}/images/delete_btn.png" onclick="removefile_id_1File(\'' +
                                window.file_id_1Ctn + '\');" class="addIcon_9339" /></td></tr>';
                            $(".file_id_1_table").append(str);
                            file_id_1_call(window.file_id_1Ctn);
                        }

                        function checkfile_id_1Plus() {
                            if ($("#file_id_1_1").val() != "") {
                                $("#file_id_1Disabled").hide();
                                $("#file_id_1Active").show();
                            } else {
                                $("#file_id_1Active").hide();
                                $("#file_id_1Disabled").show();
                            }
                        }

                        function removefile_id_1File(id) {
                            $("#row_file_id_1_" + id).remove();
                            checkfile_id_1Plus();
                        }
                    </script>
                    <tr>
                        <td style="padding-top:20px"><label class="lab_2899">Passport page 2</label></td>
                        <td style="padding-top:20px">
                            <table class="file_id_3_table">
                                <tr id="row_file_id_3_1">
                                    <td align="left" valign="top">
                                        <span class="filename" id="file_id_11_text_1">No file selected...</span>
                                        <input type="file" id="file_id_11_1" name="pasport_2"
                                            class="file_upload" />
                                        <label for="file_id_11_1" class="label_browse">browse...
                                        </label>
                                    </td>
                                    {{-- <td align="left" valign="top">
                                        <div class="addBox_disable_9339" id="file_id_3Disabled">Add</div>
                                        <div onClick="addfile_id_3File();" class="addBox_9339" id="file_id_3Active"
                                            style="display:none;">Add</div>
                                        <input type="hidden" value="" id="file_id_3_hidden"
                                            name="file_id_3_hidden" />
                                    </td> --}}
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <script language="javascript">
                        $(document).ready(function(e) {
                            $("#file_id_3_1").change(function() {
                                var filepath = this.value;
                                var m = filepath.match(/([^\/\\]+)$/);
                                var filename = m[1];
                                var filename_array = filename.split('.');
                                var fileType = filename_array[filename_array.length - 1].toLowerCase();
                                if (this.id.indexOf('file_id_2_') != -1) {
                                    if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg') {
                                        showMsg("error", "Photo should be in .jpg, jpeg, .png  format");
                                        return;
                                    }
                                }
                                if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' &&
                                    fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx') {
                                    showMsg("error", "File should be in .pdf, .doc, .docx, .xls, .xlsx format");
                                    return;
                                }
                                if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 4000000) {
                                        showMsg("error",
                                            "The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."
                                            );
                                        $("#file_id_3_1").val("");
                                        return;
                                    }
                                }
                                if (fileType == 'pdf') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 10485760) {
                                        showMsg("error", "The file size can not be more than 10 MB.");
                                        $("#file_id_3_1").val("");
                                        return;
                                    }
                                }
                                $("#file_id_3_text_1").html(filename);
                                var file = $(this)[0].files && $(this)[0].files[0];
                                var img = new Image();
                                img.src = window.URL.createObjectURL(file);
                                img.onload = function() {
                                    var width = img.naturalWidth,
                                        height = img.naturalHeight;
                                    window.URL.revokeObjectURL(img.src);
                                    if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                        if (width < 300 || width > 5000 || height < 300 || height > 5000) {
                                            showMsg("error",
                                                "The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."
                                                );
                                            $("#file_id_3_1").val("");
                                            $("#file_id_3_text_1").html("No file selected...");
                                            return;
                                        }
                                    }
                                    checkfile_id_3Plus();
                                };
                            });
                        });

                        function file_id_3_call(id) {
                            $("#file_id_3_" + id).change(function() {
                                var filepath = this.value;
                                var m = filepath.match(/([^\/\\]+)$/);
                                var filename = m[1];
                                var filename_array = filename.split('.');
                                var fileType = filename_array[filename_array.length - 1].toLowerCase();
                                if (this.id.indexOf('file_id_2_') != -1) {
                                    if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg') {
                                        showMsg("error", "Photo should be in .jpg, jpeg, .png  format");
                                        return;
                                    }
                                }
                                if (fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType !=
                                    'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx') {
                                    showMsg("error", "File should be in .pdf, .doc, .docx, .xls, .xlsx format");
                                    return;
                                }
                                if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 4000000) {
                                        showMsg("error",
                                            "The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."
                                            );
                                        $("#file_id_3_" + id).val("");
                                        return;
                                    }
                                }
                                if (fileType == 'pdf') {
                                    if (this.files[0].size < 30000 || this.files[0].size > 10485760) {
                                        showMsg("error", "The file size can not be more than 10 MB.");
                                        $("#file_id_3_" + id).val("");
                                        return;
                                    }
                                }
                                $("#file_id_3_text_" + id).html(filename);
                                var file = $(this)[0].files && $(this)[0].files[0];
                                var img = new Image();
                                img.src = window.URL.createObjectURL(file);
                                img.onload = function() {
                                    var width = img.naturalWidth,
                                        height = img.naturalHeight;
                                    window.URL.revokeObjectURL(img.src);
                                    if (fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg') {
                                        if (width < 300 || width > 5000 || height < 300 || height > 5000) {
                                            showMsg("error",
                                                "The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."
                                                );
                                            $("#file_id_3_" + id).val("");
                                            $("#file_id_3_text_" + id).html("No file selected...");
                                            return;
                                        }
                                    }
                                };
                            });
                        }
                        var file_id_3Ctn = 1;

                        function addfile_id_3File() {
                            if (!valid_file_count()) {
                                showMsg('error', 'Error file count');
                                return;
                            }
                            if ($("#file_id_3_1").val() != "") {
                                $("#file_id_3Disabled").hide();
                                $("#file_id_3Active").show();
                            } else {
                                $("#file_id_3Active").hide();
                                $("#file_id_3Disabled").show();
                                return;
                            }
                            window.file_id_3Ctn++;
                            var str = '<tr id="row_file_id_3_' + window.file_id_3Ctn +
                                '"><td align="left" valign="top"><span class="filename" id="file_id_3_text_' + window.file_id_3Ctn +
                                '">No file selected...</span><label for="file_id_3_' + window.file_id_3Ctn +
                                '" class="label_browse">browse...<input type="file" id="file_id_3_' + window.file_id_3Ctn +
                                '" name="file_id_3_' + window.file_id_3Ctn +
                                '" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{ asset('frontendAsset') }}/images/delete_btn.png" onclick="removefile_id_3File(\'' +
                                window.file_id_3Ctn + '\');" class="addIcon_9339" /></td></tr>';
                            $(".file_id_3_table").append(str);
                            file_id_3_call(window.file_id_3Ctn);
                        }

                        function checkfile_id_3Plus() {
                            if ($("#file_id_3_1").val() != "") {
                                $("#file_id_3Disabled").hide();
                                $("#file_id_3Active").show();
                            } else {
                                $("#file_id_3Active").hide();
                                $("#file_id_3Disabled").show();
                            }
                        }

                        function removefile_id_3File(id) {
                            $("#row_file_id_3_" + id).remove();
                            checkfile_id_3Plus();
                        }
                    </script>
                    <tr>
                        <td><label class="lab_2899">Login(latin letters and figures)</label></td>
                        <td><input type="text" name="user_name" id="login_txt" class="inp_2556" required="required"
                                value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Password</label></td>
                        <td><input type="password" name="password_txt" id="password_txt" class="inp_2556"
                                required="required" value="" /></td>
                    </tr>
                    <tr>
                        <td><label class="lab_2899">Repeat password</label></td>
                        <td><input type="password" name="password_confirmation" id="password_txt_repeat" class="inp_2556"
                                required="required" value="" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><br><button type="submit" class="btn_6655" />Next</button></td>
                    </tr>
                </table>
                <input type="hidden" name="type" value="foreign">
            </form>



            <!--PASSWORD VALIDATION-->
            <style>
                #message {
                    display: none;
                    background: #f1f1f1;
                    color: #000;
                    position: relative;
                    padding: 20px;
                    margin-top: 10px;
                    width: fit-content;
                    text-align: left;
                }

                #message p {
                    padding: 10px 35px;
                    font-size: 18px;
                }

                .valid {
                    color: green;
                }

                .valid:before {
                    position: relative;
                    left: -35px;
                    content: "✔";
                }

                .invalid {
                    color: red;
                }

                .invalid:before {
                    position: relative;
                    left: -35px;
                    content: "✖";
                }
            </style>
            <div id="message">
                <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>6 characters</b></p>
            </div>
            <script>
                var myInput = document.getElementById("password_txt");
                var letter = document.getElementById("letter");
                var capital = document.getElementById("capital");
                var number = document.getElementById("number");
                var length = document.getElementById("length");
                myInput.onfocus = function() {
                    document.getElementById("message").style.display = "block";
                }
                myInput.onblur = function() {
                    document.getElementById("message").style.display = "none";
                }
                myInput.onkeyup = function() {
                    // Validate lowercase letters
                    var lowerCaseLetters = /[a-z]/g;
                    if (myInput.value.match(lowerCaseLetters)) {
                        letter.classList.remove("invalid");
                        letter.classList.add("valid");
                    } else {
                        letter.classList.remove("valid");
                        letter.classList.add("invalid");
                    }
                    // Validate capital letters
                    var upperCaseLetters = /[A-Z]/g;
                    if (myInput.value.match(upperCaseLetters)) {
                        capital.classList.remove("invalid");
                        capital.classList.add("valid");
                    } else {
                        capital.classList.remove("valid");
                        capital.classList.add("invalid");
                    }
                    // Validate numbers
                    var numbers = /[0-9]/g;
                    if (myInput.value.match(numbers)) {
                        number.classList.remove("invalid");
                        number.classList.add("valid");
                    } else {
                        number.classList.remove("valid");
                        number.classList.add("invalid");
                    }
                    // Validate length
                    if (myInput.value.length >= 6) {
                        length.classList.remove("invalid");
                        length.classList.add("valid");
                    } else {
                        length.classList.remove("valid");
                        length.classList.add("invalid");
                    }
                }
            </script>
            <!--PASSWORD VALIDATION-->

            <br><br><br><br><br>


        </div>
        <!-- mainContent End -->
    </center>
@endsection
