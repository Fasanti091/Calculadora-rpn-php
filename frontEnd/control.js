//---Listeners----------------------------------------------------------
document.getElementById("tray").addEventListener("keypress", readTray);
//----------------------------------------------------------------------
//---Variables globales-------------------------------------------------
var stack=[]; //Pila de datos utilizable
//----------------------------------------------------------------------

//Funciones de controller-----------------------------------------------
//Esta función sirve para leer el contenido del input tray....
function readTray(){
    var item="";
    if(event.keyCode==13){
        if(document.getElementById("tray").value=="sumar"){
            send(stack,document.getElementById("tray").value);
        }
        else if(document.getElementById("tray").value=="restar"){
            send(stack,document.getElementById("tray").value);
        }
        else if(document.getElementById("tray").value=="multiplicar"){
            send(stack,document.getElementById("tray").value);
        }
        else if(document.getElementById("tray").value=="dividir"){
            send(stack,document.getElementById("tray").value);
        }
        else if(document.getElementById("tray").value=="sumarall"){
            send(stack,document.getElementById("tray").value);
        }
        else if(document.getElementById("tray").value=="restarall"){
            send(stack,document.getElementById("tray").value);
        }
        else if(document.getElementById("tray").value=="multiplicarall"){
            send(stack,document.getElementById("tray").value);
        }
        else if(document.getElementById("tray").value=="dividirall"){
            send(stack,document.getElementById("tray").value);
        }
        else if(document.getElementById("tray").value=="ordenar"){
            send(stack,document.getElementById("tray").value);
        }
        else{
            stack.push(document.getElementById("tray").value);
            document.getElementById("term").innerHTML=toStringStack();
            document.getElementById("tray").value="";
        }
        
    }
   
}

//Esta función sirve para convertir el stack en String----
function toStringStack(){
    var strStack="";
    for(i=0; i<stack.length; i++){
        strStack+=stack[i]+"\n";
    }
    return strStack;
}
//---Fin de funciones de operación---------------------------------------
