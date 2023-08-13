<style>

h2{
    font-size: xx-large;
}
</style>

<li class="nav-item">
    @if (Route::has('login'))

        @auth
            
        <div class="container mt-5">
            <div class="card p-4" style="background-color: #f7f7f7;" id="boxborder">
                <h1 class="text-center vtitle" id="fonyfamily">Pet Shop Voucher</h1>
                <p class="text-center" id="fonyfamily">(Congratulations! You've received a discount voucher at our Pet Shop.)</p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h2 id="fonyfamily" class="text-center">Voucher Code</h2>
                        <p id="fonyfamily" class="text-center font-weight-bold">PSV12345</p>
                    </div>
                    <div class="col-md-6">
                        <h2 id="fonyfamily" class="text-center">Discount</h2>
                        <p id="fonyfamily" class="text-center font-weight-bold" style="color:red">20% off</p>
                    </div>
                </div>
                <p class="text-center mt-4" id="fonyfamily">Valid until: August 31, 2023</p>
            </div>
        </div>
         
        @else
        <li><a class="nav-link" style="font-family: 'Times New Roman', Times, serif;"  href="{{ route('login') }}" >Log in</a></li>

            @if (Route::has('register'))
            <li> <a class="nav-link" style="font-family: 'Times New Roman', Times, serif;"  href="{{ route('register') }}">Register</a></li>
            @endif
        @endauth

@endif
</li>
