//VALIDATE ONLY TEXT
function is_TEXT(str){
	var intRegex = /[a-zA-Z]/;
	if(intRegex.test(str)){
		return true;
	}else{
		return false; 
	}
}
//VALIDATE ONLY TEXT

function vpb_refresh_aptcha(){
	return $("#vpb_captcha_code").val('').focus(),document.images['captchaimg'].src = document.images['captchaimg'].src.substring(0,document.images['captchaimg'].src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

function valid_file_count(){
		var ctn = 0;
		$('input[type=file]').each(function(index, element) {
            if( $(this).val() == '' ) return true;
			ctn++;
        });
		if( ctn > 20 ){ return false; }else{ return true; }
}

function is_EMAIL(str){
	if (str=="") return true;
	var intRegex = /\S+@\S+\.\S+/;
	if(intRegex.test(str)) {
		return true;
	}else{
		return false; 
	}
}

function is_ALPHA_NUMERIC(str){
	if (str=="") return true;
	var letters = /^[0-9a-zA-Z]+$/;  
	if(str.match(letters)){ return false; }else{ return true; } 
}


/*--TAB STEPS--*/
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
setTimeout(function(){ document.getElementById("defaultOpen").click(); }, 500);
/*--TAB STEPS--*/


function showMsg(msg_type,msg,buttons){
	if( msg_type == 'error' ){
		$(".modal-dialog-title").html('Notification');
		$(".modal-dialog-header").css("background-color","#e45252");
	}
	if( msg_type == 'warning' ){
		$(".modal-dialog-title").html('Warning');
		$(".modal-dialog-header").css("background-color","#f56a07");
	}
	if( msg_type == 'success' ){
		$(".modal-dialog-title").html('Success');
		$(".modal-dialog-header").css("background-color","#5cb85c");
	}
	if( msg_type == 'ait' ){
		$(".modal-dialog-title").html('AIT');
		$(".modal-dialog-header").css("background-color","#5cb85c");
	}
	if( typeof(buttons) == 'undefined' ){
		$(".modal-dialog-footer").html('<div class="modal-dialog-ok" onclick="$(\'.modal-dialog\').hide();">Ok</div>');
	}else{
		$(".modal-dialog-footer").html(buttons);
	}
	$(".modal-dialog-body p").html(msg);
	$(".modal-dialog").show();
}


function form1Submit(){
	var fldValid = 0;
	$("input[type=text]").css("border","1px solid #5d5d5d");
	$("input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( $("#agree").is(':checked') == false ) fldValid = 1;
	var option_id = $("input[name='option_id']:checked").val();
	if( option_id == 'undefined' || typeof(option_id) == 'undefined' ) fldValid = 1;
	if( fldValid == 1 ) return; 
	$.ajax({
		   type: "POST",
		   url: "api.php?method=form1Submit",
		   cache: false,
		   dataType: "json",
		   data: "vpb_captcha_code="+$("#vpb_captcha_code").val(),
		   success: function(msg){
			   if( msg.status == 'incorrect_security_code' ){
				    $("#vpb_captcha_code").css("border","1px solid red");
					return;
			   }
			   $("#vpb_captcha_code").val("");
			   $("#vpb_captcha_code").css("border","1px solid #c8c8c8");
			   vpb_refresh_aptcha();
			   if( msg.status == 'correct_security_code' ){
			   	   if( option_id == '1' ) window.location.href = 'form2.php?option_id='+option_id+'&lng='+$("#langSel").val();
			   	   if( option_id == '2' ) window.location.href = 'form3.php?option_id='+option_id+'&lng='+$("#langSel").val();
			   	   if( option_id == '3' ) window.location.href = 'form13.php?option_id='+option_id+'&lng='+$("#langSel").val();
			   }
		   },
		   error: function (request, status, error) {
				alert('Error');
				return;
		   }
	});
}


function form2Submit(){
	var fldValid = 0;
	$("input[type=text]").css("border","1px solid #5d5d5d");
	$("input[type=password]").css("border","1px solid #5d5d5d");
	$("textarea").css("border","1px solid #5d5d5d");
	$("input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("input[type=password]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("input[type=file]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).parent().prev().css("border-bottom","1px solid red"); fldValid = 1; }
    });
	$("textarea").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( is_EMAIL( $("#email_address").val() ) == false ){ $("#email_address").css("border","1px solid red"); fldValid = 1; }
	if( is_ALPHA_NUMERIC($("#login_txt").val()) == true  ){ $("#login_txt").css("border","1px solid red"); fldValid = 1; }
	var login_txt_number_status = 0;
	var login_txt_number =  $("#login_txt").val();
	for (var i = 0; i < login_txt_number.length; i++) {
	   if( login_txt_number[i] *1 >= 0 ) login_txt_number_status = 1;
	}
	if( login_txt_number_status == 0 ){ $("#login_txt").css("border","1px solid red"); fldValid = 1; }
	if( $("#password_txt").val().length < 6 ){ $("#password_txt").css("border","1px solid red"); fldValid = 1; }
	if( $(".invalid").length > 0 ){ $("#password_txt").css("border","1px solid red"); fldValid = 1; }
    if( $("#password_txt").val() != $("#password_txt_repeat").val() ){ $("#password_txt").css("border","1px solid red"); $("#password_txt_repeat").css("border","1px solid red"); fldValid = 1; }
	if( fldValid == 1 ) return;
	var documents_name = $("#documents_name").val();
	if( documents_name != '' ){
		var documents_name_array = documents_name.split(',');
		for(var i in documents_name_array){
				var curr = documents_name_array[i];
				if( curr == '' || typeof(curr) == 'undefined' ) continue; 
				var file_hidden = '';
				$("."+curr+"_table tr").each(function(index, element){
					if( file_hidden == '' ){
						file_hidden = this.id.replace('row_'+curr+'_','');
					}else{
						file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
					}
				});
				$("#"+curr+"_hidden").val(file_hidden);
		}
	}
	$("#form2").submit();
}


function form3Submit(){
	var fldValid = 0;
	$("input[type=text]").css("border","1px solid #5d5d5d");
	$("select").css("border","1px solid #5d5d5d");
	$("input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("input[type=password]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("input[type=file]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).parent().prev().css("border-bottom","1px solid red"); fldValid = 1; }
    });
	$("select").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( is_EMAIL( $("#email_address").val() ) == false ){ $("#email_address").css("border","1px solid red"); fldValid = 1; }
	if( is_ALPHA_NUMERIC($("#login_txt").val()) == true  ){ $("#login_txt").css("border","1px solid red"); fldValid = 1; }
	if( $("#password_txt").val().length < 6 ){ $("#password_txt").css("border","1px solid red"); fldValid = 1; }
	if( $(".invalid").length > 0 ){ $("#password_txt").css("border","1px solid red"); fldValid = 1; }
	if( $("#password_txt").val() != $("#password_txt_repeat").val() ){ $("#password_txt").css("border","1px solid red"); $("#password_txt_repeat").css("border","1px solid red"); fldValid = 1; }
	if( fldValid == 1 ) return;
	var documents_name = $("#documents_name").val();
	if( documents_name != '' ){
		var documents_name_array = documents_name.split(',');
		for(var i in documents_name_array){
				var curr = documents_name_array[i];
				if( curr == '' || typeof(curr) == 'undefined' ) continue; 
				var file_hidden = '';
				$("."+curr+"_table tr").each(function(index, element){
					if( file_hidden == '' ){
						file_hidden = this.id.replace('row_'+curr+'_','');
					}else{
						file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
					}
				});
				$("#"+curr+"_hidden").val(file_hidden);
		}
	}
	$("#form3").submit();
}

function login(){
	$("input").css("border","1px solid #5d5d5d");
	var fldValid = 0;
	$("input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
    $("input[type=password]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( fldValid == 1 ) return;
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_migration_personal_cabinet_login",
		   cache: false,
		   dataType: "json",
		   data: "login_username="+$("#login_username").val()+"&login_password="+$("#login_password").val(),
		   success: function(msg){
		   	  if( msg.status == 'error' ){
		   	  	showMsg('error',msg.msg_txt);
		   	  	return;
		   	  }
		   	  if( msg.status == 'success' ){
			   	   if( msg.user_type == '1' ) window.location.href = 'form4.php?lng='+$("#langSel").val();
			   	   if( msg.user_type == '2' ) window.location.href = 'form5.php?lng='+$("#langSel").val();
			   	   if( msg.user_type == '3' ) window.location.href = 'form14.php?lng='+$("#langSel").val();
			   }
		   },
		   error: function (request, status, error) {
				showMsg('error',request.responseText);
		   }
	});
}


function form5_1_submit(){
	$("#form5_1 input").css("border","1px solid #5d5d5d");
	$("#form5_1 select").css("border","1px solid #5d5d5d");
	var fldValid = 0;
	$("#form5_1 input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
    $("#form5_1 select").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( fldValid == 1 ) return;
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_migration_personal_cabinet_data_changes_inn",
		   cache: false,
		   dataType: "json",
		   data: $("#form5_1").serialize(),
		   success: function(msg){
		   		showMsg('success',msg);
		   },
		   error: function (request, status, error) {
				showMsg('error',request.responseText);
		   }
	});
}


function changePassword(){
	var fldValid = 0;
	$("#form5_3 input[type=password]").css("border","1px solid #5d5d5d");
	$("#form5_3 input[type=password]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( $("#new_password").val().length < 6 ){ $("#new_password").css("border","1px solid red"); fldValid = 1; }
	if( $(".invalid").length > 0 ){ $("#new_password").css("border","1px solid red"); fldValid = 1; }
	if( fldValid == 1 ) return;
	console.log('step-1');
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_migration_personal_cabinet_general_data_pass_change",
		   cache: false,
		   data: $("#form5_3").serialize(),
		   success: function(msg){
		   		showMsg('success',msg);
		   		$("#form5_3 input[type=password]").val("");
		   },
		   error: function (request, status, error) {
				showMsg('error',request.responseText);
		   }
	});
}


function form5_2Submit(){
	var documents_name = $("#documents_name").val();
	if( documents_name != '' ){
		var documents_name_array = documents_name.split(',');
		for(var i in documents_name_array){
				var curr = documents_name_array[i];
				if( curr == '' || typeof(curr) == 'undefined' ) continue; 
				var file_hidden = '';
				$("."+curr+"_table tr").each(function(index, element){
					if( file_hidden == '' ){
						file_hidden = this.id.replace('row_'+curr+'_','');
					}else{
						file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
					}
				});
				$("#"+curr+"_hidden").val(file_hidden);
		}
	}
	$("#form5_2").submit();
}


function form4_1_submit(){
	$("#form4_1 input").css("border","1px solid #5d5d5d");
	var fldValid = 0;
	$("#form4_1 input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( fldValid == 1 ) return;
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_migration_personal_cabinet_data_changes_rabotodatel",
		   cache: false,
		   data: $("#form4_1").serialize(),
		   success: function(msg){
		   		showMsg('success',msg);
		   },
		   error: function (request, status, error) {
				showMsg('error',request.responseText);
		   }
	});
}


