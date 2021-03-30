<a class="dropdown-toggle" data-toggle="dropdown" href="#">
    @guest
    <a href="/login">
        <div class="basket-item-count">
            <span class="count">0</span>
            <button class="w3view-cart">
                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
            </button>
        </div>

        <div class="total-price-basket">
            <span class="lbl">login to <br> manage cart</span>
        </div>
    </a>
    @else
        @if ($carts ?? '')
            <div class="basket-item-count">
                <span class="count">{{count($carts)}}</span>
                <button class="w3view-cart">
                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                </button>
            </div>

            <div class="total-price-basket">
                <span class="lbl">Your cart:</span>
                <span class="total-price">
                    <span class="sign">Rs.</span>
                    <span class="price-value">{{$grand_total}}</span>
                </span>
            </div>
        @else
            <div class="basket-item-count">
                <span class="count">0</span>
                <button class="w3view-cart">
                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                </button>
            </div>

            <div class="total-price-basket">
                <span class="lbl">Your cart:</span>
                <span class="total-price">
                    <span class="sign">Rs.</span>
                    <span class="price-value">0</span>
                </span>
            </div>
        @endif
    @endguest
</a>

@if ($carts ?? '')
    <ul class="dropdown-menu">
        <table class="dropdown">
            <thead>
                <tr>
                    <td>Img</td>
                    <td>Product</td>
                    <td>Rate</td>
                    <td>Qty</td>
                </tr>
            </thead>
            <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <td>
                        <div class="thumb inline">
                            <img alt="" src="/storage/images/products/{{$cart->product->image}}" />
                        </div>
                    </td>
                    <td>{{$cart->product->name}}</td>
                    <td><span class="price">Rs{{$cart->product->rate}}</span></td>
                    <td><span class="qty pl-5">{{$cart->quantity}}</span></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="checkout">
            <a href="/checkoutMart" class="checkout-button">Checkout</a>
        </div>
    </ul>
@endif


