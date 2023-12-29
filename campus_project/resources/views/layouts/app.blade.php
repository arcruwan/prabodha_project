<!DOCTYPE html>
<html lang="en">

<!-- index-two18:22  -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Education Home Page2</title>

    <!-- Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="css/prettyphoto.css" rel="stylesheet">
    <link href="build/mediaelementplayer.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/color-two.css" rel="stylesheet">
    <link href="css/color-three.css" rel="stylesheet">
    <link href="css/color-four.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">

        <!--// Header \\-->
        @include('layouts.header')
        <!--// Header \\-->

        <!--// Main Banner \\-->

        <!--// Main Banner \\-->

        <!--// Main Content \\-->
        @yield('content')

        <!--// Main Content \\-->

        <!--// Footer \\-->
        @include('layouts.footer')

        <!--// Footer \\-->

        <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="wm-modallogin-form wm-login-popup">
                        <span class="wm-color">Login </span>
                        <form>
                            <ul>
                                <li> <input type="text" placeholder="Your Username" id="userName"> </li>
                                <li> <input type="password" placeholder="password" id="userpassword"> </li>
                                <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>
                                <li> <input type="submit" id="loginsubmit" value="Sign In"> </li>
                            </ul>
                        </form>
                        <span class="wm-color">or try our socials</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a>
                            </li>
                            <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i>
                                    Google+</a></li>
                        </ul>
                        <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                    </div>
                    <div class="wm-modallogin-form wm-register-popup">
                        <span class="wm-color">create Your Account today</span>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <ul>
                                <li> <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Your Name"
                                        name="name" value="{{ old('name') }}" required autocomplete="name"
                                        autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </li>
                                <li> <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Your Email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </li>
                                <li> <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </li>
                                <li> <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm password"></li>

                                <li> <input type="submit" value="Create Account"></li>
                            </ul>
                        </form>
                        <span class="wm-color">or signup with your socials:</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a>
                            </li>
                            <li class="wm-googleplus-color"><a href="#"><i
                                        class="fa fa-google-plus-square"></i>
                                    Google+</a></li>
                        </ul>
                        <p>Already a member? <a href="#">Sign-in Here!</a></p>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalLogin Box -->

    <!-- ModalLogin Box -->

    <!-- ModalLogin Box -->

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/modernizr.js"></script>
    <script type="text/javascript" src="script/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/jquery.prettyphoto.js"></script>
    <script type="text/javascript" src="script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="script/fitvideo.js"></script>
    <script type="text/javascript" src="script/skills.js"></script>
    <script type="text/javascript" src="script/slick.slider.min.js"></script>
    <script type="text/javascript" src="script/waypoints-min.js"></script>
    <script type="text/javascript" src="build/mediaelement-and-player.min.js"></script>
    <script type="text/javascript" src="script/isotope.min.js"></script>
    <script type="text/javascript" src="script/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="script/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<script>
    $(document).ready(function() {

        console.log('{{ Session('user_email_verified') }}');
        $(document).on('click', '#loginsubmit', function(e) {
            e.preventDefault();
            var userName = $('#userName').val();
            var password = $('#userpassword').val();

            $.ajax({
                url: "{{ route('user.login') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    email: userName,
                    password: password
                },
                // Inside your success callback
                success: function(data) {
                    if (data.success) {
                        Swal.fire(
                            'Good job!',
                            data.message,
                            'success'
                        );

                        if ('{{ session('role') == 'admin' }}') {
                            window.location.href = '{{ route('admin-dashboard') }}';
                        } else {
                            window.location.href = '{{ route('client-dashboard') }}';
                        }


                    } else {
                        Swal.fire(
                            'Error!',
                            data.message,
                            'error'
                        );
                    }
                },

                error: function(xhr, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Form submission failed!',
                    });
                }
            });

        })
        $('#hideNotification').click(function() {
            $('#notificationBar').hide();
        });
    })
</script>
<!-- index-two19:35  -->

</html>
