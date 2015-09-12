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
            <h2 class="page-header">Integrated Head Assembly</h2>

            <p class="lead">
                ADVENT has designed advanced optimized reactor head components for new as well as existing nuclear
                plants within and outside the USA. Plant outage time and dose savings are achieved by a reduction in
                downtime, manpower, and radiation doses, and by an increase in reliability.
                <br/><br/>
                ADVENT’s effort to design reactor vessel head appendages to promote savings can be applied to all
                existing Westinghouse, Combustion Engineering, and Babcock & Wilcox based Pressurized Water Reactor
                (PWR) operating plants. The basic concept of integrating all the removable upper reactor vessel head
                components into one removable structure is the object of these designs. For PWR operating plants, the
                objective is to substitute the massive concrete missile shield with a compact integral steel missile
                shield, to substitute the large cooling ducting and fans with a compact integral set of ducts and fans
                and to provide a convenient place to disconnect and reconnect the control rod drive mechanism (CRDM)
                cable assemblies. In addition, the design objective is to incorporate the lifting tripod as a permanent
                attachment to the top of the assembly.
                <br/><br/>
                To minimize the operational steps, down- time, radiation exposure and ultimately the outage costs,
                various new designs have been proposed by different reactor vessel manufacturers. One of the new designs
                includes developing an integrated head assembly in a modular form that can be detached from the reactor
                vessel in much fewer steps than identified above.
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