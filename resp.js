burger=document.querySelector('.burger');
navbar=document.querySelector('.navbar');
navList=document.querySelector('.nav-list');
rightnav=document.querySelector('.rightnav');


burger.addEventListener('click',()=>{
    rightnav.classList.toggle('v-nav-resp');
    navList.classList.toggle('v-nav-resp');
    navbar.classList.toggle('h-nav-resp');
})