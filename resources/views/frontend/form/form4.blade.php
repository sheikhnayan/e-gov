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
                      <a href="{{asset('frontendAsset')}}/images/instruction_20230904.pdf" target="_blank" style="color:white;text-decoration:none;">Инструкция</a>
                      &nbsp;&nbsp;&nbsp;
                      <a href="bank_data.html" target="_blank" style="color:white;text-decoration:none;">Банковские реквизиты</a>&nbsp;&nbsp;
                      <select id="langSel">
                        <!-- <option value="ky">KG</option> -->
                        <option value="{{route('form4')}}" selected>RU</option>
                        <option value="{{route('form4')}}" >EN</option>
                    </select>
                  </td>
              </tr>
          </table>	
      </div>
      <div class="topBarUnder">
          <table cellpadding="0" cellspacing="0" width="100%">
              <tr>
                  <td align="left" width="40%"><a href="index.html"><img src="{{asset('frontendAsset')}}/images/kyrgyz_emblem6d24.png?n=1" class="logo_8789" height="81" /></a></td>
                  <td align="left"><b>Электронные услуги выдачи разрешений на работу<br>
Электронные услуги регистрации Цифровой Кочевник</b></td>
              </tr>
          </table>
      </div>







<br><br><br>
<h2>Регистрация личного кабинета цифрового кочевника</h2><br><br>


