@extends('layouts.layout.layouts')
@section('content')
	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">CONNEXION</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">CONNECTER VOUS</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Formulaire connexion</h3>
							<hr>
							<form action="{{url('/connexion')}}" method="post">
							@csrf
                            @method ('POST')
								
							    @error('email')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
		 						<div class="top-margin">
									<label>Adresse e-mail (Gmail) :<span class="text-danger">*</span></label>
									<input type="email" name="email" id="email" class="form-control" id="exampleInputEmail1" required>
								</div>
								@error('password')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" required>
								</div> <br>
								<div class="col-lg-4 text-right">
									<button class="btn btn-action" type="submit">Connecter</button>
								</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
@endsection