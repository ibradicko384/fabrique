	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				 <a class="btn btn-light" href="{{url('/')}}"><p class="navbar-brand btn btn-light">FabriAccess</p></a> 
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="about.html">À propos</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Formation<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Details</a></li>
							<li class="active"><a href="sidebar-right.html">Automatique</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
					<li><a class="btn" href="{{url('/inscription')}}">CONNEXION / INSCRIPTION</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->