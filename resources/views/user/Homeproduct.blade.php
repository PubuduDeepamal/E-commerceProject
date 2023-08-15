<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>JackPets.lk</title>

    <link rel="icon" type="image/png" href="assets/css/JACKPETS.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


    <style>

      @media (min-width: 640px)
      {
      .sm\:items-center
      {
          margin-top: -12px;
          align-items: center;
      }

       .latest-products {
            margin-top: -31px;
            background-color: #f2f3f8;
        }

        #prducttype{
            margin-top: 30px;
        }
    }

    </style>

  </head>

  <body>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

      @include('user.heder')
      @include('user.aboutbanner')
      @include('user.productselection')
      @include('user.product')
      @include('user.footer')
      @include('user.script')

  </body>

</html>
