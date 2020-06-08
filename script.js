
function submitForm()
{ 
    var xhr; 
    try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
    catch (e) 
    {
        try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
        catch (e2) 
        {
           try {  xhr = new XMLHttpRequest();  }
           catch (e3) {  xhr = false;   }
         }
    }

    xhr.onreadystatechange  = function() 
    { 
       if ((xhr.readyState  == 4) && (xhr.status  == 200)) {
            console.log("ta reum")
        }
    }; 
 
   xhr.open("POST", "page6.php",  true); 
   xhr.send(null); 
} 

var bjr = document.getElementById('bonjour');
bjr.innerHTML = 'Bonjour';
