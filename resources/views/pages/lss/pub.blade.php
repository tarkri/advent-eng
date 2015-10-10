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
            <h2 class="page-header">Publications</h2>

            <p class="lead">
                ADVENT’s professionals have authored several technical papers and articles (see below) that address
                common situations, issues, and problems with innovative ideas and solutions drawn from their
                wide-ranging experience in engineering, manufacturing, process development, and CQV execution. Please
                feel free to enter your contact information in the form below and our staff will respond with additional
                information in a timely manner. For immediate assistance in obtaining a paper or article, please go to
                our Contact page to find the telephone number of our nearest location.
            </p>
            <hr>
            <div class="clearfix"></div>
            <div class="list-group">
                <div class="list-group-item">"Approach to Equipment Qualification for Clinical Manufacturing", Internal White Paper, ADVENT
                Engineering Services, San Ramon, CA.</div>

                <div class="list-group-item">"Application of Risk Assessment to Minimizing Qualification Costs for Temperature Controlled
                Environments", Internal White Paper, ADVENT Engineering Services, San Ramon, CA.</div>

                <div class="list-group-item">"Reverse Engineering: A First-to-Market Means to Compliance, ADVENT Engineering Services, RTP, NC.</div>

                <div class="list-group-item">"Scientific Basis for CIP Design" Internal White Paper, ADVENT Engineering Services, RTP, NC.</div>

                <div class="list-group-item">"Validation Program for Automation, Equipment and Critical Utilities in large scale biologics contract
                manufacturing", August 18, 2001, Dendreon Corporation, Seattle, Washington.</div>

                <div class="list-group-item">"PDA Industry Guidance Document on Validation relating to Maintaining the Quality of
                Temperature-Sensitive Medicinal Products through the Transportation Environment", PDA Technical Report
                #39, September, 2005, Bethesda, MD.</div>

                <div class="list-group-item">"System Suitability in the Quality Assessment of a Cell-Based Bioassay", 9th Symposium on the Interface
                of Regulatory and Analytical Sciences for Biotechnology Health Products, Jan 09 – 13, 2005, Washington
                D.C.</div>

                <div class="list-group-item">"Fundamentals of Lyophilization Technology" for OBA Workforce for technical professionals</div>

                <div class="list-group-item">"The Real World of Project Management (Part 3 of 6): The Project Manager’s Playbook-Commissioning &
                Qualification" ISPE Community of Practice, ISPE Annual meeting, November 2009, San Diego, CA</div>

                <div class="list-group-item">"The Real World of Project Management (Part 2 of 6): The Project Manager’s Playbook-Process Design" ISPE
                Community of Practice, ISPE Annual meeting, November 2009, San Diego, CA</div>

                <div class="list-group-item">"Case Study: Downstream Process Development Roadmap for a Non mAb Target Protein", IBC Preclinical Scale
                Bioprocessing, Strategies to Improve the Speed, Quality and Cost of Early Bioprocess Development,
                November 1-3, 2010, Boston, MA.</div>

                <div class="list-group-item">"Sanitary Design Considerations for Lyophilizers", Poster Presentation, ISPE Annual Meeting, , November,
                2011, Grapevine, Texas.</div>

                <div class="list-group-item">"Spray Device Design Considerations for Cleaning of Bioprocess Equipment", Poster Presentation, ISPE
                Annual Meeting, November, 2011, Grapevine Texas.</div>

                <div class="list-group-item">"Heat Transfer Technologies for Cold Processing in an Ambient Environment", Poster Presentation, ISPE
                Annual Meeting, November, 2012, San Francisco, CA.</div>
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