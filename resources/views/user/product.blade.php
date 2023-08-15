
<style>

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}

#buttoncolor{
  color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}

#fonyfamily1{
    font-family: 'Times New Roman', Times, serif;
  }

@media (max-width: 767px) {

  #fonyfamily1{
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
  }
}
</style>

<div class="latest-products" id="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading" id="section-heading">
            <h2>Favorite Products</h2>
            <a href="products.html" id="fonyfamily1">view all products <i class="fa fa-angle-right"></i></a>

            <form action="{{ url('search') }}" method="get" class="form-inline" style="float: right; padding: 10px;">

              @csrf

              <input class="form-control" style="font-family: 'Times New Roman', Times, serif;" type="search" name="search" placeholder="Search">

              <input class="btn btn-success" style="margin-left: 8px; font-family: 'Times New Roman', Times, serif;" type="submit" value="Search" placeholder="Search">

            </form>


          </div>
        </div>


        @foreach ($data as $product)

        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4 id="fonyfamily">{{ $product->title }}</h4></a>
              <h6 id="fonyfamily">Rs {{ $product->price }}</h6>
              <p id="fonyfamily">{{ $product->description }}</p>

              <form action="{{ url('addcart',$product->id) }}" method="POST">

                @csrf

                <input type="number" value="1" min="1" class="form-control" style="width: 100px" name="quantity">

                <br>

                <input class="btn btn-primary" id="buttoncolor" type="submit" value="Add Cart">

              </form>

            </div>
          </div>
        </div>

        @endforeach

        @if (method_exists($data, 'links'))


      <div class="d-flex justify-content-center" id="fonyfamily">

        {!! $data->links() !!}

      </div>

      @endif

      </div>
    </div>
  </div>
