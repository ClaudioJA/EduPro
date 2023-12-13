const dropdown = document.querySelector(".nav__dropdown");
const link = document.querySelector(".nav__dropdown--link");
const forum = document.querySelector(".form--forum");
const askBtn = document.querySelector(".forum--askbtn");
const answerBtn = document.querySelector("#btn-answer");
const questionForm = document.querySelector(".question__create");

const hiddenSwitch = (trigger, element) => {
    if(trigger == null | element == null){
        return
    }
    trigger.addEventListener("click", () => {
        console.log(trigger)
        console.log(element)
        let checkHidden = element.getAttribute("data-hidden");
        if(checkHidden == "true"){
            element.setAttribute("data-hidden", "false")
        }
        else{
            element.setAttribute("data-hidden", "true");
        }
    })

}

hiddenSwitch(link, dropdown);
hiddenSwitch(askBtn, forum);
hiddenSwitch(answerBtn, questionForm);