function form4_2_submit(){
	var fldValid = 0;
	$("input[type=password]").css("border","1px solid #5d5d5d");
	$("input[type=password]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( $("#new_password").val().length < 6 ){ $("#new_password").css("border","1px solid red"); fldValid = 1; }
	if( $(".invalid").length > 0 ){ $("#new_password").css("border","1px solid red"); fldValid = 1; }
	if( fldValid == 1 ) return;
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_migration_personal_cabinet_general_data_pass_change",
		   cache: false,
		   data: $("#form4_2").serialize(),
		   success: function(msg){
		   		showMsg('success',msg);
		   },
		   error: function (request, status, error) {
				showMsg('error',request.responseText);
		   }
	});
}


function form4_3Submit(){
	var documents_name = $("#documents_name").val();
	if( documents_name != '' ){
		var documents_name_array = documents_name.split(',');
		for(var i in documents_name_array){
				var curr = documents_name_array[i];
				if( curr == '' || typeof(curr) == 'undefined' ) continue; 
				var file_hidden = '';
				$("."+curr+"_table tr").each(function(index, element){
					if( file_hidden == '' ){
						file_hidden = this.id.replace('row_'+curr+'_','');
					}else{
						file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
					}
				});
				$("#"+curr+"_hidden").val(file_hidden);
		}
	}
	$("#form4_3").submit();
}


