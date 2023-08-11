<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading" id="section-heading">
            <h2>Latest Products</h2>
            <a href="products.html" id="fonyfamily">view all products <i class="fa fa-angle-right"></i></a>

            <form action="{{ url('search') }}" method="get" class="form-inline" style="float: right; padding: 10px;">

              @csrf

              <input class="form-control" type="search" name="search" placeholder="Search">

              <input class="btn btn-success" type="submit" value="Search" placeholder="Search">

            </form>


          </div>
        </div>


        @foreach ($data as $product)

        <div class="col-md-4">
          <div class="product-item" style="height: 520px">
            <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4 id="fonyfamily">{{ $product->title }}</h4></a>
              <h6 id="fonyfamily">Rs {{ $product->price }}</h6>
              <p id="fonyfamily">{{ $product->description }}</p>
              
            </div>
          </div>
        </div>

        @endforeach

        @if (method_exists($data, 'link'))
          

      <div class="d-flex justify-content-center">

        {!! $data->links() !!}

      </div>

      @endif

      </div>
    </div>
  </div>