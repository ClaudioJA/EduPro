const dropdown = document.querySelector(".nav__dropdown");
const link = document.querySelector(".nav__dropdown--link");

link.addEventListener("click", () => {
    let checkHidden = dropdown.getAttribute("data-hidden");
    if(checkHidden == "true"){
        dropdown.setAttribute("data-hidden", "false")
    }
    else{
        dropdown.setAttribute("data-hidden", "true");
    }
})