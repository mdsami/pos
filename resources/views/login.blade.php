<!DOCTYPE html>
<html>


<head>
    <title>Login 3 | Admire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/xlogo1.ico.pagespeed.ic.ONh6qx31g4.html"/>
    <!--Global styles -->

    <link href="{{ asset('css/componet.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"/>
    
    
    <!--End of Global styles -->
    <!--Plugin styles-->
    
    <!--End of Plugin styles-->
    
</head>
<body class="login_backimg" background="{{ asset('img/login10.png') }}">
<!-- <div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="img/loader.gif.pagespeed.ce.6uBJi4bcCR.gif" style=" width: 40px;" alt="loading...">
    </div>
</div> -->
<div class="container">
    <div class="row">
        <div class="col-xl-6 push-xl-3 col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_section">
            <div class="row">
                <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12 login2_border login_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-white">
                          
                        

                           



                            <img src="{{ asset('img/logo.png') }}"  alt="logo" class="admire_logo"><br/>
                            <span class="m-t-15">LOG IN</span>
                        </h3>
                    </div>
                    <div class="m-t-15">
                        <form action="http://demo.lorvent.com/demo_admire/admire_html/index.html" id="login_validator" method="post">
                            <div class="form-group">
                                <label for="email" class="col-form-label text-white"> E-mail</label>
                                <div class="input-group">
                                    <input type="text" class="form-control b_r_20" id="email" name="email" placeholder="E-mail">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-white">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control b_r_20" id="password" name="password" placeholder="Password">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row m-t-15">
                                <div class="col-lg-12">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input form-control">
                                        <span class="custom-control-indicator"></span>
                                        <a class="text-white">Keep me logged in</a>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 m-t-10">
                                    <a href="register3.html" class="forgottxt_clr text-white"><i class="fa fa-external-link"></i> Register Now</a>
                                </div>
                                <div class="col-6 p-l-0 m-t-10">
                                    <div class="float-right">
                                        <a href="forgot_password3.html" class="forgottxt_clr text-white">Forgot password ?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-block b_r_20 m-t-20">LOG IN</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-right m-t-25">
                                    <span class="text-white">Sign in with</span>

                                    <span class="fa-stack m-l-10 pointer">
                                        <i class="fa fa-circle fa-stack-2x fb_background"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <span class="fa-stack pointer">
                                        <i class="fa fa-circle fa-stack-2x twitter_background"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <span class="fa-stack pointer">
                                        <i class="fa fa-circle fa-stack-2x google_background"></i>
                                        <i class="fa fa-google fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <span class="fa-stack pointer">
                                        <i class="fa fa-circle fa-stack-2x linkedin_background"></i>
                                        <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{ asset('js/jquery.min.js.pagespeed.jm.29OAZzvhfX.js') }}"></script>
<script src="{{ asset('js/tether.min.js+bootstrap.min.js.pagespeed.jc.ow5mbryNVE.js') }}"></script>


<script>eval(mod_pagespeed_N4UZ_WEpHG);</script>
<script>eval(mod_pagespeed_NeTQgafByB);</script>
<!-- end of global js-->
<!--Plugin js-->
<script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js.pagespeed.jm.YU3KUlvaHb.js') }}"></script>
<script src="{{ asset('vendors/jquery.backstretch/js/jquery.backstretch.js.pagespeed.jm.yFRmRguZGK.js') }}"></script>

<!--End of plugin js-->
<script type="text/javascript">//<![CDATA[
'use strict';$(document).ready(function(){$(".login_backimg").backstretch(["img/login2.png","img/login13.jpg","img/login10.png"],{duration:3000,fade:750});$(window).on("load",function(){$('.preloader img').fadeOut();$('.preloader').fadeOut(1000);});$('#login_validator').bootstrapValidator({fields:{email:{validators:{notEmpty:{message:'The email address is required'},regexp:{regexp:/^\S+@\S{1,}\.\S{1,}$/,message:'The input is not a valid email address'}}},password:{validators:{notEmpty:{message:'Please provide a password'}}}}});$('#register_valid').bootstrapValidator({fields:{UserName:{validators:{notEmpty:{message:'The user name is required and cannot be empty'}}},email:{validators:{notEmpty:{message:'The email address is required'},regexp:{regexp:/^\S+@\S{1,}\.\S{1,}$/,message:'The input is not a valid email address'}}},password:{validators:{notEmpty:{message:'Please provide a password'}}},confirmpassword:{validators:{notEmpty:{message:'The confirm password is required and can\'t be empty'},identical:{field:'password',message:'Please enter the same password as above'}}}}});$('#login_validator1').bootstrapValidator({fields:{email_modal:{validators:{notEmpty:{message:'enter your valid email'},regexp:{regexp:/^\S+@\S{1,}\.\S{1,}$/,message:'The input is not a valid email address'}}}}});validate();function validate(){if($('.email_forgot').val()>0){$(".submit_email").prop("disabled",false);}else{$(".submit_email").prop("disabled",true);}}});
//]]></script>
</body>

</html>