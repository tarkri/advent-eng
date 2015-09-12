@extends('layouts.master')

@section('content')

    <div class="page-banner"
         style="background:#112744">
        <div class="container">
            <h1 class="page-header">Careers</h1>
        </div>
    </div>

    <div class="container">

        <div class="col-md-9 pull-right">
            <h2 class="page-header">Our Culture</h2>

            <p class="lead">
                ADVENT is always searching for talented individuals who can contribute to its mission of providing its
                clients with world-class engineering and consulting services. Whether you're just beginning your career
                or looking to make a mid-career move, you should explore what ADVENT has to offer.
            </p>

            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 pull-left">
            <br/><br/>
            @include('pages.careers.partials.side-navigation')
        </div>
    </div>

@stop

@section('scripts')

@stop