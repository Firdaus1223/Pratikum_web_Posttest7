const body = document.querySelector("body");
const toggle = document.querySelector("#toggle");
const sunIcon = document.querySelector(".toggle .bxs-sun");
const moonIcon = document.querySelector(".toggle .bx-moon");

toggle.addEventListener("change", () => {
    
    body.classList.toggle("dark");
    sunIcon.className = sunIcon.className == "bx bxs-sun" ? "bx bx-sun" : "bx bxs-sun";
    moonIcon.className = moonIcon.className == "bx bxs-moon" ? "bx bx-moon" : "bx bxs-moon";

});

toggle.addEventListener('click', function(){
    this.classList.toggle('fa-moon');
    if(this.classList.toggle('fa-sun')){
        body.style.transition='3s';
        alert("Anda akan beralih ke mode DarkMode");
        
    }
    else{
        body.style.transition='3s';
        alert("Anda akan beralih ke mode LightMode");
    }
})

document.getElementById("link").innerHTML =
"Number of links: " + document.links.length;

document.getElementById("p1").innerHTML =
"The href of the first link is " + document.links[0].href;

