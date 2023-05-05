function pilihan_Computer() {
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

function hasil(pilihan_Computer, pilihan_Orang){
	if (pilihan_Orang == pilihan_Computer) return 'SERI!';
	if (pilihan_Orang == 'gajah') return (pilihan_Computer == 'semut') ? 'KALAH!' : 'MENANG!';

	if (pilihan_Orang == 'semut') return (pilihan_Computer == 'gajah') ? 'MENANG!' : 'KALAH!';

	if (pilihan_Orang == 'orang') return (pilihan_Computer == 'gajah') ? 'KALAH!' : 'MENANG!' ;
}

let gajah = document.querySelector('.gajah');
// const orang = document.getElementByClassName('orang');
// const semut = document.getElementByClassName('semut');
gajah.addEventListener('click', function(){
	alert('ok');
})