<!-- Date Picker -->
<script src="scripts/js/zebra_datepicker.js"></script>
<link href="scripts/css/zebra_datepicker.css" rel="stylesheet" type="text/css" />
<script language="javascript">
  $(document).ready(function(e) {
      $("#lname").keyup(function(e){
          if( $(this).val().substr(-1) == '-' || $(this).val().substr(-1) == ' ' ) return;
          if( is_TEXT(e.key) == false && is_TEXT($(this).val().substr(-1)) == false ){ $(this).val( $(this).val().substr(0, $(this).val().length-1) ); }
      });
      $("#fname").keyup(function(e){
          if( $(this).val().substr(-1) == '-' || $(this).val().substr(-1) == ' ' ) return;
          if( is_TEXT(e.key) == false && is_TEXT($(this).val().substr(-1)) == false ){ $(this).val( $(this).val().substr(0, $(this).val().length-1) ); } 
      });
      $("#pname").keyup(function(e){
          if( $(this).val().substr(-1) == '-' || $(this).val().substr(-1) == ' ' ) return;
          if( is_TEXT(e.key) == false && is_TEXT($(this).val().substr(-1)) == false ){ $(this).val( $(this).val().substr(0, $(this).val().length-1) ); } 
      });
      $("#doc_nom").keyup(function() {
          var $th = $(this);
          $th.val( $th.val().replace(/[^a-zA-Z0-9]/g, function(str) {
              return '';
          } ) );
      });
      $("#login_txt").keyup(function() {
          var $th = $(this);
          $th.val( $th.val().replace(/[^a-zA-Z0-9]/g, function(str) {
              return '';
          } ) );
      });
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
<div id="nomad_photo_content" style="display: none;">Изображение лица должно быть четким, лицо и плечи фотографируемого находятся во фронтальном положении к объективу фотоаппарата. <br><br>
Допускается разворот головы до 5 градусов от фронтального положения в любом направлении; <br><br>
Выражение лица должно быть нейтральным, брови должны иметь нейтральное положение, взгляд должен быть направлен прямо в объектив фотоаппарата.<br><br>
Съемка осуществляется без головных уборов, за исключением женского платка, не закрывающего овал лица и плотно облегающего голову. <br><br>
В случае, если заявитель фотографируется в оптических очках, оправа очков не должна закрывать глаза, а очки не должны давать бликов. 
Допускается фотографирование в очках с темными линзами лиц с нарушением зрения; </div>
<form id="form13" action="https://ework.e-gov.kg/form13.php?lng=ru" method="post" enctype="multipart/form-data">
  <table cellpadding="4" cellspacing="4">
      <tr>
          <td><label class="lab_2899">Фамилия как в паспорте</label></td>
          <td><input type="text" name="lname" id="lname" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Имя как в паспорте</label></td>
          <td><input type="text" name="fname" id="fname" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Отчество как в паспорте</label></td>
          <td><input type="text" name="pname" id="pname" class="inp_2556" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Дата рождения</label></td>
          <td><input type="text" name="bdate" id="bdate" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Пол</label></td>
          <td><select class="inp_2556" id="sex_id" name="sex_id" required="required">
              <option value="">Select</option>
              <option value="1">Male</option><option value="2">Female</option>			</select></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Страна документа</label></td>
          <td><select class="inp_2556" id="doc_country" name="doc_country" required="required" onchange="call_doc_type();">
              <option value="">Select</option>
              <option value="12">Armenia</option><option value="16">Azerbaijan</option><option value="21">Belarus</option><option value="115">Kazakhstan</option><option value="145">Moldova</option><option value="183">Russian Federation</option>			</select></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Номер документа</label></td>
          <td><input type="text" name="doc_nom" id="doc_nom" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Тип документа</label></td>
          <td><select class="inp_2556" id="doc_type" name="doc_type" required="required"></select></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Дата выдачи документа</label></td>
          <td><input type="text" name="doc_issue_date" id="doc_issue_date" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Дата действительности документа</label></td>
          <td><input type="text" name="doc_expiration_date" id="doc_expiration_date" class="inp_2556 date_apaga" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Номер мобильного телефона</label></td>
          <td><input type="text" name="mobile_phone" id="mobile_phone" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Адрес электронной почты: </label></td>
          <td><input type="text" name="email_address" id="email_address" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
                          <td style="padding-top:20px"><label class="lab_2899">Фото</label></td>
                          <td style="padding-top:20px">
                               <table class="file_id_1_table">
                                  <tr id="row_file_id_1_1">
                                      <td align="left" valign="top">
                                       <span class="filename" id="file_id_1_text_1">Не выбрано файлов ..</span>
                                       <label for="file_id_1_1" class="label_browse">выбрать...
                                       <input type="file" id="file_id_1_1" name="file_id_1_1" class="file_upload" required /> <br><img width="100" src="{{asset('frontendAsset')}}/images/transparent.png" id="file_id_1_1_preview">
                                           <script>
                                              $(document).ready(function(e) {
                                                  var src = document.getElementById("file_id_1_1");
                                                  var target = document.getElementById("file_id_1_1_preview");
                                                  showImage(src,target);
                                              });
                                           </script></label>
                                      </td>
                                      <td align="left" valign="top">
                                      <div class="addBox_disable_9339" id="file_id_1Disabled">Add</div>
                                      <div onClick="addfile_id_1File();" class="addBox_9339" id="file_id_1Active" style="display:none;">Add</div>
                                      <input type="hidden" value="" id="file_id_1_hidden" name="file_id_1_hidden" />
                                  </td>
                                   </tr>
                               </table>
                               <input type="button" style="padding:4px;" value="Важная информация по фото" onClick="showMsg('success',$('#nomad_photo_content').html());" />
                          </td>
                        </tr>	        <script language="javascript">
              //var canvas = document.getElementById('canvas');
              //var ctx = canvas.getContext('2d');

              function showImage(src,target) {

                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                fr.onload = function(e) {

                                target.src = this.result;
                              var targetID=target.id;
                              console.log(targetID+'====');
                              if (targetID == 'file_id_1_1_preview'){
                               window.setTimeout(function(){
                                    var img = document.getElementById(target.id);
                                    ctx.drawImage(img, 0,  0, 480, 360);	
                                    face_detect(target.id,src.id); 
                              },500);
                              }

                        };
                src.addEventListener("change",function() {
                  // fill fr with image data    
                  fr.readAsDataURL(src.files[0]);
                  
                });
              }


              function face_detect(preview,fileSelect){
                  console.log('face_detect');
                  var foundFace=false;

                      var rgba = ctx.getImageData(0, 0, 480, 360).data;
                      // prepare input to `run_cascade`
                      image = {
                          "pixels": rgba_to_grayscale(rgba, 360, 480),
                          "nrows": 360,
                          "ncols": 480,
                          "ldim": 480
                      }
                      params = {
                          "shiftfactor": 0.1, // move the detection window by 10% of its size
                          "minsize": 20,      // minimum size of a face (not suitable for real-time detection, set it to 100 in that case)
                          "maxsize": 1000,    // maximum size of a face
                          "scalefactor": 1.1  // for multiscale processing: resize the detection window by 10% when moving to the higher scale
                      }
                      // run the cascade over the image
                      // dets is an array that contains (r, c, s, q) quadruplets
                      // (representing row, column, scale and detection score)
                      dets = pico.run_cascade(image, facefinder_classify_region, params);
                      // cluster the obtained detections
                      dets = pico.cluster_detections(dets, 0.2); // set IoU threshold to 0.2
                      // draw results
                      qthresh = 5.0 // this constant is empirical: other cascades might require a different one
                      
                      for(i=0; i<dets.length; ++i){
                              console.log('i='+i);
                              // check the detection score
                              // if it's above the threshold, draw it
                              console.log(dets[i][3]);
                              console.log(qthresh);
                              console.log(dets[i][3]/qthresh);
//					                if((dets[i][3]/qthresh)>0.2 && (dets[i][3]/qthresh)<2)
                              if(dets[i][3]>qthresh)
                              {
                                        
                                  console.log('param1='+dets[i][1]);
                                  console.log('param2='+dets[i][0]);
                                  console.log('param3='+dets[i][2]/2);

                                  if ((dets[i][2]/2)>65){
                                      ctx.beginPath();
                                      ctx.arc(dets[i][1], dets[i][0], dets[i][2]/2, 0, 2*Math.PI, false);
                                      ctx.lineWidth = 3;
                                      ctx.strokeStyle = 'rgba(200,0,0,0.5)';
                                      ctx.stroke();
                                      foundFace=true;
                                  }

                               }                 
                      }
                    if (foundFace==false){
                           showMsg("error","Лицо не распознано. пожалуйста попробуйте другое фото");
                           $('#'+preview).attr('src','images/transparent.png');
                           document.getElementById(fileSelect).value= null;
                    }  
              }


              var facefinder_classify_region = function(r, c, s, pixels, ldim) {return -1.0;};
              var cascadeurl = 'scripts/js/facefinder.html';
              fetch(cascadeurl).then(function(response) {
                  response.arrayBuffer().then(function(buffer) {
                      var bytes = new Int8Array(buffer);
                      facefinder_classify_region = pico.unpack_cascade(bytes);
                      console.log('* cascade loaded');
                  })
              })
              /*
                  prepare the image and canvas context
              */
              //var ctx = document.getElementById('canvas').getContext('2d');


              function rgba_to_grayscale(rgba, nrows, ncols) {
                  var gray = new Uint8Array(nrows*ncols);
                  for(var r=0; r<nrows; ++r)
                      for(var c=0; c<ncols; ++c)
                          // gray = 0.2*red + 0.7*green + 0.1*blue
                          gray[r*ncols + c] = (2*rgba[r*4*ncols+4*c+0]+7*rgba[r*4*ncols+4*c+1]+1*rgba[r*4*ncols+4*c+2])/10;
                  return gray;
              }


              $(document).ready(function(e) {
                  $("#file_id_1_1").change(function() {
                      var filepath = this.value;
                      var m = filepath.match(/([^\/\\]+)$/);
                      var filename = m[1];
                      var filename_array = filename.split('.');
                      var fileType = filename_array[filename_array.length - 1].toLowerCase();
                      if( this.id.indexOf('file_id_2_') != -1 ){
                          if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
                              showMsg("error","Фото должно быть в формате .jpg, jpeg, .png"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","Файл должен быть в формате .pdf, .doc, .docx, .xls, .xlsx "); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","Размер вашего файла не соответствует требованиям. Минимальный размер должен составлять 30 КБ, а максимальный размер - 4 МБ."); 
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
                                  $("#file_id_1_text_1").html("Не выбрано файлов .."); 
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
                              showMsg("error","Фото должно быть в формате .jpg, jpeg, .png"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","Файл должен быть в формате .pdf, .doc, .docx, .xls, .xlsx "); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","Размер вашего файла не соответствует требованиям. Минимальный размер должен составлять 30 КБ, а максимальный размер - 4 МБ."); 
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
                                      $("#file_id_1_text_"+id).html("Не выбрано файлов .."); 
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
                  var str = '<tr id="row_file_id_1_'+window.file_id_1Ctn+'"><td align="left" valign="top"><span class="filename" id="file_id_1_text_'+window.file_id_1Ctn+'">Не выбрано файлов ..</span><label for="file_id_1_'+window.file_id_1Ctn+'" class="label_browse">выбрать...<input type="file" id="file_id_1_'+window.file_id_1Ctn+'" name="file_id_1_'+window.file_id_1Ctn+'" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{asset('frontendAsset')}}/images/delete_btn.png" onclick="removefile_id_1File(\''+window.file_id_1Ctn+'\');" class="addIcon_9339" /></td></tr>';
                  $(".file_id_1_table").append(str);
                  file_id_1_call(window.file_id_1Ctn);
                  var src = document.getElementById("file_id_1_"+window.file_id_1Ctn); var target = document.getElementById("file_id_1_"+window.file_id_1Ctn+"_preview"); showImage(src,target); 
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
                          <td style="padding-top:20px"><label class="lab_2899">Фотокопия паспорта страница 1:</label></td>
                          <td style="padding-top:20px">
                               <table class="file_id_2_table">
                                  <tr id="row_file_id_2_1">
                                      <td align="left" valign="top">
                                       <span class="filename" id="file_id_2_text_1">Не выбрано файлов ..</span>
                                       <label for="file_id_2_1" class="label_browse">выбрать...
                                       <input type="file" id="file_id_2_1" name="file_id_2_1" class="file_upload" required /></label>
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
              //var canvas = document.getElementById('canvas');
              //var ctx = canvas.getContext('2d');

              function showImage(src,target) {

                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                fr.onload = function(e) {

                                target.src = this.result;
                              var targetID=target.id;
                              console.log(targetID+'====');
                              if (targetID == 'file_id_1_1_preview'){
                               window.setTimeout(function(){
                                    var img = document.getElementById(target.id);
                                    ctx.drawImage(img, 0,  0, 480, 360);	
                                    face_detect(target.id,src.id); 
                              },500);
                              }

                        };
                src.addEventListener("change",function() {
                  // fill fr with image data    
                  fr.readAsDataURL(src.files[0]);
                  
                });
              }


              function face_detect(preview,fileSelect){
                  console.log('face_detect');
                  var foundFace=false;

                      var rgba = ctx.getImageData(0, 0, 480, 360).data;
                      // prepare input to `run_cascade`
                      image = {
                          "pixels": rgba_to_grayscale(rgba, 360, 480),
                          "nrows": 360,
                          "ncols": 480,
                          "ldim": 480
                      }
                      params = {
                          "shiftfactor": 0.1, // move the detection window by 10% of its size
                          "minsize": 20,      // minimum size of a face (not suitable for real-time detection, set it to 100 in that case)
                          "maxsize": 1000,    // maximum size of a face
                          "scalefactor": 1.1  // for multiscale processing: resize the detection window by 10% when moving to the higher scale
                      }
                      // run the cascade over the image
                      // dets is an array that contains (r, c, s, q) quadruplets
                      // (representing row, column, scale and detection score)
                      dets = pico.run_cascade(image, facefinder_classify_region, params);
                      // cluster the obtained detections
                      dets = pico.cluster_detections(dets, 0.2); // set IoU threshold to 0.2
                      // draw results
                      qthresh = 5.0 // this constant is empirical: other cascades might require a different one
                      
                      for(i=0; i<dets.length; ++i){
                              console.log('i='+i);
                              // check the detection score
                              // if it's above the threshold, draw it
                              console.log(dets[i][3]);
                              console.log(qthresh);
                              console.log(dets[i][3]/qthresh);
//					                if((dets[i][3]/qthresh)>0.2 && (dets[i][3]/qthresh)<2)
                              if(dets[i][3]>qthresh)
                              {
                                        
                                  console.log('param1='+dets[i][1]);
                                  console.log('param2='+dets[i][0]);
                                  console.log('param3='+dets[i][2]/2);

                                  if ((dets[i][2]/2)>65){
                                      ctx.beginPath();
                                      ctx.arc(dets[i][1], dets[i][0], dets[i][2]/2, 0, 2*Math.PI, false);
                                      ctx.lineWidth = 3;
                                      ctx.strokeStyle = 'rgba(200,0,0,0.5)';
                                      ctx.stroke();
                                      foundFace=true;
                                  }

                               }                 
                      }
                    if (foundFace==false){
                           showMsg("error","Лицо не распознано. пожалуйста попробуйте другое фото");
                           $('#'+preview).attr('src','images/transparent.png');
                           document.getElementById(fileSelect).value= null;
                    }  
              }


              var facefinder_classify_region = function(r, c, s, pixels, ldim) {return -1.0;};
              var cascadeurl = 'scripts/js/facefinder.html';
              fetch(cascadeurl).then(function(response) {
                  response.arrayBuffer().then(function(buffer) {
                      var bytes = new Int8Array(buffer);
                      facefinder_classify_region = pico.unpack_cascade(bytes);
                      console.log('* cascade loaded');
                  })
              })
              /*
                  prepare the image and canvas context
              */
              //var ctx = document.getElementById('canvas').getContext('2d');


              function rgba_to_grayscale(rgba, nrows, ncols) {
                  var gray = new Uint8Array(nrows*ncols);
                  for(var r=0; r<nrows; ++r)
                      for(var c=0; c<ncols; ++c)
                          // gray = 0.2*red + 0.7*green + 0.1*blue
                          gray[r*ncols + c] = (2*rgba[r*4*ncols+4*c+0]+7*rgba[r*4*ncols+4*c+1]+1*rgba[r*4*ncols+4*c+2])/10;
                  return gray;
              }


              $(document).ready(function(e) {
                  $("#file_id_2_1").change(function() {
                      var filepath = this.value;
                      var m = filepath.match(/([^\/\\]+)$/);
                      var filename = m[1];
                      var filename_array = filename.split('.');
                      var fileType = filename_array[filename_array.length - 1].toLowerCase();
                      if( this.id.indexOf('file_id_2_') != -1 ){
                          if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
                              showMsg("error","Фото должно быть в формате .jpg, jpeg, .png"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","Файл должен быть в формате .pdf, .doc, .docx, .xls, .xlsx "); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","Размер вашего файла не соответствует требованиям. Минимальный размер должен составлять 30 КБ, а максимальный размер - 4 МБ."); 
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
                                  $("#file_id_2_text_1").html("Не выбрано файлов .."); 
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
                              showMsg("error","Фото должно быть в формате .jpg, jpeg, .png"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","Файл должен быть в формате .pdf, .doc, .docx, .xls, .xlsx "); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","Размер вашего файла не соответствует требованиям. Минимальный размер должен составлять 30 КБ, а максимальный размер - 4 МБ."); 
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
                                      $("#file_id_2_text_"+id).html("Не выбрано файлов .."); 
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
                  var str = '<tr id="row_file_id_2_'+window.file_id_2Ctn+'"><td align="left" valign="top"><span class="filename" id="file_id_2_text_'+window.file_id_2Ctn+'">Не выбрано файлов ..</span><label for="file_id_2_'+window.file_id_2Ctn+'" class="label_browse">выбрать...<input type="file" id="file_id_2_'+window.file_id_2Ctn+'" name="file_id_2_'+window.file_id_2Ctn+'" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{asset('frontendAsset')}}/images/delete_btn.png" onclick="removefile_id_2File(\''+window.file_id_2Ctn+'\');" class="addIcon_9339" /></td></tr>';
                  $(".file_id_2_table").append(str);
                  file_id_2_call(window.file_id_2Ctn);
                  var src = document.getElementById("file_id_2_"+window.file_id_2Ctn); var target = document.getElementById("file_id_2_"+window.file_id_2Ctn+"_preview"); showImage(src,target); 
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
                          <td style="padding-top:20px"><label class="lab_2899">Фотокопия паспорта страница 2:</label></td>
                          <td style="padding-top:20px">
                               <table class="file_id_3_table">
                                  <tr id="row_file_id_3_1">
                                      <td align="left" valign="top">
                                       <span class="filename" id="file_id_3_text_1">Не выбрано файлов ..</span>
                                       <label for="file_id_3_1" class="label_browse">выбрать...
                                       <input type="file" id="file_id_3_1" name="file_id_3_1" class="file_upload"  /></label>
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
              //var canvas = document.getElementById('canvas');
              //var ctx = canvas.getContext('2d');

              function showImage(src,target) {

                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                fr.onload = function(e) {

                                target.src = this.result;
                              var targetID=target.id;
                              console.log(targetID+'====');
                              if (targetID == 'file_id_1_1_preview'){
                               window.setTimeout(function(){
                                    var img = document.getElementById(target.id);
                                    ctx.drawImage(img, 0,  0, 480, 360);	
                                    face_detect(target.id,src.id); 
                              },500);
                              }

                        };
                src.addEventListener("change",function() {
                  // fill fr with image data    
                  fr.readAsDataURL(src.files[0]);
                  
                });
              }


              function face_detect(preview,fileSelect){
                  console.log('face_detect');
                  var foundFace=false;

                      var rgba = ctx.getImageData(0, 0, 480, 360).data;
                      // prepare input to `run_cascade`
                      image = {
                          "pixels": rgba_to_grayscale(rgba, 360, 480),
                          "nrows": 360,
                          "ncols": 480,
                          "ldim": 480
                      }
                      params = {
                          "shiftfactor": 0.1, // move the detection window by 10% of its size
                          "minsize": 20,      // minimum size of a face (not suitable for real-time detection, set it to 100 in that case)
                          "maxsize": 1000,    // maximum size of a face
                          "scalefactor": 1.1  // for multiscale processing: resize the detection window by 10% when moving to the higher scale
                      }
                      // run the cascade over the image
                      // dets is an array that contains (r, c, s, q) quadruplets
                      // (representing row, column, scale and detection score)
                      dets = pico.run_cascade(image, facefinder_classify_region, params);
                      // cluster the obtained detections
                      dets = pico.cluster_detections(dets, 0.2); // set IoU threshold to 0.2
                      // draw results
                      qthresh = 5.0 // this constant is empirical: other cascades might require a different one
                      
                      for(i=0; i<dets.length; ++i){
                              console.log('i='+i);
                              // check the detection score
                              // if it's above the threshold, draw it
                              console.log(dets[i][3]);
                              console.log(qthresh);
                              console.log(dets[i][3]/qthresh);
//					                if((dets[i][3]/qthresh)>0.2 && (dets[i][3]/qthresh)<2)
                              if(dets[i][3]>qthresh)
                              {
                                        
                                  console.log('param1='+dets[i][1]);
                                  console.log('param2='+dets[i][0]);
                                  console.log('param3='+dets[i][2]/2);

                                  if ((dets[i][2]/2)>65){
                                      ctx.beginPath();
                                      ctx.arc(dets[i][1], dets[i][0], dets[i][2]/2, 0, 2*Math.PI, false);
                                      ctx.lineWidth = 3;
                                      ctx.strokeStyle = 'rgba(200,0,0,0.5)';
                                      ctx.stroke();
                                      foundFace=true;
                                  }

                               }                 
                      }
                    if (foundFace==false){
                           showMsg("error","Лицо не распознано. пожалуйста попробуйте другое фото");
                           $('#'+preview).attr('src','images/transparent.png');
                           document.getElementById(fileSelect).value= null;
                    }  
              }


              var facefinder_classify_region = function(r, c, s, pixels, ldim) {return -1.0;};
              var cascadeurl = 'scripts/js/facefinder.html';
              fetch(cascadeurl).then(function(response) {
                  response.arrayBuffer().then(function(buffer) {
                      var bytes = new Int8Array(buffer);
                      facefinder_classify_region = pico.unpack_cascade(bytes);
                      console.log('* cascade loaded');
                  })
              })
              /*
                  prepare the image and canvas context
              */
              //var ctx = document.getElementById('canvas').getContext('2d');


              function rgba_to_grayscale(rgba, nrows, ncols) {
                  var gray = new Uint8Array(nrows*ncols);
                  for(var r=0; r<nrows; ++r)
                      for(var c=0; c<ncols; ++c)
                          // gray = 0.2*red + 0.7*green + 0.1*blue
                          gray[r*ncols + c] = (2*rgba[r*4*ncols+4*c+0]+7*rgba[r*4*ncols+4*c+1]+1*rgba[r*4*ncols+4*c+2])/10;
                  return gray;
              }


              $(document).ready(function(e) {
                  $("#file_id_3_1").change(function() {
                      var filepath = this.value;
                      var m = filepath.match(/([^\/\\]+)$/);
                      var filename = m[1];
                      var filename_array = filename.split('.');
                      var fileType = filename_array[filename_array.length - 1].toLowerCase();
                      if( this.id.indexOf('file_id_2_') != -1 ){
                          if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' ){ 
                              showMsg("error","Фото должно быть в формате .jpg, jpeg, .png"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","Файл должен быть в формате .pdf, .doc, .docx, .xls, .xlsx "); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","Размер вашего файла не соответствует требованиям. Минимальный размер должен составлять 30 КБ, а максимальный размер - 4 МБ."); 
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
                                  $("#file_id_3_text_1").html("Не выбрано файлов .."); 
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
                              showMsg("error","Фото должно быть в формате .jpg, jpeg, .png"); 
                              return;
                          }
                      }
                      if( fileType != 'png' && fileType != 'jpg' && fileType != 'jpeg' && fileType != 'pdf' && fileType != 'doc' && fileType != 'docx' && fileType != 'xls' && fileType != 'xlsx' ){ showMsg("error","Файл должен быть в формате .pdf, .doc, .docx, .xls, .xlsx "); return; }
                      if( fileType == 'png' || fileType == 'jpg' || fileType == 'jpeg' ){
                          if( this.files[0].size < 30000 || this.files[0].size > 4000000 ){ 
                              showMsg("error","Размер вашего файла не соответствует требованиям. Минимальный размер должен составлять 30 КБ, а максимальный размер - 4 МБ."); 
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
                                      $("#file_id_3_text_"+id).html("Не выбрано файлов .."); 
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
                  var str = '<tr id="row_file_id_3_'+window.file_id_3Ctn+'"><td align="left" valign="top"><span class="filename" id="file_id_3_text_'+window.file_id_3Ctn+'">Не выбрано файлов ..</span><label for="file_id_3_'+window.file_id_3Ctn+'" class="label_browse">выбрать...<input type="file" id="file_id_3_'+window.file_id_3Ctn+'" name="file_id_3_'+window.file_id_3Ctn+'" class="file_upload" /></label></td><td align="left" valign="middle"><img src="{{asset('frontendAsset')}}/images/delete_btn.png" onclick="removefile_id_3File(\''+window.file_id_3Ctn+'\');" class="addIcon_9339" /></td></tr>';
                  $(".file_id_3_table").append(str);
                  file_id_3_call(window.file_id_3Ctn);
                  var src = document.getElementById("file_id_3_"+window.file_id_3Ctn); var target = document.getElementById("file_id_3_"+window.file_id_3Ctn+"_preview"); showImage(src,target); 
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
          <td><label class="lab_2899">Логин</label></td>
          <td><input type="text" name="login_txt" id="login_txt" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Пароль</label></td>
          <td><input type="password" name="password_txt" id="password_txt" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td><label class="lab_2899">Повторить пароль</label></td>
          <td><input type="password" name="password_txt_repeat" id="password_txt_repeat" class="inp_2556" required="required" value="" /></td>
      </tr>
      <tr>
          <td></td>
          <td><br><input type="button" value="Далее" class="btn_6655" onclick="form13Submit();" /></td>
      </tr>
  </table>
  <input type="hidden" value="file_id_1,file_id_2,file_id_3," id="documents_name" name="documents_name" />
  <input type="hidden" value="" id="option_id" name="option_id" />
  <input type="hidden" value="1" id="register_submit" name="register_submit" />
</form>



<script src="scripts/js/pico.js"></script>
<canvas id="canvas" width="480" height="360" style="display: none"></canvas>



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


<script type="text/javascript">
  var canvas = document.getElementById('canvas');
  var ctx = canvas.getContext('2d');
  var ctx = document.getElementById('canvas').getContext('2d');
</script>

  
      
  </div>
  <!-- mainContent End -->
</center>

@endsection