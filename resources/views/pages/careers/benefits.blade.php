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
            <h2 class="page-header">Benefits</h2>

            <p class="lead">

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