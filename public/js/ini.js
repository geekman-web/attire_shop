// Select the canvas an make it accesible for all the snippets of this article
let canvas = new fabric.Canvas('tshirt-canvas');

/**
 * Method that defines a picture as background image of the canvas.
 * 
 * @param {String} imageUrl      The server URL of the image that you want to load on the T-Shirt.
 *
 * @return {void} Return value description.
 */
function updateTshirtImage(imageURL){
    // If the user doesn't pick an option of the select, clear the canvas

    // Create a new image that can be used in Fabric with the URL
    fabric.Image.fromURL(imageURL, function(img) {
        // Define the image as background image of the Canvas, no more
        // Handle picture as object instead    
        img.scaleToHeight(300);
        img.scaleToWidth(300); 
        canvas.centerObject(img);
        canvas.add(img);
        canvas.renderAll();
	    
    });
}


colors = document.getElementsByClassName("color-item");

for (var i = 0; i < colors.length; i++) {
	colors[i].addEventListener("click", function(){
	    document.getElementById("tshirt-div").style.backgroundColor = this.id;
	}, false);
}


// When the user clicks on upload a custom picture
document.getElementById('tshirt-custompicture').addEventListener("change", function(e){
    var reader = new FileReader();
    
    reader.onload = function (event){
        var imgObj = new Image();
        imgObj.src = event.target.result;

        // When the picture loads, create the image in Fabric.js
        imgObj.onload = function () {
            var img = new fabric.Image(imgObj);

            img.scaleToHeight(300);
            img.scaleToWidth(300); 
            canvas.centerObject(img);
            canvas.add(img);
            canvas.renderAll();
        };
    };

    // If the user selected a picture, load it
    if(e.target.files[0]){
        reader.readAsDataURL(e.target.files[0]);
    }
}, false);

// When the user selects a picture that has been added and press the DEL key
// The object will be removed !
document.addEventListener("keydown", function(e) {
    var keyCode = e.keyCode;

    if(keyCode == 46){
        console.log("Removing selected element on Fabric.js on DELETE key !");
        canvas.remove(canvas.getActiveObject());
    }
}, false);
/*
shirt_front = document.getElementById("front_preview").addEventListener("click", function () {
	document.getElementById("tshirt-backgroundpicture").setAttribute("src", "/data/page/Shirt_Front.png");
});

shirt_back = document.getElementById("back_preview").addEventListener("click", function () {
	document.getElementById("tshirt-backgroundpicture").setAttribute("src", "/data/page/Shirt_Back.png");
});*/


