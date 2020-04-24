function start(){
	var brancard1 = document.getElementById("brancard1");
	var brancard2 = document.getElementById("brancard2");

	brancard2.addEventListener("click", changeImage);
	brancard1.addEventListener("click", changeImage)
}

function changeImage(){
	brancard1.src="Images/patientBrancard.png";
}