function deleteForm4Tab(doc_id){
	$("#doc_id_del").val(doc_id);
	$("#form4_4").submit();
}


function addStrana(){
	$("#stranaTab").append('<tr><td>'+$("#stranaTab tr:first").find('td:eq(0)').html()+'</td><td>'+$("#stranaTab tr:first").find('td:eq(1)').html()+'</td><td>'+$("#stranaTab tr:first").find('td:eq(2)').html()+'</td><td><img src="images/delete_btn.png" onclick="$(this).parent().parent().remove();" /></td></tr>');
}


function addZanimaemaya(){
	$("#zanimaemayaTab").append('<tr><td>'+$("#zanimaemayaTab tr:first").find('td:eq(0)').html()+'</td><td>'+$("#zanimaemayaTab tr:first").find('td:eq(1)').html()+'</td><td><img src="images/delete_btn.png" onclick="$(this).parent().parent().remove();" /></td></tr>');
}


function form4_7_submit(){
    var fldValid = 0;
    $("#stranaTab").css("border","none");
    $("#zanimaemayaTab").css("border","none");
    if( $("#applicant_notes_2").val() == '' ){
	    $("#form4_7 input[type=text]").css("border","1px solid #5d5d5d");
	    $("#form4_7 textarea").css("border","1px solid #5d5d5d");
	    $("#form4_7 select").css("border","1px solid #5d5d5d");
	    $("#form4_7 input[type=text]").each(function(index, element) {
	        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
	    });
	    $("#form4_7 input[type=file]").each(function(index, element) {
	        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).parent().prev().css("border-bottom","1px solid red"); fldValid = 1; }
	    });
	    $("#form4_7 select").each(function(index, element) {
	        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
	    });
	    $("#form4_7 textarea").each(function(index, element) {
	        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
	    });
    }
    var stranaTab_COUNT = 0;
    $("#stranaTab tr").each(function(){
        var quota_part_specilization_cnt = $(this).find('td:eq(2)').find('input').val()*1;
        stranaTab_COUNT += quota_part_specilization_cnt;
    });
    /*
    var zanimaemayaTab_COUNT = 0;
    $("#zanimaemayaTab tr").each(function(){
        var quota_part_specilization_cnt = $(this).find('td:eq(1)').find('input').val()*1;
        zanimaemayaTab_COUNT += quota_part_specilization_cnt;
    });
    */
    if( $("#quota_cnt").val() != stranaTab_COUNT  ){ $("#quota_cnt").css("border","1px solid red"); $("#stranaTab").css("border","1px solid red"); fldValid = 1; }
    //if( $("#quota_cnt").val() != zanimaemayaTab_COUNT  ){ $("#quota_cnt").css("border","1px solid red"); $("#zanimaemayaTab").css("border","1px solid red"); fldValid = 1; }
    if( fldValid == 1 ) return;
    var documents_name = $("#documents_name_2").val();
    if( documents_name != '' ){
        var documents_name_array = documents_name.split(',');
        for(var i in documents_name_array){
                var curr = documents_name_array[i];
                if( curr == '' || typeof(curr) == 'undefined' ) continue; 
                var file_hidden = '';
                $("."+curr+"_table tr").each(function(index, element){
                    if( file_hidden == '' ){
                        file_hidden = this.id.replace('row_'+curr+'_','');
                    }else{
                        file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
                    }
                });
                $("#"+curr+"_hidden").val(file_hidden);
        }
    }
    var stranaTab = '';
    $("#stranaTab tr").each(function(){
        var quota_country = $(this).find('td:eq(0)').find('select').val();
        var quota_specilization = $(this).find('td:eq(1)').find('input').val();
        var quota_part_specilization_cnt = $(this).find('td:eq(2)').find('input').val();
        if( quota_country == '' || quota_specilization == '' || quota_part_specilization_cnt == '' ) return true;
        if( stranaTab == '' ) stranaTab = quota_country+'###'+quota_specilization+'###'+quota_part_specilization_cnt; else stranaTab = stranaTab+'@@@'+quota_country+'###'+quota_specilization+'###'+quota_part_specilization_cnt;
    });
    $("#stranaHidden").val(stranaTab);
    /*
    var zanimaemayaTab = '';
    $("#zanimaemayaTab tr").each(function(){
        var quota_specilization = $(this).find('td:eq(0)').find('input').val();
        var quota_part_specilization_cnt = $(this).find('td:eq(1)').find('input').val();
        if( quota_specilization == '' || quota_part_specilization_cnt == '' ) return true;
        if( zanimaemayaTab == '' ) zanimaemayaTab = quota_specilization+'###'+quota_part_specilization_cnt; else zanimaemayaTab = zanimaemayaTab+'@@@'+quota_specilization+'###'+quota_part_specilization_cnt;
    });
    $("#zanimaemayaHidden").val(zanimaemayaTab);
    */
    $("#form4_7").submit();
}


