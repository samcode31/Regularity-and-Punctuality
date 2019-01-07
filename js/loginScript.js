function chkUser(){
	var username = document.getElementById("username").value;
	if(username == ""){
		//alert("username blank");
		document.getElementById("error-panel").innerHTML = "Username Field Blank, Please Enter Username To Continue.";
	}
	else{
		document.getElementById("error-panel").innerHTML = "";
		document.getElementById("login-btn-primary").style.display = "none";
		document.getElementById("login-btn-secondary").style.display = "block";
		document.getElementById("login-field-username").style.display = "none";
		document.getElementById("login-field-pwd").style.display = "flex";
		document.getElementById("login-field-pwd").value = "";
	}
	
}

function chkPassword(){	
	$.post("pages/loginVerification.php",{
		username : $("#username").val(),
		password : $('#login-pwd').val()
	}, function(data){
		//alert(data);		
		var obj = JSON.parse(data);
		if(obj[0] == 1){
			//error occured
			//alert(obj[4]);
			document.getElementById("error-panel").innerHTML= obj[1];
			if(obj[4] == 1){
				//username incorrect
				document.getElementById("login-pwd").value = "";
				document.getElementById("login-btn-primary").style.display = "block";
				document.getElementById("login-btn-secondary").style.display = "none";
				document.getElementById("login-field-username").style.display = "flex";				
				document.getElementById("username").value = "";				
				document.getElementById("login-field-pwd").style.display = "none";
				$("#username").focus();
			}
		}
		else{
			switch(obj[2]){
				case "Admin":
					location.replace("pages/admin.php");
					break;
				case "Teacher":
					//alert(obj[3]);
					if(obj[3] == 4){
						location.replace("pages/resetPassword.php");
					}
					else if(obj[3] == 1){
						location.replace("pages/teacher.php");
					}
					
					break;	
			}
		}
		
	})
}

$('#login-btn-primary').click(function(){
	$("#login-pwd").focus();
})

$('#login-btn-secondary').click(function(){
	chkPassword();
})

$("#login-form").keypress(function(e){
	//check if enter key is pressed on form
	if(e.which == 13){
		if($("#login-btn-primary").is(":visible")){
			chkUser();
			$("#login-pwd").focus();
			return false;			
		}
		else{
			chkPassword();
			return false;
		}		
	}
})


