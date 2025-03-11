let slideindex=0
function moveSlide(n){
    const slides=document.querySelector('.slides');
    const totalslide=document.querySelectorAll('.slide').length;

    slideindex +=n;
    if(slideindex >=totalslide){slideindex =0;}
    if(slideindex < 0){slideindex = totalslide - 1;}
    slides.style.transform=`translateX(${-slideindex * 100}%)`;
}
function outside(){
    moveSlide(1);
}
setInterval(outside,3000)
// ///////////////////////////////////////////


// /////////////////////////header///////////////////////////








const arrow_up=document.querySelector('.arrow-up');

let chat=document.querySelector('.chat');

window.onscroll=function () {


if(scrollY >= 200){
    arrow_up.style.display='block';
}else{
    arrow_up.style.display='none';
}






}



arrow_up.onclick=function(){
    scroll({
        left :0,
        top:0,
        behavior:'smooth'
    })
}

function showopen(){
const showopen=document.querySelector('.nav2')
showopen.style.display='flex';
}


function showclose(){
    const showclose=document.querySelector('.nav2')

    showclose.style.display='none';
}

function showtranslate(){
    let trans=document.querySelector('.dropshow')
    trans.style.display='flex';
}

function closedrop(){
const closedrop=document.querySelector('.dropshow')
closedrop.style.display='none';
}


function showdrop(){
const closedrop=document.querySelector('.drop')
closedrop.style.display='flex';
}


function close_drop(){
const closedrop=document.querySelector('.drop')
closedrop.style.display='none';
}

// //////////////////////////////////////////////////









// //////////////////////////////////////////////








