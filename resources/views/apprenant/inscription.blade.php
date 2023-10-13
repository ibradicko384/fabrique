@extends('layouts.layout.layouts')
@section('content')
	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Inscription</li>
		</ol>
		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
				@if (session('success'))
                             <div class="alert alert-success">
                                <button type="button" class="Close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                </button>
                              {{ session('success') }}
                             </div>
                           @endif
					<h1 class="page-title">Inscription</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">



              @if (Session::has('error_message'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Error:</strong> {{ Session::get('error_message')}}
                 <button type="button" class="Close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
              </div>
              @endif

              @if ($errors->any())
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong></strong> <?php echo implode('', $errors->all('<div>:message</div>')); ?>
                 <button type="button" class="Close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
              </div>
              @endif

					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Formulaire de demande d'inscrire</h3>
							<hr>
							<form action="{{url('/inscription')}}" method="POST">
							  @csrf
                                @method ('POST')
								<div class="top-margin">
									<label>Nom :</label>
									<input type="text" class="form-control" id="nom" name="nom">
								</div>
								<div class="top-margin">
									<label>Prénom :</label>
									<input type="text" class="form-control" id="prenom" name="prenom" >
								</div>
								<div class="top-margin">
									<label>Telephone :</label>
									<input type="text" class="form-control" id="telephone" name="telephone" >
								</div>
								<div class="top-margin">
									<label>Adresse e-mail (Gmail) :<span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="email" name="email">
								</div>

                                <div class="top-margin">
									<label>Motivation (pourquoi souhaitez-vous accéder à la fabrique) :<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="lettre" name="lettre" required></textarea>
								</div>

								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="password" name="password">
								</div>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											I've read the <a href="page_terms.html">Terms and Conditions</a>
										</label>                        
									</div> <br>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">inscrire</button>
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