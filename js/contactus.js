function fncValidate() 
{
			var fn=document.form.fname.value; 
			var ln=document.form.lname.value; 
		 
			var patt = /[^a-z]/i; 
			var fname = patt.test(fn); 
			var lname = patt.test(ln); 
			
	if(fn == "") 
	{
		alert('Please input Firstname'); 
	
		return false;
	}
			
		if(ln == "")
	{
		alert('Please input Lastname');
	
		return false;
	}

	var em=document.form.email.value; 
var atpos=em.indexOf("@"); 
var dotpos=em.lastIndexOf("."); 
if(atpos<1 || dotpos<atpos+2 || dotpos+2>=em.length)
{
alert("Ivalid email id");
return false;
}	
			
var com=document.form.comment.value;
	var patt2 = /[^a-z,]/i;
			var comment = patt2.test(com);
	if(com == "")
	{
		alert('Please enter your comment');
	
		return false;
	}
	

	
	




	//alert('Successfully submitted.');
	document.form.submit();
}
