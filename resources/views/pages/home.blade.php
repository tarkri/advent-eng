@extends('layouts.master')

@section('content')

	<div class="home-banner-wrapper">
		<div class="home-banner lss">
			<div class="container">
				<div class="col-md-8 text-left banner-block">
					<h3 class="page-header">Life Sciences Services</h3>
					<p class="lead">
						Services supporting the entire phase of the product lifecycle - from conceptual design through production.<br />
						<br />
						<a href="{{ URL::to('life-sciences-services') }}" class="btn btn-default btn-lg">Learn More</a>
					</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="home-banner ess">
			<div class="container">
				<div class="col-md-8 col-md-offset-4 text-right banner-block">
					<h3 class="page-header">Energy Sector Services</h3>
					<p class="lead">
						Design/analysis, structural analysis and code compliance to fluid/flow simulation and heat transfer systems along with numerous patents on our innovative designs.<br />
						<br />
						<a href="{{ URL::to('energy-sector-services') }}" class="btn btn-default btn-lg">Learn More</a>
					</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<div class="container">
		<div class="col-md-12">
			<h1 class="page-header">Advent Careers</h1>
			<p class="lead">ADVENT is always searching for talented individuals who can contribute to its mission of providing its clients with world-class engineering and consulting services. Whether you're just beginning your career or looking to make a mid-career move, you should explore what ADVENT has to offer.<br />
			<a href="#">Learn More About Our Careers <i class="glyphicon glyphicon-chevron-right"></i></a>
			</p>
		</div>
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Position</th>
						<th>Location</th>
						<th>Application</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>CQV Engineer</td>
						<td>San Francisco Bay Area, California</td>
						<td><a href="#" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-search"></i> View</a></td>
					</tr>
					<tr>
						<td>CQV Engineer</td>
						<td>San Francisco Bay Area, California</td>
						<td><a href="#" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-search"></i> View</a></td>
					</tr>
					<tr>
						<td>Process Engineer - Biotechnology</td>
						<td>Toronto</td>
						<td><a href="#" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-search"></i> View</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
@stop

@section('scripts')

@stop