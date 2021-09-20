

var slidImage = document.getElementById("mainImage"); // mainImage is ID 

var imageArray = ["img/fl23.jpg","img/intros.jpg","img/fl_12.jpg","img/Vase1.jpg",
				  "img/Vase2.jpg","img/Vase3.jpg","img/intro_7.jpg"];
var imageIndex = 0;

function changeImage() {
	slidImage.setAttribute("src",imageArray[imageIndex]);
	imageIndex++;
	if (imageIndex >= imageArray.length) {
		imageIndex = 0;
	}
}

// setInterval is in milliseconds
setInterval(changeImage,2000);