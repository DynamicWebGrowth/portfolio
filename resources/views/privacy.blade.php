@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1>Privacy Policy</h1>
    <p>This privacy policy outlines how we collect, use, and protect your personal information.</p>

    <h2>What information do we collect?</h2>
    <p>We collect information that you provide to us, such as your name, email address, and any other information you
        provide through our contact form.</p>

    <h2>How do we use your information?</h2>
    <p>We use your information to respond to your inquiries, provide you with information about our services, and to
        improve our website and services.</p>

    <h2>How do we protect your information?</h2>
    <p>We take reasonable measures to protect your information from unauthorized access, disclosure, or use.</p>

    <h2>Changes to this policy</h2>
    <p>We may update this policy from time to time. We will notify you of any changes by posting the updated policy on
        this page.</p>
</div>

<!-- Footer Start -->
<div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="container text-center py-5">
        <div class="d-flex justify-content-center mb-4">
            <a class="btn btn-light btn-social mr-2" href="{{ $setting->github_url }}"><i class="fab fa-github"></i></a>
            <a class="btn btn-light btn-social mr-2" href="{{ $setting->fb_url }}"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-light btn-social mr-2" href="{{ $setting->linkedin_url }}"><i
                    class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-light btn-social mr-2" href="{{ $setting->freelance_url }}"><i
                    class="fa fa-paper-plane"></i></a>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <a class="text-white" href="{{ route('privacy') }}">Privacy</a>
            <span class="px-3">|</span>
            <a class="text-white" href="{{ route('terms') }}">Terms</a>
            <span class="px-3">|</span>
            <a class="text-white" href="{{ route('faqs') }}"">FAQs</a>
                <span class=" px-3">|</span>
                <a class="text-white" href="{{ route('help') }}">Help</a>
        </div>
        <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#"></a>DynamicWebGrowth. All Rights Reserved.
            Designed by <a class="text-white font-weight-bold" href="#">dynamicwebgrowth</a>
        </p>
    </div>
</div>
<!-- Footer End -->

<!-- Scroll to Bottom -->
<i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

<!-- Back to Top -->
<a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


@endsection