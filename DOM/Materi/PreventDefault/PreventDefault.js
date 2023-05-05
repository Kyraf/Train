let close = document.getElementsByClassName('close');
let card = document.getElementsByClassName('card');
for ( let x = 0; x < close.length; x++){
	close[x].addEventListener('click', function(e){
		e.target.parentElement.style.display = 'none';
		e.preventDefault();    // --> Prevent Default
	});
}