@extends('website.layout.assembled')
@push('menu')
    <link rel="stylesheet" href="{{ url('public/website_styles/hamberger.css') }}">
@endpush
@push('style-global')
    <link rel="stylesheet" href="{{ url('public/website_styles/global.css') }}">
@endpush
@push('icon')
    <link rel="icon" href="{{ url('public/website_images/logo.png') }}">
@endpush
@push('title')
    <title>Booking Backbone</title>
@endpush

{{-- ----------------------------------------------------------------------- --}}
{{--                           MAIN SECTION                                  --}}
{{-- ----------------------------------------------------------------------- --}}
@section('main-section')
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ url('public/website_scripts/hamberger.js') }}"></script>
@endpush
