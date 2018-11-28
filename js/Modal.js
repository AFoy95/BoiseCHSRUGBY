var modal = document.getElementById('myModal');
var card = document.getElementById('myPicture');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");

var picbtn = document.getElementById("myPic");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
picbtn.onclick = function(){
		card.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
	card.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal || event.target == card) {
        modal.style.display = "none";
		card.style.display = "none";
    }
}