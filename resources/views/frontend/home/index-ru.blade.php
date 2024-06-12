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
						<a href="{{asset('frontendAsset')}}/images/instruction_20230904.pdf" target="_blank"
							style="color:white;text-decoration:none;">Инструкция</a>
						&nbsp;&nbsp;&nbsp;
						<a href="bank_data.html" target="_blank" style="color:white;text-decoration:none;">Банковские
							реквизиты</a>&nbsp;&nbsp;
						<select id="langSel">
							<!-- <option value="ky">KG</option> -->
							<option value="{{route('/')}}" selected>RU</option>
							<option value="{{route('index.en')}}">EN</option>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<div class="topBarUnder">
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td align="left" width="40%"><a href="index.html"><img
								src="{{asset('frontendAsset')}}/images/kyrgyz_emblem6d24.png?n=1" class="logo_8789"
								height="81" /></a></td>
					<td align="left"><b>Электронные услуги выдачи разрешений на работу<br>
							Электронные услуги регистрации Цифровой Кочевник</b></td>
				</tr>
			</table>
		</div>





		<br><br>
		<table cellpadding="4" cellspacing="4">
			<tr>
				<td><input type="text" id="login_username" class="inp_2289" placeholder="Логин" required="required" />
				</td>
				<td><input type="password" id="login_password" class="inp_2289" placeholder="Пароль"
						required="required" /></td>
				<td>
					<input type="button" class="btn_2289" value="Войти в личный кабинет" onclick="login();" />
					<input type="button" class="btn_2289" value="Регистрация личного кабинета"
						onclick="window.location='form1.html';" style="margin-left:10px;" />
				</td>
			</tr>
			<tr>
				<td><input type="checkbox" id="showPass" onclick="showPass();" /><label for="showPass">Показать
						пароль</label></td>
				<td><a href="change_password.html" class="href_2289">Забыли пароль?</a></td>
				<td></td>
			</tr>
		</table>

		<br><br>

		<style type="text/css">
			/* Slideshow container */
			.slideshow-container {
				max-width: 1000px;
				position: relative;
				margin: auto;
			}

			/* Hide the images by default */
			.mySlides {
				display: none;
			}

			/* Next & previous buttons */
			.prev,
			.next {
				cursor: pointer;
				position: absolute;
				top: 50%;
				width: auto;
				margin-top: -22px;
				padding: 16px;
				color: white;
				font-weight: bold;
				font-size: 18px;
				transition: 0.6s ease;
				border-radius: 0 3px 3px 0;
				user-select: none;
			}

			/* Position the "next button" to the right */
			.next {
				right: 0;
				border-radius: 3px 0 0 3px;
			}

			/* On hover, add a black background color with a little bit see-through */
			.prev:hover,
			.next:hover {
				background-color: rgba(0, 0, 0, 0.8);
			}

			/* Caption text */
			.text {
				color: #f2f2f2;
				font-size: 15px;
				padding: 8px 12px;
				position: absolute;
				bottom: 8px;
				width: 100%;
				text-align: center;
			}

			/* Number text (1/3 etc) */
			.numbertext {
				color: #f2f2f2;
				font-size: 12px;
				padding: 8px 12px;
				position: absolute;
				top: 0;
			}

			/* The dots/bullets/indicators */
			.dot {
				cursor: pointer;
				height: 15px;
				width: 15px;
				margin: 0 2px;
				background-color: #bbb;
				border-radius: 50%;
				display: inline-block;
				transition: background-color 0.6s ease;
			}

			.active,
			.dot:hover {
				background-color: #717171;
			}

			/* Fading animation */
			.fade {
				-webkit-animation-name: fade;
				-webkit-animation-duration: 1.5s;
				animation-name: fade;
				animation-duration: 1.5s;
			}

			@-webkit-keyframes fade {
				from {
					opacity: .4
				}

				to {
					opacity: 1
				}
			}

			@keyframes fade {
				from {
					opacity: .4
				}

				to {
					opacity: 1
				}
			}

			.announceText {
				padding: 15px;
				background-color: antiquewhite;
				width: 731px;
				margin-bottom: 32px;
				text-align: left;
				font-size: 13px;
			}

			input[type=checkbox],
			label {
				cursor: pointer;
				font-size: 14px;
			}
		</style>

		<div class="announceText">Уважаемые заявители, после получения "выписки" в Личном кабинете, необходимо оплатить
			за разрешение на работу (в течение 90 дней), указав, на обратной стороне квитанции Номер заявки ("Р"
			8-значный реф №), принести по адресу: Тыныстанова, 215.
			Просим обратить внимание на то, что Заявка на Разрешение на работу будет рассматриваться после
			предоставления квитанции об оплате государственной пошлины.
			Справки по тел.+996(312)663964</div>
		<div class="announceText">Уважаемые заявители, в соответствии с Постановлением Кабинета Министров КР от
			21.09.2023 №496, продление статуса "ЦИФРОВОЙ КОЧЕВНИК" будет осуществляться до 30.06.2024г.
			При подаче заявки необходимо указать "продление". </div>
		<div class="announceText">Уважаемые заявители, при регистрации Личного кабинета на портале, просим не
			использовать почту "gmail.com", так как сайт блокирует данные.</div>
		<!-- Slideshow container -->
		<div class="slideshow-container">
			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="{{asset('frontendAsset')}}/images/slider/slide1.jpg" style="width:100%">
				<div class="text">Caption Text</div>
			</div>
			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="{{asset('frontendAsset')}}/images/slider/slide2.jpg" style="width:100%">
				<div class="text">Caption Two</div>
			</div>
			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="{{asset('frontendAsset')}}/images/slider/slide3.jpg" style="width:100%">
				<div class="text">Caption Three</div>
			</div>
			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides(-1)" style="margin-left: -499px;">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>
		<!-- The dots/circles -->
		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>

		<script type="text/javascript">
			var slideIndex = 1;
			showSlides(slideIndex);

			// Next/previous controls
			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			// Thumbnail image controls
			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				if (n > slides.length) { slideIndex = 1 }
				if (n < 1) { slideIndex = slides.length }
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
			}

			function showPass() {
				if ($("#showPass").is(":checked")) $("#login_password").attr("type", "text"); else $("#login_password").attr("type", "password");
			}
		</script>



	</div>
	<!-- mainContent End -->
</center>

@endsection