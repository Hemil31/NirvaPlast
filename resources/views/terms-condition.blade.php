@extends('layout.main')
@section('title', 'Terms & Conditions')
@section('breadcrumbTitle', 'Terms & Conditions')
@section('breadcrumbActive', 'Terms & Conditions')
@section('content')
    <!-- 404 Start -->
    <div class="container mt-5">
        <h1 class="mb-4">Terms & Conditions</h1>
        <p class="text-muted">Last Updated: July 26, 2025</p>

        <section class="mb-4">
            <h2>1. Introduction</h2>
            <p>Welcome to Patel Landscaping And Garden Care. These terms and conditions outline the rules and regulations for the use of Patel Landscaping And Garden Care's Website, located at [Your Website URL].</p>
            <p>By accessing this website, we assume you accept these terms and conditions. Do not continue to use Patel Landscaping And Garden Care if you do not agree to take all of the terms and conditions stated on this page.</p>
        </section>

        <section class="mb-4">
            <h2>2. Intellectual Property Rights</h2>
            <p>Unless otherwise stated, Patel Landscaping And Garden Care and/or its licensors own the intellectual property rights for
                all material on Patel Landscaping And Garden Care. All intellectual property rights are reserved. You may access this from
                Patel Landscaping And Garden Care for your own personal use subjected to restrictions set in these terms and conditions.
            </p>
            <ul>
                <li>Republish material from Patel Landscaping And Garden Care</li>
                <li>Sell, rent or sub-license material from Patel Landscaping And Garden Care</li>
                <li>Reproduce, duplicate or copy material from Patel Landscaping And Garden Care</li>
                <li>Redistribute content from Patel Landscaping And Garden Care</li>
            </ul>
        </section>

        <section class="mb-4">
            <h2>3. User Comments</h2>
            <p>This Agreement shall begin on the date hereof. Parts of this website offer an opportunity for users to post
                and exchange opinions and information in certain areas of the website. Patel Landscaping And Garden Care does not filter,
                edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views
                and opinions of Patel Landscaping And Garden Care, its agents and/or affiliates. Comments reflect the views and opinions of
                the person who posts their views and opinions.</p>
        </section>

        <!-- Add more sections as needed for your specific terms -->

        <section class="mb-4">
            <h2>Contact Information</h2>
            <p>If you have any questions about these Terms and Conditions, please contact us at {{ config('constants.email') }}.
            </p>
        </section>
    </div>

    <!-- 404 End -->
@endsection
