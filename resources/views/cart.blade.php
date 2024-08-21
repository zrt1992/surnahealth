<?php $page = 'cart'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Cart
        @endslot
        @slot('li_1')
            Cart
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>SKU</th>
                                    <th>Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('product-description') }}" class="avatar avatar-sm me-2"><img
                                                    class="avatar-img"
                                                    src="{{ URL::asset('/assets/img/products/product.jpg') }}"
                                                    alt="User Image"></a>
                                        </h2>
                                        <a href="{{ url('product-description') }}">Benzaxapine Croplex</a>
                                    </td>
                                    <td>26565</td>
                                    <td>$19</td>
                                    <td class="text-center">
                                        <div class="custom-increment cart">
                                            <div class="input-group1">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-left-minus btn btn-danger btn-number"
                                                        data-type="minus" data-field="">
                                                        <span><i class="fas fa-minus"></i></span>
                                                    </button>
                                                </span>
                                                <input type="text" id="quantity1" name="quantity1" class=" input-number"
                                                    value="10">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-right-plus btn btn-success btn-number"
                                                        data-type="plus" data-field="">
                                                        <span><i class="fas fa-plus"></i></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$19</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('product-description') }}" class="avatar avatar-sm me-2"><img
                                                    class="avatar-img"
                                                    src="{{ URL::asset('/assets/img/products/product1.jpg') }}"
                                                    alt="User Image"></a>
                                        </h2>
                                        <a href="{{ url('product-description') }}">Ombinazol Bonibamol</a>
                                    </td>
                                    <td>865727</td>
                                    <td>$22</td>
                                    <td class="text-center">
                                        <div class="custom-increment cart">
                                            <div class="input-group1">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-left-minus btn btn-danger btn-number"
                                                        data-type="minus" data-field="">
                                                        <span><i class="fas fa-minus"></i></span>
                                                    </button>
                                                </span>
                                                <input type="text" id="quantity2" name="quantity2" class=" input-number"
                                                    value="10">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-right-plus btn btn-success btn-number"
                                                        data-type="plus" data-field="">
                                                        <span><i class="fas fa-plus"></i></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$22</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('product-description') }}" class="avatar avatar-sm me-2"><img
                                                    class="avatar-img"
                                                    src="{{ URL::asset('/assets/img/products/product2.jpg') }}"
                                                    alt="User Image"></a>
                                        </h2>
                                        <a href="{{ url('product-description') }}">Dantotate Dantodazole</a>
                                    </td>
                                    <td>978656</td>
                                    <td>$10</td>
                                    <td class="text-center">
                                        <div class="custom-increment cart">
                                            <div class="input-group1">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-left-minus btn btn-danger btn-number"
                                                        data-type="minus" data-field="">
                                                        <span><i class="fas fa-minus"></i></span>
                                                    </button>
                                                </span>
                                                <input type="text" id="quantity3" name="quantity3" class=" input-number"
                                                    value="10">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-right-plus btn btn-success btn-number"
                                                        data-type="plus" data-field="">
                                                        <span><i class="fas fa-plus"></i></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$10</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('product-description') }}" class="avatar avatar-sm me-2"><img
                                                    class="avatar-img"
                                                    src="{{ URL::asset('/assets/img/products/product3.jpg') }}"
                                                    alt="User Image"></a>
                                        </h2>
                                        <a href="{{ url('product-description') }}">Alispirox Aerorenone</a>
                                    </td>
                                    <td>543252</td>
                                    <td>$26</td>
                                    <td class="text-center">
                                        <div class="custom-increment cart">
                                            <div class="input-group1">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-left-minus btn btn-danger btn-number"
                                                        data-type="minus" data-field="">
                                                        <span><i class="fas fa-minus"></i></span>
                                                    </button>
                                                </span>
                                                <input type="text" id="quantity4" name="quantity4"
                                                    class=" input-number" value="10">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-right-plus btn btn-success btn-number"
                                                        data-type="plus" data-field="">
                                                        <span><i class="fas fa-plus"></i></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$26</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('product-description') }}" class="avatar avatar-sm me-2"><img
                                                    class="avatar-img"
                                                    src="{{ URL::asset('/assets/img/products/product4.jpg') }}"
                                                    alt="User Image"></a>
                                        </h2>
                                        <a href="{{ url('product-description') }}">Nitrolozin Zithrotropin</a>
                                    </td>
                                    <td>634534</td>
                                    <td>$12</td>
                                    <td class="text-center">
                                        <div class="custom-increment cart">
                                            <div class="input-group1">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-left-minus btn btn-danger btn-number"
                                                        data-type="minus" data-field="">
                                                        <span><i class="fas fa-minus"></i></span>
                                                    </button>
                                                </span>
                                                <input type="text" id="quantity5" name="quantity5"
                                                    class=" input-number" value="10">
                                                <span class="input-group-btn">
                                                    <button type="button"
                                                        class="quantity-right-plus btn btn-success btn-number"
                                                        data-type="plus" data-field="">
                                                        <span><i class="fas fa-plus"></i></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$12</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 col-lg-8">
                </div>

                <div class="col-md-5 col-lg-4">

                    <!-- Booking Summary -->
                    <div class="card booking-card">
                        <div class="card-header">
                        <h4 class="card-title">Cart Total</h4>
                        </div>
                        <div class="card-body">
                        <div class="booking-summary">
                        <div class="booking-item-wrap">
                        <ul class="booking-date d-block pb-0">
                        <li>Subtotal <span>$5,877.00</span></li>
                        <li>Shipping <span>$25.00<a href="javascript:;">Calculate shipping</a></span></li>
                        </ul>
                        <ul class="booking-fee pt-4">
                        <li>Tax <span>$0.00</span></li>
                        </ul>
                        <div class="booking-total">
                        <ul class="booking-total-list">
                        <li>
                        <span>Total</span>
                        <span class="total-cost">$160</span>
                        </li>
                        <li>
                        <div class="clinic-booking pt-4">
                        <a class="apt-btn" href="{{url('product-checkout')}}">Proceed to checkout</a>
                        </div>
                        </li>
                        </ul>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    <!-- /Booking Summary -->

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
