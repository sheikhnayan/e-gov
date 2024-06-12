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
                      <img src="{{asset('frontendAsset')}}/images/icon_facebook.png" class="shareIcons" style="margin-left: 15px;" />
                      <img src="{{asset('frontendAsset')}}/images/icon_instagram.png" class="shareIcons" />
                      <img src="{{asset('frontendAsset')}}/images/icon_tviter.png" class="shareIcons" />
                      -->
                  </td>
                  <td align="right" style="padding-top: 3px;">
                      <a href="{{asset('frontendAsset')}}/images/instruction_20230904.pdf" target="_blank" style="color:white;text-decoration:none;">Instruction</a>
                      &nbsp;&nbsp;&nbsp;
                      <a href="bank_data.html" target="_blank" style="color:white;text-decoration:none;">Bank details</a>&nbsp;&nbsp;
                      <select id="langSel">
                        <!-- <option value="ky">KG</option> -->
                        <option value="{{route('form3.ru')}}">RU</option>
                        <option value="{{route('index.en')}}" selected>EN</option>
                    </select>
                  </td>
              </tr>
          </table>	
      </div>
      <div class="topBarUnder">
          <table cellpadding="0" cellspacing="0" width="100%">
              <tr>
                  <td align="left" width="40%"><a href="index.html"><img src="{{asset('frontendAsset')}}/images/kyrgyz_emblem6d24.png?n=1" class="logo_8789" height="81" /></a></td>
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
  function dateFunctions(){
      var fixDate = function (date){
         return date<10?"0"+date: date;
      }
      var dateStr = new Date();
      var currDate = fixDate(dateStr.getDate())+"/"+fixDate(dateStr.getMonth()+1)+"/" + dateStr.getFullYear();
      $('#bdate').Zebra_DatePicker({
          view: 'years',
          format:'d/m/Y',
          direction: ['01/01/1900',currDate]
      });
      $('#doc_issue_date').Zebra_DatePicker({
          view: 'years',
          format:'d/m/Y',
          direction: ['01/01/1986',currDate]
      });
      $('.date_ancyal').Zebra_DatePicker({
          view: 'years',
          format:'d/m/Y',
          direction: -1
      });
      $('.date_apaga').Zebra_DatePicker({
          view: 'years',
          format:'d/m/Y',
          direction: 1
      }); 
  }
</script>
<!-- Date Picker -->

