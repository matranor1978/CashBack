
var x = document.getElementById("contactus");

var createform = document.createElement('form'); 
	createform.setAttribute("action", "");     
	createform.setAttribute("method", "post");  
	x.appendChild(createform);

var heading = document.createElement('h3'); 
	heading.innerHTML = "Ecrivez nous! ";  
	createform.appendChild(heading);

var line = document.createElement('hr');  
	createform.appendChild(line);

var namelabel = document.createElement('label'); 
	namelabel.innerHTML = "Votre nom : ";           
	createform.appendChild(namelabel);

var inputelement = document.createElement('input'); 
	inputelement.setAttribute("type", "text");  
	inputelement.setAttribute("name", "dname");
	createform.appendChild(inputelement);

var linebreak = document.createElement('br');
	createform.appendChild(linebreak);
        createform.appendChild(linebreak);


var emaillabel = document.createElement('label'); 
	emaillabel.innerHTML = "Votre Email : ";
	createform.appendChild(emaillabel);
        

var emailelement = document.createElement('input'); 
	emailelement.setAttribute("type", "text");
	emailelement.setAttribute("name", "demail");
	createform.appendChild(emailelement);

//var emailbreak = document.createElement('br');
//	createform.appendChild(emailbreak);
        

// Append Textarea
var messagelabel = document.createElement('label'); 
	messagelabel.innerHTML = "Votre Message : ";
	createform.appendChild(messagelabel);

var texareaelement = document.createElement('textarea'); 
	texareaelement.setAttribute("name", "dmessage");
	createform.appendChild(texareaelement);

//var messagebreak = document.createElement('br');
//	createform.appendChild(messagebreak);
        

// Append Submit Button
var submitelement = document.createElement('input'); 
	submitelement.setAttribute("type", "Valider");
	submitelement.setAttribute("name", "Valider");
	submitelement.setAttribute("value", "Valider");
	createform.appendChild(submitelement);
        
        