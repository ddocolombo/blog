window.addEventListener('load', function() {

    const button = document.querySelector('#menu button')
    const menu = document.querySelector('#menu ul');
    
    button.addEventListener('click', function() {
        menu.classList.toggle('hidde');
        console.log(menu.classList)
    })

})