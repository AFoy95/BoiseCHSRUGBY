function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("jpeg", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("jpeg");
    ev.target.appendChild(document.getElementById(data));
	$form.trigger('submit');
}