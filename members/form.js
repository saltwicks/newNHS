$(document).ready( function(){
	var button = $( "#submitButton" );
	var form = $('#form1');
	var letters = /^[A-Za-z]+$/; 
	var numbers = /^[12]+$/;
	
	var first ="";
	var last="";
	var grade="";
	var position="";
	var id ="";
	var email="";
	
//	button.attr('disabled', true);
	
	form1.onkeyup = function(e){
		first=form1.value;
	}
	
	form2.onkeyup = function(e){
		last=form2.value;
	}
	
	form3.onkeyup = function(e){
		grade=form3.value;
	}
	
	form4.onkeyup = function(e){
		position=form4.value;
	}
	
	form5.onkeyup = function(e){
		id=form5.value;
	}
	
	form6.onkeyup = function(e){
		email=form6.value;
	}
	window.onkeyup = function(e){
		var disabled =true;
//		if(first.length>0&&last.length>0&&grade.length==2&&id.length>0&&email.length>0){
//			if(first.match(letters)&&last.match(letters)&&grade.match(numbers))
			disabled=false;
		}
		button.attr('disabled',disabled);		
	}
});
