function check()
{
   
    	var pass1 = document.getElementById('pass1');
		
		var pass2 = document.getElementById('pass2');

    	

    	if(pass1.value == pass2.value && pass1.value.length > 7){
        
			alert("Password Validated");
			
    	}
		else if (pass1.value != pass2.value) {
			
			alert("Password Denied");
			
    	}
		else if (pass1.value == pass2.value && pass1.value.length < 8) {
		
			alert("Password too short");
			
        }
}  

