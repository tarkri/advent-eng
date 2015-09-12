<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ URL::asset('library/img/logo.png') }}" width="180" style="margin-top:-4px;" alt="Advent Engineering, Inc." /></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown {{ relativeActive('life-sciences-services') }}">
				<a href="{{ URL::to('life-sciences-services') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Life Sciences Services <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{{ URL::to('life-sciences-services') }}">Overview</a></li>
					<li><a href="{{ URL::to('life-sciences-services/qualification-and-validation-services') }}">Qualification and Validation Services</a></li>
					<li><a href="{{ URL::to('life-sciences-services/process-development-services') }}">Process Development Services</a></li>
					<li><a href="{{ URL::to('life-sciences-services/engineering-services') }}">Engineering Services</a></li>
					<li><a href="{{ URL::to('life-sciences-services/project-management-services') }}">Project Management Services</a></li>
					<li><a href="{{ URL::to('life-sciences-services/training-products') }}">Training Products</a></li>
					<li><a href="{{ URL::to('life-sciences-services/publications') }}">Publications</a></li>
				</ul>
			</li>
			<li class="dropdown {{ relativeActive('energy-sector-services') }}">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Energy Sector Services <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{{ URL::to('energy-sector-services') }}">Overview</a></li>
					<li><a href="{{ URL::to('energy-sector-services/engineering-services') }}">Engineering Services</a></li>
					<li><a href="{{ URL::to('energy-sector-services/consulting-services') }}">Consulting Services</a></li>
					<li><a href="{{ URL::to('energy-sector-services/software-familiarity') }}">Software Familiarity</a></li>
					<li><a href="{{ URL::to('energy-sector-services/industry-codes-and-standards') }}">Industry Codes and Standards</a></li>
					<li><a href="{{ URL::to('energy-sector-services/clients') }}">Clients</a></li>
					<li><a href="{{ URL::to('energy-sector-services/integrated-head-assembly') }}">Integrated Head Assembly</a></li>
					<li><a href="{{ URL::to('energy-sector-services/projects') }}">Projects</a></li>
				</ul>
			</li>
			<li class="dropdown {{ relativeActive('careers') }}">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Careers <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{{ URL::to('careers') }}">Our Culture</a></li>
					<li><a href="{{ URL::to('careers/jobs') }}">Job Postings</a></li>
					<li><a href="{{ URL::to('careers/benefits') }}">Benefits</a></li>
				</ul>
			</li>
			<li class="{{ relativeActive('company') }}" ><a href="{{ URL::to('company') }}">Company</a></li>
			<li class="{{ relativeActive('contact') }}"><a href="{{ URL::to('contact') }}">Contact</a></li>
		</ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>