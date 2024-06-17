@extends('layouts.app')

@section('content')



    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="{{ $setting->github_url }}"><i class="fab fa-github"></i></a>
                <a class="btn btn-light btn-social mr-2" href="{{ $setting->fb_url }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="{{ $setting->linkedin_url }}"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social mr-2" href="{{ $setting->freelance_url }}"><i class="fa fa-paper-plane"></i></a>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="{{ route('privacy') }}">Privacy</a>
                <span class="px-3">|</span>
                <a class="text-white" href="{{ route('terms') }}">Terms</a>
                <span class="px-3">|</span>
                <a class="text-white" href="{{ route('faqs') }}"">FAQs</a>
                <span class="px-3">|</span>
                <a class="text-white" href="{{ route('help') }}">Help</a>
            </div>
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#"></a>DynamicWebGrowth. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="#">dynamicwebgrowth</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

@endsection
