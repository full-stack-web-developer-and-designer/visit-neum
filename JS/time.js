var d = new Date()
  var vrijeme = d.getHours()
  if (vrijeme>=6 && vrijeme<11)
	{document.write("<h1>Dobro jutro," +  " dobrodošli u Neum..." + "</h1>");}
  else if(vrijeme>=11 && vrijeme<17)
	  {document.write("<h1>Dobar dan," +  " dobrodošli u Neum..." + "</h1>");}
  else
	  {document.write("<h1>Dobro veče," +  " dobrodošli u Neum..." + "</h1>");}