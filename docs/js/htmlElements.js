//Forms
//********************************

//Footer
//********************************

function createFooter()
{
	footer = document.createElement('footer');
	var footerParagraph = document.createElement('p');
	footer.appendChild(footerParagraph);

	footerParagraph.appendChild(document.createTextNode("A game made by "));

	var myHomePage = document.createElement('a');
	myHomePage.setAttribute("href", "https://marcomicera.github.io/");
	var myHomePageLinkText = document.createTextNode("Marco Micera");
	myHomePage.appendChild(myHomePageLinkText);
	footerParagraph.appendChild(myHomePage);
	footerParagraph.appendChild(document.createTextNode(" - "));

	var howtoplayLink = document.createElement('a');
	howtoplayLink.setAttribute("href", "./html/howtoplay.html");
	var howtoplayLinkText = document.createTextNode("How to play");
	howtoplayLink.appendChild(howtoplayLinkText);
	footerParagraph.appendChild(howtoplayLink);

	document.body.appendChild(footer);
}