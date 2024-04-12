let afbeelding = document.getElementsByClassName('slide');
let a = 1;

function slideShow(){
    a++;
    if(a == 2){
        afbeelding[0].style.display = "flex";
        afbeelding[1].style.display = "none";
        afbeelding[2].style.display = "none";
    }
    if(a == 3){
        afbeelding[0].style.display = "none";
        afbeelding[1].style.display = "flex";
        afbeelding[2].style.display = "none";
    }    
    if(a == 4){
        afbeelding[0].style.display = "none";
        afbeelding[1].style.display = "none";
        afbeelding[2].style.display = "flex";
        a = 1;
    }
}

setInterval(slideShow, 1000);




