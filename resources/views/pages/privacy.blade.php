@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="text-center mb-5">
                <h1 class="display-4">Privacy Policy</h1>
                <p class="lead">This privacy policy outlines how we collect, use, and protect your personal information.</p>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">What information do we collect?</h2>
                    <p class="card-text">We collect information that you provide to us, such as your name, email address, and any other information you provide through our contact form.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">How do we use your information?</h2>
                    <p class="card-text">We use your information to respond to your inquiries, provide you with information about our services, and to improve our website and services.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">How do we protect your information?</h2>
                    <p class="card-text">We take reasonable measures to protect your information from unauthorized access, disclosure, or use.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">Changes to this policy</h2>
                    <p class="card-text">We may update this policy from time to time. We will notify you of any changes by posting the updated policy on this page.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection
