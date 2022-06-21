function teste(){
    alert("TESTE")
}

function jogoteste(){
    alert("Função ativada")
    document.getElementById("teste").style.fontSize = "25px";
}

function imgNotFound(){

//     var img = document.getElementById("myImg");
//     img.onerror = function () { this.style.display = "none";
// }

$("img").error(function () { $(this).hide(); // or $(this).css({visibility:"hidden"});
});
alert("Função ativada")


}