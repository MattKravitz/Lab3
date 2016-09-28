
function change(){
	
	var dummy =  document.getElementById('dummy');
	
	var color = document.getElementById('color');
	var width = document.getElementById('width');
	var bgcolor = document.getElementById('bgcolor');
	
	if (bgcolor.value == 1){
		dummy.style.backgroundColor = 'red';
		
	}
	else if (bgcolor.value == 2){
		dummy.style.backgroundColor = 'blue';
		
	}
	else if (bgcolor.value == 3){
		dummy.style.backgroundColor = 'green';
		
	}
	else{
		alert("invalid input");
	}
	
	if (color.value == 1){
		dummy.style.borderColor = "red";
		
	}
	else if (color.value == 2){
		dummy.style.borderColor = "blue";
		
	}
	else if (color.value == 3){
		dummy.style.borderColor = "green";
		
	}
	else{
		alert("invalid input");
	}
	
	
	
	
	
	
	
	if (width.value == 1){
		dummy.style.borderWidth = "thick";
		
	}
	else if (width.value == 2){
		dummy.style.borderWidth = "thin";
		
	}
	else{
		alert("invalid input");
	}
	
	

	
    	
		

	
}