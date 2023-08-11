<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
      @include('admin.css')

      <style>

        .title{
          padding-bottom: 40px;
          color: white; 
          padding-top: 80px;
          font-size:48px;
          font-family: 'Times New Roman', Times, serif;

        }

        label{
          display: inline-block;
          width: 200px;
          font-family: 'Times New Roman', Times, serif;
        }

        input {
          color: black; 
          font-family: 'Times New Roman', Times, serif;
        }

        #imginput{
          font-family: 'Times New Roman', Times, serif;
        }

        #subbutton{
          font-family: 'Times New Roman', Times, serif;
        }

        .btn-success:not(.btn-light):not(.btn-secondary) {
          font-size: 20px;
        }

        #oldimage{
          font-family: 'Times New Roman', Times, serif;
          padding-bottom: 15px;
        }

      </style>

  </head>
  <body>  
      @include('admin.sidebar')
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
          <h1 class="title">Update Product</h1>
        
        @if(session()->has('message'))

        <div class="alert alert-success">

          {{session()->get('message')}}

        <button type="button" class="close" data-dismiss="alert"> X </button>

        </div>

        @endif




        <form action="{{ url('updateproduct', $data->id) }}" method="post" enctype="multipart/form-data" >

          @csrf

        <div style="padding: 15px">
          <label>Product Tittle</label>
          <input style="color:black;" type="text" name="title" value="{{ $data->title }}" required=""> 
        </div>

        <div style="padding: 15px">
          <label>Product Price</label>
          <input style="color:black;" type="number" name="price" value="{{ $data->price }}" required=""> 
        </div>

        <div style="padding: 15px">
          <label>Desripition</label>
          <input style="color:black;" type="text" name="des" value="{{ $data->description }}"  required=""> 
        </div>

        <div style="padding: 15px">
          <label>Quantity</label>
          <input style="color:black;" type="number" name="quantity" value="{{ $data->quantity }}" required=""> 
        </div>

        <div style="padding: 15px">
            <label id="oldimage">Old image</label>
            <img height="100" width="100" src="/productimage/{{ $data->image }}">
          </div>

        <div style="padding: 15px" id="imginput">
            <label>Change the image</label>
          <input type="file" name="file"> 
        </div>

        <div style="padding: 15px" id="subbutton">
          <input class="btn btn-success" type="submit"> 
        </div>

      </form>



      </div>
      </div>


      @include('admin.script')    
  </body>
</html>
