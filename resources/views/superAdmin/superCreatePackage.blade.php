@extends('superAdmin.index')


@section('content')

<div class="container"> 
	<div class="row">
		<div class="col-md-12">
			<div class="card">

				<div class="card-header">

					<div class="row">

							<div class="col-md-12">
								<label style="text-align:center;color:white;">Create Package</label>

							</div>

					</div>
				</div>

				<form method="get" action="{{url('/')}}/superAdmin/pack/save">
				<div class="card-body">
					<div class="container">
						<div class="row">

								<div class="col-md-12">
									
									<table id="pack" class="table">
										<tr>
											 <td>Course  :</td>
											 <td> 
											 		<select id="course">
										    		@foreach($course as $value)
														<option value='{{$value["ID"]}}'>{{$value["name"]}}</option>
													@endforeach
						 							 </select>
											</td>
										</tr>
										<tr>
											<td>Price  :</td>
											<td>
												 <input type="text" id="package_price" name="package_price" placeholder="Package Price"/>
											</td>
										</tr>

										<tr>
											<td>Time  :</td>
											<td>
												 <input type="text" id="time" name="time" placeholder="Time in minuts"/>
											</td>
										</tr>

										<tr>
											<td>Package Name  :</td>
											<td>
												 <input type="text" id="package_name" name="package_name" placeholder="Package Name"/>
											</td>
										</tr>

										<tr>
											<td>Language :</td>
											<td>
												 <select id="lang">
								    				@foreach($lang as $value)
														<option value='{{$value["ID"]}}'>{{$value["name"]}}</option>
													@endforeach
											  </select>
											</td>
										</tr>						
											

									</table>
								</div>

								


						</div>

					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary" type="submit" id="submit_btn">Submit</button>
				</div>
			</form>
			<div class="col-md-12">
												<p>Question type</p>
												<select id="type" class="form-control">
							    					 @foreach($type as $value)
														<option value='{{$value["ID"]}}'>{{$value["name"]}}</option>
													@endforeach
						  						</select>
												<button id="doc_add_btn">+</button>
											
								</div>
			</div>
		</div>
	</div>

</div>

<script>
	$("#doc_add_btn").click(function(){
		 var selectedType = $("#type option:selected").html();


		templeate="<tr>"+
					"<td>"+selectedType+"</td>"+
					"<td><input  type='text' class='doc' name ='"+$("#type").val()+"' id ='"+$("#type").val()+"' />"+
				  "</tr>";
		console.log("Button click ");

		$('#pack').append(templeate);

	});

	$("#submit_btn").click(function(){
		console.log("Submit button clicked ");
		var course = $('#course').val();
		var price = $('#package_price').val();
		var name = $('#package_name').val();
		var time = $('#time').val();
		var lang = $('#lang').val();
		var doc = $('.doc').val();

		console.log(course+" "+price+" "+name+" "+time+" "+lang);
	});
</script>

@stop