<form id="form3" action="https://ework.e-gov.kg/form3.php?lng=en" method="post" enctype="multipart/form-data">
  <table cellpadding="4" cellspacing="4">
      <tr>
          <td><label class="lab_2899">Surname</label></td>
          <td><input type="text" name="lname" id="lname" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Name</label></td>
          <td><input type="text" name="fname" id="fname" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Patronymic</label></td>
          <td><input type="text" name="pname" id="pname" class="inp_2556" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Date of birth</label></td>
          <td><input type="text" name="bdate" id="bdate" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Place of birth</label></td>
          <td><input type="text" name="birth_place" id="birth_place" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Gender</label></td>
          <td><select class="inp_2556" id="sex_id" name="sex_id" required="required">
              <option value="">Select</option>
              <option value="1">Male</option><option value="2">Female</option>			</select></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Country</label></td>
          <td><select class="inp_2556" id="doc_country" name="doc_country" required="required">
              <option value="">Select</option>
              <option value="1">Afghanistan</option><option value="2">Aland Islands</option><option value="3">Albania</option><option value="4">Algeria</option><option value="5">American Samoa</option><option value="6">Andorra</option><option value="7">Angola</option><option value="8">Anguilla</option><option value="9">Antarctica</option><option value="10">Antigua and Barbuda</option><option value="11">Argentina</option><option value="12">Armenia</option><option value="13">Aruba</option><option value="14">Australia</option><option value="15">Austria</option><option value="16">Azerbaijan</option><option value="17">Bahamas</option><option value="18">Bahrain</option><option value="19">Bangladesh</option><option value="20">Barbados</option><option value="21">Belarus</option><option value="22">Belgium</option><option value="23">Belize</option><option value="24">Benin</option><option value="25">Bermuda</option><option value="26">Bhutan</option><option value="27">Bolivia</option><option value="28">Bosnia and Herzegovina</option><option value="29">Botswana</option><option value="30">Bouvet Island</option><option value="31">Brazil</option><option value="32">British Virgin Islands</option><option value="33">British Indian Ocean Territory</option><option value="34">Brunei Darussalam</option><option value="35">Bulgaria</option><option value="36">Burkina Faso</option><option value="37">Burundi</option><option value="38">Cambodia</option><option value="39">Cameroon</option><option value="40">Canada</option><option value="41">Cape Verde</option><option value="42">Cayman Islands</option><option value="43">Central African Republic</option><option value="44">Chad</option><option value="45">Chile</option><option value="46">China</option><option value="47">Hong Kong</option><option value="48">Macao</option><option value="49">Christmas Island</option><option value="50">Cocos Islands</option><option value="51">Colombia</option><option value="52">Comoros</option><option value="53">Congo</option><option value="54">Democratic Republic of the Congo</option><option value="55">Cook Islands</option><option value="56">Costa Rica</option><option value="57">Côte d'Ivoire</option><option value="58">Croatia</option><option value="59">Cuba</option><option value="60">Cyprus</option><option value="61">Czech Republic</option><option value="62">Denmark</option><option value="63">Djibouti</option><option value="64">Dominica</option><option value="65">Dominican Republic</option><option value="66">Ecuador</option><option value="67">Egypt</option><option value="68">El Salvador</option><option value="69">Equatorial Guinea</option><option value="70">Eritrea</option><option value="71">Estonia</option><option value="72">Ethiopia</option><option value="73">Falkland Islands</option><option value="74">Faroe Islands</option><option value="75">Fiji</option><option value="76">Finland</option><option value="77">France</option><option value="78">French Guiana</option><option value="79">French Polynesia</option><option value="80">French Southern Territories</option><option value="81">Gabon</option><option value="82">Gambia</option><option value="83">Georgia</option><option value="84">Germany</option><option value="85">Ghana</option><option value="86">Gibraltar</option><option value="87">Greece</option><option value="88">Greenland</option><option value="89">Grenada</option><option value="90">Guadeloupe</option><option value="91">Guam</option><option value="92">Guatemala</option><option value="93">Guernsey</option><option value="94">Guinea</option><option value="95">Guinea-Bissau</option><option value="96">Guyana</option><option value="97">Haiti</option><option value="98">Heard Island and Mcdonald Islands</option><option value="99">Holy See</option><option value="100">Honduras</option><option value="101">Hungary</option><option value="102">Iceland</option><option value="103">India</option><option value="104">Indonesia</option><option value="105">Iran</option><option value="106">Iraq</option><option value="107">Ireland</option><option value="108">Isle of Man</option><option value="109">Israel</option><option value="110">Italy</option><option value="111">Jamaica</option><option value="112">Japan</option><option value="113">Jersey</option><option value="114">Jordan</option><option value="115">Kazakhstan</option><option value="116">Kenya</option><option value="117">Kiribati</option><option value="118">Democratic People's Republic of Korea</option><option value="119">Korea</option><option value="120">Kuwait</option><option value="121">Kyrgyzstan</option><option value="122">Lao PDR</option><option value="123">Latvia</option><option value="124">Lebanon</option><option value="125">Lesotho</option><option value="126">Liberia</option><option value="127">Libya</option><option value="128">Liechtenstein</option><option value="129">Lithuania</option><option value="130">Luxembourg</option><option value="131">Macedonia</option><option value="132">Madagascar</option><option value="133">Malawi</option><option value="134">Malaysia</option><option value="135">Maldives</option><option value="136">Mali</option><option value="137">Malta</option><option value="138">Marshall Islands</option><option value="139">Martinique</option><option value="140">Mauritania</option><option value="141">Mauritius</option><option value="142">Mayotte</option><option value="143">Mexico</option><option value="144">Micronesia</option><option value="145">Moldova</option><option value="146">Monaco</option><option value="147">Mongolia</option><option value="148">Montenegro</option><option value="149">Montserrat</option><option value="150">Morocco</option><option value="151">Mozambique</option><option value="152">Myanmar</option><option value="153">Namibia</option><option value="154">Nauru</option><option value="155">Nepal</option><option value="156">Netherlands</option><option value="157">Netherlands Antilles</option><option value="158">New Caledonia</option><option value="159">New Zealand</option><option value="160">Nicaragua</option><option value="161">Niger</option><option value="162">Nigeria</option><option value="163">Niue</option><option value="164">Norfolk Island</option><option value="165">Northern Mariana Islands</option><option value="166">Norway</option><option value="167">Oman</option><option value="168">Pakistan</option><option value="169">Palau</option><option value="170">Palestinian Territory</option><option value="171">Panama</option><option value="172">Papua New Guinea</option><option value="173">Paraguay</option><option value="174">Peru</option><option value="175">Philippines</option><option value="176">Pitcairn</option><option value="177">Poland</option><option value="178">Portugal</option><option value="179">Puerto Rico</option><option value="180">Qatar</option><option value="181">Réunion</option><option value="182">Romania</option><option value="183">Russian Federation</option><option value="184">Rwanda</option><option value="185">Saint-Barthélemy</option><option value="186">Saint Helena</option><option value="187">Saint Kitts and Nevis</option><option value="188">Saint Lucia</option><option value="189">Saint-Martin</option><option value="190">Saint Pierre and Miquelon</option><option value="191">Saint Vincent and Grenadines</option><option value="192">Samoa</option><option value="193">San Marino</option><option value="194">Sao Tome and Principe</option><option value="195">Saudi Arabia</option><option value="196">Senegal</option><option value="197">Serbia</option><option value="198">Seychelles</option><option value="199">Sierra Leone</option><option value="200">Singapore</option><option value="201">Slovakia</option><option value="202">Slovenia</option><option value="203">Solomon Islands</option><option value="204">Somalia</option><option value="205">South Africa</option><option value="206">South Georgia and the South Sandwich Islands</option><option value="207">South Sudan</option><option value="208">Spain</option><option value="209">Sri Lanka</option><option value="210">Sudan</option><option value="211">Suriname</option><option value="212">Svalbard and Jan Mayen Islands</option><option value="213">Swaziland</option><option value="214">Sweden</option><option value="215">Switzerland</option><option value="216">Syrian Arab Republic</option><option value="217">Taiwan</option><option value="218">Tajikistan</option><option value="219">Tanzania</option><option value="220">Thailand</option><option value="221">Timor-Leste</option><option value="222">Togo</option><option value="223">Tokelau</option><option value="224">Tonga</option><option value="225">Trinidad and Tobago</option><option value="226">Tunisia</option><option value="227">Turkey</option><option value="228">Turkmenistan</option><option value="229">Turks and Caicos Islands</option><option value="230">Tuvalu</option><option value="231">Uganda</option><option value="232">Ukraine</option><option value="233">United Arab Emirates</option><option value="234">United Kingdom</option><option value="235">United States of America</option><option value="236">United States Minor Outlying Islands</option><option value="237">Uruguay</option><option value="238">Uzbekistan</option><option value="239">Vanuatu</option><option value="240">Venezuela</option><option value="241">Viet Nam</option><option value="242">Virgin Islands</option><option value="243">Wallis and Futuna Islands</option><option value="244">Western Sahara</option><option value="245">Yemen</option><option value="246">Zambia</option><option value="247">Zimbabwe</option><option value="248">Metropolitan France</option><option value="249">British Overseas Territories</option><option value="250">British National (Overseas)</option><option value="251">British Overseas citizen</option><option value="252">British protected person</option><option value="253">British subject</option><option value="254">UN Association Employee</option><option value="255">UN Employee</option><option value="257">Refugee</option><option value="258">Refugee</option><option value="259">Person of undefined citizenship</option><option value="260">Yugoslavia</option><option value="261">Zaire</option><option value="262">EU</option>			</select></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Passport number</label></td>
          <td><input type="text" name="doc_nom" id="doc_nom" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Passport issue date</label></td>
          <td><input type="text" name="doc_issue_date" id="doc_issue_date" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Passport expiration date</label></td>
          <td><input type="text" name="doc_expiration_date" id="doc_expiration_date" class="inp_2556 date_apaga" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Person without citizenship</label></td>
          <td><input type="checkbox" name="bez_grajdanstvo_flag" id="bez_grajdanstvo_flag" value="1" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Education</label></td>
          <td><select class="inp_2556" id="education_level" name="education_level" required="required">
              <option value="">Select</option>
              <option value="1">higher education</option><option value="2">specialized secondary education</option><option value="3">secondary education</option>			</select></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Family status</label></td>
          <td><select class="inp_2556" id="family_status" name="family_status" required="required">
              <option value="">Select</option>
              <option value="1">married</option><option value="2">not married</option>			</select></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Mobile phone</label></td>
          <td><input type="text" name="mobile_phone" id="mobile_phone" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Email address</label></td>
          <td><input type="text" name="email_address" id="email_address" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">WhatsApp</label></td>
          <td><input type="text" name="whatsapp_number" id="whatsapp_number" class="inp_2556" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Viber</label></td>
          <td><input type="text" name="Viber_number" id="Viber_number" class="inp_2556" value="" /></td>
      </tr>
      <tr>
                          <td style="padding-top:20px"><label class="lab_2899">Photo</label></td>
                          <td style="padding-top:20px">
                               <table class="file_id_2_table">
                                  <tr id="row_file_id_2_1">
                                      <td align="left" valign="top">
                                       <span class="filename" id="file_id_2_text_1">No file selected...</span>
                                       <label for="file_id_2_1" class="label_browse">browse...
                                       <input type="file" id="file_id_2_1" name="file_id_2_1" class="file_upload" required />
                                       </label>
                                      </td>
                                      <td align="left" valign="top">
                                      <div class="addBox_disable_9339" id="file_id_2Disabled">Add</div>
                                      <div onClick="addfile_id_2File();" class="addBox_9339" id="file_id_2Active" style="display:none;">Add</div>
                                      <input type="hidden" value="" id="file_id_2_hidden" name="file_id_2_hidden" />
                                  </td>
                                   </tr>
                               </table>
                          </td>
                        </tr>	        <script language="javascript">
              $(document).ready(function(e) {
                  $("#file_id_2_1").change(function() {
                      var filepath = this.value;
                      var m = filepath.match(/([^\/\\]+)$/);
                      var filename = m[1];
                      var filename_array = filename.split('.');
                      var fileType = filename_array[filename_array.length - 1].toLowerCase();
                      if( this.id.indexOf('file_id_2_') != -1 ){
                          if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
                              showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
                              $("#file_id_2_1").val(""); 
                              return;
                          }
                      }
                      if( fileType == 'pdf' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
                              showMsg("error","The file size can not be more than 10 MB."); 
                              $("#file_id_2_1").val(""); 
                              return;
                          }
                      }
                      $("#file_id_2_text_1").html(filename);
                      var file = $(this)[0].files && $(this)[0].files[0];
                      var img = new Image();
                      img.src = window.URL.createObjectURL( file );
                      img.onload = function() {
                          var width = img.naturalWidth,
                              height = img.naturalHeight;
                          window.URL.revokeObjectURL( img.src );
                          if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                              if( width < 300 || width > 5000 || height < 300 || height > 5000 ){ 
                                  showMsg("error","The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."); 
                                  $("#file_id_2_1").val(""); 
                                  $("#file_id_2_text_1").html("No file selected..."); 
                                  return;
                              }
                          }
                          checkfile_id_2Plus();
                      };
                  });
              });
              function file_id_2_call(id){
                  $("#file_id_2_"+id).change(function() {
                      var filepath = this.value;
                      var m = filepath.match(/([^\/\\]+)$/);
                      var filename = m[1];
                      var filename_array = filename.split('.');
                      var fileType = filename_array[filename_array.length - 1].toLowerCase();
                      if( this.id.indexOf('file_id_2_') != -1 ){ 
                          if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
                              showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
                              $("#file_id_2_"+id).val(""); 
                              return;
                          }
                      }
                      if( fileType == 'pdf' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
                              showMsg("error","The file size can not be more than 10 MB."); 
                              $("#file_id_2_"+id).val(""); 
                              return;
                          }
                      }
                      $("#file_id_2_text_"+id).html(filename);
                      var file = $(this)[0].files && $(this)[0].files[0];
                      var img = new Image();
                      img.src = window.URL.createObjectURL( file );
                      img.onload = function() {
                          var width = img.naturalWidth,
                              height = img.naturalHeight;
                              window.URL.revokeObjectURL( img.src );
                              if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                                  if( width < 300 || width > 5000 || height < 300 || height > 5000 ){ 
                                      showMsg("error","The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."); 
                                      $("#file_id_2_"+id).val(""); 
                                      $("#file_id_2_text_"+id).html("No file selected..."); 
                                      return;
                                  }
                              }
                      };
                  });
              }
              var file_id_2Ctn = 1;
              function addfile_id_2File(){
                  if(!valid_file_count()){  showMsg('error','Error file count'); return; }
                  if( $("#file_id_2_1").val() != "" ){
                      $("#file_id_2Disabled").hide();
                      $("#file_id_2Active").show();
                  }else{
                      $("#file_id_2Active").hide();
                      $("#file_id_2Disabled").show();
                      return;
                  }
                  window.file_id_2Ctn++;
                  var str = '<tr id="row_file_id_2_'+window.file_id_2Ctn+'"><td align="left" valign="top"><span class="filename" id="file_id_2_text_'+window.file_id_2Ctn+'">No file selected...</span><label for="file_id_2_'+window.file_id_2Ctn+'" class="label_browse">browse...<input type="file" id="file_id_2_'+window.file_id_2Ctn+'" name="file_id_2_'+window.file_id_2Ctn+'" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{asset('frontendAsset')}}/images/delete_btn.png" onclick="removefile_id_2File(\''+window.file_id_2Ctn+'\');" class="addIcon_9339" /></td></tr>';
                  $(".file_id_2_table").append(str);
                  file_id_2_call(window.file_id_2Ctn);
              }
              function checkfile_id_2Plus(){
                  if( $("#file_id_2_1").val() != "" ){
                      $("#file_id_2Disabled").hide();
                      $("#file_id_2Active").show();
                  }else{
                      $("#file_id_2Active").hide();
                      $("#file_id_2Disabled").show();
                  }
              }
              function removefile_id_2File(id){
                  $("#row_file_id_2_"+id).remove();
                  checkfile_id_2Plus();
              }
          </script>
      <tr>
                          <td style="padding-top:20px"><label class="lab_2899">Passport page 1</label></td>
                          <td style="padding-top:20px">
                               <table class="file_id_1_table">
                                  <tr id="row_file_id_1_1">
                                      <td align="left" valign="top">
                                       <span class="filename" id="file_id_1_text_1">No file selected...</span>
                                       <label for="file_id_1_1" class="label_browse">browse...
                                       <input type="file" id="file_id_1_1" name="file_id_1_1" class="file_upload" required />
                                       </label>
                                      </td>
                                      <td align="left" valign="top">
                                      <div class="addBox_disable_9339" id="file_id_1Disabled">Add</div>
                                      <div onClick="addfile_id_1File();" class="addBox_9339" id="file_id_1Active" style="display:none;">Add</div>
                                      <input type="hidden" value="" id="file_id_1_hidden" name="file_id_1_hidden" />
                                  </td>
                                   </tr>
                               </table>
                          </td>
                        </tr>	        <script language="javascript">
              $(document).ready(function(e) {
                  $("#file_id_1_1").change(function() {
                      var filepath = this.value;
                      var m = filepath.match(/([^\/\\]+)$/);
                      var filename = m[1];
                      var filename_array = filename.split('.');
                      var fileType = filename_array[filename_array.length - 1].toLowerCase();
                      if( this.id.indexOf('file_id_2_') != -1 ){
                          if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
                              showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
                              $("#file_id_1_1").val(""); 
                              return;
                          }
                      }
                      if( fileType == 'pdf' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
                              showMsg("error","The file size can not be more than 10 MB."); 
                              $("#file_id_1_1").val(""); 
                              return;
                          }
                      }
                      $("#file_id_1_text_1").html(filename);
                      var file = $(this)[0].files && $(this)[0].files[0];
                      var img = new Image();
                      img.src = window.URL.createObjectURL( file );
                      img.onload = function() {
                          var width = img.naturalWidth,
                              height = img.naturalHeight;
                          window.URL.revokeObjectURL( img.src );
                          if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                              if( width < 300 || width > 5000 || height < 300 || height > 5000 ){ 
                                  showMsg("error","The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."); 
                                  $("#file_id_1_1").val(""); 
                                  $("#file_id_1_text_1").html("No file selected..."); 
                                  return;
                              }
                          }
                          checkfile_id_1Plus();
                      };
                  });
              });
              function file_id_1_call(id){
                  $("#file_id_1_"+id).change(function() {
                      var filepath = this.value;
                      var m = filepath.match(/([^\/\\]+)$/);
                      var filename = m[1];
                      var filename_array = filename.split('.');
                      var fileType = filename_array[filename_array.length - 1].toLowerCase();
                      if( this.id.indexOf('file_id_2_') != -1 ){ 
                          if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
                              showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
                              $("#file_id_1_"+id).val(""); 
                              return;
                          }
                      }
                      if( fileType == 'pdf' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
                              showMsg("error","The file size can not be more than 10 MB."); 
                              $("#file_id_1_"+id).val(""); 
                              return;
                          }
                      }
                      $("#file_id_1_text_"+id).html(filename);
                      var file = $(this)[0].files && $(this)[0].files[0];
                      var img = new Image();
                      img.src = window.URL.createObjectURL( file );
                      img.onload = function() {
                          var width = img.naturalWidth,
                              height = img.naturalHeight;
                              window.URL.revokeObjectURL( img.src );
                              if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                                  if( width < 300 || width > 5000 || height < 300 || height > 5000 ){ 
                                      showMsg("error","The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."); 
                                      $("#file_id_1_"+id).val(""); 
                                      $("#file_id_1_text_"+id).html("No file selected..."); 
                                      return;
                                  }
                              }
                      };
                  });
              }
              var file_id_1Ctn = 1;
              function addfile_id_1File(){
                  if(!valid_file_count()){  showMsg('error','Error file count'); return; }
                  if( $("#file_id_1_1").val() != "" ){
                      $("#file_id_1Disabled").hide();
                      $("#file_id_1Active").show();
                  }else{
                      $("#file_id_1Active").hide();
                      $("#file_id_1Disabled").show();
                      return;
                  }
                  window.file_id_1Ctn++;
                  var str = '<tr id="row_file_id_1_'+window.file_id_1Ctn+'"><td align="left" valign="top"><span class="filename" id="file_id_1_text_'+window.file_id_1Ctn+'">No file selected...</span><label for="file_id_1_'+window.file_id_1Ctn+'" class="label_browse">browse...<input type="file" id="file_id_1_'+window.file_id_1Ctn+'" name="file_id_1_'+window.file_id_1Ctn+'" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{asset('frontendAsset')}}/images/delete_btn.png" onclick="removefile_id_1File(\''+window.file_id_1Ctn+'\');" class="addIcon_9339" /></td></tr>';
                  $(".file_id_1_table").append(str);
                  file_id_1_call(window.file_id_1Ctn);
              }
              function checkfile_id_1Plus(){
                  if( $("#file_id_1_1").val() != "" ){
                      $("#file_id_1Disabled").hide();
                      $("#file_id_1Active").show();
                  }else{
                      $("#file_id_1Active").hide();
                      $("#file_id_1Disabled").show();
                  }
              }
              function removefile_id_1File(id){
                  $("#row_file_id_1_"+id).remove();
                  checkfile_id_1Plus();
              }
          </script>
      <tr>
                          <td style="padding-top:20px"><label class="lab_2899">Passport page 2</label></td>
                          <td style="padding-top:20px">
                               <table class="file_id_3_table">
                                  <tr id="row_file_id_3_1">
                                      <td align="left" valign="top">
                                       <span class="filename" id="file_id_3_text_1">No file selected...</span>
                                       <label for="file_id_3_1" class="label_browse">browse...
                                       <input type="file" id="file_id_3_1" name="file_id_3_1" class="file_upload"  />
                                       </label>
                                      </td>
                                      <td align="left" valign="top">
                                      <div class="addBox_disable_9339" id="file_id_3Disabled">Add</div>
                                      <div onClick="addfile_id_3File();" class="addBox_9339" id="file_id_3Active" style="display:none;">Add</div>
                                      <input type="hidden" value="" id="file_id_3_hidden" name="file_id_3_hidden" />
                                  </td>
                                   </tr>
                               </table>
                          </td>
                        </tr>	        <script language="javascript">
              $(document).ready(function(e) {
                  $("#file_id_3_1").change(function() {
                      var filepath = this.value;
                      var m = filepath.match(/([^\/\\]+)$/);
                      var filename = m[1];
                      var filename_array = filename.split('.');
                      var fileType = filename_array[filename_array.length - 1].toLowerCase();
                      if( this.id.indexOf('file_id_2_') != -1 ){
                          if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
                              showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
                              $("#file_id_3_1").val(""); 
                              return;
                          }
                      }
                      if( fileType == 'pdf' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
                              showMsg("error","The file size can not be more than 10 MB."); 
                              $("#file_id_3_1").val(""); 
                              return;
                          }
                      }
                      $("#file_id_3_text_1").html(filename);
                      var file = $(this)[0].files && $(this)[0].files[0];
                      var img = new Image();
                      img.src = window.URL.createObjectURL( file );
                      img.onload = function() {
                          var width = img.naturalWidth,
                              height = img.naturalHeight;
                          window.URL.revokeObjectURL( img.src );
                          if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                              if( width < 300 || width > 5000 || height < 300 || height > 5000 ){ 
                                  showMsg("error","The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."); 
                                  $("#file_id_3_1").val(""); 
                                  $("#file_id_3_text_1").html("No file selected..."); 
                                  return;
                              }
                          }
                          checkfile_id_3Plus();
                      };
                  });
              });
              function file_id_3_call(id){
                  $("#file_id_3_"+id).change(function() {
                      var filepath = this.value;
                      var m = filepath.match(/([^\/\\]+)$/);
                      var filename = m[1];
                      var filename_array = filename.split('.');
                      var fileType = filename_array[filename_array.length - 1].toLowerCase();
                      if( this.id.indexOf('file_id_2_') != -1 ){ 
                          if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
                              showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
                              $("#file_id_3_"+id).val(""); 
                              return;
                          }
                      }
                      if( fileType == 'pdf' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
                              showMsg("error","The file size can not be more than 10 MB."); 
                              $("#file_id_3_"+id).val(""); 
                              return;
                          }
                      }
                      $("#file_id_3_text_"+id).html(filename);
                      var file = $(this)[0].files && $(this)[0].files[0];
                      var img = new Image();
                      img.src = window.URL.createObjectURL( file );
                      img.onload = function() {
                          var width = img.naturalWidth,
                              height = img.naturalHeight;
                              window.URL.revokeObjectURL( img.src );
                              if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                                  if( width < 300 || width > 5000 || height < 300 || height > 5000 ){ 
                                      showMsg("error","The resolution of your image does not meet to requirements. Minimum width of the image should be 300 px, minimum height of the image should be 300px. Maximim width of the image should be 5000 px, maximum height of the image should be 5000px."); 
                                      $("#file_id_3_"+id).val(""); 
                                      $("#file_id_3_text_"+id).html("No file selected..."); 
                                      return;
                                  }
                              }
                      };
                  });
              }
              var file_id_3Ctn = 1;
              function addfile_id_3File(){
                  if(!valid_file_count()){  showMsg('error','Error file count'); return; }
                  if( $("#file_id_3_1").val() != "" ){
                      $("#file_id_3Disabled").hide();
                      $("#file_id_3Active").show();
                  }else{
                      $("#file_id_3Active").hide();
                      $("#file_id_3Disabled").show();
                      return;
                  }
                  window.file_id_3Ctn++;
                  var str = '<tr id="row_file_id_3_'+window.file_id_3Ctn+'"><td align="left" valign="top"><span class="filename" id="file_id_3_text_'+window.file_id_3Ctn+'">No file selected...</span><label for="file_id_3_'+window.file_id_3Ctn+'" class="label_browse">browse...<input type="file" id="file_id_3_'+window.file_id_3Ctn+'" name="file_id_3_'+window.file_id_3Ctn+'" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{asset('frontendAsset')}}/images/delete_btn.png" onclick="removefile_id_3File(\''+window.file_id_3Ctn+'\');" class="addIcon_9339" /></td></tr>';
                  $(".file_id_3_table").append(str);
                  file_id_3_call(window.file_id_3Ctn);
              }
              function checkfile_id_3Plus(){
                  if( $("#file_id_3_1").val() != "" ){
                      $("#file_id_3Disabled").hide();
                      $("#file_id_3Active").show();
                  }else{
                      $("#file_id_3Active").hide();
                      $("#file_id_3Disabled").show();
                  }
              }
              function removefile_id_3File(id){
                  $("#row_file_id_3_"+id).remove();
                  checkfile_id_3Plus();
              }
          </script>
              <tr>
          <td><label class="lab_2899">Login(latin letters and figures)</label></td>
          <td><input type="text" name="login_txt" id="login_txt" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Password</label></td>
          <td><input type="password" name="password_txt" id="password_txt" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Repeat password</label></td>
          <td><input type="password" name="password_txt_repeat" id="password_txt_repeat" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td></td>
          <td><br><input type="button" value="Next" class="btn_6655" onclick="form3Submit();" /></td>
      </tr>
  </table>
  <input type="hidden" value="file_id_2,file_id_1,file_id_3," id="documents_name" name="documents_name" />
  <input type="hidden" value="" id="option_id" name="option_id" />
  <input type="hidden" value="1" id="register_submit" name="register_submit" />
</form>



<!--PASSWORD VALIDATION-->
<style>
  #message {
    display:none;
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
    if(myInput.value.match(lowerCaseLetters)) {  
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {  
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {  
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    // Validate length
    if(myInput.value.length >= 6) {
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