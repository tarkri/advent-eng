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
            <h2 class="page-header">Engineering Services</h2>

            <p class="lead">
                ADVENT provides a wide array of engineering services to support every phase of the "GEP Lifecycle" from
                planning for new products to retirement of equipment. These services include process, industrial, and
                automation engineering as well as design, construction, installation, and commissioning of cGMP
                facilities and process equipment used in the development and manufacture of biopharmaceutical drugs.
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