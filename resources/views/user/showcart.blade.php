<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>JackPets.lk</title>

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


      <div style="padding: 100px; background-color: #f2f3f8;" align="center">

        <div class="container mt-5">
            <h1 class="mb-4" style="font-family: 'Times New Roman', Times, serif; font-size:38px;font-weight:bold">Product List</h1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="text-align: center">

                        <tr>
                            <th style="font-family: 'Times New Roman', Times, serif;">Product Name</th>
                            <th style="font-family: 'Times New Roman', Times, serif;">Quantity</th>
                            <th style="font-family: 'Times New Roman', Times, serif;">Price</th>
                            <th style="font-family: 'Times New Roman', Times, serif;">Action</th>
                        </tr>

                        @foreach ($cart as $carts)


                        <tr>
                            <td style="font-family: 'Times New Roman', Times, serif;">{{ $carts->product_title }}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;">{{ $carts->quantity }}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;">{{ $carts->price }}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;">
                                <a class="btn btn-danger" href="{{ url('delete',$carts->id) }}">Delete</a>
                            </td>
                        </tr>

                        @endforeach

                </table>
            </div>
        </div>



    </div>


    @include('user.footer')

    @include('user.script')

  </body>

</html>
