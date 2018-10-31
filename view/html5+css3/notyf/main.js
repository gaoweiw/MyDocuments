(function(){
  var alertMessages = [
	"I'm an alert",
	"It's me again :D",
	"Yep, I can stack on top of previous alerts",
	"Let's start over"
  ]
  var currentAlert = 0;
  var successMessages = [
	"Hey there!",
	"Success! Yuhu!!",
	"It's me again :D",
	"You can show me several times. I won't hide previous messages."
  ]
  var currentSuccess = 0;
  var notyf = new Notyf({delay:3000});
  document.addEventListener('DOMContentLoaded',function(){
	document.getElementById('success-btn').addEventListener('click',function(){
	if(currentSuccess>3){
		currentSuccess = 0;
	}
	  notyf.confirm(successMessages[currentSuccess]);
	  	currentSuccess++;
	});

	document.getElementById('alert-btn').addEventListener('click',function(){
	  if(currentAlert>3){
		currentAlert = 0;
	  }
	  notyf.alert(alertMessages[currentAlert]);
	  currentAlert++;
	});
  });
})();
