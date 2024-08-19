@section('content')
@extends('layouts.app')

@section('title', 'Transaction')

@section('content')
<div class="availability-section">
    <div class="text">
        <h2>Solution for high availability</h2>
        <p>Back up your Windows PCs, Mac devices, and Microsoft OneDrive data to the cloud and never lose a file again.</p>
    </div>
    <img src="{{ asset('assets/img/availability.png') }}" alt="High Availability">
</div>

<div class="product-navigation">
    <ul>
        <li><a href="#transaction">Transaction</a></li>
        <li><a href="{{ route('onlineshop') }}">OnlineShop</a></li>
    </ul>
</div>

<div class="transaction-section">
    <div class="transaction-header">
        <h1>{{ $product->name }}</h1>
        <p class="price">Rp {{ number_format($price, 0, ',', '.') }}</p>
    </div>

    <form action="{{ route('cart.add') }}" method="post">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1" required>
        </div>
        <button type="submit" class="btn btn-success">Add to Cart</button>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentMethods = document.querySelectorAll('input[name="payment_method"]');
        const cardDetails = document.getElementById('card-details');

        paymentMethods.forEach(method => {
            method.addEventListener('change', function() {
                if (this.value === 'credit_card') {
                    cardDetails.style.display = 'block';
                } else {
                    cardDetails.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection


