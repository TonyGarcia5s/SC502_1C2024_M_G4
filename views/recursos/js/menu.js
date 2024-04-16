(function(){
    const openButton = document.querySelector('.nav_menu');
    const menu = document.querySelector('.nav_link');
    const closeMenu = document.querySelector('.nav_close');
    
    openButton.addEventListener('clic', ()=>{
    menu.classList.add('nav_link--show');
    });
    
    closeMenu.addEventListener('click', ()=>{
    menu.ClassList.remove('nav_link--show');
    })
    
    menu.classList.toggle()
    
    })();