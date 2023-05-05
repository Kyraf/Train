// let close = document.getElementsByClassName('close')[0];
// let card = document.getElementsByClassName('card')[0];

// close.addEventListener('click', function(){
// 	card.style.display = 'none';
// });


//DOM Traversal
let close = document.getElementsByClassName('close');
let card = document.getElementsByClassName('card');
for ( let x = 0; x < close.length; x++){
	close[x].addEventListener('click', function(e){
		// alert('tombol ke ' + x);

		// card[x].style.display = 'none'; // --> jika tidak menggunakan DOM Traversal
		
		// atau
		
		// close[x].parentElement.style.display = 'none';
		
		// atau
		
		e.target.parentElement.style.display = 'none';
		
		// console.log(e.target);
	});
}

//atau

// close.forEach(function(el){
// 	el.addEventListener('click', function(e){
// 		e.target.parentElement.style.display = 'none';
// 	});
// });					//entah kenapa gabisa
// console.log(close);




// Traversal Method
let nama = document.getElementsByClassName('nama')[0];
console.log(nama); 											//nama kartu
console.log(nama.parentElement); 							//parent dari element nama kartu
console.log(nama.parentNode); 								//parent dari node nama kartu
console.log(nama.parentElement.parentElement);				//parent dari parent dari nama kartu(kakeknya dari nama kartu)
console.log(nama.nextSibling);								//node yang setara dengan nama kartu tapi karena setelah <span class="nama">Kyraf</span> ada enter jadi enter yang dibaca
console.log(nama.previousSibling);							//node yang setara dengan nama kartu tapi karena setelah <span class="nama">Kyraf</span> ada enter jadi enter yang dibaca
console.log(nama.nextElementSibling);						//element yang setara dengan nama kartu(saudara kandung)
console.log(nama.nextElementSibling.nextElementSibling);	//element yang setara dengan nama kartu(saudara kandung)
console.log(nama.previousElementSibling);					//element yang setara dengan nama kartu(saudara kandung)