var toolsDiv = null;

//PreLogin
//********************************

function createPreLoginToolsDiv()
{
	toolsDiv = document.createElement('div');
	toolsDiv.setAttribute("class", "tools");

	popup.appendChild(toolsDiv);

}

//Logged
//********************************

function createLoggedToolsDiv()
{
	toolsDiv = document.createElement('div');
	toolsDiv.setAttribute("class", "tools");

	popup.appendChild(toolsDiv);

	document.getElementsByClassName("tools")[0].appendChild(document.createTextNode(" - "));

	createDeleteLink();
}

function createDeleteLink()
{
	var deleteLink = document.createElement('a');
	deleteLink.setAttribute("id", "delete_link");
	deleteLink.setAttribute("href", "#");
	deleteLink.setAttribute("onclick", "AjaxManager.prepareAccountDeletion();");
	var deleteLinkText = document.createTextNode("Delete account");
	deleteLink.appendChild(deleteLinkText);

	toolsDiv.appendChild(deleteLink);
}

//Game over
//********************************

function createGameOverToolsDiv()
{
	toolsDiv = document.createElement('div');
	toolsDiv.setAttribute("class", "tools");
	toolsDiv.setAttribute("id", "gameover_tools");

	popup.appendChild(toolsDiv);

	document.getElementsByClassName("tools")[0].appendChild(document.createTextNode(" - "));

	createGameOverDeleteLink();
}

function createGameOverDeleteLink()
{
	var deleteLink = document.createElement('a');
	deleteLink.setAttribute("id", "gameover_delete_link");
	deleteLink.setAttribute("href", "./php/deleteAccount.php");
	var deleteLinkText = document.createTextNode("Delete account");
	deleteLink.appendChild(deleteLinkText);

	toolsDiv.appendChild(deleteLink);
}