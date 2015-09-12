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
            <h2 class="page-header">Publications</h2>

            <p class="lead">
                ADVENT’s professionals have authored several technical papers and articles (see below) that address
                common situations, issues, and problems with innovative ideas and solutions drawn from their
                wide-ranging experience in engineering, manufacturing, process development, and CQV execution. Please
                feel free to enter your contact information in the form below and our staff will respond with additional
                information in a timely manner. For immediate assistance in obtaining a paper or article, please go to
                our Contact page to find the telephone number of our nearest location.
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