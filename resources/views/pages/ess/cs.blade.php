@extends('layouts.master')

@section('content')

    <div class="page-banner"
         style="background:url({{ URL::to('library/img/banner-ess-page.jpg') }}) center center; background-size:cover">
        <div class="container">
            <h1 class="page-header">Energy Sector Services</h1>
        </div>
    </div>

    <div class="container">

        <div class="col-md-9 pull-right">
            <h2 class="page-header">Consulting Services</h2>

            <p class="lead">
                Advent provides a wide range of consulting services based on our expertise in the nuclear industry. A
                summary of the services is provided below:
            </p>

            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 pull-left">
            <br/><br/>
            @include('pages.ess.partials.side-navigation')
        </div>
    </div>

@stop

@section('scripts')

@stop