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
            <h2 class="page-header">Training Products</h2>

            <p class="lead">
                ADVENT has developed several training modules (see below) filled with cogent, up-to-date information to
                enhance the knowledge base of personnel involved with validation, qualification, engineering, and
                manufacturing. Please feel free to enter your contact information in the form below and our staff will
                respond with additional information in a timely manner. For immediate assistance in arranging a training
                session, please go to our Contact page to find the telephone number of our nearest location.
            </p>

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="http://placehold.it/640x300" alt="">

                        <div class="caption">
                            <h3>Introduction to Bio-pharma Industry</h3>

                            <p>This module provides an introduction to the Bio Pharmaceutical Industry. A basic overview
                                of the process of manufacturing a bulk drug substance & drug product will be provided.
                                It highlights the diverse business models that exist in the industry including: Large
                                Scale Manufacturing, Basic Research, Virtual Enterprises, Contract Manufacturing
                                Organizations, Contract Research Organizations, the role of Universities, and
                                Consulting. The role of the FDA and similar regulatory agencies is discussed along with
                                the various industry professional organizations and their role. The module also covers
                                unique aspects on Good Manufacturing Practice, and Good Laboratory Practice. Finally the
                                module will discuss the current industry trends in terms of manufacturing migration,
                                international equipment vendors, and the latest FDA positions and rulings.
                                <br><br>
                                Target Audience: Professionals looking to get a basic understanding of the biologics
                                industry in terms of looking for new opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="http://placehold.it/640x300" alt="">

                        <div class="caption">
                            <h3>Lyophilization for Biologics</h3>

                            <p>This module, provides the basic physicochemical foundations of lyophilization and the
                                engineering aspects of an industrial lyophilization process. Most industrial
                                freeze-drying used to manufacture stable drug products, is accomplished using four (4)
                                sub-processes: Refrigeration, Vacuum, Drying (Primary & Secondary), & Final Stoppering.
                                The module discusses each of these sub-processes in detail and demonstrates their
                                sequence in an industrial lyophilizer to produce an acceptable final product. The module
                                addresses steps taken to qualify a typical industrial lyophilizer from installation
                                (IQ), operation (OQ) through Performance (PQ). The module discusses sterilization and
                                cleaning processes used to maintain the lyophilizer in a validated state during
                                production. After completing this module, the trainee should have a basic understanding
                                of lyophilization as well as be able to participate in a team for operation and
                                qualification of a cGMP Lyophilizer.
                                <br><br>
                                Target Audience: Process, plant and project engineering, Operations/Manufacturing and
                                Quality professionals attempting to develop a working understanding of the freeze-drying
                                of drug products</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="http://placehold.it/640x300" alt="">

                        <div class="caption">
                            <h3>Integrated Commissioning & Qualification</h3>

                            <p>This module provides personnel a working understanding to completing commissioning and
                                qualification of cGMP process equipment/utilities.
                            </p>
                            <ul>
                                <li>Basics of CQV: Asset Lifecycle: Plan -> Design -> Build -> Install -> Qualify -> Use
                                    ->
                                    Maintain -> Divest. Validation Lifecycle: V-Model; GEP/GMP
                                </li>
                                <li>Design Documentation & Traceability: Content and Need for: Requirements
                                    (Process/System)
                                    Specifications, Functional Specifications, Drawings (P&IDs), Detailed Design,
                                    Receipt
                                    Verification
                                </li>
                                <li>Risk Management: Develop System Impact, Process Hazard Analysis, Failure Modes
                                    Effects
                                    Criticality Analysis for cGMP Processes
                                </li>
                                <li>Testing: Master Plans, Factory Acceptance Testing; Site Acceptance Testing,
                                    Performance
                                    Testing, Change Control/Management
                                </li>
                                <li>Case Studies: Provide successful examples for cGMP process and utilities</li>
                            </ul>
                            <p>Target Audience: Engineering, Quality and Operations personnel</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="http://placehold.it/640x300" alt="">

                        <div class="caption">
                            <h3>cGMP Sterilization</h3>

                            <p>Sterilization is used to render process equipment used in cGMP manufacturing free of
                                viable organisms. This module focuses on steam sterilization with a brief overview of
                                other sterilization processes, i.e. Dry heat, Ethylene Oxide gas, Vaporized Hydrogen
                                Peroxide, High energy radiation (Gamma and Electron beam). The theoretical discussion on
                                Sterility Assurance limits, D value, Z value, Biological indicators, Lethality
                                calculations, “Cold spots” is combined with achieving successful daily sterilization.
                                The module provides steps taken to complete the IQ, OQ, and PQ of an Industrial Steam
                                Sterilizer. Guidelines are provided to develop and validate sterilization processes for
                                cGMP manufacturing process equipment e.g. Fermentors, Vessels, Lyophilizers, In-line Air
                                filters, Transfer lines. After completing this module, the trainee should have a basic
                                understanding of steam sterilization as well as be able to participate in a team for
                                operation and qualification of a cGMP Autoclave.
                                <br><br>
                                Target Audience: Process, plant and project engineering, Operations/Manufacturing and
                                Quality professionals attempting to develop a working understanding of steam
                                sterilization of process equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="http://placehold.it/640x300" alt="">

                        <div class="caption">
                            <h3>cGMP Clean-in-Place (CIP) Development</h3>

                            <p>This module provides engineering personnel with an overview of key Clean In Place (CIP)
                                concepts required for successful cleaning of Process Equipment.
                            </p>
                            <ul>
                                <li>Mechanisms of Cleaning: (a)Soluble, Particulate, Reactive soils (b)Simple models of
                                    cleaning (c)Rules of thumb
                                </li>
                                <li>Equipment & Technology: Flow control, Temperature control, Path control</li>
                                <li>Essential elements for successful CIP: Cleaning Agents (WFI, Caustic, Acid,
                                    Detergents,
                                    Bleaches), Flow, Coverage (spray balls), Concentration, Temperature, Time, Surface
                                    cleanability
                                </li>
                                <li>Cycle Configuration & Evaluation: Flow/Return flow, Tank level, timers,Reviewing
                                    trends
                                    and reports, cleaning validation response
                                </li>
                                <li>Troubleshooting: Responding to Alarms and Common Mechanical Failure</li>
                            </ul>
                            <p>Target Audience: Process, plant and project engineering, professionals attempting to
                                develop a CIP cycles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="http://placehold.it/640x300" alt="">

                        <div class="caption">
                            <h3>Quality in Bio-pharma Automation</h3>

                            <p>This module provides Quality insight of automation systems used within the bio-pharma
                                manufacturing industry including Building Automation Systems (BAS), Distributed Control
                                Systems (DCS), Programmable Logic Controllers (PLCs), Information Management Systems.
                            </p>
                            <ul>
                                <li>Introduction to Automation Systems (PLCs, DCS, Workstations, BAS, IS): General
                                    Descriptions, Applications & Architecture, Components, Networks & Software
                                </li>
                                <li>Lifecycle Approach: Discuss: Models, Specifications, Testing, CFR: 200.11, 058,
                                    820
                                </li>
                                <li>Risk Management: Develop System Impact, Criticality Analysis, Cost Controls</li>
                                <li>Testing: Master Plans, Factory/Site Acceptance, Change Control/Management,
                                    Electronic
                                    Records & Signatures
                                </li>
                                <li>Case Studies: Provide successful examples for qualifying cGMP automation</li>
                            </ul>
                            <p>Target Audience: Quality Associates & Managers, Validation Specialists & Managers, QA
                                Auditors, Production Supervisors.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="http://placehold.it/640x300" alt="">

                        <div class="caption">
                            <h3>Clean Utilities in cGMP Operations</h3>

                            <p>This module provides experienced mechanics with an overview of key maintenance and
                                troubleshooting concepts associated with Clean Utilities (e.g. Clean Steam,
                                Water-for-injection, Compressed Air).
                                </p>
                                <ul>
                                    <li>Introduction to Clean Utilities: Unit Operations for Clean Steam, WFI, Purified Water,
                                    Clean Gases</li>
                                    <li>Routine Operation: Process Parameters, Alarms, Sanitization, Sampling (Quality Control)</li>
                                    <li>Risk Management: Develop System Impact, Process Hazard Analysis, Failure Modes Effects
                                    Criticality Analysis for cGMP Processes</li>
                                    <li>Maintenance & Calibration: Procedures, Tasks and Work Instructions, Frequencies,
                                    Criticality, System Breach, Records/Documentation</li>
                                    <li>Troubleshooting: Common Failures, Response Times & Impact</li>
                                    <li>Case Studies: Provide successful examples for maintaining cGMP utilities</li>
                                </ul>
                                <p>Target Audience: Facility Services – Maintenance and Instrumentation Technicians.</p>
                        </div>
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