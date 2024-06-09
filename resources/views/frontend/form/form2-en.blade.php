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
                            <option value="{{route('form2.ru')}}" >RU</option>
                            <option value="{{route('form2.en')}}" selected>EN</option>
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


<form id="form2" action="https://ework.e-gov.kg/form2.php?lng=en" method="post" enctype="multipart/form-data">
	<table cellpadding="4" cellspacing="4">
		<tr>
			<td><label class="lab_2899">Representative's surname</label></td>
			<td><input type="text" name="pred_lname" id="pred_lname" class="inp_2556" required="required" value="" /></td>
		</tr>
		<tr>
			<td><label class="lab_2899">Representative's name</label></td>
			<td><input type="text" name="pred_fname" id="pred_fname" class="inp_2556" required="required" value="" /></td>
		</tr>
		<tr>
			<td><label class="lab_2899">Name of legal entity</label></td>
			<td><textarea name="entity_name" id="entity_name" class="area_2556" required="required"></textarea></td>
		</tr>
		<tr>
			<td><label class="lab_2899">State registration number</label></td>
			<td><input type="text" name="gosreg_numb" id="gosreg_numb" class="inp_2556" required="required" value="" /></td>
		</tr>
		<tr>
			<td><label class="lab_2899">Tax payer code</label></td>
			<td><input type="text" name="inn_numb" id="inn_numb" class="inp_2556" required="required" value="" /></td>
		</tr>
		<tr>
			<td><label class="lab_2899">Founders of legal entity</label></td>
			<td><textarea name="entity_founders" id="entity_founders" class="area_2556" required="required"></textarea></td>
		</tr>
		<tr>
			<td><label class="lab_2899">Activity type</label></td>
			<td><textarea name="entity_activity_type" id="entity_activity_type" class="area_2556" required="required"></textarea></td>
		</tr>
		<tr>
			<td><label class="lab_2899">Legal address</label></td>
			<td><textarea name="entity_address" id="entity_address" class="area_2556" required="required"></textarea></td>
		</tr>


		<tr>
			<td colspan="2">
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places&amp;key=AIzaSyDl_KxQnWIEtdtOH7xE4E2UiJ9D2LILTbM"></script>
				<input id="searchInput" class="input-controls" type="text" placeholder="Enter a location">
 				<div class="map" id="map" style="width: 86%; height: 300px;"></div>
 				<div class="form_area">
				     <input type="text" name="location" id="location">
				     <input type="text" name="lat" id="lat">
				     <input type="text" name="lng" id="lng">
			 	</div>
			 	<style type="text/css">
				    .input-controls {
				      margin-top: 10px;
				      border: 1px solid transparent;
				      border-radius: 2px 0 0 2px;
				      box-sizing: border-box;
				      -moz-box-sizing: border-box;
				      height: 32px;
				      outline: none;
				      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
				    }
				    #searchInput {
				      background-color: #fff;
				      font-family: Roboto;
				      font-size: 15px;
				      font-weight: 300;
				      margin-left: 12px;
				      padding: 0 11px 0 13px;
				      text-overflow: ellipsis;
				      width: 50%;
				    }
				    #searchInput:focus {
				      border-color: #4d90fe;
				    }
				</style>
				<script>
					/* script */
					function initialize() {
					   var latlng = new google.maps.LatLng(28.5355161,77.39102649999995);
					    var map = new google.maps.Map(document.getElementById('map'), {
					      center: latlng,
					      zoom: 13
					    });
					    var marker = new google.maps.Marker({
					      map: map,
					      position: latlng,
					      draggable: true,
					      anchorPoint: new google.maps.Point(0, -29)
					   });
					    var input = document.getElementById('searchInput');
					    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
					    var geocoder = new google.maps.Geocoder();
					    var autocomplete = new google.maps.places.Autocomplete(input);
					    autocomplete.bindTo('bounds', map);
					    var infowindow = new google.maps.InfoWindow();   
					    autocomplete.addListener('place_changed', function() {
					        infowindow.close();
					        marker.setVisible(false);
					        var place = autocomplete.getPlace();
					        if (!place.geometry) {
					            window.alert("Autocomplete's returned place contains no geometry");
					            return;
					        }
					  
					        // If the place has a geometry, then present it on a map.
					        if (place.geometry.viewport) {
					            map.fitBounds(place.geometry.viewport);
					        } else {
					            map.setCenter(place.geometry.location);
					            map.setZoom(17);
					        }
					       
					        marker.setPosition(place.geometry.location);
					        marker.setVisible(true);          
					    
					        bindDataToForm(place.formatted_address,place.geometry.location.lat(),place.geometry.location.lng());
					        infowindow.setContent(place.formatted_address);
					        infowindow.open(map, marker);
					       
					    });
					    // this function will work on marker move event into map 
					    google.maps.event.addListener(marker, 'dragend', function() {
					        geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
					        if (status == google.maps.GeocoderStatus.OK) {
					          if (results[0]) {        
					              bindDataToForm(results[0].formatted_address,marker.getPosition().lat(),marker.getPosition().lng());
					              infowindow.setContent(results[0].formatted_address);
					              infowindow.open(map, marker);
					          }
					        }
					        });
					    });
					}
					function bindDataToForm(address,lat,lng){
					   document.getElementById('location').value = address;
					   document.getElementById('lat').value = lat;
					   document.getElementById('lng').value = lng;
					}
					google.maps.event.addDomListener(window, 'load', initialize);
				</script>
			</td>
		</tr>
		<tr>
			<td><label class="lab_2899">Actual activity address</label></td>
			<td><textarea name="entity_actual_address" id="entity_actual_address" class="area_2556" required="required"></textarea></td>
		</tr>
		<tr>
			<td><label class="lab_2899">Phone number</label></td>
			<td><input type="text" name="entity_phone" id="entity_phone" class="inp_2556" required="required" value="" /></td>
		</tr>
		<tr>
			<td><label class="lab_2899">Email address</label></td>
			<td><input type="text" name="email_address" id="email_address" class="inp_2556" required="required" value="" /></td>
		</tr>
		<tr>
                    		<td style="padding-top:20px"><label class="lab_2899">Staffing list</label></td>
                            <td style="padding-top:20px">
                                 <table class="file_id_10_table">
                                    <tr id="row_file_id_10_1">
                                        <td align="left" valign="top">
                                         <span class="filename" id="file_id_10_text_1">No file selected...</span>
                                         <label for="file_id_10_1" class="label_browse">browse...
                                         <input type="file" id="file_id_10_1" name="file_id_10_1" class="file_upload"  />
                                         </label>
                                        </td>
                                        <td align="left" valign="top">
                                        <div class="addBox_disable_9339" id="file_id_10Disabled">Add</div>
                                        <div onClick="addfile_id_10File();" class="addBox_9339" id="file_id_10Active" style="display:none;">Add</div>
                                        <input type="hidden" value="" id="file_id_10_hidden" name="file_id_10_hidden" />
                                    </td>
                                     </tr>
                                 </table>
                            </td>
                          </tr>	        <script language="javascript">
	            $(document).ready(function(e) {
	                $("#file_id_10_1").change(function() {
	                    var filepath = this.value;
	                    var m = filepath.match(/([^\/\\]+)$/);
	                    var filename = m[1];
	                    var filename_array = filename.split('.');
	                    var fileType = filename_array[filename_array.length - 1].toLowerCase();
	                    if( this.id.indexOf('doc_1_') != -1 ){ 
	                        if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
	                            showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
	                            return;
	                        }
	                    }
	                    if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
	                    if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
	                            showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
	                            $("#file_id_10_1").val(""); 
	                            return;
	                        }
	                    }
	                    if( fileType == 'pdf' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
	                            showMsg("error","The file size can not be more than 10 MB."); 
	                            $("#file_id_10_1").val(""); 
	                            return;
	                        }
	                    }
	                    $("#file_id_10_text_1").html(filename);
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
	                                $("#file_id_10_1").val(""); 
	                                $("#file_id_10_text_1").html("No file selected..."); 
	                                return;
	                            }
	                        }
	                        checkfile_id_10Plus();
	                    };
	                });
	            });
	            function file_id_10_call(id){
	                $("#file_id_10_"+id).change(function() {
	                    var filepath = this.value;
	                    var m = filepath.match(/([^\/\\]+)$/);
	                    var filename = m[1];
	                    var filename_array = filename.split('.');
	                    var fileType = filename_array[filename_array.length - 1].toLowerCase();
	                    if( this.id.indexOf('doc_1_') != -1 ){ 
	                        if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
	                            showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
	                            return;
	                        }
	                    }
	                    if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
	                    if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
	                            showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
	                            $("#file_id_10_"+id).val(""); 
	                            return;
	                        }
	                    }
	                    if( fileType == 'pdf' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
	                            showMsg("error","The file size can not be more than 10 MB."); 
	                            $("#file_id_10_"+id).val(""); 
	                            return;
	                        }
	                    }
	                    $("#file_id_10_text_"+id).html(filename);
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
	                                    $("#file_id_10_"+id).val(""); 
	                                    $("#file_id_10_text_"+id).html("No file selected..."); 
	                                    return;
	                                }
	                            }
	                    };
	                });
	            }
	            var file_id_10Ctn = 1;
	            function addfile_id_10File(){
	                if(!valid_file_count()){  showMsg('error','Error file count'); return; }
	                if( $("#file_id_10_1").val() != "" ){
	                    $("#file_id_10Disabled").hide();
	                    $("#file_id_10Active").show();
	                }else{
	                    $("#file_id_10Active").hide();
	                    $("#file_id_10Disabled").show();
	                    return;
	                }
	                window.file_id_10Ctn++;
	                var str = '<tr id="row_file_id_10_'+window.file_id_10Ctn+'"><td align="left" valign="top"><span class="filename" id="file_id_10_text_'+window.file_id_10Ctn+'">No file selected...</span><label for="file_id_10_'+window.file_id_10Ctn+'" class="label_browse">browse...<input type="file" id="file_id_10_'+window.file_id_10Ctn+'" name="file_id_10_'+window.file_id_10Ctn+'" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{asset('frontendAsset')}}/images/delete_btn.png" onclick="removefile_id_10File(\''+window.file_id_10Ctn+'\');" class="addIcon_9339" /></td></tr>';
	                $(".file_id_10_table").append(str);
	                file_id_10_call(window.file_id_10Ctn);
	            }
	            function checkfile_id_10Plus(){
	                if( $("#file_id_10_1").val() != "" ){
	                    $("#file_id_10Disabled").hide();
	                    $("#file_id_10Active").show();
	                }else{
	                    $("#file_id_10Active").hide();
	                    $("#file_id_10Disabled").show();
	                }
	            }
	            function removefile_id_10File(id){
	                $("#row_file_id_10_"+id).remove();
	                checkfile_id_10Plus();
	            }
	        </script>
    	<tr>
                    		<td style="padding-top:20px"><label class="lab_2899">Legal registration certificate</label></td>
                            <td style="padding-top:20px">
                                 <table class="file_id_8_table">
                                    <tr id="row_file_id_8_1">
                                        <td align="left" valign="top">
                                         <span class="filename" id="file_id_8_text_1">No file selected...</span>
                                         <label for="file_id_8_1" class="label_browse">browse...
                                         <input type="file" id="file_id_8_1" name="file_id_8_1" class="file_upload" required />
                                         </label>
                                        </td>
                                        <td align="left" valign="top">
                                        <div class="addBox_disable_9339" id="file_id_8Disabled">Add</div>
                                        <div onClick="addfile_id_8File();" class="addBox_9339" id="file_id_8Active" style="display:none;">Add</div>
                                        <input type="hidden" value="" id="file_id_8_hidden" name="file_id_8_hidden" />
                                    </td>
                                     </tr>
                                 </table>
                            </td>
                          </tr>	        <script language="javascript">
	            $(document).ready(function(e) {
	                $("#file_id_8_1").change(function() {
	                    var filepath = this.value;
	                    var m = filepath.match(/([^\/\\]+)$/);
	                    var filename = m[1];
	                    var filename_array = filename.split('.');
	                    var fileType = filename_array[filename_array.length - 1].toLowerCase();
	                    if( this.id.indexOf('doc_1_') != -1 ){ 
	                        if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
	                            showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
	                            return;
	                        }
	                    }
	                    if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
	                    if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
	                            showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
	                            $("#file_id_8_1").val(""); 
	                            return;
	                        }
	                    }
	                    if( fileType == 'pdf' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
	                            showMsg("error","The file size can not be more than 10 MB."); 
	                            $("#file_id_8_1").val(""); 
	                            return;
	                        }
	                    }
	                    $("#file_id_8_text_1").html(filename);
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
	                                $("#file_id_8_1").val(""); 
	                                $("#file_id_8_text_1").html("No file selected..."); 
	                                return;
	                            }
	                        }
	                        checkfile_id_8Plus();
	                    };
	                });
	            });
	            function file_id_8_call(id){
	                $("#file_id_8_"+id).change(function() {
	                    var filepath = this.value;
	                    var m = filepath.match(/([^\/\\]+)$/);
	                    var filename = m[1];
	                    var filename_array = filename.split('.');
	                    var fileType = filename_array[filename_array.length - 1].toLowerCase();
	                    if( this.id.indexOf('doc_1_') != -1 ){ 
	                        if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
	                            showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
	                            return;
	                        }
	                    }
	                    if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
	                    if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
	                            showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
	                            $("#file_id_8_"+id).val(""); 
	                            return;
	                        }
	                    }
	                    if( fileType == 'pdf' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
	                            showMsg("error","The file size can not be more than 10 MB."); 
	                            $("#file_id_8_"+id).val(""); 
	                            return;
	                        }
	                    }
	                    $("#file_id_8_text_"+id).html(filename);
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
	                                    $("#file_id_8_"+id).val(""); 
	                                    $("#file_id_8_text_"+id).html("No file selected..."); 
	                                    return;
	                                }
	                            }
	                    };
	                });
	            }
	            var file_id_8Ctn = 1;
	            function addfile_id_8File(){
	                if(!valid_file_count()){  showMsg('error','Error file count'); return; }
	                if( $("#file_id_8_1").val() != "" ){
	                    $("#file_id_8Disabled").hide();
	                    $("#file_id_8Active").show();
	                }else{
	                    $("#file_id_8Active").hide();
	                    $("#file_id_8Disabled").show();
	                    return;
	                }
	                window.file_id_8Ctn++;
	                var str = '<tr id="row_file_id_8_'+window.file_id_8Ctn+'"><td align="left" valign="top"><span class="filename" id="file_id_8_text_'+window.file_id_8Ctn+'">No file selected...</span><label for="file_id_8_'+window.file_id_8Ctn+'" class="label_browse">browse...<input type="file" id="file_id_8_'+window.file_id_8Ctn+'" name="file_id_8_'+window.file_id_8Ctn+'" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{asset('frontendAsset')}}/images/delete_btn.png" onclick="removefile_id_8File(\''+window.file_id_8Ctn+'\');" class="addIcon_9339" /></td></tr>';
	                $(".file_id_8_table").append(str);
	                file_id_8_call(window.file_id_8Ctn);
	            }
	            function checkfile_id_8Plus(){
	                if( $("#file_id_8_1").val() != "" ){
	                    $("#file_id_8Disabled").hide();
	                    $("#file_id_8Active").show();
	                }else{
	                    $("#file_id_8Active").hide();
	                    $("#file_id_8Disabled").show();
	                }
	            }
	            function removefile_id_8File(id){
	                $("#row_file_id_8_"+id).remove();
	                checkfile_id_8Plus();
	            }
	        </script>
    	<tr>
                    		<td style="padding-top:20px"><label class="lab_2899">License to carry out licensed activities</label></td>
                            <td style="padding-top:20px">
                                 <table class="file_id_11_table">
                                    <tr id="row_file_id_11_1">
                                        <td align="left" valign="top">
                                         <span class="filename" id="file_id_11_text_1">No file selected...</span>
                                         <label for="file_id_11_1" class="label_browse">browse...
                                         <input type="file" id="file_id_11_1" name="file_id_11_1" class="file_upload"  />
                                         </label>
                                        </td>
                                        <td align="left" valign="top">
                                        <div class="addBox_disable_9339" id="file_id_11Disabled">Add</div>
                                        <div onClick="addfile_id_11File();" class="addBox_9339" id="file_id_11Active" style="display:none;">Add</div>
                                        <input type="hidden" value="" id="file_id_11_hidden" name="file_id_11_hidden" />
                                    </td>
                                     </tr>
                                 </table>
                            </td>
                          </tr>	        <script language="javascript">
	            $(document).ready(function(e) {
	                $("#file_id_11_1").change(function() {
	                    var filepath = this.value;
	                    var m = filepath.match(/([^\/\\]+)$/);
	                    var filename = m[1];
	                    var filename_array = filename.split('.');
	                    var fileType = filename_array[filename_array.length - 1].toLowerCase();
	                    if( this.id.indexOf('doc_1_') != -1 ){ 
	                        if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
	                            showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
	                            return;
	                        }
	                    }
	                    if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
	                    if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
	                            showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
	                            $("#file_id_11_1").val(""); 
	                            return;
	                        }
	                    }
	                    if( fileType == 'pdf' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
	                            showMsg("error","The file size can not be more than 10 MB."); 
	                            $("#file_id_11_1").val(""); 
	                            return;
	                        }
	                    }
	                    $("#file_id_11_text_1").html(filename);
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
	                                $("#file_id_11_1").val(""); 
	                                $("#file_id_11_text_1").html("No file selected..."); 
	                                return;
	                            }
	                        }
	                        checkfile_id_11Plus();
	                    };
	                });
	            });
	            function file_id_11_call(id){
	                $("#file_id_11_"+id).change(function() {
	                    var filepath = this.value;
	                    var m = filepath.match(/([^\/\\]+)$/);
	                    var filename = m[1];
	                    var filename_array = filename.split('.');
	                    var fileType = filename_array[filename_array.length - 1].toLowerCase();
	                    if( this.id.indexOf('doc_1_') != -1 ){ 
	                        if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
	                            showMsg("error","Photo should be in .jpg, jpeg, .png  format"); 
	                            return;
	                        }
	                    }
	                    if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","File should be in .pdf, .doc, .docx, .xls, .xlsx format"); return; }
	                    if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
	                            showMsg("error","The size of your file does not meet to requirements. Minimum size should be 30 kb and maximum size should be 4MB."); 
	                            $("#file_id_11_"+id).val(""); 
	                            return;
	                        }
	                    }
	                    if( fileType == 'pdf' ){
	                        if( this.files[0].size < 30000 || this.files[0].size > 10485760 ){ 
	                            showMsg("error","The file size can not be more than 10 MB."); 
	                            $("#file_id_11_"+id).val(""); 
	                            return;
	                        }
	                    }
	                    $("#file_id_11_text_"+id).html(filename);
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
	                                    $("#file_id_11_"+id).val(""); 
	                                    $("#file_id_11_text_"+id).html("No file selected..."); 
	                                    return;
	                                }
	                            }
	                    };
	                });
	            }
	            var file_id_11Ctn = 1;
	            function addfile_id_11File(){
	                if(!valid_file_count()){  showMsg('error','Error file count'); return; }
	                if( $("#file_id_11_1").val() != "" ){
	                    $("#file_id_11Disabled").hide();
	                    $("#file_id_11Active").show();
	                }else{
	                    $("#file_id_11Active").hide();
	                    $("#file_id_11Disabled").show();
	                    return;
	                }
	                window.file_id_11Ctn++;
	                var str = '<tr id="row_file_id_11_'+window.file_id_11Ctn+'"><td align="left" valign="top"><span class="filename" id="file_id_11_text_'+window.file_id_11Ctn+'">No file selected...</span><label for="file_id_11_'+window.file_id_11Ctn+'" class="label_browse">browse...<input type="file" id="file_id_11_'+window.file_id_11Ctn+'" name="file_id_11_'+window.file_id_11Ctn+'" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{asset('frontendAsset')}}/images/delete_btn.png" onclick="removefile_id_11File(\''+window.file_id_11Ctn+'\');" class="addIcon_9339" /></td></tr>';
	                $(".file_id_11_table").append(str);
	                file_id_11_call(window.file_id_11Ctn);
	            }
	            function checkfile_id_11Plus(){
	                if( $("#file_id_11_1").val() != "" ){
	                    $("#file_id_11Disabled").hide();
	                    $("#file_id_11Active").show();
	                }else{
	                    $("#file_id_11Active").hide();
	                    $("#file_id_11Disabled").show();
	                }
	            }
	            function removefile_id_11File(id){
	                $("#row_file_id_11_"+id).remove();
	                checkfile_id_11Plus();
	            }
	        </script>
    			<tr>
			<td><label class="lab_2899">Login(latin letters and figures)</label></td>
			<td><input type="text" name="login_txt" id="login_txt" class="inp_2556" required="required" value="" /></td>
		</tr>
		<tr>
			<td><label class="lab_2899">Password</label></td>
			<td><input type="password" name="password_txt" id="password_txt" class="inp_2556" required="required" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" /></td>
		</tr>
		<tr>
			<td><label class="lab_2899">Repeat password</label></td>
			<td><input type="password" name="password_txt_repeat" id="password_txt_repeat" class="inp_2556" required="required" value="" /></td>
		</tr>
		<tr>
			<td></td>
			<td><br><input type="button" value="Next" class="btn_6655" onclick="form2Submit();" /></td>
		</tr>
	</table>
	<input type="hidden" value="file_id_10,file_id_8,file_id_11," id="documents_name" name="documents_name" />
	<input type="hidden" value="1" id="option_id" name="option_id" />
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
  <h3>Пароль должен содержать (латинскими)</h3>
  <p id="letter" class="invalid"><b>Маленькую</b> букву</p>
  <p id="capital" class="invalid"><b>Заглавную</b> букву</p>
  <p id="number" class="invalid"><b>Цифры</b></p>
  <p id="length" class="invalid">Минимум <b>6 символов</b></p>
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