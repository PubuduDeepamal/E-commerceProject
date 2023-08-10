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

        label{
          display: inline-block;
          width: 200px
        }

      </style>
  </head>
  <body>  
      @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
          <h1 class="title">Add Product</h1>
        

        <form>

        <div style="padding: 15px">
          <label>Product Tittle</label>
          <input type="text" name="title" placeholder="Enter product title" required=""> 
        </div>

        <div style="padding: 15px">
          <label>Product Price</label>
          <input type="number" name="Price" placeholder="Enter product Price" required=""> 
        </div>

        <div style="padding: 15px">
          <label>Desripition</label>
          <input type="text" name="des" placeholder="Enter product Desripition" required=""> 
        </div>

        <div style="padding: 15px">
          <label>Quantity</label>
          <input type="text" name="quantity" placeholder="Enter product Quantity" required=""> 
        </div>

        <div style="padding: 15px">
          <input type="file" name="file"> 
        </div>

        <div style="padding: 15px">
          <input class="btn btn-success" type="submit"> 
        </div>

      </form>



      </div>
      </div>

      @include('admin.script')    
  </body>
</html>
