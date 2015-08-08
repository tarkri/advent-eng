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
			<li class="dropdown {{-- navIsActive('life-sciences-services') --}}">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Life Sciences Services <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{{ URL::to('life-sciences-services') }}">Overview</a></li>
					<li><a href="#">Qualification and Validation Services</a></li>
					<li><a href="#">Process Development Services</a></li>
					<li><a href="#">Engineering Services</a></li>
					<li><a href="#">Project Management Services</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Publications</a></li>
				</ul>
			</li>
			<li class="dropdown {{-- navIsActive('energy-sector-services') --}}">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Energy Sector Services <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{{ URL::to('energy-sector-services') }}">Overview</a></li>
					<li><a href="#">Engineering Services</a></li>
					<li><a href="#">Consulting Services</a></li>
					<li><a href="#">Software Familiarity</a></li>
					<li><a href="#">Industry Codes and Standards</a></li>
					<li><a href="#">Clients</a></li>
					<li><a href="#">Integrated Head Assembly</a></li>
					<li><a href="#">Projects</a></li>
				</ul>
			</li>
			<li><a href="#">Careers</a></li>
			<li><a href="#">Company</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>