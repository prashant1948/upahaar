<h1>Your Cart:</h1>
@if (count($cartItems) > 0)
    @php
        $c=0;
    @endphp
{{--    <strong>Click to remove one quantity from the item:</strong>--}}
    <div class="table-responsive">
        <table class="timetable_sub">
            <thead>
            <tr>

                <th>SL No.</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Product Name</th>

                <th>Price</th>
                <th>Remove</th>
            </tr>
            </thead>
            @foreach ($cartItems as $cartItem)
            <tbody>
            <tr class="rem1">
                @php
                    $c++;
                @endphp
                <td class="invert">{{$c}}</td>
                <td class="invert-image">
                    <a href="single2.html">
                        <img alt="" style="width:50px;height:50px" src="/storage/images/products/{{$cartItem->product->image}}" class="img-responsive"/>
                    </a>
                </td>
                <td class="invert">
                    <div class="quantity">
                        <div class="quantity-select">

                            <div class="entry value">
                                <span>{{$cartItem->quantity}}</span>
                            </div>

                        </div>
                    </div>
                </td>
                <td class="invert">{{$cartItem->product->name}}</td>
                <td class="invert">
                    @php
                        echo $cartItem->quantity * $cartItem->product->rate;
                    @endphp
                </td>
                <td class="invert">
                    <div class="rem">
                        <div class="close1" onclick="removeItem({{$cartItem->id}}, '<?php echo csrf_token() ?>')"> </div>
                    </div>
                </td>
            </tr>
            </tbody>
            @endforeach
            <tfoot width="10rem">
                <td>
                    Grand Total After Discount:
                    <span class="amount" style="color:red">{{$grand_total}}</span>
                </td>
            </tfoot>

        </table>
    </div>
@else

    <li class="list-group-item">
        Your cart is empty!!
    </li>
@endif
{{--<ul class="list-group" id="">--}}
{{--    @foreach ($cartItems as $cartItem)--}}
{{--    <li class="list-group-item cart-item" onclick="removeItem({{$cartItem->id}}, '<?php echo csrf_token() ?>')">--}}
{{--        {{$cartItem->product->name}} x{{$cartItem->quantity}}--}}
{{--        <span class="amount right">--}}
{{--            @php--}}
{{--                echo $cartItem->quantity * $cartItem->product->rate;--}}
{{--            @endphp--}}
{{--        </span>--}}
{{--    </li>--}}
{{--    @endforeach--}}
{{--    <li class="list-group-item">--}}
{{--        Grand Total After Discount:--}}
{{--        <span class="amount">{{$grand_total}}</span>--}}
{{--    </li>--}}
{{--@else--}}
{{--    <li class="list-group-item">--}}
{{--        Your cart is empty!!--}}
{{--    </li>--}}
{{--@endif--}}
{{--</ul>--}}
