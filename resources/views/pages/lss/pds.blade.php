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
                has alliances with to provide the necessary development resources. ADVENT’s staff provides leadership
                and
                guidance to clients as their processes traverse technical challenges in an ever-changing regulatory
                environment.
            </p>

            <div class="clearfix"></div>
            <h3 class="page-header">Areas of Focus</h3>

            <div class="well">
                <p>
                    ADVENT focuses on two areas of Process/Product Development: Scale Up and Commercialization. In these
                    areas, ADVENT has supported range finding studies in cell culture, developed in-line buffer dilution
                    systems, and worked on formulations for sterile processing as well as analytical methods for
                    characterization and product release. ADVENT is very familiar with disposable component technologies
                    and has implemented sterility assurance for high viscosity product intermediates.
                </p>
            </div>
            <div class="page-breakout"
                 style="background:url({{ URL::asset('library/img/breakout-lss-page-2.jpg') }}) top center; background-size:cover;">
                <div class="col-md-12">
                    <br/>
                    <div class="well">
                        <strong>Scale Up</strong><br/>
                        ADVENT has provided development services for process transfer from small scale to commercial
                        scale. ADVENT has reviewed manufacturing processes and testing regimes to ensure they meet GMP
                        requirements during process implementation. From generating product requirements to establishing
                        "best practices" for Quality, ADVENT has assisted in executing successful scale-up of
                        manufacturing processes for several clients.
                    </div>
                    <div class="well">
                        <strong>Commercialization</strong><br/>
                        After "scale up" of the manufacturing process, ADVENT has assisted clients with the FDA’s New
                        Drug Application (NDA) process, the precursor to full commercialization of the drug. ADVENT has
                        partnered with clients to provide the FDA with the necessary NDA information to determine
                        "…Whether the methods used in manufacturing the drug and the controls used to maintain the
                        drug's quality are adequate to preserve the drug's identity, strength, quality, and purity…"
                    </div>
                </div>
            </div>
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