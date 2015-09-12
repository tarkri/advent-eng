@extends('layouts.master')

@section('content')

    <div class="page-banner"
         style="background:url({{ URL::to('library/img/banner-lss-page.jpg') }}) center center; background-size:cover">
        <div class="container">
            <h1 class="page-header">Life Sciences Services</h1>
        </div>
    </div>

    <div class="container">

        <div class="col-md-9 pull-right">
            <h2 class="page-header">Training Products</h2>

            <p class="lead">
                ADVENT has developed several training modules (see below) filled with cogent, up-to-date information to
                enhance the knowledge base of personnel involved with validation, qualification, engineering, and
                manufacturing. Please feel free to enter your contact information in the form below and our staff will
                respond with additional information in a timely manner. For immediate assistance in arranging a training
                session, please go to our Contact page to find the telephone number of our nearest location.
            </p>

            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 pull-left">
            <br/><br/>
            @include('pages.lss.partials.side-navigation')
        </div>
    </div>

@stop

@section('scripts')

@stop