/*var check = function() {
    if (document.getElementById('paswrd').value ===
        document.getElementById('confirm-paswrd').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'matching';
    } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'not matching';
    }
}*/
function check() {
    var pass1 = document.getElementById("rePaswrd").value;
    var pass2 = document.getElementById("confirm-paswrd").value;
    if (pass1 == pass2) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'matching';
    }
    else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'not matching';
    }
}

function validateEmail(){
    var email = document.getElementById("reemail").value;
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(email) == false)
    {
        document.getElementById('mesage').style.color = 'red';
        document.getElementById('mesage').innerHTML = 'Invalid';
        return false;
    }
    else{
        document.getElementById('mesage').style.color = 'green';
        document.getElementById('mesage').innerHTML = 'Valid';
        return true;
	}

}

$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});