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
            <h2 class="page-header">Engineering Services</h2>

            <p class="lead">
                ADVENT's services are based on our expertise in structural and mechanical engineering applications in
                nuclear facility engineering and can be broadly classified into the following sections:
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