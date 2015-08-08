@extends('layouts.master')

@section('content')

	<div class="page-banner" style="background:url({{ URL::to('library/img/banner-lss-page.jpg') }}) center center; background-size:cover">
		<div class="container">
			<h1 class="page-header">Life Sciences Services</h1>
		</div>
	</div>
	
	<div class="container">
		<br /><br />
		<div class="col-md-12">
			<p class="lead">ADVENT provides a wide variety of services to the Biologics and Pharmaceutical industry. The services range from process development and technology transfer to engineering design, commissioning, qualification, and validation (CQV), and Pre-approval Inspection (PAI) Readiness. ADVENT's talented and experienced team of professionals has delivered these services throughout the U.S., Europe, and Asia to the biopharmaceutical industry's leading firms.</p>
		</div>
		<div class="col-md-6">
			<h3 class="page-header">Biologics</h3>
			<div class="list-group">
				<div class="list-group-item">Monoclonal Antibodies (mAb)</div>
				<div class="list-group-item">Blood Factors</div>
				<div class="list-group-item">Vaccines</div>
			</div>
		</div>
		<div class="col-md-6">
			<h3 class="page-header">Pharmaceuticals</h3>
			<div class="list-group">
				<div class="list-group-item">Small Molecules</div>
				<div class="list-group-item">Solid Oral Dose</div>
				<div class="list-group-item">Ointment</div>
				<div class="list-group-item">Trans Dermal Patch</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<br /><br />
	</div>
	
	<div class="page-breakout" style="background:url({{ URL::to('library/img/breakout-lss-page.jpg') }}) center center; background-size:cover;">
		<div class="container">
			<div class="col-md-12 quote text-center">
				<h2>Our innovative consulting services cover process development and qualification, process equipment design commissioning and qualification, and GMP facility design, commissioning, and qualification.</h2>
			</div>
		</div>
	</div>
	
	<div class="container lss-sections">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Qualification and Validation Services</div>
				<div class="panel-body" style="background:url({{ URL::to('library/img/lss-qualifications.jpg') }}); background-size:100%;">We are well-versed in developing and implementing risk-based approaches to process validation</div>
				<div class="panel-footer"><a href="#" class="btn btn-primary">Learn More</a></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Process Development Services</div>
				<div class="panel-body" style="background:url({{ URL::to('library/img/lss-qualifications.jpg') }}); background-size:100%;">ADVENT's process development experience comes from supporting the cGMP manufacturing of bulk drug substances (BDS) for many clients.</div>
				<div class="panel-footer"><a href="#" class="btn btn-primary">Learn More</a></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Engineering Services</div>
				<div class="panel-body" style="background:url({{ URL::to('library/img/lss-qualifications.jpg') }}); background-size:100%;">ADVENT provides a wide array of engineering services to support every phase of the "GEP Lifecycle" from planning for new products to retirement of equipment.</div>
				<div class="panel-footer"><a href="#" class="btn btn-primary">Learn More</a></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Project Management Services</div>
				<div class="panel-body" style="background:url({{ URL::to('library/img/lss-qualifications.jpg') }}); background-size:100%;">We offer integrated project management services and methodology, supported and reflected by our experience and policies.</div>
				<div class="panel-footer"><a href="#" class="btn btn-primary">Learn More</a></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Products</div>
				<div class="panel-body" style="background:url({{ URL::to('library/img/lss-qualifications.jpg') }}); background-size:100%;">Training modules filled with cogent, up-to-date information to enhance the knowledge base of personnel involved with validation, qualification, engineering, and manufacturing. </div>
				<div class="panel-footer"><a href="#" class="btn btn-primary">Learn More</a></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Publications</div>
				<div class="panel-body" style="background:url({{ URL::to('library/img/lss-qualifications.jpg') }}); background-size:100%;">Technical papers and article with innovative ideas and solutions drawn from their wide-ranging experience in engineering, manufacturing, process development, and CQV execution.</div>
				<div class="panel-footer"><a href="#" class="btn btn-primary">Learn More</a></div>
			</div>
		</div>
	</div>
	
@stop

@section('scripts')

@stop