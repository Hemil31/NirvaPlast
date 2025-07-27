<div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>{{config('constants.phone')}}</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>{{config('constants.email')}}</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href="{{config('constants.social_links.facebook')}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="{{config('constants.social_links.twitter')}}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href="{{config('constants.social_links.linkedin')}}"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="{{config('constants.social_links.instagram')}}"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
