var greetings = [ 
"<p class='pregled'>\"Trenutno ovaj sadržaj pregleda još 1 korisnik!\"</p>", 
"<p class='pregled'>\"Trenutno ovaj sadržaj pregledaju još 2 korisnika!\"</p>", 
"<p class='pregled'>\"Trenutno ovaj sadržaj pregledaju još 3 korisnika!\"</p>", 
"<p class='pregled'>\"Trenutno ovaj sadržaj pregledaju još 4 korisnika!\"</p>", 
"<p class='pregled'>\"Trenutno ovaj sadržaj pregleda još 5 korisnika!\"</p>"
];

setInterval(change, 8000);

function change() 
{
    var greeting_id = Math.floor(Math.random() * greetings.length);
    document.getElementById('a').innerHTML = greetings[greeting_id];
}


