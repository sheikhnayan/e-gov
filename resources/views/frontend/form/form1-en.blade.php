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
                            style="color:white;text-decoration:none;">Instruction</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="bank_data.html" target="_blank" style="color:white;text-decoration:none;">Bank
                            details</a>&nbsp;&nbsp;
                        <select id="langSel">
                            <!-- <option value="ky">KG</option> -->
                            <option value="{{route('form1.ru')}}" >RU</option>
                            <option value="{{route('form1.en')}}" selected>EN</option>
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
                    <td align="left"><b>Work permit issue web services<br>
                            Digital nomad issue web services</b></td>
                </tr>
            </table>
        </div>





        <br><br><br>
        <h2>Registration of personal cabinet</h2><br><br>
        <form action="{{ route('form1') }}" method="post">
        @csrf

        <table cellpadding="4" cellspacing="4" width="700">
            <tr>
                <td>
                    <b>Select type</b><br><br>
                    <input type="radio" name="option_id" value="1" id="option_1" required /> <label
                        for="option_1">Employer</label><br>
                    <input type="radio" name="option_id" value="2" id="option_2" required /> <label for="option_2">Foreign
                        individual entrepreneur</label>
                    <br><input type="radio" name="option_id" value="3" id="option_3" required /> <label for="option_3">Для
                        проекта "Цифровой кочевник"</label>
                    <br><br><br>
                    <a href="registration_agree.html" target="_blank">By creating a Personal Account and further using
                        this portal, you accept the terms of the user agreement and privacy policy</a> <input
                        type="checkbox" id="agree" style="cursor: pointer;" required/><br><br>

                    <!-- <img src="vasplusCaptcha27b6.jpg?rand=816349002" id="captchaimg" />
                    <img src="{{asset('frontendAsset')}}/images/refresh_icon.png" onClick="vpb_refresh_aptcha();" class="refreshIcon" />
                    <input type="text" id="vpb_captcha_code" name="vpb_captcha_code" required />
                    <br><br><br>-->

                    <button type="submit" class="btn_6655">Next</button>
                </td>
            </tr>
        </table>
    </form>




    </div>
    <!-- mainContent End -->
</center>

@endsection
