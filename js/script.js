let profileDropdownList = document.querySelector(".profile-dropdown-list");
let btn = document.querySelector(".profile-dropdown-btn");
/*Esconder ou abrir dropdown*/
const toggle=()=>profileDropdownList.classList.toggle("active")
//esconder o dropdown se tiver algum click fora dos botões
window.addEventListener('click',function(e){
    if(!btn.contains(e.target))profileDropdownList.classList.remove('active')
});

let bot1 = document.querySelector(".bot1");
let btn2 = document.querySelector(".btn2");
let btn4 = document.querySelector(".btn4");


let blk1 = document.querySelector(".blk1");
let blk2 = document.querySelector(".blk2");
let blk4 = document.querySelector(".blk4");

bot1.addEventListener("click", function(){
    bot1.classList.add("ativar");
    btn2.classList.remove("ativar");
    btn4.classList.remove("ativar");

    blk1.style.display = 'block';
    blk2.style.display = 'none';
    blk4.style.display = 'none';
});

btn2.addEventListener("click", function(){
    bot1.classList.remove("ativar");
    btn2.classList.add("ativar"); 
    btn4.classList.remove("ativar");

    blk2.style.display = 'block';  
    blk1.style.display = 'none';
    blk4.style.display = 'none';
});
btn4.addEventListener("click", function(){
    btn4.classList.add("ativar");
    bot1.classList.remove("ativar");
    btn2.classList.remove("ativar");

    blk4.style.display = 'block';  
    blk1.style.display = 'none';
    blk2.style.display = 'none';
    blk3.style.display = 'none';
});

function toggleDetails(elementId) {
    var element = document.getElementById(elementId);
    if (element.style.display === "none" || element.style.display === "") {
      element.style.display = "block";
    } else {
      element.style.display = "none";
    }
  }

