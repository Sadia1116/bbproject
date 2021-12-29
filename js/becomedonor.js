function fncValidate() 
{
			var fn=document.form.fname.value; 
			var ln=document.form.lname.value; 
			var pass1=document.form.Password.value; 
			var pass2=document.form.ConPassword.value; 
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
		
			
var m = document.getElementById('male'); 
var f = document.getElementById('female'); 

if ( (m.checked == false ) && (f.checked == false ) ) 
{
alert ( "Please choose Gender" );
document.getElementById("gen").style.border = "2px solid red"; 
return false;
}
 else {
document.getElementById("gen").style.border = ""; 
}

	var add=document.form.address.value;
	var patt2 = /[^a-z,]/i;
			var address = patt2.test(add);
	if(add == "")
	{
		alert('Please enter your address');
	
		return false;
	}
	
	
var b = document.getElementById("Blood Group") 
if(b.value == null || b.value == "") { 
alert("Please select a blood group"); 
return false;
}
var p=document.form.phone.value; 
if(isNaN(p)) 
{
alert("Enter only numbers");
return false;
}
if(p=="") 
{
alert("Enter 11 digits");
return false;
}
if(p.length>11) 
{
alert("Enter 11 digits");
return false;
}
if(p.length<11) 
{
alert("Enter 11 digits");
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

	
	if(pass2== "") 
	{
		alert('Please input Confirm Password');		
		return false;
	}	

	if(pass1 != pass2) 
	{
		alert('Confirm Password Not Match');	
		return false;
	}
	//alert('Successfully submitted.');
	document.form.submit();
}
