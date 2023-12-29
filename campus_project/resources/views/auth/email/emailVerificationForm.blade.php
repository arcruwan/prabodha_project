<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v7 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    {{-- <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"> --}}

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="../../../css/emailVerificationForm.css">
</head>

<body>

    <div class="wrapper">
        <div class="inner">
            <form action="">
                <h4>Enter your OTP</h4>
                <p>Dear {{ $name }} Please submit your OTP for verification
                </p>
                <h4>{{ $decryptedToken }}</h4>
                <label class="form-group">

                    <input type="text" id="Token" class="form-control" required>
                    <span>Your OTP</span>
                    <span class="border"></span>
                </label>

                <button id="submit">Submit
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- JavaScript for decryption -->
    <!-- JavaScript for decryption -->
    <script>
        $(document).ready(function() {
            var id = {{ $userId }};

            $(document).on('click', '#submit', function(e) {
                e.preventDefault();
                var decryptedToken = $('#Token').val();

                $.ajax({
                    url: "{{ route('update.email-verification') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: {
                        id: id,
                        decryptedToken: decryptedToken
                    },
                    success: function(data) {
                        if (data.success) {
                            Swal.fire(
                                'Good job!',
                                data.message,
                                'success'
                            );

                            // Check if there's a redirect URL in the response
                            if (data.redirect) {
                                // Redirect to the specified URL
                                window.location.href = data.redirect;
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
            });
        });
    </script>


</body><!-- This template was made by Colorlib (https://colorlib.com) -->

</html>
