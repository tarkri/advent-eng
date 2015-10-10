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

            <h3 class="page-header">Areas of Experience</h3>

            <p>ADVENT can develop plans and "road maps" to clearly define project objectives, goals, and timelines as
                well as "key performance indicators" (KPI) that provide real-time measurements of overall project
                success in managing risk while achieving the aforementioned goals and objectives within the desired
                timelines. Below are some of the areas that ADVENT Project Managers have supported for our clients:</p>

            <div class="list-group">
                <div class="list-group-item col-md-6">Manufacturing Technology Transfer from site to site</div>
                <div class="list-group-item col-md-6">Regulatory Submission and Compliance</div>
                <div class="list-group-item col-md-6">Product Launch Readiness and Commercialization</div>
                <div class="list-group-item col-md-6">Supply Chain and Manufacturing Optimization</div>
                <div class="list-group-item col-md-6">Quality Assurance and Quality Control</div>
                <div class="list-group-item col-md-6">Business Process Improvement</div>
                <div class="list-group-item col-md-6">Capital Expenditure Planning and Execution</div>
                <div class="list-group-item col-md-6">Product and Technology Development</div>
                <div class="list-group-item col-md-6">Project Portfolio and Resource Planning</div>
                <div class="list-group-item col-md-6">Product and Facility Lifecycle Management</div>
            </div>

        </div>
        <div class="col-md-3 pull-left">
            <br/><br/>
            @include('pages.lss.partials.side-navigation')
        </div>
    </div>

@stop

@section('scripts')

@stop