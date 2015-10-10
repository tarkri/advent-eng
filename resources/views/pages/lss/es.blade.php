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
            <hr>
            <h3 class="page-header">Good Engineering Practices</h3>

            <div class="clearfix"></div>
            {{-- Good Engineering Practices --}}
            <div class="row">
                <div class="col-md-8">
                    <img src="http://placehold.it/640x280" style="width:100%" alt="">
                    <hr>
                    <p>ADVENT's Life Sciences teams have the process, automation, and industrial engineering resources
                        and knowledge to support a client's GEP Lifecycle approach to capital projects for manufacturing
                        facilities, systems, and equipment as well as manufacturing process improvement initiatives for
                        existing facilities and systems. From planning to execution to verification and beyond, the Life
                        Sciences teams bring expertise and experience in solving the challenges of each Lifecycle
                        phase.</p>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h5>"...Good Engineering Practices (GEP) underpin activities in the day-to-day operations
                                and
                                forward planning of a pharmaceutical business. The adoption of this methodology leads to
                                a balance of expenditure and activity..." <br>
                                <small>International Society of Pharmaceutical Engineers (ISPE), &copy;</small>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4 class="page-header">Planning and Design</h4>

                    <div class="media-object">
                        <div class="col-md-3">
                            <img src="http://placehold.it/480" style="width:100%" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="media-body">
                                <p>Planning and Design Phase: 1) describe business objectives; 2) delineate the "user
                                    requirements" for the facility and/or systems; 3) assess the capabilities and
                                    procedures of design and construction teams; and 4) develop schedule and budget to
                                    execute project; 5) generate BOD with specific requirements; 6) engineer preliminary
                                    design drawings; 7) establish system and equipment plans; 8) create construction
                                    and/or fabrication specifications for the facility, systems, and/or specific
                                    equipment units; and 9) procure long-lead materials, systems, equipment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>

                    <h4 class="page-header">Construction and Start-up</h4>

                    <div class="media-object">
                        <div class="col-md-3">
                            <img src="http://placehold.it/480" style="width:100%" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="media-body">
                                <p>Construction and Start-up Phase: 1) review design documents to ensure they meet user
                                    requirements and business objectives; 2) develop construction documents; 3) examine
                                    submittal information, shop or fabrication drawings; 4) respond to Requests for
                                    Information (RFI’s); 5) monitor equipment fabrication and facility construction; 6)
                                    maintain Turnover Pkgs. (TOP) of supplier and vendor fabrication documents; 7)
                                    execute Factory Acceptance Tests (FAT); and 8) following installation, execute
                                    Start-up plan and Site Acceptance Tests (SAT) plan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <hr>

                    <h4 class="page-header">Qualification and Validation</h4>

                    <div class="media-object">
                        <div class="col-md-3">
                            <img src="http://placehold.it/480" style="width:100%" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="media-body">
                                <p>Qualification and Validation Phase: 1) verify and record performance of systems and
                                    equipment under commissioning plan; 2) calibrate instruments and backup automation
                                    software; 3) review test protocols for systems to be validated in accordance with
                                    impact assessments; 4) leverage records from commissioning plan for protocols; 5)
                                    execute test protocols for IOQ and PQ of validated systems; 6) ensure availability
                                    or inventory of required spare parts and change parts; and 7) generate SOPs for
                                    operating and maintaining systems and equipment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <hr>

                    <h4 class="page-header">Operation and Maintenance</h4>

                    <div class="media-object">
                        <div class="col-md-3">
                            <img src="http://placehold.it/480" style="width:100%" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="media-body">
                                <p>Operation and Maintenance Phase: 1) manufacture product compliant with cGMP
                                    requirements; 2) manage engineering changes to systems and equipment to improve
                                    performance; 3) develop process models to simulate different operating scenarios; 4)
                                    analyze operational efficiency (OE) using statistical tools (e.g. Six Sigma); 5)
                                    perform preventative maintenance tasks on systems and equipment; and 6) ensure the
                                    effectiveness of corrective and preventative actions (CAPA).</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <hr>

                    <h4 class="page-header">Retirement and Salvage</h4>

                    <div class="media-object">
                        <div class="col-md-3">
                            <img src="http://placehold.it/480" style="width:100%" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="media-body">
                                <p>Retirement and Salvage Phase: 1) evaluate costs of operating and maintaining older
                                    systems/equipment; 2) determine impact of inconsistent equipment performance on
                                    validated status; 3) plan to replace underperforming equipment to maintain
                                    operation; 4) update operational and validated status of systems or equipment to be
                                    replaced, retired or salvaged; 5) prepare system or equipment for decommissioning;
                                    6) salvage, transfer, and/or store decommissioned system; and 7) archive
                                    documentation of system following decommissioning.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <hr>
                </div>
            </div>
            {{-- Process Engineering --}}
            <div class="row">
                <div class="col-md-12">
                    <h3 class="page-header">Process Engineering</h3>

                    <p>
                        The process engineering expertise of ADVENT is expressed through its capability to develop high-
                        quality documents to assist clients in executing their projects. Using the GEP Lifecycle phases
                        as an outline, process engineering can take a client’s process description and develop other
                        planning phase documents. As the project proceeds, ADVENT can generate detailed documents to
                        support process equipment procurement and facility programming during the design phase. Process
                        engineers often don hard hats and steel-toed shoes to become "system owners" or project
                        engineers that provide real-time solutions on-site during the construction and start-up phase.
                        After the Qualification and Validation phase, ADVENT’s process engineering experience can
                        support a client during the Operation and Maintenance phase with developing SOP’s to operate,
                        clean, and store systems such as fermentors, columns, fillers, isolators, lyophilizers, and
                        autoclaves.
                    </p>

                    <div class="clearfix"></div>
                    <h4 class="page-header">Planning and Design</h4>

                    <div class="media-object">
                        <div class="col-md-3">
                            <img src="http://placehold.it/480" style="width:100%" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="media-body">
                                <p>ADVENT’s staff have performed a variety of tasks associated with the Planning and
                                    Design phases of projects including: development of Basis of Design (BOD) and User
                                    Requirements Specifications (URS) for facilities and systems; execution of Supplier
                                    Audits/Assessments of equipment makers; as well as generation and review of Design
                                    documents from facility programming drawings through equipment piping &
                                    instrumentation diagrams (P&ID).</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>

                    <h4 class="page-header">Construction and Start-up</h4>

                    <div class="media-object">
                        <div class="col-md-3">
                            <img src="http://placehold.it/480" style="width:100%" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="media-body">
                                <p>To augment the Construction Management (CM) teams of clients, ADVENT has experienced
                                    "project engineers" to 1) assess "impact" (Direct, Indirect, No) of systems on
                                    product quality; 2) supervise equipment and system procurement; 3) monitor the
                                    fabrication of systems and verify/execute Factory Acceptance Tests (FAT); 4) manage
                                    system deliveries and installations; 5) oversee system start-up, "shakedown", and
                                    Site Acceptance Tests (SAT).</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>

                    <h4 class="page-header">Operation and Maintenance</h4>

                    <div class="media-object">
                        <div class="col-md-3">
                            <img src="http://placehold.it/480" style="width:100%" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="media-body">
                                <p>ADVENT’s expertise extends along the GEP "lifecycle" from executing CQV to serving
                                    Operation and Maintenance activities for manufacturing and facilities systems. From
                                    supporting Corrective and Preventative Action (CAPA) programs to developing Standard
                                    Operating Procedures (SOP) for Preventative Maintenance, ADVENT staff bring a wealth
                                    of "real world" solutions to enhance change management processes as well as to
                                    improve the operational efficiency of manufacturing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                </div>
            </div>
            {{-- Automation Engineering --}}
            <div class="row">
                <h3 class="page-header">Automation Engineering</h3>
                <img src="http://placehold.it/640x300" style="width:100%" alt="">
                <hr>
                <p>ADVENT provides consulting services for a number of automation systems and platforms. ADVENT has
                    served as temporary management of automation and computer validation groups and spear-headed
                    initiatives for audit preparation and general automation enhancement. ADVENT’s services include:
                    User Requirement Specifications (URS) and Functional Specifications (FS) and Software Design
                    Documents (SDD) as well as configuration and commissioning of computer systems. ADVENT's experiences
                    in computer validation include test plan development and execution for software and associated
                    hardware/equipment.</p>
                <br><br>
                <h4>Our experience includes the following:</h4>

                <div class="list-group">
                    <div class="list-group-item">Custom Off The Shelf (COTS) Software (MP2, CALMAN, etc.)</div>
                    <div class="list-group-item">PLCs (Rockwell, Siemens)</div>
                    <div class="list-group-item">PLC-PC (Wonderware, Intellution, Unicorn)</div>
                    <div class="list-group-item">SCADA</div>
                    <div class="list-group-item">Patented PLC Security Module Technology (Alan Bradley)</div>
                    <div class="list-group-item">Microprocessor Controllers</div>
                    <div class="list-group-item">Taylor Control Logic (TCLs)</div>
                    <div class="list-group-item">BAS/DCS Systems</div>
                    <div class="list-group-item">BMS (Siemens, Johnson Controls, Andover, ThermoSys.)</div>
                    <div class="list-group-item">CFR Part 11 (Computer Validation Master Plans/ Gap Analysis)</div>
                    <div class="list-group-item">Servers/Networks/Data-highways/RIOs/Virtual IOs</div>
                </div>
            </div>
            {{-- Equipment --}}
            <div class="row">
                <h3 class="page-header">Equipment</h3>

                <p>Process equipment is at the heart of every biopharmaceutical manufacturing or development facility.
                    ADVENT’s process and industrial engineering expertise includes a fundamental understanding of
                    biopharmaceutical manufacturing equipment found in all three primary functions: cell culture,
                    purification, and fill-finish. ADVENT’s experience traverses the process equipment landscape from
                    designing 25,000-liter bioreactors to trouble-shooting vaporized hydrogen peroxide (VHP)
                    sterilization processes for isolated filling lines. ADVENT has also supported clients with process
                    equipment needs in traditional pharmaceutical manufacturing for vaccines, oral solid dosages, as
                    well as gels and creams. Clients world-wide have relied on ADVENT to support their process equipment
                    projects at all phases of the GEP Lifecycle.</p>

                <div class="clearfix"></div>
                <h4 class="page-header">Fermentation and Cell Culture</h4>

                <div class="media-object">
                    <div class="col-md-3">
                        <img src="http://placehold.it/480" style="width:100%" alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="media-body">
                            <p>ADVENT has vast experience in supporting biologics development and manufacturing clients’
                                upstream process equipment at every phase of the GEP Lifecycle. Among many projects for
                                cGMP
                                as well as R&D operations, Advent has supported the conceptual design (e.g. URS, PFD) of
                                cell culture bioreactors employing disposable technology; the preliminary design (e.g.
                                P&ID,
                                FRS) of fixed vessel microbial fermentors; the construction, start-up, and commissioning
                                of
                                other upstream process equipment such as media preparation tanks, centrifuges, and
                                homogenizers.</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>

                <h4 class="page-header">Purification and Viral Inactivation</h4>

                <div class="media-object">
                    <div class="col-md-3">
                        <img src="http://placehold.it/480" style="width:100%" alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="media-body">
                            <p>As harvested cell cultures achieve higher and higher "titers", biologics manufacturing
                                clients must explore innovative designs and operation procedures for downstream process
                                equipment. ADVENT’s expertise has grown in lock step with this trend. ADVENT has studied
                                equipment and process requirements for performing purification steps in ambient
                                temperature
                                environments, executed FAT of traditional, steel chromatography columns as well as
                                developed
                                designs for buffer preparation using disposable technology and
                                Ultrafiltration/Diafiltration
                                (UF/DF) skids using Tangential Flow Filtration (TFF).</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>

                <h4 class="page-header">Fill-Finish and Packaging</h4>

                <div class="media-object">
                    <div class="col-md-3">
                        <img src="http://placehold.it/480" style="width:100%" alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="media-body">
                            <p>Fill-finish equipment manufacturers have made significant improvements in the aseptic
                                capability and operational proficiency of their equipment. By working with clients on
                                their
                                filling line projects for the last 20 years, ADVENT’s engineers have observed and
                                assisted
                                in the development of these advancements while making significant contributions during
                                the
                                installation, start-up, and commissioning of filling lines, especially those employing
                                isolators. ADVENT has experience with fillers of vials, syringes, bottles, and airless
                                dispensers as well as particular expertise in lyophilization or freeze-drying
                                equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>

                <h4 class="page-header">Clean Utilities and Manufacturing Support</h4>

                <div class="media-object">
                    <div class="col-md-3">
                        <img src="http://placehold.it/480" style="width:100%" alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="media-body">
                            <p>Clean utilities systems and manufacturing support equipment are the behind-the-scenes
                                workhorses of biopharmaceutical manufacturing. ADVENT has performed all manner of
                                engineering tasks from overseeing the passivation of equipment/piping to developing
                                fabrication specifications to assessing the capabilities of equipment suppliers for
                                every
                                utility and support system required for producing and developing biopharmaceuticals
                                including WFI Distillation Systems (Multi-effect, Vapor Compression), Pure/Clean Steam
                                Generators, Clean-In-Place Systems (Stand-alone, Network), Autoclaves/Steam Sterilizers,
                                and
                                Parts Washers.</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>
            </div>
            {{-- Facilities --}}
            <div class="row">
                <h3 class="page-header">Facilities</h3>

                <p>Biologics and pharmaceutical drugs are vital components of today's healthcare system. The facilities
                    that house the manufacturing and research operations of clients are vital components of their
                    business. ADVENT has assisted clients in supporting the lifecycles of these facilities including:
                    major renovations and remodels of existing buildings, re-classification of GMP areas following
                    extended shutdown periods, as well as planning and conceptual designing of next generation
                    facilities. Whether starting up a state-of-the-art multi-line fill-finish facility with Class A
                    environments or drawing up preliminary building plans for a research and development facility,
                    ADVENT has the resources and experience to support the engineering tasks required by clients during
                    the lifecycle of their facilities.</p>

                <hr>
                <h4>Bulk Drug Substance (BDS) Manufacturing</h4>

                <p>Though all bulk drug substance (BDS) production must adhere to and promote Good Manufacturing
                    Practices (GMP), the facilities that house these operations are varied in technology and complexity.
                    From flu vaccine makers using fertilized chicken eggs in incubators to the producers of monoclonal
                    antibodies (mAb) using mammalian cells in stainless steel bioreactors, ADVENT has assisted a number
                    of clients in planning, designing, building, starting up, and commissioning the full spectrum of BDS
                    manufacturing facilities under cGMP compliance.</p>

                <h4>Fill-Finish (Parenteral) Manufacturing</h4>

                <p>Parenteral manufacturing facilities producing drug products (DP) requires stringent levels of
                    environmental controls to provide an environment that can support aseptic processing. ADVENT has
                    experience in the design and startup of classified manufacturing environments. ADVENT understands
                    material, personnel, and equipment flows that promote good manufacturing practice and reduces the
                    opportunity for cross-contamination. ADVENT has experience specifying environmental and HVAC
                    performance requirements to meet ISO classifications. ADVENT is familiar with both isolator and
                    barrier technology to produce a Class A environment suitable for filling parenteral drug
                    products.</p>

                <h4>Drug Research and Development</h4>

                <p>Facilities designed for drug research and development (R&D) requires flexibility along with the
                    abiity to control the risk of environmental contamination. It is common for example to segregate
                    areas as a control strategy to preserve biological identity and prevent cross-contamination. The
                    flexibility demands of an R&D facility are inherently suited for single use technology applications.
                    ADVENT has experience providing complete facility layout and design for state-of-the-art R&D
                    biologics facility with accommodation for both small-scale and clinical manufacturing.</p>
            </div>
        </div>

        <div class="col-md-3 pull-left">
            <br/><br/>
            @include('pages.lss.partials.side-navigation')
        </div>
    </div>

@stop

@section('scripts')

@stop