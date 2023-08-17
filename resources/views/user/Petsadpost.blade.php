
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
                <h2  style="font-family: 'Times New Roman', Times, serif;">Rescue Dog Center</h2>

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
                <a href="#"><img height="300" width="150" src="https://i.ikman-st.com/germon-shepard-puppies-for-sale-galle-1/9d75616c-660a-4612-8f2c-84dc7115eafd/780/585/fitted.jpg" alt=""></a>
                <div class="down-content">
                  <a href="#"><h4 id="fonyfamily">German Shepherd Puppies</h4></a>
                  <h6 id="fonyfamily">Rs 26,000</h6>
                  <p id="fonyfamily">2 𝐌𝐚𝐥𝐞s 𝐀𝐫𝐞 𝐀𝐯𝐚𝐢𝐥𝐚𝐛𝐥𝐞 ...𝐉𝐮𝐬𝐭 40 days 𝐎𝐥𝐝 𝐁𝐚𝐛𝐢𝐞𝐬</p>
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
