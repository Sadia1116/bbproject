function fncValidate() 
{
		
			var patt = /[^a-z]/i; 
							
	
var b = document.getElementById("Blood Group") 
if(b.value == null || b.value == "") { 
alert("Please select a blood group"); 
return false;
}



 
	
	//alert('Successfully submitted.');
	document.form.submit();
}
