<!-- Footer Start -->
{{-- @php
echo "<pre>";
print_r($user);die;
@endphp --}}
<footer class="container-fluid bg-primary text-white mt-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="mb-4">Connect with Us</h5>
                <div class="social-links">
                    <a href="{{ $setting->github_url }}" class="btn btn-light btn-social mr-2"><i class="fab fa-github"></i></a>
                    <a href="{{ $setting->fb_url }}" class="btn btn-light btn-social mr-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $setting->linkedin_url }}" class="btn btn-light btn-social mr-2"><i class="fab fa-linkedin-in"></i></a>
                    <a href="{{ $setting->freelance_url }}" class="btn btn-light btn-social mr-2"><i class="fa fa-paper-plane"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('privacy') }}" class="text-white">Privacy</a></li>
                    <li><a href="{{ route('terms') }}" class="text-white">Terms</a></li>
                    <li><a href="{{ route('faqs') }}" class="text-white">FAQs</a></li>
                    <li><a href="{{ route('help') }}" class="text-white">Help</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="mb-4">Contact Information</h5>
                <p class="text-white">{{ $user->address }}</p>
                <p class="text-white">Email: {{ $user->email }}<br>Phone: {{ $user->phone }}</p>
            </div>
            
        </div>
        <hr class="my-4">
        <div class="text-center">
            <p class="m-0">&copy; <a href="#" class="text-white font-weight-bold">DynamicWebGrowth</a>. All Rights Reserved.
                Designed by <a href="#" class="text-white font-weight-bold">dynamicwebgrowth</a> | <?php echo date('Y'); ?>
            </p>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Scroll to Bottom -->
<a href="#" class="btn btn-outline-light btn-floating scroll-to-bottom"><i class="fa fa-2x fa-angle-down"></i></a>

<!-- Back to Top -->
<a href="#" class="btn btn-outline-light btn-floating back-to-top"><i class="fa fa-2x fa-angle-double-up"></i></a>
