<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>
      @include('admin.sidebar')
      @include('admin.navbar')


      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">


            <table class="table table-striped table-bordered" style="text-align: center">

                <tr>
                    <th style="font-family: 'Times New Roman', Times, serif;">Customer Name</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">Phone Number</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">Address</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">Product title</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">Price</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">Quantity</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">Status</th>
                </tr>

                @foreach ($order as $orders )



                <tr>
                    <th style="font-family: 'Times New Roman', Times, serif;">{{ $orders->name }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">{{ $orders->phone }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">{{ $orders->address }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">{{ $orders->product_name }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">{{ $orders->price }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">{{ $orders->quantity }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif;">{{ $orders->status }}</th>
                </tr>

                @endforeach


        </table>

        </div>
      </div>


      @include('admin.script')
  </body>
</html>
