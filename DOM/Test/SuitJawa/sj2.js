function getPilihan_Computer() {
	const comp = Math.random();

	// if (comp < 0.34){
	// 	comp = 'gajah';
	// }
	// elseif (comp > 0.34 && comp < 0.67){
	// 	comp = 'orang';
	// }
	// else{
	// 	comp = 'semut';
	// }

	//atau
	if (comp < 0.34) return 'gajah';
	if (comp > 0.34 && comp < 0.67) return 'orang';
	return 'semut';
}

function getHasil(pilihan_Computer, pilihan_Orang){
	if (pilihan_Orang == pilihan_Computer) return 'SERI!';
	if (pilihan_Orang == 'gajah') return (pilihan_Computer == 'semut') ? 'KALAH!' : 'MENANG!';

	if (pilihan_Orang == 'semut') return (pilihan_Computer == 'gajah') ? 'MENANG!' : 'KALAH!';

	if (pilihan_Orang == 'orang') return (pilihan_Computer == 'gajah') ? 'KALAH!' : 'MENANG!';
}

// let gajah = document.getElementsByClassName('gajah')[0];
// //atau
// // let gajah = document.querySelector('.gajah');
// gajah.addEventListener('click', function() {
// 	let computer = getPilihan_Computer();
// 	let player = gajah.className; //gajah.classname untuk mengambil nama dari class, jika tidak pakai classname yang keambil imagenya
// 	let hasil = getHasil(computer, player);

// 	// console.log('komputer : ' + computer);
// 	// console.log('player : ' + player);
// 	// console.log('hasil : ' + hasil);


// 	let gambarHasil = document.getElementsByClassName('img-komputer')[0];
// 	gambarHasil.setAttribute('src', 'img/' + computer + '.png');

// 	let ketentuan = document.getElementsByClassName('info')[0];
// 	ketentuan.innerHTML = hasil;
// 	// console.log(gambarHasil);

	
// });

// let orang = document.getElementsByClassName('orang')[0];
// orang.addEventListener('click', function() {
// 	let computer = getPilihan_Computer();
// 	let player = orang.className;
// 	let hasil = getHasil(computer, player);


// 	let gambarHasil = document.getElementsByClassName('img-komputer')[0];
// 	gambarHasil.setAttribute('src', 'img/' + computer + '.png');

// 	let ketentuan = document.getElementsByClassName('info')[0];
// 	ketentuan.innerHTML = hasil;

	
// });

// let semut = document.getElementsByClassName('semut')[0];
// semut.addEventListener('click', function() {
// 	let computer = getPilihan_Computer();
// 	let player = semut.className;
// 	let hasil = getHasil(computer, player);


// 	let gambarHasil = document.getElementsByClassName('img-komputer')[0];
// 	gambarHasil.setAttribute('src', 'img/' + computer + '.png');

// 	let ketentuan = document.getElementsByClassName('info')[0];
// 	ketentuan.innerHTML = hasil;

	
// });

//atau

let select = document.querySelectorAll('li img');
select.forEach(function(gambar){
	gambar.addEventListener('click', function() {
		let computer = getPilihan_Computer();
		let player = gambar.className;
		let hasil = getHasil(computer, player);

		acak();

		setTimeout(function(){

		let gambarHasil = document.getElementsByClassName('img-komputer')[0];
		gambarHasil.setAttribute('src', 'img/' + computer + '.png');

		let ketentuan = document.getElementsByClassName('info')[0];
		ketentuan.innerHTML = hasil;

		let scoreComputer = document.getElementsByClassName('scoreComp')[0].innerHTML;
		let scoreUser = document.getElementsByClassName('scorePlayer')[0].innerHTML;

		if (hasil == 'MENANG!') {
			scoreUser++;
			document.getElementsByClassName('scorePlayer')[0].innerHTML = scoreUser;
		};
		if (hasil == 'KALAH!') {
			scoreComputer++;
			document.getElementsByClassName('scoreComp')[0].innerHTML = scoreComputer;
		};

		console.log('skor player = ' + scoreUser);
		console.log('skor komputer = ' + scoreComputer);

		// score();

		}, 1000);
	})
})

function acak(){
	gambarComputer = document.getElementsByClassName('img-komputer')[0];
	let semuaGambar = ['semut', 'orang' , 'gajah'];
	let waktuMulai = new Date().getTime();
	i = 0;
	setInterval(function(){
		if( new Date().getTime() - waktuMulai > 1000){
			clearInterval();
			return;
		}
		gambarComputer.setAttribute('src' , 'img/' + semuaGambar[i++] + '.png');
		if(i == semuaGambar.length) i = 0;
	}, 100)
}

function score(){
	let scoreComputer = 0
	let scoreUser = 0


	console.log('skor player = ' + scoreUser);
	console.log('skor komputer = ' + scoreComputer);
	console.log('hasil = ' + hasil);
}