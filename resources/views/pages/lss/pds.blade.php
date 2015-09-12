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
            <h2 class="page-header">Process Development Services</h2>

            <p class="lead">
                ADVENT’s process development experience comes from supporting the cGMP manufacturing of bulk drug
                substances (BDS) for many clients. Over the years, our staff has developed many processes, several of
                which served as benchmarks for other development projects in our clients’ respective pipelines. ADVENT
                has alliances with to provide the necessary development resources. ADVENT’s staff provides leadership and
                guidance to clients as their processes traverse technical challenges in an ever-changing regulatory
                environment.
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