@extends('superAdmin.index')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">

				<div class="card-body">

					<div class="row">

							<div class="col-md-12">
								<form method="post" action="{{url('/')}}/superAdmin/full/lang">
									<label style="text-align:center;color:black;">Language <input type="text" name="language" /></label>
									 <input type="hidden" name="_token" value="{{csrf_token()}}"/>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>

					</div>
				</div>
			</div>

			<div class="card">

				<div class="card-body">

					<div class="row">

							<div class="col-md-12">
								<form method="get" action="{{url('/')}}/superAdmin/full/sub">
									<label style="text-align:center;color:black;">Subject <input type="text" name="subject" /></label>
									 <input type="hidden" name="_token" value="{{csrf_token()}}"/>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>

					</div>
				</div>
			</div>

			<div class="card">

				<div class="card-body">

					<div class="row">

							<div class="col-md-12">
								<form method="post" action="">
									<label style="text-align:center;color:black;">Topic <input type="text" name="topic" /></label>
									<label style="text-align:center;color:black;">Subject <select name="sub">
										@foreach($sub as $value)

											
											<option value='{{$value["ID"]}}'>{{$value["name"]}}</option>
											
								
										@endforeach</select></label>
									 <input type="hidden" name="_token" value="{{csrf_token()}}"/>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>

					</div>
				</div>
			</div>


			<div class="card">

				<div class="card-body">

					<div class="row">

							<div class="col-md-12">
								<form method="post" action="">
									<label style="text-align:center;color:black;">Course <input type="text" name="language" /></label>
									 <input type="hidden" name="_token" value="{{csrf_token()}}"/>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>

					</div>
				</div>
			</div>

			<div class="card">

				<div class="card-body">

					<div class="row">

							<div class="col-md-12">
								<form method="post" action="">
									<label style="text-align:center;color:black;">Question Type <input type="text" name="question" /></label>
									<label style="text-align:center;color:black;">Descepration <input type="text" name="descepration" /></label>
									 <input type="hidden" name="_token" value="{{csrf_token()}}"/>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>

					</div>
				</div>
			</div>




				

			</div>
		</div>
	</div>

</div>

@stop