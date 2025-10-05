@extends('layout.main')
@section('title', 'Terms & Conditions')
@section('breadcrumbTitle', 'Terms & Conditions')
@section('breadcrumbActive', 'Terms & Conditions')
@section('content')
    <!-- 404 Start -->
    <div class="container mt-5">
        <h1 class="mb-4">Terms & Conditions</h1>
        <p class="text-muted">Last Updated: October 5, 2025</p>

        <section class="mb-4">
            <h2>1. Introduction</h2>
            <p>Welcome to Maitrii Enterprise. These terms and conditions outline the rules and regulations for the use of Maitrii Enterprise's Website and services.</p>
            <p>By accessing this website and using our services, we assume you accept these terms and conditions. Do not continue to use Maitrii Enterprise if you do not agree to take all of the terms and conditions stated on this page.</p>
        </section>

        <section class="mb-4">
            <h2>2. Intellectual Property Rights</h2>
            <p>Unless otherwise stated, Maitrii Enterprise and/or its licensors own the intellectual property rights for
                all material on Maitrii Enterprise. All intellectual property rights are reserved. You may access this from
                Maitrii Enterprise for your own personal use subjected to restrictions set in these terms and conditions.
            </p>
            <p>You must not:</p>
            <ul>
                <li>Republish material from Maitrii Enterprise</li>
                <li>Sell, rent or sub-license material from Maitrii Enterprise</li>
                <li>Reproduce, duplicate or copy material from Maitrii Enterprise</li>
                <li>Redistribute content from Maitrii Enterprise</li>
            </ul>
        </section>

        <section class="mb-4">
            <h2>3. Use of Services</h2>
            <p>By using our services, you agree to provide accurate and complete information. You are responsible for maintaining the confidentiality of your account and password. Maitrii Enterprise reserves the right to refuse service, terminate accounts, or cancel orders at our sole discretion.</p>
            <p>You agree not to use our services for any unlawful purpose or in any way that could damage, disable, overburden, or impair our website or interfere with any other party's use and enjoyment of our services.</p>
        </section>

        <!-- Add more sections as needed for your specific terms -->

        <section class="mb-4">
            <h2>4. Service Terms</h2>
            <p>Maitrii Enterprise provides various services and products. All services are subject to availability and may be modified or discontinued at any time without notice. We reserve the right to limit quantities and refuse service to anyone.</p>
        </section>

        <section class="mb-4">
            <h2>5. Payment Terms</h2>
            <p>Payment is due at the time of service unless other arrangements have been made. We accept various forms of payment. All prices are subject to change without notice. Additional charges may apply for special requests or modifications.</p>
        </section>

        <section class="mb-4">
            <h2>6. Privacy</h2>
            <p>Your privacy is important to us. We collect and use information in accordance with our Privacy Policy. By using our services, you consent to the collection and use of information as outlined in our Privacy Policy.</p>
        </section>

        <section class="mb-4">
            <h2>7. Limitation of Liability</h2>
            <p>Maitrii Enterprise shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services. Our total liability shall not exceed the amount paid for the specific service in question.</p>
        </section>

        <section class="mb-4">
            <h2>Contact Information</h2>
            <p>If you have any questions about these Terms and Conditions, please contact us at {{ config('constants.email') }}.
            </p>
        </section>
    </div>

    <!-- 404 End -->
@endsection
