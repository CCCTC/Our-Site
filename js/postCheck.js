window.onload = function() {
	unitCreateText = document.getElementsByName("unit");
	unitCreateBtn = document.getElementById("unitCreatorBtn");
	lessonEditorText = document.getElementsByName("lessonContent");
	//lessonEditorBtn = document.getElementById("lessonEditorBtn");
	
	unitCreateBtn.onclick = function(event) {
		if (unitCreateText.value == "") { //if name of unit is blank
			
			var errorSpan = document.getElementById("errorText1");
			
			if (errorSpan.childNodes >= 4) {
				var errorElement = document.createElement("p");
				var errorText = document.createTextNode("Please type in a unit name.");
				errorElement.appendChild(errorText);
				errorSpan.appendChild(errorElement);
			}

			event.preventDefault();
		}
	};
	
	/*lessonEditorBtn.onclick = function(event) {
		if (unitCreateText.value == "") {
			var errorSpan = document.getElementById("errorText2");
			
			if (errorSpan.childNodes >= 4) {
				var errorElement = document.createElement("p");
				var errorText = document.createTextNode("Please type in a unit name.");
				errorElement.appendChild(errorText);
				errorSpan.appendChild(errorElement);
			}

			event.preventDefault();
		}
	};*/
};