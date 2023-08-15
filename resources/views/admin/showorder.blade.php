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

            <h1 style="font-family: 'Times New Roman', Times, serif; font-size: 48px; padding-top:50px; padding-bottom:30px;">Order List</h1>


            <table class="table table-striped table-bordered" style="text-align: center;">

                <tr>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">Customer Name</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">Phone Number</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">Address</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">Product title</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">Price</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">Quantity</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">Status</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">Action</th>
                </tr>

                @foreach ($order as $orders )



                <tr>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">{{ $orders->name }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">{{ $orders->phone }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">{{ $orders->address }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">{{ $orders->product_name }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">{{ $orders->price }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">{{ $orders->quantity }}</th>
                    <th style="font-family: 'Times New Roman', Times, serif; color:#596993;">{{ $orders->status }}</th>
                    <th>
                        <a class="btn btn-success" href="{{ url('updatestatus', $orders->id) }}">
                                Delivered
                        </a>
                    </th>
                </tr>

                @endforeach


        </table>

        </div>
      </div>


      @include('admin.script')
  </body>
</html>