function form4_5_submit(){
	var fldValid = 0;
	$("#form4_5 input[type=text]").css("border","1px solid #5d5d5d");
	$("#form4_5 select").css("border","1px solid #5d5d5d");
	$("#form4_5 input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
    $("#form4_5 select").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( fldValid == 1 ) return;
	$("#contApplic").hide();
	close_rabotodatel();
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_migration_app_workpermit_rabotodatel_searchperson",
		   cache: false,
		   dataType: "json",
		   data: $("#form4_5").serialize(),
		   success: function(data){
		   		$("#doc_nom").val(data[0].doc_nom);
		   		$("#country").val(data[0].country);
		   		$("#lname").val(data[0].lname);
		   		$("#fname").val(data[0].fname);
		   		$("#pname").val(data[0].pname);
		   		$("#bdate").val(data[0].bdate);
		   		$("#sex").val(data[0].sex);
		   		$("#doc_type_name").val(data[0].doc_type_name);
		   		$("#doc_end").val(data[0].doc_end);
		   		$("#date_gnats").val(data[0].date_gnats);
		   		$("#kpp_source").val(data[0].kpp_source);
		   		$("#direction").val(data[0].direction);
		   		$("#reference_numb").val(data[0].reference_numb);
		   		$("#visa_name").val(data[0].visa_name);
		   		$("#visa_angam").val(data[0].visa_angam);
		   		$("#visa_valid_from").val(data[0].visa_valid_from);
		   		$("#visa_valid_to").val(data[0].visa_valid_to);
		   		$("#country_id").val(data[0].country_id);
		   		$("#id_sex").val(data[0].id_sex);
		   		$("#doc_type").val(data[0].doc_type);
		   		var imgs = '';
		   		if( data[0].images != null ){
		   			var imgArray = data[0].images.split('|||');
		   			for(var i in imgArray){
		   				if( imgArray[i].length < 3 ) continue;
		   				var imgMassiv = imgArray[i].split('###');
		   				imgs += '<img src="'+imgMassiv[0]+'" class="imgs1" />';
		   			}
		   		}
		   		if( imgs != '' ) $("#imgs1Td").html(imgs);
		   		$("#poiskResultTab").show();
		   		if( data[0].bacel == '0' ){ $("#contApplic_error").html(data[0].msg_txt); $("#contApplic_error").show(); }
		   		if( data[0].bacel == '1' ){ $("#contApplic").show(); $("#contApplic_error").hide(); }
		   },
		   error: function (request, status, error) {
				showMsg('error',request.responseText);
		   }
	});
}


function form4_6_submit(){
	var fldValid = 0;
	$("#form4_6 input[type=text]").css("border","1px solid #5d5d5d");
	$("#form4_6 textarea").css("border","1px solid #5d5d5d");
	$("#form4_6 select").css("border","1px solid #5d5d5d");
	$("#form4_6 input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("#form4_6 input[type=file]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).parent().prev().css("border-bottom","1px solid red"); fldValid = 1; }
    });
    $("#form4_6 select").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("#form4_6 textarea").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });	
	if( fldValid == 1 ) return;
	var documents_name = $("#documents_name_3").val();
	if( documents_name != '' ){
		var documents_name_array = documents_name.split(',');
		for(var i in documents_name_array){
				var curr = documents_name_array[i];
				if( curr == '' || typeof(curr) == 'undefined' ) continue; 
				var file_hidden = '';
				$("."+curr+"_table tr").each(function(index, element){
					if( file_hidden == '' ){
						file_hidden = this.id.replace('row_'+curr+'_','');
					}else{
						file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
					}
				});
				$("#"+curr+"_hidden").val(file_hidden);
		}
	}
	var relativesTab = '';
	$("#relativesTable tr").each(function(){
		var val1 = $(this).find('td:eq(0)').find('input').val();
		var val2 = $(this).find('td:eq(1)').find('input').val();
		var val3 = $(this).find('td:eq(2)').find('input').val();
		var val4 = $(this).find('td:eq(3)').find('input').val();
		var val5 = $(this).find('td:eq(4)').find('input').val();
		var val6 = $(this).find('td:eq(5)').find('input').val();
		var val7 = $(this).find('td:eq(6)').find('input').val();
		if( val1 == '' || val2 == '' || val3 == '' ) return true;
		if( relativesTab == '' ) relativesTab = val1+'###'+val2+'###'+val3+'###'+val4+'###'+val5+'###'+val6+'###'+val7; else relativesTab = relativesTab+'@@@'+val1+'###'+val2+'###'+val3+'###'+val4+'###'+val5+'###'+val6+'###'+val7;
	});
	$("#relativesTableHidden").val(relativesTab);
	$("#form4_6").submit();
}


