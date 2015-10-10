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
            <h3 class="page-header">Mechanical Engineering</h3>
            <ul class="list-group">
                <li class="list-group-item">Pressure vessel and piping stress analysis/qualification</li>
                <li class="list-group-item">Development of procedures, manuals and criteria documents</li>
                <li class="list-group-item">Pressure vessel and piping system design bases definition and loads
                    determination
                </li>
                <li class="list-group-item">Vessel and piping stress design/analysis for static and dynamic load
                    conditions
                </li>
                <li class="list-group-item">Detailed finite element analysis/qualification of equipment, components, and
                    pressure vessels
                </li>
                <li class="list-group-item">Qualification of pressure vessels, piping systems and pressure boundary
                    components in accordance with ANSI B31.1, B31.3, ASME B&PV Code, Sections III and VIII and/or
                    vendor-specified allowable stresses
                </li>
                <li class="list-group-item">Pressure vessel nozzle load qualification due to externally-applied piping
                    loads using WRC Bulletins 107 and 297 or finite element analysis
                </li>
                <li class="list-group-item">Static/dynamic analysis of mechanical components for inelastic material
                    behavior and other system nonlinearities (e.g. gaps, large displacements)
                </li>
                <li class="list-group-item">Underground piping qualification</li>
                <li class="list-group-item">Class 1 analysis and qualification – fatigue, stress and/or design reports
                </li>
                <li class="list-group-item">Experience-based seismic equipment qualification</li>
                <li class="list-group-item">Snubber velocity lock-up and drag force acceptance criteria</li>
                <li class="list-group-item">High temperature creep/fatigue analysis</li>
                <li class="list-group-item">Stress ratchet - ASME Section III, XIV-1400</li>
                <li class="list-group-item">Crack growth - ASME Section XI, Appendix A</li>
                <li class="list-group-item">HVAC Duct Qualification</li>
            </ul>

            <ul class="list-group">
                <li class="list-group-item active"><strong>HVAC Duct Qualification</strong></li>
                <li class="list-group-item">Qualification of ductwork in accordance with ASME/SMACNA requirements</li>
                <li class="list-group-item">Seismic qualification of valves, fans, and pumps</li>
                <li class="list-group-item">Finite element and/or effective beam theory modeling</li>
            </ul>

            <ul class="list-group">
                <li class="list-group-item active"><strong>Thermal Hydraulics</strong></li>
                <li class="list-group-item">Flow-induced vibration analysis</li>
                <li class="list-group-item">Flashing flow/cavitation determination</li>
                <li class="list-group-item">Analysis for vortex elimination in fluid storage tanks</li>
                <li class="list-group-item">Hydraulic components and equipment design</li>
                <li class="list-group-item">Containment pressurization analysis</li>
                <li class="list-group-item">Flooding analysis</li>
                <li class="list-group-item">Water hammer load development and forensic analysis</li>
                <li class="list-group-item">Safety and relief valve discharge load time history development</li>
                <li class="list-group-item">Pipe rupture (LOCA) thrust reaction and jet load time history development</li>
                <li class="list-group-item">Mark I loads development</li>
                <li class="list-group-item">Leak-before-break implementation</li>
            </ul>

            <ul class="list-group">
                <li class="list-group-item active"><strong>Heat Transfer</strong></li>
                <li class="list-group-item">Class 1 piping and component through-wall thermal stress determination</li>
                <li class="list-group-item">Temperature distribution determination in solids and fluids</li>
                <li class="list-group-item">Heat exchanger design and performance evaluation</li>
                <li class="list-group-item">Development of temperature time histories associated with plant loss of power</li>
                <li class="list-group-item">Cable trays, conduit, and electric motor overheating heat transfer analysis</li>
            </ul>
            <hr>
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