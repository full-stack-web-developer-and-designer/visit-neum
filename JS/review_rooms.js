	/*var pregled = document.getElementById("main");
	x = Math.ceil(Math.random()*4); //random broj korisnika izmedju 1 i 4
	if(x==1){
		pregled.innerHTML += "<p id='pregled'>\"Trenutno ovaj objekat pregleda još " + x + " korisnik" + "!\"</p>"; //ispis na stranici
	} 
	else{
		pregled.innerHTML += "<p id='pregled'>\"Trenutno ovaj objekat pregledaju još " + x + " korisnika" + "!\"</p>"; //ispis na stranici
	}*/
	
var rooms = [ 
"<p class='pregled'>\"Trenutno ovaj objekat pregleda još 1 korisnik!\"</p>", 
"<p class='pregled'>\"Trenutno ovaj objekat pregledaju još 2 korisnika!\"</p>", 
"<p class='pregled'>\"Trenutno ovaj objekat pregledaju još 3 korisnika!\"</p>", 
"<p class='pregled'>\"Trenutno ovaj objekat pregledaju još 4 korisnika!\"</p>"
];
setInterval(change, 8000);

function change() 
{
    var room_id = Math.floor(Math.random() * rooms.length);
    document.getElementById('a').innerHTML = rooms[room_id];
}
