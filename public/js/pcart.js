document
  .addEventListener("DOMContentLoaded",
    function () {
      setTimeout(() => {
        attrFields = document.getElementsByClassName("upd_attr");

        for (let i = 0; i < attrFields.length; i++) {
//console.log(attrFields[i].getAttribute("name"));
//      if (checkboxes[i].getAttribute("name") == "form_attr[1]") {
        attrFields[i].addEventListener("change", (event) => {
  		console.log(`You like ${event.target.value}`);

		checkboxes = document.getElementsByName(event.srcElement.getAttribute("aim_for"));

		for (let j = 0; j < checkboxes.length; j++) {
				var option = checkboxes[j].value;
			var optionName = option.substring(0,option.indexOf("_"));

			if (event.target.value == optionName) {
				checkboxes[j].checked = true;
			}
		}
	});

//      }



        }

//	var session = document.getElementById("sess");
//        var rand = Math.random() * (500 - 0) + 0;console.log(rand);
//        session.value = rand;

	//Hide the checkboxes
	attrs = document.getElementsByClassName("radio-inline");
	startHidden = 3;
        for (let c = 0; c < attrs.length; c++) {
		if (attrs[c].childNodes[0].getAttribute("name") == "form_attr[3]") {
//			attrs[c].setAttribute("hidden", "");
		} else if (attrs[c].childNodes[0].getAttribute("name") == "form_attr[4]") {
//			attrs[c].setAttribute("hidden", "");
		}
                console.log(attrs[c].childNodes[0].getAttribute("name"));
        }

      }, 1000);

	//Set a code for the session to match it later
	var session = document.getElementById("sess_id");
	var rand = Math.floor(Math.random() * 127);
	session.value = rand;
	sessionStorage.setItem('code', rand);

	//Handle Image Upload
	img_form = document.getElementById("img_upld");
	img_form.addEventListener('change', upload);

	function upload(event) {
	const form = event.currentTarget;
	const url = new URL(form.action);
	const formData = new FormData(form);

	const fetchOptions = {
		method: form.method,
		body: formData,
	};

	fetch(url, fetchOptions);
	
	event.preventDefault();
	}

    });

//const selectE = document.getElementsByClassName("upd_attr");

//selectE.addEventListener("change", (event) => {
//  console.log(`You like ${event.target.value}`);
//});


function activeStatus (event) {

  let activeItem = event.srcElement.classList.contains("itm-active");

  if (activeItem) {} else {

    var selectedShirt = event.srcElement.value;  console.log(selectedShirt);
    var shirtAtt = selectedShirt.substring(0,selectedShirt.indexOf("_"));

    shirtAtt = shirtAtt.charAt(0).toUpperCase() + shirtAtt.slice(1);

    if (event.srcElement.getAttribute("name") == "form_attr[1]") {
      attrField = document.getElementById("use_color");
    } else if (event.srcElement.getAttribute("name") == "form_attr[2]") {
      attrField = document.getElementById("use_size");
    }

    attrField.value = shirtAtt;
  }
}

function saveFields () {

}

