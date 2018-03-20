@extends('superAdmin.index')


@section('content')
	<div class="row resu">

			<div class="col-md-2">

							<p>Enetr Question ID : </p>	
							<input type="text" name="Question_ID" placeholder="Question ID"/>

			</div>
			<p>OR</p>

			<div class="col-md-2">

							<p>Chose Date</p>	
							<input type="date" name="question_date" placeholder="DD-MM-YYYY">

			</div>

			<div class="col-md-2">

					<button class="btn btn-info">Search</button>

			</div>
	</div> 

	<div class="container">
		<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<p>Question</p>
									<!-- <form id = "textarea_div"> -->
										<textarea id = "ques" name="ques" placeholder="" style="width: 100%; height:100px"></textarea>
									<!-- </form> -->
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>

		<!-- Option1 -->
		<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<p>Option 1 :</p>
									<!-- <form id = "textarea_div"> -->
										<textarea id = "op1" name="op1" placeholder="" style="width: 100%; height:50px"></textarea>
									<!-- </form> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
								<p>Option 2 :</p>
								<!-- <form id = "textarea_div"> -->
									<textarea id = "op2" name="op2" placeholder="" style="width: 100%; height:50px"></textarea>
								<!-- </form> -->
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<p>Option 3 :</p>
									<!-- <form id = "textarea_div"> -->
										<textarea id = "op3" name="op3" placeholder="" style="width: 100%; height:50px"></textarea>
									<!-- </form> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<p>Option 4 :</p>
									<!-- <form id = "textarea_div"> -->
										<textarea id = "op4" name="op4" placeholder="" style="width: 100%; height:50px"></textarea>
									<!-- </form> -->
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		<!-- Answer  -->
		<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<p>Correct Answer :</p>
									<!-- <form id = "textarea_div"> -->
										<textarea id = "answer" name="answer" placeholder="" style="width: 100%; height:50px"></textarea>
									<!-- </form> -->
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		<!-- Solution -->
		<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12" id="par">
									<p>Solution :</p>
									<!-- <form id = "textarea_div"> -->
										<textarea id ="Solut" name="Solut" placeholder="" style="width: 100%; height:200px"></textarea>
									<!-- </form> -->
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>

		<button class="btn btn-success" id = "post">Update</button>
		<p id="test"></p>

	</div>
	<!-- bootstrap -->
    
	<script type="text/javascript" src="{{url('/')}}/embeded_editor_admin/nicEdit-latest.js"></script> 
	    <script >
			//<![CDATA[
			  bkLib.onDomLoaded(function() {
				new nicEditor({fullPanel : true}).panelInstance('ques');			        
			  });
			   bkLib.onDomLoaded(function() {
				new nicEditor({fullPanel : true}).panelInstance('op1');			        
			  });
			   bkLib.onDomLoaded(function() {
				new nicEditor({fullPanel : true}).panelInstance('op2');			        
			  });
			   bkLib.onDomLoaded(function() {
				new nicEditor({fullPanel : true}).panelInstance('op3');			        
			  });
			   bkLib.onDomLoaded(function() {
				new nicEditor({fullPanel : true}).panelInstance('op4');			        
			  });
			    bkLib.onDomLoaded(function() {
				new nicEditor({fullPanel : true}).panelInstance('answer');			        
			  });
			     bkLib.onDomLoaded(function() {
				new nicEditor({fullPanel : true}).panelInstance('Solut');			        
			  });
			  //]]>
			
			$('#post').click(function(){
				// var doc = document.querySelector(".nicEdit-main");
				// console.log(doc);
				// var data = $("p.nicEdit-main").html();
				// console.log(data);
				var nicInstance = nicEditors.findEditor('Solut');
      			console.log(nicInstance.getContent());
			});
			
		</script>
@stop