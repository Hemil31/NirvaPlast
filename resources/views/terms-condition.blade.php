@extends('layout.main')
@section('seo_title', 'Terms & Conditions | NIRVA Technoplast')
@section('seo_description', 'Terms and conditions for using the NIRVA Technoplast Private Limited website and engaging with our precision plastic engineering, manufacturing and supply services.')
@section('seo_keywords', 'terms and conditions, NIRVA Technoplast, plastic manufacturing terms, website terms')
@section('breadcrumbTitle', 'Terms & Conditions')
@section('breadcrumbActive', 'Terms & Conditions')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Terms & Conditions</h1>
        <p class="text-muted">Last Updated: October 5, 2025</p>

        <section class="mb-4">
            <h2>1. Introduction</h2>
            <p>Welcome to NIRVA Technoplast. These terms and conditions outline the rules and regulations for the use of NIRVA Technoplast's Website and services.</p>
            <p>By accessing this website and using our services, we assume you accept these terms and conditions. Do not continue to use NIRVA Technoplast if you do not agree to take all of the terms and conditions stated on this page.</p>
        </section>

        <section class="mb-4">
            <h2>2. Intellectual Property Rights</h2>
            <p>Unless otherwise stated, NIRVA Technoplast and/or its licensors own the intellectual property rights for
                all material on NIRVA Technoplast. All intellectual property rights are reserved. You may access this from
                NIRVA Technoplast for your own personal use subjected to restrictions set in these terms and conditions.
            </p>
            <p>You must not:</p>
            <ul>
                <li>Republish material from NIRVA Technoplast</li>
                <li>Sell, rent or sub-license material from NIRVA Technoplast</li>
                <li>Reproduce, duplicate or copy material from NIRVA Technoplast</li>
                <li>Redistribute content from NIRVA Technoplast</li>
            </ul>
        </section>

        <section class="mb-4">
            <h2>3. Use of Services</h2>
            <p>By using our services, you agree to provide accurate and complete information for order inquiries, quotations and ongoing supply. NIRVA Technoplast reserves the right to refuse service or cancel orders at our sole discretion.</p>
            <p>You agree not to use our services for any unlawful purpose or in any way that could damage, disable, overburden, or impair our website or interfere with any other party's use and enjoyment of our services.</p>
        </section>

        <section class="mb-4">
            <h2>4. Service Terms</h2>
            <p>NIRVA Technoplast provides various services and products. All services are subject to availability and may be modified or discontinued at any time without notice. We reserve the right to limit quantities and refuse service to anyone.</p>
        </section>

        <section class="mb-4">
            <h2>5. Payment Terms</h2>
            <p>Payment is due at the time of service unless other arrangements have been made. We accept various forms of payment. All prices are subject to change without notice. Additional charges may apply for special requests or modifications.</p>
        </section>

        <section class="mb-4">
            <h2>6. Privacy</h2>
            <p>Your privacy is important to us. Information you provide through our website or in course of business is used to respond to inquiries and fulfil orders. We only share information with third parties as required to provide our services or as required by law. Please contact us at {{ config('constants.email') }} for details on how we handle your information.</p>
        </section>

        <section class="mb-4">
            <h2>7. Limitation of Liability</h2>
            <p>NIRVA Technoplast shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services. Our total liability shall not exceed the amount paid for the specific service in question.</p>
        </section>

        <section class="mb-4">
            <h2>Contact Information</h2>
            <p>If you have any questions about these Terms and Conditions, please contact us at {{ config('constants.email') }}.
            </p>
        </section>
    </div>
@endsection
