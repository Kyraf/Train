let thumb = document.getElementsByClassName('thumb');
let main = document.getElementsByClassName('jumbo')[0];
let container = document.getElementsByClassName('container')[0];

//	hasil percobaan sendiri
// container.addEventListener('click', function(e){
// 	if (e.target.className == 'thumb') {
// 		console.log(e.target);
// 		main.setAttribute('src'. 'e.target.src');
// 	};
// });

//hasil di yt
// container.addEventListener('click', function(e){
// 	if (e.target.className == 'thumb'){
// 		main.src = e.target.src;
// 	}
// })


//tambahan

container.addEventListener('click', function(e){
	if (e.target.className == 'thumb'){
		main.src = e.target.src;
		main.classList.add('fade');		// --> biar pas ganti gambar ada animasi fadenya
		setTimeout(function(){
			main.classList.remove('fade');		// --> biar animasi fadenya ga 1 kali doang
		}, 500);

		for(let x = 0; x < thumb.length; x++){
			// if (thumb[x].classList.contains('active')){
			// 	thumb[x].classList.remove('active');
			// }
			//atau
			thumb[x].className = 'thumb';	// --> biar kalo pindah gambar yang di selectnya transparansinya kembali seperti semula
		}

		e.target.classList.add('active');	// --> biar gambar di thumbnail yang sedang di selectnya berbeda transparansinya
	}
})