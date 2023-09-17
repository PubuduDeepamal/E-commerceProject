<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Webpage with Discount Pop-up</title>

    <!-- Add your existing styles and scripts here -->

    <style>
        /* Your existing styles */
        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        #buttoncolor {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        #fonyfamily1 {
            font-family: 'Times New Roman', Times, serif;
        }

        @media (max-width: 767px) {
            #fonyfamily1 {
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
            }
        }

        /* Styles for the discount pop-up */
        .discount-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
        }

        .discount-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
            color: #777;
        }

        /* Add animation for the pop-up */
        .discount-popup.show {
            display: block;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <!-- Your existing HTML content goes here -->
    <div class="latest-products" id="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading" id="section-heading">
                        <h2 style="font-family: 'Times New Roman', Times, serif;">Promoted Products</h2>
                        <a href="/Homeproduct" id="fonyfamily1">view all products <i class="fa fa-angle-right"></i></a>

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

    <!-- Discount pop-up HTML -->
    <div id="discount-popup" class="discount-popup">
        <div class="discount-content">
            <span class="close-btn" id="close-btn">&times;</span>
            <h2>Get 10% Off!</h2>
            <p>All <b>Promoted Product</b> section products have a 10% discount.</p>
        </div>
    </div>

    <!-- JavaScript for the pop-up -->
    <script>
        // Get references to the pop-up and close button
        var discountPopup = document.getElementById('discount-popup');
        var closeBtn = document.getElementById('close-btn');

        // Show the pop-up
        function showDiscountPopup() {
            discountPopup.classList.add('show');
        }

        // Hide the pop-up
        function hideDiscountPopup() {
            discountPopup.classList.remove('show');
        }

        // Close the pop-up when the close button is clicked
        closeBtn.addEventListener('click', hideDiscountPopup);

        // You can trigger the pop-up to show when you need it, for example, when the page loads or after a certain event.
        // Here's an example of showing the pop-up when the page loads:
        window.addEventListener('load', showDiscountPopup);
    </script>
</body>
</html>
