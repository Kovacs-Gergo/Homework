window.onload = function(){
	check();
}

function check() {
	var correct = true;

	var textarea = document.getElementById("textarea");
	if (textarea) {
		if (textarea.value.length==0) {
			correct = false;
			textarea.style.background = '#f99';
            document.getElementById("text").innerHTML="<svg><image class='change-my-color' xlink:href='https://svgur.com/i/AFM.svg' width='15' height='15' src='ppngfallback.png' /></svg>";
		} else{
			textarea.style.background = '#9f9';
            correct = true;
            document.getElementById("text").innerHTML="&#9989;";
        }
	}

	var email = document.getElementById("email");
	if (email) {
		var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if (!checkPattern.test(email.value)) {
			correct = false;
			email.style.backgroundColor = '#f99';
            document.getElementById("e_mail").innerHTML="<svg><image class='change-my-color' xlink:href='https://svgur.com/i/AFM.svg' width='15' height='15' src='ppngfallback.png' /></svg>";
		} else{
			email.style.backgroundColor = '#9f9';
            correct = true;
            document.getElementById("e_mail").innerHTML="&#9989;";
        }
	}

	var submit = document.getElementById("submit");
	if (textarea.value.length!=0 && checkPattern.test(email.value)) submit.disabled = false;
	else submit.disabled = true;

	return correct;
}