@extends('layouts.app')

@section('title', 'Transaction Status')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Transaction Status</h1>

    @if($transactionStatus == 'success' || $transactionStatus == 'settlement')
        <div class="alert alert-success">
            <h4>Thank you for your purchase!</h4>
            <p>Your transaction has been completed successfully.</p>
        </div>
    @elseif($transactionStatus == 'pending')
        <div class="alert alert-warning">
            <h4>Your transaction is pending.</h4>
            <p>Please complete the payment to proceed.</p>
        </div>
    @else
        <div class="alert alert-danger">
            <h4>Transaction Failed</h4>
            <p>Unfortunately, your transaction could not be completed.</p>
        </div>
    @endif

    <a href="{{ route('home') }}" class="btn btn-primary mt-3">Return to Home</a>
</div>
@endsection
