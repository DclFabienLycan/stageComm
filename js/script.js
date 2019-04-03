// function affiche () {
//     var aff = document.getElementsByClassName('textAff');
//     aff[0].style.display= "none";
//     setTimeout(function() {
//         aff[0].style.display= "block";
//         setTimeout(function() {
//             aff[0].style.display= "none";
//         }, 3000)
//     }, 2000);

//     aff[1].style.display= "none";
//     setTimeout(function() {
//         aff[1].style.display= "block";
//         setTimeout(function() {
//             aff[1].style.display= "none";
//         }, 3500)
//     }, 6500);

//     aff[2].style.display= "none";
//     setTimeout(function() {
//         aff[2].style.display= "block";
//         setTimeout(function() {
//             aff[2].style.display= "none";
//         }, 3000)
//     }, 11500);
// }

// affiche();

// Ici faut s'amuser à faire de l'Ajax !! et pas pour laver les carreaux !!!

let httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(argument) {
        if (httpRequest.readyState === 4) {
            
        }
    }
    httpRequest.open('GET', '../', true);
    httpRequest.send();