@extends('layouts.master')

@section('content')

	<div class="page-banner" style="background:url({{ URL::to('library/img/banner-lss-page.jpg') }}) center center; background-size:cover">
		<div class="container">
			<h1 class="page-header">Life Sciences Services</h1>
		</div>
	</div>

	<div class="container">
		
		<div class="col-md-9 pull-right">
			<h2 class="page-header">Qualification and Validation Services</h2>
			<p class="lead">
				Though ADVENT has always provided Qualification and Validation services in accordance with client SOPs and in full compliance with cGMP standards, ADVENT has become well-versed in developing and implementing risk-based approaches to process validation. Analogous to Good Engineering Practices (GEP) for process equipment, risk-based validation is a "lifecycle" activity synchronized with drug production activities, not a "one-time" event to be performed prior to production.
			</p>
			<div class="clearfix"></div>
			<h3 class="page-header">Areas of Focus</h3>
			<p>ADVENT focuses on three areas of Qualification and Validation: Master Planning, Acceptance Criteria Development, and Protocol Execution. ADVENT has worked with clients to create comprehensive Validation Master Plans (VMP) for sites, projects, and specific unit operations. ADVENT has provided clients with technical expertise as they develop Test Procedures and Acceptance Criteria for new drug products. ADVENT is very familiar with using electronic document management systems from such firms as ValGenesis to manage validation documents and to facilitate efficient review, approval, and execution of protocols.</p><br />
			<div class="page-breakout" style="background:url({{ URL::asset('library/img/breakout-lss-page-2.jpg') }}) top center; background-size:cover;">
				<div class="col-md-12">
					<br />
					<div class="well">
						<strong>Validation Master Planning & Management</strong><br />
						In the presentation of "The Real World of Project Management (Part 3 of 6): The Project Manager’s Playbook - Commissioning and Qualification" ISPE Annual Meeting, November 2009, ADVENT presented CQV management tools and keys to effectively leverage commissioning documents to satisfy qualification protocol requirements. Advent has extensive experience in developing Master Plans for Validation as well as for Technology Transfer from one site to another.
					</div>
					<div class="well">
						<strong>Test Procedures and Acceptance Criteria Development</strong><br />
						The FDA has provided guidelines for the setting and justifying of acceptance criteria as well as the selection of test procedures for new drug substances. ADVENT has supported clients’ efforts to adhere to these guidelines. From justifying "periodic or skip testing" to selecting regional "pharmacopeial tests and acceptance criteria" to using "evolving technologies" for added Quality Assurance, ADVENT has the expertise to provide leadership during this critical step in bringing a new drug product to market.
					</div>
					<div class="well">
						<strong>Commissioning, Qualification, and Validation (CQV) Protocol Execution</strong><br />
						ADVENT staunchly supports the evolution in CQV methodology from the traditional Installation, Operational, and Performance Qualification (IOPQ) using the "V-model" to the science- and risk-based approach centering on the implementation of the ASTM E-2500 Standard. The emerging paradigm aligns with ADVENT’s philosophy that a superior aptitude in engineering is essential in providing value-added CQV services. ADVENT’s staff includes subject matter experts (SME) in upstream and downstream processes as well as fill-finish equipment and practices.
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-3 pull-left">
			<br /><br />
			@include('pages.lss.partials.side-navigation')
		</div>
	</div>
	
@stop

@section('scripts')

@stop