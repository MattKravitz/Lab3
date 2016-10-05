function check()
{
   
    	var use = document.getElementById('username').value;
		
		var pass = document.getElementById('password').value;
		
		var ship = document.getElementsByName('q1');
    	
		var meow1 = document.getElementById('nuke').value;
		var meow2 = document.getElementById('jugg').value;
		var meow3 = document.getElementById('pap').value;
		
		var j = 0;
		
		

    	if(!(use.endsWith(".com") && use.indexOf("@") >= 0)){
        
			alert("Incorrect Username, Must be an email");
			j++;
			
    	}
		if(pass == ""){
			
			alert("Incorrect password, must be one character or more");
			j++;
			
		}
		for(var i = 0 ; i < ship.length; i++){
			
			if(ship[i].checked){
				var isShipped = ship[i].value;
			
			}
			
		}
		if(isShipped == undefined){
			
			alert("Pick a shipping type");
			j++;
			
		}
		
		if(meow1 == "" || meow2 == "" || meow3 == ""){
			alert("dont leave any fields blank");
			j++;
		}
		
		
		if( j != 0){
			document.getElementById("meow").action = "customerFrontend.html";
		}
}  