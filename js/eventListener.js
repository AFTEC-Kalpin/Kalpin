/* NAV BAR LEFT */

document.getElementById('menu').addEventListener('change', (event) => {
    if(event.originalTarget.checked){
        document.getElementById('opaciting').style.display = "block"
        setTimeout(() => document.getElementById('opaciting').style.opacity = 0.7,1) 
    }
    else{
        setTimeout(() => document.getElementById('opaciting').style.display = "none",500) 
        document.getElementById('opaciting').style.opacity = 0;
    }
})
document.getElementById('opaciting').addEventListener('click', (event) => {
    if(event.originalTarget.style.display != "none"){
        setTimeout(() => event.originalTarget.style.display = "none",500) 
        event.originalTarget.style.opacity = 0;
        document.getElementById('menu').checked = false
    }
})