function addRelatives(){
	$("#relativesTable").append('<tr><td>'+$("#relativesTable tr").eq(1).find('td:eq(0)').html()+'</td><td>'+$("#relativesTable tr").eq(1).find('td:eq(1)').html()+'</td><td>'+$("#relativesTable tr").eq(1).find('td:eq(2)').html()+'</td><td>'+$("#relativesTable tr").eq(1).find('td:eq(3)').html()+'</td><td>'+$("#relativesTable tr").eq(1).find('td:eq(4)').html()+'</td><td>'+$("#relativesTable tr").eq(1).find('td:eq(5)').html()+'</td><td>'+$("#relativesTable tr").eq(1).find('td:eq(6)').html()+'</td><td><img src="images/delete_btn.png" onclick="$(this).parent().parent().remove();" /></td></tr>');
		var fixDate = function (date){
		   return date<10?"0"+date: date;
		}
		var dateStr = new Date();
		var currDate = fixDate(dateStr.getDate())+"/"+fixDate(dateStr.getMonth()+1)+"/" + dateStr.getFullYear();
		$('.date_member').Zebra_DatePicker({
			view: 'years',
			format:'d/m/Y',
			direction: ['01/01/1920',currDate]
		});
}


function go_search(){
		var has_search_string = false;
		var search_strings = new Array();
		$(".filter_field").each(function(index, element){
			if( $(this).val() != '' ){
				 has_search_string = true;
				 k = $(this).attr('search_key');
				 v = $(this).val();
				 search_strings[k] = v;
			}
		});
		if( has_search_string == true ){
			$('.tableStyled tbody tr').hide();
			$('.tableStyled tbody tr').each(function(index, element) {
				var normal=1;
				for (var i in search_strings){
					search_val=search_strings[i];
					current_text=$(this).find('td[key='+i+']').text();
					current_search_array=search_val.split(' ');
					for (var i in current_search_array){
						current=current_search_array[i];
						if (current.length>0){ if(!(current_text.toLowerCase().indexOf(current.toLowerCase())>=0)){normal=0; break;} }
					}
				}
				if (normal==1) $(this).show();
			});
		}else{
			$('.tableStyled tbody tr').show();
		}
}


function openRodstvenikiDialog(pk_rabota_new){
	if( pk_rabota_new == '' ) return;
	$("#rodstvenikiDialog table tbody").html("");
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_migration_permit_application_list_relatives",
		   cache: false,
		   dataType: "json",
		   data: "pk_rabota_new="+pk_rabota_new,
		   success: function(data){
		   		var str = '';
		   		$.each(data, function(i, item) {
				    str += '<tr><td>'+item.stepen_rodstva+'</td><td>'+item.member_surname+'</td><td>'+item.member_name+'</td><td>'+item.member_patron+'</td><td>'+item.member_birthdate+'</td><td>'+item.mesto_rojdeniya+'</td><td>'+item.mesto_raboty+'</td></tr>';
				});
		   		$("#rodstvenikiDialog table tbody").html(str);
		   		$("#rodstvenikiDialog").dialog({
				  modal: true,
				  position: ['center',100],
				  width: 1000,
				  height: 'auto',
				  autoOpen: true,
				  show: {
					effect: "drop",
					duration: 400,
					direction: "up"
				  },
				  hide: {
					effect: "slide",
					duration: 400,
					direction: "up"
				  },
				  buttons: [
						{
							'class' : 'cancel_button',
							"text" : "Cancel",
							click: function() {
								$(this).dialog( "close" );
							}
						}
				  ]
			    });
		   },
		   error: function (request, status, error) {
				showMsg('error',request.responseText);
		   }
	});
}


function view_print(type){
	if( $(".trs1_selected").length == 0 ) return;
	var id = $(".trs1_selected").attr("id").replace('tr_','');
	if( type == 1 ) window.open('form6.php?id='+id, '_blank');
	if( type == 2 ) window.open('form7.php?id='+id, '_blank');
}


function open_form5_4(){
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_migration_workpermit_application_iip_getpassportdata",
		   cache: false,
		   dataType: "json",
		   data: "",
		   success: function(msg){
		   		 if( msg.status == 'error' ){
			   	  	showMsg('error',msg.msg_txt);
			   	  	return;
			   	  }
			   	  if( msg.status == 'success' ) $("#form5_4").show();
		   },
		   error: function (request, status, error) {
				showMsg('error',request.responseText);
		   }
	});
}


