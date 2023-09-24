<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        h2 {
            font-size: xx-large;
        }

        a.filled-button:hover {
            background-color: #007bff;
        }

        #buttoncolour {
            background-color: #28a745;
        }

        #buttoncolour:hover {
            background-color: #007bff;
        }

        @media (max-width: 767px) {
            .call-to-action .inner-content .col-md-4 {
                text-align: center;
            }
        }
    </style>

    <!-- Google Translate Script -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>

<ul>
    <li class="nav-item">
        @if (Route::has('login'))

            @auth

                <div class="container mt-5">
                    <!-- Google Translate Widget -->
                    <div  class="nav-link" style="font-family: 'Times New Roman', Times, serif;" id="google_translate_element" style="text-align: right;"></div>

                    <div class="card p-4" style="background-color: #f7f7f7;" id="boxborder">
                        <h1 class="text-center vtitle" id="fonyfamily">Pet Shop Voucher</h1>
                        <p class="text-center" id="fonyfamily">(Congratulations! You've received a discount voucher at our Pet Shop.)</p>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h2 id="fonyfamily" class="text-center">Voucher Code</h2>
                                <p id="fonyfamily" class="text-center font-weight-bold">PSV12345</p>
                            </div>
                            <div class="col-md-6">
                                <h2 id="fonyfamily" class="text-center">Discount</h2>
                                <p id="fonyfamily" class="text-center font-weight-bold" style="color:red">20% off</p>
                            </div>
                        </div>
                        <p class="text-center mt-4" id="fonyfamily">Valid until: August 31, 2023</p>
                    </div>
                </div>

            @else

                <div class="call-to-action">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner-content">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 style="font-family: 'Times New Roman', Times, serif; font-size:29px;">Do you like to get a <em> discount </em> voucher? </h4>
                                            <p style="font-family: 'Times New Roman', Times, serif; font-size:20px;">First, you can sign up for the other website. Then you can see the discount voucher.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ route('login') }}" class="filled-button" style="font-family: 'Times New Roman', Times, serif; width:150px; text-align: center;">Log in</a>
                                            <a href="{{ route('register') }}" id="buttoncolour" class="filled-button" style="font-family: 'Times New Roman', Times, serif; width:150px; text-align: center;">Register</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endauth

        @endif
    </li>
</ul>

</body>
</html>
