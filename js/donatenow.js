function fncValidate() 
{
			
			var pass1=document.form.Password.value; 
			
			 
			
	
var em=document.form.email.value; 
var atpos=em.indexOf("@"); 
var dotpos=em.lastIndexOf("."); 
if(atpos<1 || dotpos<atpos+2 || dotpos+2>=em.length)
{
alert("Ivalid email id");
return false;
}

if(pass1 == "")
	{
		alert('Please input Password');
		
		return false;
	}	
	
	if(pass1.length < 6) 
	{
		alert('Password strength should not less than 6 characters');
		
		return false;
	}	

	
	
	//alert('Successfully submitted.');
	document.form.submit();
}