function form5_4_submit(){
	var fldValid = 0;
	$("#form5_4 input[type=text]").css("border","1px solid #5d5d5d");
	$("#form5_4 textarea").css("border","1px solid #5d5d5d");
	$("#form5_4 select").css("border","1px solid #5d5d5d");
	$("#form5_4 input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("#form5_4 input[type=file]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).parent().prev().css("border-bottom","1px solid red"); fldValid = 1; }
    });
    $("#form5_4 select").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("#form5_4 textarea").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });	
	if( fldValid == 1 ) return;
	var documents_name = $("#documents_name_2").val();
	if( documents_name != '' ){
		var documents_name_array = documents_name.split(',');
		for(var i in documents_name_array){
				var curr = documents_name_array[i];
				if( curr == '' || typeof(curr) == 'undefined' ) continue; 
				var file_hidden = '';
				$("."+curr+"_table tr").each(function(index, element){
					if( file_hidden == '' ){
						file_hidden = this.id.replace('row_'+curr+'_','');
					}else{
						file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
					}
				});
				$("#"+curr+"_hidden").val(file_hidden);
		}
	}
	var relativesTab = '';
	$("#relativesTable tr").each(function(){
		var val1 = $(this).find('td:eq(0)').find('input').val();
		var val2 = $(this).find('td:eq(1)').find('input').val();
		var val3 = $(this).find('td:eq(2)').find('input').val();
		var val4 = $(this).find('td:eq(3)').find('input').val();
		var val5 = $(this).find('td:eq(4)').find('input').val();
		var val6 = $(this).find('td:eq(5)').find('input').val();
		var val7 = $(this).find('td:eq(6)').find('input').val();
		if( val1 == '' || val2 == '' || val3 == '' ) return true;
		if( relativesTab == '' ) relativesTab = val1+'###'+val2+'###'+val3+'###'+val4+'###'+val5+'###'+val6+'###'+val7; else relativesTab = relativesTab+'@@@'+val1+'###'+val2+'###'+val3+'###'+val4+'###'+val5+'###'+val6+'###'+val7;
	});
	$("#relativesTableHidden").val(relativesTab);
	$("#form5_4 input[type=text]").prop( "disabled", false );
	$("#form5_4 textarea").prop( "disabled", false );
	$("#form5_4 select").prop( "disabled", false );
	$("#form5_4").submit();
}


function view_print_2(type){
	if( $(".trs1_selected").length == 0 ) return;
	var id = $(".trs1_selected").attr("id").replace('tr_','');
	if( type == 1 ) window.open('form6.php?id='+id, '_blank');
	if( type == 2 ) window.open('form8.php?id='+id, '_blank');
}


function open_rabotodatel(){
	$('#form4_6_table').show();
	$('#form4_6_button').show();
}


function close_rabotodatel(){
	$('#form4_6_table').hide();
	$('#form4_6_button').hide();
}


function changePassword(){
	var fldValid = 0;
	$("input[type=text]").css("border","1px solid #5d5d5d");
	$("input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( fldValid == 1 ) return;
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_migration_personal_cabinet_pass_change_1",
		   cache: false,
		   dataType: "json",
		   data: "vpb_captcha_code="+$("#vpb_captcha_code").val()+"&email="+$("#email").val(),
		   success: function(msg){
		   		if( msg.status == 'incorrect_security_code' ){
				    $("#vpb_captcha_code").css("border","1px solid red");
					return;
			   }
			   if( msg.status == 'error' ){
		   	  	   showMsg('error',msg.message);
		   	  	   return;
		   	   }
			   $("#vpb_captcha_code").val("");
			   $("#vpb_captcha_code").css("border","1px solid #c8c8c8");
			   vpb_refresh_aptcha();
			   if( msg.status == 'success' ){
			   		$("#email").val('');
			   	    showMsg('success','Please, check your email. We have sent you a confirmation link to get new password.');
			   }
		   },
		   error: function (request, status, error) {
				showMsg('error',request.responseText);
		   }
	});
}



function form10Submit(){
	var fldValid = 0;
	$("select").css("border","1px solid #5d5d5d");
    $("select").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( fldValid == 1 ) return;
	var documents_name = $("#documents_name").val();
	if( documents_name != '' ){
		var documents_name_array = documents_name.split(',');
		for(var i in documents_name_array){
				var curr = documents_name_array[i];
				if( curr == '' || typeof(curr) == 'undefined' ) continue; 
				var file_hidden = '';
				$("."+curr+"_table tr").each(function(index, element){
					if( file_hidden == '' ){
						file_hidden = this.id.replace('row_'+curr+'_','');
					}else{
						file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
					}
				});
				$("#"+curr+"_hidden").val(file_hidden);
		}
	}
	$("#form10").submit();
}


function add_app_document(){
	if( $(".trs2_selected").length == 0 ) return;
	var app_id = $(".trs2_selected").attr("id").replace('tr_','');
	$("#add_app_document_dialog iframe").attr("src","form10.php?app_id="+app_id);
	$("#add_app_document_dialog").dialog({
		  modal: true,
		  position: ['center',100],
		  width: 700,
		  height: 'auto',
		  autoOpen: true,
		  show: {
			effect: "drop",
			duration: 400,
			direction: "up"
		  },
		  hide: {
			effect: "slide",
			duration: 400,
			direction: "up"
		  },
		  buttons: [
				{
					'class' : 'cancel_button',
					"text" : "Cancel",
					click: function() {
						$(this).dialog( "close" );
					}
				}
		  ]
    });
}



