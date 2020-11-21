@extends('layouts.authentication')
@section('title', 'Giriş Yap')


@section('content')
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url({{ asset('assets/crm/media/bg/bg-4.jpg') }});">
            <!--begin: Aside Container-->
            <div class="d-flex flex-row-fluid flex-column justify-content-between">
                <!--begin: Aside header-->
                <a href="#" class="flex-column-auto mt-5">
                    <img src="{{ asset('assets/admin/assets/images/avatars/logo_white.png') }}" class="max-h-70px" alt="" />
                </a>
                <!--end: Aside header-->
                <!--begin: Aside content-->
                <div class="flex-column-fluid d-flex flex-column justify-content-center">
                    <h3 class="font-size-h1 mb-5 text-white text-right">Ayssoft CRM</h3>
                    <div style="width: 100%; height: 0.1px; background-color: white"></div>

                </div>
                <!--end: Aside content-->
                <!--begin: Aside footer for desktop-->
                <div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
                    <div class="opacity-70 font-weight-bold text-white">© 2020 Ayssoft</div>
                    <div class="d-flex">
                        <a href="#" class="text-white">Gizlilik Sözleşmesi</a>
                        <a href="#" class="text-white ml-10">Yasal</a>
                        <a href="#" class="text-white ml-10">İletişim</a>
                    </div>
                </div>
                <!--end: Aside footer for desktop-->
            </div>
            <!--end: Aside Container-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="flex-row-fluid d-flex flex-column position-relative p-7 overflow-hidden">
            <!--begin::Content header-->
{{--            <div class="position-absolute top-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">--}}
{{--                <span class="font-weight-bold text-dark-50">Şirket Hesabınızı <a href="#" class="font-weight-bold ml-2" id="kt_login_signup">Hemen Oluşturun!</a></span>--}}
{{--            </div>--}}
            <!--end::Content header-->
            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
                <!--begin::Signin-->
                <div class="login-form login-signin">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1">Giriş Yapın</h3>
                        <p class="text-muted font-weight-bold">E-posta Adresinizi ve Şifreniz İle Giriş Yapın</p>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('login') }}" method="post" class="form" id="kt_login_signin_form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input required class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="E-posta Adresiniz" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input required class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Şifreniz" name="password" autocomplete="off" />
                        </div>
                        <!--begin::Action-->
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                            <a href="javascript:;" class="text-dark-50 text-hover-primary my-3 mr-2" id="kt_login_forgot">Şifremi Unuttum!</a>
                            <button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Giriş Yap</button>
                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
                <!--begin::Signup-->
                <div class="login-form login-signup">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1">Kayıt Ol</h3>
                        <p class="text-muted font-weight-bold">Şirket Bilgilerinizi Doldurun</p>
                    </div>
                    <!--begin::Form-->
                    <form action="#" method="post" class="form" id="kt_login_signup_form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input name="name" required type="text" class="form-control form-control-solid h-auto py-5 px-6" placeholder="Adınız">
                        </div>
                        <div class="form-group">
                            <input name="surname" required type="text" class="form-control form-control-solid h-auto py-5 px-6" placeholder="Soyadınız">
                        </div>
                        <div class="form-group">
                            <input name="email" required type="email" class="form-control form-control-solid h-auto py-5 px-6" placeholder="E-Posta Adresiniz">
                        </div>
                        <div class="form-group">
                            <input name="phone_number" required type="text" class="form-control form-control-solid h-auto py-5 px-6 ays_phoneselector" placeholder="Telefon Numaranız">
                        </div>
                        <div class="form-group">
                            <input name="company_name" required type="text" class="form-control form-control-solid h-auto py-5 px-6" placeholder="Şirket Adı">
                        </div>
                        <div class="form-group">
                            <input name="identification_number" minlength="10" maxlength="11" required type="text" class="form-control form-control-solid h-auto py-5 px-6 onlynumber" placeholder="Şirket Vergi/TC Kimlik Numarası">
                        </div>
                        <div class="form-group">
                            <input name="password" minlength="8" maxlength="32" required type="password" class="form-control form-control-solid h-auto py-5 px-6" placeholder="Şifreniz">
                        </div>
                        <div class="form-group">
                            <label class="checkbox mb-0">
                                <input type="checkbox" name="agree" />
                                <a href="#">Şartları ve Kullanım Koşullarını</a> Kabul Ediyorum.
                                <span></span></label>
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center">
                            <button type="submit" id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Kayıt Ol</button>
                        </div>
                        <div class="row">
                            <hr style="width: 25%;float: left">
                            <label style="float: left; margin-top: 4px">Zaten Hesabınız Varsa</label>
                            <hr style="width: 25%;float: left">
                        </div>
                        <br>
                        <div class="form-group d-flex flex-wrap flex-center">
                            <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Giriş Yap</button>
                        </div>

                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signup-->
                <!--begin::Forgot-->
                <div class="login-form login-forgot">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1">Şifreyi Sıfırla</h3>
                        <p class="text-muted font-weight-bold">Şifre sıfırlama işlemleri için<br>E-posta Adresinizi girin</p>
                    </div>
                    <!--begin::Form-->
                    <form action="#" method="post" class="form" id="kt_login_forgot_form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="E-posta Adresiniz" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center">
                            <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sıfırla</button>
                            <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Giriş Yap</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Forgot-->
            </div>
            <!--end::Content body-->
            <!--begin::Content footer for mobile-->
            <div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
                <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2020 Ayssoft</div>
                <div class="d-flex order-1 order-sm-2 my-2">
                    <a href="#" class="text-dark-75 text-hover-primary">Gizlilik Sözleşmesi</a>
                    <a href="#" class="text-dark-75 text-hover-primary ml-4">Yasal</a>
                    <a href="#" class="text-dark-75 text-hover-primary ml-4">İletişim</a>
                </div>
            </div>
            <!--end::Content footer for mobile-->
        </div>
        <!--end::Content-->
    </div>
@stop

@section('page-styles')

@stop

@section('page-script')

    <script>

        $(".onlynumber").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }
        });

    </script>

    <script>

        $(document).ready(function () {
            var _login = $('#kt_login');

            var _showForm = function(form) {
                var cls = 'login-' + form + '-on';
                var myform = 'kt_login_' + form + '_form';

                _login.removeClass('login-forgot-on');
                _login.removeClass('login-signin-on');
                _login.removeClass('login-signup-on');

                _login.addClass(cls);

                KTUtil.animateClass(KTUtil.getById(myform), 'animate__animated animate__backInUp');
            }

            $('#kt_login_forgot').on('click', function (e) {
                e.preventDefault();
                _showForm('forgot');
            });

            // Handle signup
            $('#kt_login_signup').on('click', function (e) {
                e.preventDefault();
                _showForm('signup');
            });

            $('#kt_login_signup_cancel').on('click', function (e) {
                e.preventDefault();

                _showForm('signin');
            });

            $('#kt_login_forgot_cancel').on('click', function (e) {
                e.preventDefault();

                _showForm('signin');
            });

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            @if(session()->has('success'))
            toastr.success("{{ session()->get('success') }}");
            @endif

            @if(count($errors->all()) > 0)
            toastr.warning("{{ $errors->first() }}");
            @endif


            @if(session()->has('reset_pass'))
            $("#res_suc").click();
            @endif
        });
    </script>

@stop
