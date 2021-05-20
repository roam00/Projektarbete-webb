function sameValue(){
    var v1 = document.getElementById("password").value;
	var v2 = document.getElementById("reppassword").value;
    if (v1 == v2){
        return true;
    }
    else {
        alert ("Passwords do not match!");
    }
}