function add_app_document_2(){
	if( $(".trs1_selected").length == 0 ) return;
	var pk_rabota_new = $(".trs1_selected").attr("id").replace('tr_','');
	$("#add_app_document_dialog iframe").attr("src","form11.php?pk_rabota_new="+pk_rabota_new);
	$("#add_app_document_dialog").dialog({
		  modal: true,
		  position: ['center',100],
		  width: 700,
		  height: 'auto',
		  autoOpen: true,
		  show: {
			effect: "drop",
			duration: 400,
			direction: "up"
		  },
		  hide: {
			effect: "slide",
			duration: 400,
			direction: "up"
		  },
		  buttons: [
				{
					'class' : 'cancel_button',
					"text" : "Cancel",
					click: function() {
						$(this).dialog( "close" );
					}
				}
		  ]
    });
}


function add_app_document_3(){
	if( $(".trs1_selected").length == 0 ) return;
	var pk_rabota_new = $(".trs1_selected").attr("id").replace('tr_','');
	$("#add_app_document_dialog iframe").attr("src","form12.php?pk_rabota_new="+pk_rabota_new);
	$("#add_app_document_dialog").dialog({
		  modal: true,
		  position: ['center',100],
		  width: 700,
		  height: 'auto',
		  autoOpen: true,
		  show: {
			effect: "drop",
			duration: 400,
			direction: "up"
		  },
		  hide: {
			effect: "slide",
			duration: 400,
			direction: "up"
		  },
		  buttons: [
				{
					'class' : 'cancel_button',
					"text" : "Cancel",
					click: function() {
						$(this).dialog( "close" );
					}
				}
		  ]
    });
}


function changeMessageStatus(pk_pass_email){
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_migration_mark_message_read",
		   cache: false,
		   data: "pk_pass_email="+pk_pass_email,
		   success: function(msg){
		   		 if( msg == 'ok' ) $("#message_"+pk_pass_email).attr("style","font-weight:normal");
		   }
	});
}


function form13Submit(){
	var fldValid = 0;
	$("input[type=text]").css("border","1px solid #5d5d5d");
	$("select").css("border","1px solid #5d5d5d");
	$("input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("input[type=password]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("input[type=file]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).parent().prev().css("border-bottom","1px solid red"); fldValid = 1; }
    });
	$("select").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( is_EMAIL( $("#email_address").val() ) == false ){ $("#email_address").css("border","1px solid red"); fldValid = 1; }
	if( is_ALPHA_NUMERIC($("#login_txt").val()) == true  ){ $("#login_txt").css("border","1px solid red"); fldValid = 1; }
	if( $("#password_txt").val().length < 6 ){ $("#password_txt").css("border","1px solid red"); fldValid = 1; }
	if( $(".invalid").length > 0 ){ $("#password_txt").css("border","1px solid red"); fldValid = 1; }
	if( $("#password_txt").val() != $("#password_txt_repeat").val() ){ $("#password_txt").css("border","1px solid red"); $("#password_txt_repeat").css("border","1px solid red"); fldValid = 1; }
	if( fldValid == 1 ) return;
	var documents_name = $("#documents_name").val();
	if( documents_name != '' ){
		var documents_name_array = documents_name.split(',');
		for(var i in documents_name_array){
				var curr = documents_name_array[i];
				if( curr == '' || typeof(curr) == 'undefined' ) continue; 
				var file_hidden = '';
				$("."+curr+"_table tr").each(function(index, element){
					if( file_hidden == '' ){
						file_hidden = this.id.replace('row_'+curr+'_','');
					}else{
						file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
					}
				});
				$("#"+curr+"_hidden").val(file_hidden);
		}
	}
	$("#form13").submit();
}


function call_doc_type(sel_val){
	if( $("#doc_country").val() == '' ) return;
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_nomad_doctype_combo",
		   cache: false,
		   data: "doc_country="+$("#doc_country").val()+"&sel_val="+sel_val,
		   success: function(data){
		   	 $("#doc_type").html(data);
		   }
	});
}


function form14_1_submit(){
	$("#form14_1 input").css("border","1px solid #5d5d5d");
	$("#form14_1 select").css("border","1px solid #5d5d5d");
	var fldValid = 0;
	$("#form14_1 input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
    $("#form14_1 select").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( fldValid == 1 ) return;
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_nomad_personal_cabinet_data_changes",
		   cache: false,
		   dataType: "json",
		   data: $("#form14_1").serialize(),
		   success: function(msg){
		   		showMsg('success',msg);
		   },
		   error: function (request, status, error) {
				showMsg('error',request.responseText);
		   }
	});
}


function changePassword14(){
	var fldValid = 0;
	$("#form14_3 input[type=password]").css("border","1px solid #5d5d5d");
	$("#form14_3 input[type=password]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( $("#new_password").val().length < 6 ){ $("#new_password").css("border","1px solid red"); fldValid = 1; }
	if( $(".invalid").length > 0 ){ $("#new_password").css("border","1px solid red"); fldValid = 1; }
	if( fldValid == 1 ) return;
	console.log('step-1');
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_migration_personal_cabinet_general_data_pass_change",
		   cache: false,
		   data: $("#form14_3").serialize(),
		   success: function(msg){
		   		showMsg('success',msg);
		   		$("#form14_3 input[type=password]").val("");
		   },
		   error: function (request, status, error) {
				showMsg('error',request.responseText);
		   }
	});
}


function form14_2Submit(){
	var documents_name = $("#documents_name").val();
	if( documents_name != '' ){
		var documents_name_array = documents_name.split(',');
		for(var i in documents_name_array){
				var curr = documents_name_array[i];
				if( curr == '' || typeof(curr) == 'undefined' ) continue; 
				var file_hidden = '';
				$("."+curr+"_table tr").each(function(index, element){
					if( file_hidden == '' ){
						file_hidden = this.id.replace('row_'+curr+'_','');
					}else{
						file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
					}
				});
				$("#"+curr+"_hidden").val(file_hidden);
		}
	}
	$("#form14_2").submit();
}


