let isOpen = false;

function ready() {
    isOpen = false;
  }
document.addEventListener("DOMContentLoaded", ready);
document.querySelector('#aboutID').addEventListener('click', goTo)
document.querySelectorAll('.menu ul li a').forEach(el => {
    el.addEventListener('click', toggleMenu)
})
$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('nav').addClass('navy');
    }
    // else{
    //   $('nav').removeClass('navy');
    // }
})

function toggleMenu(){
    const menu = document.querySelector('#navID');
    console.log(menu);

    if(!isOpen){
        isOpen = true;
        menu.classList.add('showing');
    }
    else {
        isOpen = false;
        menu.classList.remove('showing');
    }
}


//   js ` - interpolation
function goTo() {
    if(!window.location.href.includes('index.php')){
        
        window.location.replace('index.php#content');
    }
  document.querySelector(`#content`).scrollIntoView({
    behavior: 'smooth'
  });
}