let close = document.getElementsByClassName('close')[0];
let card = document.getElementsByClassName('card')[0];

close.addEventListener('click', function(){
	card.style.display('none');
});

// console.log(card);