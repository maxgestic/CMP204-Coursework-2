function loadCont(){

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function (){

        if (this.readyState == 4 && this.status == 200){

            document.getElementById("content").innerHTML =
                this.responseText;

        }

    };

    xhttp.open("GET", "content.php", true);
    xhttp.send();

    var musicbutton = document.getElementById("musicbutton");
    musicbutton.remove();

}