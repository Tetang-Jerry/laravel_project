
const menus=document.getElementById("menus");
const menuicon=document.querySelector("#hamburger");
const closeicon=document.querySelector("#closeicon");
const links=document.querySelectorAll("li");



menuicon.addEventListener('click',()=>{
    menus.classList.remove("hidden");
    menuicon.classList.add("hidden");
    closeicon.classList.remove("hidden");

})

closeicon.addEventListener('click',()=>{
    menus.classList.add("hidden");
    menuicon.classList.remove("hidden");
    closeicon.classList.add("hidden");

})

links.forEach(element => {
    element.addEventListener('click',()=>{
        menus.classList.add("hidden");
        closeicon.classList.add("hidden");
        menuicon.classList.remove("hidden");
    })
});