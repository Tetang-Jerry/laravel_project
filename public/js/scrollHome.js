let ScrollHome=document.querySelector('#scroll-home');
let burger=document.querySelector('#burger');
let burger_nav=document.querySelector('#burger_nav');


window.addEventListener('scroll',()=>{
    if(window.scrollY >= 50){
        ScrollHome.classList.add('fixed');
        ScrollHome.classList.add('w-full');
        ScrollHome.classList.add('top-0');
        ScrollHome.classList.add('bg-white');
        ScrollHome.classList.add('left-0');
        ScrollHome.classList.add('px-40');
        ScrollHome.classList.add('shadow-xl');


    }else{
        ScrollHome.classList.remove('fixed');
        ScrollHome.classList.remove('w-full');
        ScrollHome.classList.remove('top-0');
        ScrollHome.classList.remove('bg-white');
        ScrollHome.classList.remove('left-0');
        ScrollHome.classList.remove('px-40');
        ScrollHome.classList.remove('shadow-xl');

    }
})
burger.addEventListener('click',()=>{

    burger_nav.classList.toggle('max-md:right-0');
    burger_nav.classList.toggle('max-md:hidden');

})


