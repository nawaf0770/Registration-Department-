// for (let i = 0; i < 7; i++) {


//     let pationt_card = document.createElement("div");
//     let div_info_card = document.createElement("div");
//     let div_button_card = document.createElement("div");
//     let img_card = document.createElement("img");
//     let para_card = document.createElement("p");
//     let button_showDiag_card = document.createElement("button");
//     let button_request_card = document.createElement("button");
//     pationt_card.className = "pationt";
//     img_card.src = "img/human/IMG_20230328_130600_427.jpg";
//     button_showDiag_card.className = "see-diag Checkup open";
//     button_request_card.className = "some-order data-pationt";

//     para_card.innerHTML = "<span><b>نواف محمد</b></span><br><span> <b>كبسه</b> </span>";
//     button_request_card.textContent = "عرض التشخيص";
//     button_showDiag_card.textContent = "هنلك طلب خدمة";

//     div_info_card.appendChild(img_card);
//     div_info_card.appendChild(para_card);

//     div_button_card.appendChild(button_showDiag_card);
//     div_button_card.appendChild(button_request_card);

//     pationt_card.appendChild(div_info_card);
//     pationt_card.appendChild(div_button_card);
//     console.log(pationt_card)
//     document.getElementById("all-card").appendChild(pationt_card);

// }











let PageDiagPat = document.getElementById("dignosis-for-pationt");
let PageOrderPat = document.getElementById("pationt-service");
let ButtPageDIagPat = document.getElementsByClassName("open")
let ButtPageServerPat = document.getElementsByClassName("data-pationt")
let PageBackk = document.getElementById("with-div");
let x = false
console.log(ButtPageServerPat.length);
for (i = 0; i < ButtPageServerPat.length; i++) {
    ButtPageServerPat[i].onclick = function () {
        x = true
        PageOrderPat.style.cssText = "display:flex;"
        PageBackk.style.cssText = "display:flex;"
        window.scroll({
            left: 0,
            top: 0,
            behavior: "smooth"
        });
        // document.body.scroll
        // window.scrollto({
        //     left: 0,
        //     top: 0,
        //     behavior: "smooth"
        // });
    }
}
for (i = 0; i < ButtPageDIagPat.length; i++) {
    ButtPageDIagPat[i].onclick = function () {
        x = true
        PageDiagPat.style.cssText = "display:flex;"
        PageBackk.style.cssText = "display:flex;"
        window.scroll({
            left: 0,
            top: 0,
            behavior: "smooth"
        });
        // document.body.scroll
        // window.scrollto({
        //     left: 0,
        //     top: 0,
        //     behavior: "smooth"
        // });
    }
}
// window.onscroll = function () {
//     if (x === true) {
//         if (window.scrollY >= 0) {
//             window.scroll({
//                 left: 0,
//                 top: 0,
//                 behavior: "smooth"
//             })
//         }
//     }
// }
PageBackk.onclick = function () {
    x = false;
    PageDiagPat.style.cssText = "display: none";
    PageOrderPat.style.cssText = "display: none";
    PageBackk.style.cssText = "display: none";
    // document.body.scroll
}