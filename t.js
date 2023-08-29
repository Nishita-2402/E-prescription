<script type="text/javascript">
	function myfunction()
	{
		var x = document.getElementById("name").value;
		var y = document.getElementById("phone").value;
		var z = document.getElementById("email").value;
		var w = document.getElementById("aadhar").value;
		var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
		var regEx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		var regexp=/^[2-9]{1}[0-9]{3}\s{1}[0-9]{4}\s{1}[0-9]{4}$/;
        if(regName.test(x))
		{
			alert('Invalid name given!!!');
        }
		else
		{
			   if(y.value.match(regEx))
               {
                  if(z.indexof("@")<=0 && z.charAt(z.length-4)!='.'||z.charAt(z.length-3)!='.' )
		          {
                    alert("Invalid Email!!!!");  
                  }
				  else
				  {
					if(regexp.test(w))
                      {
                        alert("Successfull!!!");
                      }
                 else
				 {
					 window.alert("Invalid Aadhar no.");
                 } } }
               else
               {
                alert("Please enter a valid phone number.");
                return false;
			   }
			}
		}
</script>