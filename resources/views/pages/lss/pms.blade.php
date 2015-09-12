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
            <h2 class="page-header">Project Management Services</h2>

            <p class="lead">
                For the past 25 years, ADVENT has executed and supported projects. We offer integrated project
                management services and methodology, supported and reflected by our experience and policies. We draw on
                our extensive experience in delivering project services to the Life Science industry. Our project
                managers are experienced project engineers that have decided to pursue project management career path
                and have both the technical and leadership know how to help clarify goals and requirements for complex
                projects.
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