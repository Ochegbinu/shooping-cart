@extends('layouts.app')

@section('content')
    <!--Body Content-->
    <div id="page-content">
        <!--Page Title-->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper">
                    <h1 class="page-width">Your cart</h1>
                </div>
            </div>
        </div>
        <!--End Page Title-->

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">

                    <table>
                        <thead class="cart__row cart__header">
                            <tr>
                                <th colspan="2" class="text-center">Product</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-right">Total</th>
                                <th class="action">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $total = 0;
                            ?>
            <form action="{{ route('checkout') }}" method="POST">
                                @csrf
                            @foreach ($carts as $cart)
                                <?php $total += $cart->product->price; ?>

                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <img src="{{ asset($cart->product->image) }}" style="width: 100px" />
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            {{ $cart->product->name }}
                                        </div>

                                        <div class="cart__meta-text">
                                            {{ $cart->product->description }}
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money"><span>&#8358</span> {{ $cart->product->price }}</span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                        class="icon icon-minus"></i></a>
                                                <input class="cart__qty-input qty" type="text" name="updates[]"
                                                    id="qty" value="1" pattern="[0-9]*">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                        class="icon icon-plus"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money"><span>&#8358</span>
                                                {{ $cart->product->price }}</span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="#"
                                            class="btn btn--secondary cart__remove" title="Remove tem"><i
                                                class="icon icon anm anm-times-l"></i></a></td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-left"><a href="{{ route('index') }}"
                                        class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i>
                                        Continue shopping</a></td>
                                <td colspan="3" class="text-right"><button type="submit" name="update"
                                        class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button></td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="currencymsg">We processes all orders in NGN. While the content of your cart is currently
                        displayed in NGN, the checkout will use NGN at the most current exchange rate.</div>
                    <hr>


                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                    <div class="cart-note">
                        <div class="solid-border">
                            <h5><label for="CartSpecialInstructions" class="cart-note__label small--text-center">Add a note
                                    to your order</label></h5>
                            <textarea type="text" name="note" id="CartSpecialInstructions" class="cart-note__input" required="required"></textarea>
                        </div>
                    </div>
                    <div class="solid-border">
                        <div class="row">
                            <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                            <input type="hidden" name="total" value="{{$total}}" >
                            <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span
                                    class="money">{{ $total }}</span></span>
                        </div>
                        <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                        <p class="cart_tearm">
                            <label>
                                <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm"
                                    required="">
                                I agree with the terms and conditions</label>
                        </p>
                        <input type="submit" class="btn btn--small-wide checkout" value="Checkout" >
                        {{-- <a href="{{ route('checkout') }}"><button
                                class="btn btn--small-wide checkout">Checkout</button></a> --}}

                    </div>

                </div>
            </div>
        </form>
        </div>

    </div>
    <!--End Body Content-->


    @include('layouts.footer')
@endsection
