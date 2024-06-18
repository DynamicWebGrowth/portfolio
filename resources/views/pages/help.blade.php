@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="mb-4 text-center">Help Center</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">FAQs</h5>
                    <p class="card-text">Browse frequently asked questions to find answers to common issues and inquiries.</p>
                    <a href="{{ route('faqs') }}" class="btn btn-primary">Explore FAQs</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Contact Support</h5>
                    <p class="card-text">Need further assistance? Contact our support team for personalized help.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Support</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Documentation</h5>
                    <p class="card-text">Explore our comprehensive documentation to get detailed guidance on using our services.</p>
                    <a href="{{ route('terms') }}" class="btn btn-primary">View Documentation</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Feedback</h5>
                    <p class="card-text">Share your feedback with us. We'd love to hear from you!</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Give Feedback</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection
