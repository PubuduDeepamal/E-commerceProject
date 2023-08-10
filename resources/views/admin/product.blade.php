<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')

      <style>

        .title{
          color: white; 
          padding-top: 25px;
          font-size:25px;

        }
      </style>
  </head>
  <body>  
      @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
          <h1 class="title">Add Product</h1>
        

        <div style="padding: 15px">
          <label>Product Tittle</label>
          <input type="text" name="title" placeholder="Giv a product title" required=""> 
        </div>
      </div>
      </div>

      @include('admin.script')    
  </body>
</html>
