@extends('admin.layouts.main')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card  card-tasks">
                        <div class="card-header ">
                            <h4 class="card-title">Foreign Application list</h4>
                            {{-- <p class="card-category">Backend development</p> --}}
                        </div>
                        <div class="card-body ">
                            <div class="table-full-width">
                                <form action="{{ route('foreign-update',[$data->id]) }}" method="post">
                                    @csrf
                                    <table cellpadding="4" cellspacing="4">
                                        <tr>
                                            <td><label class="lab_2899">Surname</label></td>
                                            <td><input type="text" name="name" value="name" id="pred_lname" class="form-control" required="required"
                                                    value="" /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Representative's name</label></td>
                                            <td><input type="text" name="last_name" value="last_name" id="pred_fname" class="form-control" required="required"
                                                    /></td>
                                        </tr>
                                 
                                        <tr>
                                            <td><label class="lab_2899">Place of Birth</label></td>
                                            <td><input type="text" value="{{ $data->legal_entity }}" name="place_of_birth" id="gosreg_numb" class="form-control" required="required"
                                                    /></td>
                                        </tr>
                                  

                                        <tr>
                                            <td><label class="lab_2899">Gender</label></td>
                                            <td>
                                            <select name="gender" id="" class="form-control">
                                                <option value="{{ $data->legal_entity }}">{{ $data->legal_entity }}</option>
                                                {{-- <option value="1">Approve</option> --}}
                                            </select>
                                                </td>
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
                                            <td><input type="text" name="passport" value="{{ $data->passport }}" id="passport" class="form-control" required="required"
                                                 /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Issu Date</label></td>
                                            <td><input type="text" name="date_issue" value="{{ $data->date_issue }}" id="inn_numb" class="form-control" required="required"
                                                 /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899"> Date Expire</label></td>
                                            <td><input type="text" name="date_issue" value="{{ $data->date_expire }}" id="date_expire" class="form-control" required="required"
                                                 /></td>
                                        </tr>

                                        <tr>
                                            <td><label class="lab_2899"> Person Without Citizenship</label></td>
                                            <td><input type="text" name="person_without_citizenship" value="{{ $data->person_without_citizenship }}" id="person_without_citizenship" class="form-control" required="required"
                                                 /></td>
                                        </tr>

                                        <tr>
                                            <td><label class="lab_2899"> Education</label></td>
                                            <td><input type="text" name="education" value="{{ $data->education }}" id="education" class="form-control" required="required"
                                                 /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899"> Whatsapp</label></td>
                                            <td><input type="text" name="whatsapp" value="{{ $data->whatsapp }}" id="whatsapp" class="form-control" required="required"
                                                 /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899"> Viber</label></td>
                                            <td><input type="text" name="viber" value="{{ $data->viber }}" id="viber" class="form-control" required="required"
                                                 /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899"> Pasport 2</label></td>
                                            <td><input type="text" name="pasport_2" value="{{ $data->pasport_2 }}" id="pasport_2" class="form-control" required="required"
                                                 /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899"> Passport 1</label></td>
                                            <td><input type="text" name="passport_1" value="{{ $data->passport_1 }}" id="passport_1" class="form-control" required="required"
                                                 /></td>
                                        </tr>
                                   
                                   
                                  
                                        <tr>
                                            <td><label class="lab_2899">Phone number</label></td>
                                            <td><input type="text" name="mobile" id="entity_phone" class="form-control"
                                                    required="required" value="{{ $data->mobile }}" /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Email address</label></td>
                                            <td><input type="text" name="email" id="email_address" class="form-control"
                                                    required="required" value="{{ $data->email }}" /></td>
                                        </tr>
                                    

                            

                                        <tr>
                                            <td><label class="lab_2899">Login(latin letters and figures)</label></td>
                                            <td><input type="text" name="user_name" id="login_txt" class="form-control" required="required"
                                                    value="{{ $data->user_name }}" /></td>
                                        </tr>
                                        <tr>
                                            <td><label class="lab_2899">Status</label></td>
                                            <td>
                                            <select name="status" id="" class="form-control">
                                                <option value="0">Disapprove</option>
                                                <option value="1">Approve</option>
                                            </select>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><br>
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            {{-- <div class="stats">
                                <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
