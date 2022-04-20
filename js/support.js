function errormsg(){
    let name = document.forms["support"]["nume"].value;
    let posta = document.forms["support"]["posta"].value;
    let help = document.forms["support"]["help"].value;

    if(name === ""){
        document.getElementById("errorNume").innerText = "Nu ați introdus numele";
        document.getElementById("name").style.borderColor = 'red' ;
        return false;
    }else{
        document.getElementById("errorNume").innerText = "";
        document.getElementById("name").style.borderColor = 'black' ;
    }

    if(posta === ""){
        document.getElementById("errorPosta").innerText = "Nu ați introdus poșta";
        document.getElementById("posta").style.borderColor = 'red' ;
        return false;
    }else{
        document.getElementById("errorPosta").innerText = "";
        document.getElementById("posta").style.borderColor = 'black' ;
    }

    if(help === ""){
        document.getElementById("errorHelp").innerText = "Nu ați introdus problema";
        document.getElementById("help").style.borderColor = 'red' ;
        return false;
    }else{
        document.getElementById("errorHelp").innerText = "";
        document.getElementById("name").style.borderColor = 'black' ;
    }
}

function succesmsg(){

}