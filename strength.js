function length(password)
{
	if(password.length>5)
	{
		return 1;
	}
	return 0;
}
function has_digit(password)
{
	var pattern= /\d/;
	if(password.match(pattern))
	{
		return 1;
	}
	return 0;
}
function has_lower(password)
{
	var pattern= /[a-z]/;
	if(password.match(pattern))
	{
		return 1;
	}
	return 0;
}
function has_upper(password)
{
	var pattern= /[A-Z]/;
	if(password.match(pattern))
	{
		return 1;
	}
	return 0;
}
function has_symbol(password)
{
	var pattern= /[$-/:-?{-~!@#%^&*()"_`\[\]]/;
	if(password.match(pattern))
	{
		return 1;
	}
	return 0;
}
function get_result()
{
	var password= document.getElementById("password").value;
	var num=length(password)+has_digit(password)+has_lower(password)+has_upper(password)+has_symbol(password);
	document.getElementById("strength").value=num;
}