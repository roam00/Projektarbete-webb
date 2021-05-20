function validate_registration(){
    var x = document.getElementById("username").value;
    var y = document.getElementById("email").value;
    var z = document.getElementById("password").value;
    var s = document.getElementById("reppassword").value;

    if (x == "" || y == "" || z =="" || s =="" || x.trim() == "" || y.trim() == "" || z.trim() == "" || s.trim() == ""){
        alert("All fields has to be filled in correctly");
    	return false;
	}
    else{
    return validate_email();
}
}

function validate_login(){
    var x = document.getElementById("username").value;
    var z = document.getElementById("password").value;

    if (x == "" || z =="" || x.trim() == "" || z.trim() == ""){
        alert("All fields has to be filled in correctly");
    	return false;
	}
}

function validate_email(){
    var x = document.getElementById("email").value;
    if (x.indexOf('@') == -1 || x.indexOf('.') == -1){
        alert("Invalid email");
        return false;
    }
    else {
        return pass_match();
    }
}

function pass_match(){
    var p1 = document.getElementById("password").value;
	var p2 = document.getElementById("reppassword").value;
    if (p1 != p2){
        alert ("Passwords do not match!");
        return false;
    }
}