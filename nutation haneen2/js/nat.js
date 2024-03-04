let informm = document.getElementById("info");
let food = document.getElementsByClassName("main");
let whit = document.getElementsByClassName("container");
let butt_display_food = document.getElementById("dis-info");
let bot_cotrol = document.getElementById("but-after-info")
console.log(informm);
console.log(food[0]);
console.log(whit);
console.log(butt_display_food);
let x = false;
for (i = 0; i < document.getElementsByClassName("pat_button").length; i++) {

    console.log(document.getElementsByClassName("pat_button")[i])
    document.getElementsByClassName("pat_button")[i].onclick = function () {
        whit[0].style.cssText = "display: block";
        informm.style.cssText = "display: block";
        bot_cotrol.style.cssText = "display: block";


    }
}

document.getElementById("dis-food").onclick = function () {
    console.log("fppd")
    console.log(food[0]);

    whit[0].style.cssText = "background: #ff000000; box-shadow:0 0 0"

    informm.style.cssText = "display: none";
    food[0].style.cssText = "display: block";
    bot_cotrol.style.cssText = "display: none";
}

console.log(document.getElementById("back"))
document.getElementById("back").onclick = function () {
    whit[0].style.cssText = "display: none";
    informm.style.cssText = "display: none";
    bot_cotrol.style.cssText = "display: none";
    food.style.cssText = "display: none";
}