 @extends('welcome')


@section('title')
    <title>Welcome Test :sarkariformbharo</title>
    <meta name="description" content="Free online mock test packages. For every competitive exam. Just in a single click. Read the instruction before proceed the next step." />
  @stop

@section('content')

	<div class="row">
		<div class="col-md-12 instr">
			Welcome to Sarkariformbharo.com Mock Test. This test Package is degine by Java AP 
		</div>
	</div>
	<div class="container">


							<div  class="row" id="ins">

								<div class="col-md-12" >
										<div class="row">
											<div class="col-md-12">
												<p class="package">SSC LDC EXAM PACKAGE</p>
											</div>
										</div>
										<div class="row">

												<div class="col-md-6" style="font-size:14px;text-align:left;">
													<p>Duration :90 Min</p>
												</div>
												<div calss="col-md-6" style="font-size:14px;text-align:right;">
													<p>Maximum Marks : 100</p>
												</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<p style="font-weight:800;">Read the following instruction carefully.</p>
												<ul>
													<li>The test question single section having 100 questions</li>
													<li>Each question has 4 option out of which only one is correct</li>
													<li>You have to finish the test in 90 minutes.</li>
													<li>Try not to guess the answer as there is negative marking.</li>
													<li>You will be awarded 1 marks for each correct answer and 0.33 marks will be deducted for each wrong answer.</li>
													<li>There is penalty for the question that you have not attempted.</li>
													<li>Ounce you start the test, you will not allowed to reattempt it. Make sure that you complete the test before you submit the test and/or close the browser.</li>
													
												</ul>
											</div>

										</div>
									</div>
							</div>
	</div>
	<div class="card">
		<div class="container">
			<div class="card-header">
				<div class="row">
					
							<p style="font-weight:800;font-family:'Calibri';">Chose Your Default Language : </p>
							<select class="lang">
							    <option value="English">English</option>
							    <option value="Hindi">Hindi</option>
						  </select>
				</div>
				<div class="row">
					<p style="color:red;text-align:center;font-size:12px;">Please not all the question will appear in your default language. This language can change for a particular package later on</p>
				</div>
			</div>
			<div class="card-body">
				<div style="font-size:15px;font-weight:700">
					<p>Declaration :</p>
					<input type="checkbox">
					<p>I have read all the instructions carefully and have understood them. I agree not to cheat or use means in this examination. I unsderstand that using unfair means of any sort for my own or someone else's advantage will lead to my immediate disqualifacation. The decision of sarkarifombharo.com will be final in this matter and cannot be appealed</p>
				</div>
			<hr>
				<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table">
									<tr><td>
										<button class="btn btn-primary">Previous</button></td>
										<td></td>
									
									
										<td><button class="btn btn-primary">I am ready to begin </button></td>
									</tr>
								</table>
							<div>
						</div>
				</div>
			</div>

		</div>
	</div>
@stop