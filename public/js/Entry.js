$(function(){



	$.getValue = function(){

	var solution = nicEditors.findEditor('Solut').getContent();
	var question = nicEditors.findEditor('ques').getContent();
	var option1 = nicEditors.findEditor('op1').getContent();
	var option2 = nicEditors.findEditor('op2').getContent();
	var option3 = nicEditors.findEditor('op3').getContent();
	var option4 = nicEditors.findEditor('op4').getContent();
	var answer = nicEditors.findEditor('answer').getContent();
	var course = $('#course').val();
	var lang = $('#lang').val();
	var topic = $('#topic').val();
	var type = $('#type').val();

	return {lang:lang,course:course,topic:topic,type:type,question:question,solution:solution,option1:option1,option2:option2,option3:option3,option4:option4,answer:answer};
	}

	$.setNull = function(){
			 nicEditors.findEditor('Solut').setContent("<br>");
			nicEditors.findEditor('ques').setContent("<br>");;
			nicEditors.findEditor('op1').setContent("<br>");;
			nicEditors.findEditor('op2').setContent("<br>");;
			 nicEditors.findEditor('op3').setContent("<br>");;
			 nicEditors.findEditor('op4').setContent("<br>");;
			nicEditors.findEditor('answer').setContent("<br>");;
	}

	$.getCheck = function(){

		var solution = nicEditors.findEditor('Solut').getContent();
		var question = nicEditors.findEditor('ques').getContent();
		var option1 = nicEditors.findEditor('op1').getContent();
		var option2 = nicEditors.findEditor('op2').getContent();
		var option3 = nicEditors.findEditor('op3').getContent();
		var option4 = nicEditors.findEditor('op4').getContent();
		var answer = nicEditors.findEditor('answer').getContent();

		if(question=="<br>" && solution=="<br>" && option1=="<br>" && option2=="<br>" && option3== "<br>" && option4=="<br>" && answer=="<br"){
			alter("Enter Proper data");
			return false;
		}
		else{
			console.log('True');
			return true;	
		}
	}

	$.getPackageValue = function(){
		var 
	}
	

	 
	
});