function call_doc_type_2(sel_val){
	if( $("#doc_country").val() == '' ) return;
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_nomad_doctype_combo",
		   cache: false,
		   data: "doc_country="+$("#issued_by").val()+"&sel_val="+sel_val,
		   success: function(data){
		   	 $("#doc_type_2").html(data);
		   }
	});
}



function form14_4_submit(){
	var fldValid = 0;
	$("#form14_4 input[type=text]").css("border","1px solid #5d5d5d");
	$("#form14_4 textarea").css("border","1px solid #5d5d5d");
	$("#form14_4 select").css("border","1px solid #5d5d5d");
	$("#form14_4 input[type=text]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("#form14_4 input[type=file]").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).parent().prev().css("border-bottom","1px solid red"); fldValid = 1; }
    });
    $("#form14_4 select").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	$("#form14_4 textarea").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });	
	if( fldValid == 1 ) return;
	var documents_name = $("#documents_name_2").val();
	if( documents_name != '' ){
		var documents_name_array = documents_name.split(',');
		for(var i in documents_name_array){
				var curr = documents_name_array[i];
				if( curr == '' || typeof(curr) == 'undefined' ) continue; 
				var file_hidden = '';
				$("."+curr+"_table tr").each(function(index, element){
					if( file_hidden == '' ){
						file_hidden = this.id.replace('row_'+curr+'_','');
					}else{
						file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
					}
				});
				$("#"+curr+"_hidden").val(file_hidden);
		}
	}
	var relativesTab = '';
	$("#relativesTable tr").each(function(){
		var val1 = $(this).find('td:eq(0)').find('input').val();
		var val2 = $(this).find('td:eq(1)').find('input').val();
		var val3 = $(this).find('td:eq(2)').find('input').val();
		var val4 = $(this).find('td:eq(3)').find('input').val();
		var val5 = $(this).find('td:eq(4)').find('input').val();
		var val6 = $(this).find('td:eq(5)').find('input').val();
		var val7 = $(this).find('td:eq(6)').find('input').val();
		if( val1 == '' || val2 == '' || val3 == '' ) return true;
		if( relativesTab == '' ) relativesTab = val1+'###'+val2+'###'+val3+'###'+val4+'###'+val5+'###'+val6+'###'+val7; else relativesTab = relativesTab+'@@@'+val1+'###'+val2+'###'+val3+'###'+val4+'###'+val5+'###'+val6+'###'+val7;
	});
	$("#relativesTableHidden").val(relativesTab);
	$("#form14_4 input[type=text]").prop( "disabled", false );
	$("#form14_4 textarea").prop( "disabled", false );
	$("#form14_4 select").prop( "disabled", false );
	$("#form14_4").submit();
}


function view_print_14(type){
	if( $(".trs1_selected").length == 0 ) return;
	var id = $(".trs1_selected").attr("id").replace('tr_','');
	if( type == 1 ) window.open('form15.php?id='+id, '_blank');
	if( type == 2 ) window.open('form17.php?id='+id, '_blank');
}



function add_app_document_4(){
	if( $(".trs1_selected").length == 0 ) return;
	var pk_rabota_new = $(".trs1_selected").attr("id").replace('tr_','');
	$("#add_app_document_dialog iframe").attr("src","form16.php?id="+pk_rabota_new);
	$("#add_app_document_dialog").dialog({
		  modal: true,
		  position: ['center',100],
		  width: 700,
		  height: 'auto',
		  autoOpen: true,
		  show: {
			effect: "drop",
			duration: 400,
			direction: "up"
		  },
		  hide: {
			effect: "slide",
			duration: 400,
			direction: "up"
		  },
		  buttons: [
				{
					'class' : 'cancel_button',
					"text" : "Cancel",
					click: function() {
						$(this).dialog( "close" );
					}
				}
		  ]
    });
}


function form16Submit(){
	var fldValid = 0;
	$("select").css("border","1px solid #5d5d5d");
    $("select").each(function(index, element) {
        if( $(this).attr('required') == 'required' && $(this).val() == '' ){ $(this).css("border","1px solid red"); fldValid = 1; }
    });
	if( fldValid == 1 ) return;
	var documents_name = $("#documents_name").val();
	if( documents_name != '' ){
		var documents_name_array = documents_name.split(',');
		for(var i in documents_name_array){
				var curr = documents_name_array[i];
				if( curr == '' || typeof(curr) == 'undefined' ) continue; 
				var file_hidden = '';
				$("."+curr+"_table tr").each(function(index, element){
					if( file_hidden == '' ){
						file_hidden = this.id.replace('row_'+curr+'_','');
					}else{
						file_hidden = file_hidden +','+ this.id.replace('row_'+curr+'_','');
					}
				});
				$("#"+curr+"_hidden").val(file_hidden);
		}
	}
	$("#form16").submit();
}


function changeMessageStatus_2(pk_pass_email){
	$.ajax({
		   type: "POST",
		   url: "api.php?method=new_nomad_mark_message_read",
		   cache: false,
		   data: "pk_pass_email="+pk_pass_email,
		   success: function(msg){
		   		 if( msg == 'ok' ) $("#message_"+pk_pass_email).attr("style","font-weight:normal");
		   }
	});
}