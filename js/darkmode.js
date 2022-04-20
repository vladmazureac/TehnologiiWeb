function darkmode(){
    const wasDarkmode = localStorage.getItem('darkmode') === 'true';
    localStorage.setItem('darkmode', !wasDarkmode);

    let body = document.body;
    body.classList.toggle('dark-mode', !wasDarkmode);

}

function onload() {
    document.body.classList.toggle('dark-mode', localStorage.getItem('darkmode') === 'true');
    if(localStorage.getItem("darkmode") !== 'true')
        document.getElementById("btn").setAttribute("checked", "");
}

