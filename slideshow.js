
var i =0; 


function Next() {
	
	var image =  document.getElementById('image');
	if(i == 0)
	{
		image.src = 'html-coding.jpg'; 
	}
	else if(i == 1)
	{
		image.src = 'codecode.jpg'; 	 
	}
	else if(i == 2)
	{
		image.src = 'CodingSnippet.jpg'; 	 
	}
	else if(i == 3)
	{
		image.src = 'Coding_Experts.jpg'; 	 
	}
	else if(i == 4) 
	{
		image.src = '052ac3e.jpg'; 
		i = 0;
		return;	
	}
	i++;
} 

function Previous() {
	
	var image =  document.getElementById('image');
	if(i == 0)
	{
		image.src = 'Coding_Experts.jpg'; 
		i=4; 	 
		return;
	}
	else if(i == 1)
	{
		image.src = '052ac3e.jpg'; 	
	}
	else if(i == 2)
	{
		image.src = 'html-coding.jpg'; 
	}
	else if(i == 3)
	{
		image.src = 'codecode.jpg'; 	 
	}
	else if(i == 4)
	{
		image.src = 'CodingSnippet.jpg'; 	
	}
	i--;
} 