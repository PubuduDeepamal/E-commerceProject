
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





            <div class="col-md-4">
              <div class="product-item">
                <a href="#"><img height="300" width="150" src="https://i.ikman-st.com/germon-shepard-puppies-for-sale-galle-1/9d75616c-660a-4612-8f2c-84dc7115eafd/780/585/fitted.jpg" alt=""></a>
                <div class="down-content">
                  <a href="#"><h4 id="fonyfamily">German Shepherd Puppies</h4></a>
                  <h6 id="fonyfamily">Rs 26,000</h6>
                  <p id="fonyfamily">2 𝐌𝐚𝐥𝐞s 𝐀𝐫𝐞 𝐀𝐯𝐚𝐢𝐥𝐚𝐛𝐥𝐞 ...𝐉𝐮𝐬𝐭 40 days 𝐎𝐥𝐝 𝐁𝐚𝐛𝐢𝐞𝐬</p>
                  <button class="btn btn-success" style="margin-left: 100px; font-family: 'Times New Roman', Times, serif;">Request</button>
                </div>
              </div>
            </div>

            <div class="col-md-4">
                <div class="product-item">
                  <a href="#"><img height="300" width="150" src="https://i.ikman-st.com/rottweiler-puppies-for-sale-for-sale-colombo-530/6e6511de-7113-4c38-9b89-017c1e4a6e0c/620/466/fitted.jpg" alt=""></a>
                  <div class="down-content">
                    <a href="#"><h4 id="fonyfamily">Rottweiler Puppies</h4></a>
                    <h6 id="fonyfamily">Rs 65,000</h6>
                    <p id="fonyfamily">2 𝐌𝐚𝐥𝐞s 𝐀𝐫𝐞 𝐀𝐯𝐚𝐢𝐥𝐚𝐛𝐥𝐞 ...𝐉𝐮𝐬𝐭 40 days 𝐎𝐥𝐝 𝐁𝐚𝐛𝐢𝐞𝐬</p>
                    <button class="btn btn-success" style="margin-left: 100px; font-family: 'Times New Roman', Times, serif;">Request</button>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="product-item">
                  <a href="#"><img height="300" width="150" src="https://i.ikman-st.com/rottweiler-puppies-for-sale-gampaha-3871/27e702b3-b532-4fdf-b2f2-87a0aa86cfed/620/466/fitted.jpg" alt=""></a>
                  <div class="down-content">
                    <a href="#"><h4 id="fonyfamily">Rottweiler Puppies</h4></a>
                    <h6 id="fonyfamily">Rs 90,000</h6>
                    <p id="fonyfamily">2 𝐌𝐚𝐥𝐞s 𝐀𝐫𝐞 𝐀𝐯𝐚𝐢𝐥𝐚𝐛𝐥𝐞 ...𝐉𝐮𝐬𝐭 40 days 𝐎𝐥𝐝 𝐁𝐚𝐛𝐢𝐞𝐬</p>
                    <button class="btn btn-success" style="margin-left: 100px; font-family: 'Times New Roman', Times, serif;">Request</button>
                  </div>
                </div>
              </div>



          </div>
        </div>
      </div>
