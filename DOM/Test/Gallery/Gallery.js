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
		main.classList.add('fade');
		setTimeout(function(){
			main.classList.remove('fade');
		}, 500);

		e.target.classList.add('active');
	}
})