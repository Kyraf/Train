let close = document.getElementsByClassName('close');
let card = document.getElementsByClassName('card');
// for ( let x = 0; x < close.length; x++){
// 	close[x].addEventListener('click', function(e){
// 		e.target.parentElement.style.display = 'none';
// 		e.preventDefault();
// 		e.stopPropagation();		// --> event bubbling
// 	});
// }

// for ( let c = 0; c < card.length; c++){
// 	card[c].addEventListener('click', function(e){
// 		alert('ok');
// 	});
// }


//karena bisa ada event bubbling jadi function clicknya di pasang ke node parentnya dari elemen closenya saja agar
//codenya lebih simpel

let container = document.getElementsByClassName('container')[0];
container.addEventListener('click', function(e){
	// console.log(e.target);	// --> mencari tau apa yang di click di dalam container
	if (e.target.className == 'close'){
		e.target.parentElement.style.display = 'none';
	}

})