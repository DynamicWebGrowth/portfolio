@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1>Frequently Asked Questions (FAQs)</h1>
    <p class="mb-4">Find answers to some of the most commonly asked questions about our services and website.</p>

    <div class="accordion" id="faqAccordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        General Questions
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                <div class="card-body">
                    <h5>What services do you offer?</h5>
                    <p>We offer a wide range of web development services including website design, development, and maintenance. We also provide SEO and digital marketing services.</p>

                    <h5>How can I contact you?</h5>
                    <p>You can contact us through our contact form on the website, or you can email us directly at contact@dynamicwebgrowth.com.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Technical Questions
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                <div class="card-body">
                    <h5>What technologies do you use?</h5>
                    <p>We use a variety of technologies depending on the project requirements, including HTML, CSS, JavaScript, PHP, Laravel, React, and more.</p>

                    <h5>Do you provide hosting services?</h5>
                    <p>While we do not provide hosting services directly, we can recommend reliable hosting providers and assist with the setup and configuration.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Billing Questions
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                <div class="card-body">
                    <h5>What are your payment terms?</h5>
                    <p>Our payment terms vary depending on the project. Generally, we require a deposit upfront, with the remaining balance due upon project completion. Detailed terms will be provided in your project proposal.</p>

                    <h5>Do you offer refunds?</h5>
                    <p>We handle refund requests on a case-by-case basis. Please refer to our refund policy or contact us directly for more information.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection
