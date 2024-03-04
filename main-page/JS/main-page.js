let butt = document.getElementById("log")
let my_div = document.getElementById("hid")
let my_back = document.querySelector(".with-div")
console.log(my_back)
var x = false
butt.onclick = function () {
    x = true
    my_div.style.cssText = "display: flex";
    my_back.style.cssText = "display: flex";
    window.scroll({
        left: 0,
        top: 0,
        behavior: "smooth"
    })
    // document.body.scroll
    window.scrollto({
        left: 0,
        top: 0,
        behavior: "smooth"
    });
}
window.onscroll = function () {
    if (x === true) {
        if (window.scrollY >= 0) {
            window.scroll({
                left: 0,
                top: 0,
                behavior: "smooth"
            })
        }
    }
}
my_back.onclick = function () {
    x = false;
    my_div.style.cssText = "display: none";
    my_back.style.cssText = "display: none";
    // document.body.scroll
}