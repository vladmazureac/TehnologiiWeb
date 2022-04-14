function searchbar(){
    let input, filter, ul, listofli, a, i, txtValue;
    input = document.getElementById("input");
    filter = input.value;
    ul = document.getElementById("search");
    listofli = ul.getElementsByTagName("li");
    for (i = 0; i < listofli.length; i++) {
        a = listofli[i].getElementsByTagName("a")[0];
        txtValue = a.textContent;
        if (txtValue.includes(filter)) {
            listofli[i].style.display = "";
        } else {
            listofli[i].style.display = "none";
        }
    }
}