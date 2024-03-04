// for (let i = 0; i < 7; i++) {
//     let allpat = document.getElementById("pati");
//     let pationt = document.createElement("div");
//     let pationt_imgP = document.createElement("div");
//     let pationt_bu = document.createElement("div");
//     let imgg = document.createElement("img");
//     let para = document.createElement("p");
//     let text = document.createTextNode("loregvoiuhobjfehva7yuhfehv8uid");
//     let check_but = document.createElement("button");
//     let infor_but = document.createElement("button");
//     let text_che = document.createTextNode("فحص المريض");
//     let text_infor = document.createTextNode("بيانات المريض");
//     infor_but.className = "data-pationt";
//     check_but.className = "checkup open";
//     infor_but.appendChild(text_infor);
//     check_but.appendChild(text_che);
//     pationt_bu.appendChild(check_but);
//     pationt_bu.appendChild(infor_but);

//     pationt_imgP.appendChild(imgg);
//     para.appendChild(text);
//     pationt_imgP.appendChild(para);
//     pationt.className = "pationt";
//     imgg.src = "Img/human/3eba9b54d023f488041f36e0efdf7428.jpg";

//     pationt.appendChild(pationt_imgP);
//     pationt.appendChild(pationt_bu);
//     allpat.appendChild(pationt);
// }

let Checkup = document.getElementsByClassName("checkup");
let Pagee = document.getElementById("onclicc");
let PageBackk = document.getElementById("with-div");
let button_sub = document.getElementById("sub");

let x = false;
console.log(Checkup);
console.log(Pagee);
console.log(PageBackk);
console.log(button_sub);

// console.log(button_sub);
// console.log(PageBackCheckup);
for (i = 0; i < Checkup.length; i++) {
    Checkup[i].onclick = function () {
        x = true;
        // console.log(PageBackCheckup);
        Pagee.style.cssText = "display:block;";
        PageBackk.style.cssText = "display: flex;";
        // window.scroll({
        //     left: 0,
        //     top: 0,
        //     behavior: "smooth",
        // });
        // document.body.scroll
        // window.scrollto({
        //     left: 0,
        //     top: 0,
        //     behavior: "smooth"
        // });
    };
}
// window.onscroll = function () {
//     if (x === true) {
//         if (window.scrollY >= 0) {
//             window.scroll({
//                 left: 0,
//                 top: 0,
//                 behavior: "smooth",
//             });
//         }
//     }
// };
PageBackk.onclick = function () {
    x = false;
    Pagee.style.cssText = "display: none";
    PageBackk.style.cssText = "display: none";
    // document.body.scroll
};

button_sub.onclick = function () {
    x = false;
    // window.open("nurse.php");
    Pagee.style.cssText = "display: none";
    PageBackk.style.cssText = "display: none";
    // window.open("nurse.html", "_self");
};
let to_hid = document.getElementById("bbbb");
let this_hid = document.getElementById("ff");
this_hid.style.cssText = "display: none;";

console.log(to_hid.hasAttribute("checked"));
console.log(this_hid);

function to_hide() {
    if (to_hid.checked) {
        this_hid.style.cssText = "display: flex;";
        console.log(to_hid.hasAttribute("checked"));
    } else {
        this_hid.style.cssText = "display: none;";
        console.log(to_hid.hasAttribute("checked"));
    }
};

document.getElementById("hidd").style.cssText = "display: none;";

function to_hide2() {
    if (document.getElementById("v").checked) {
        document.getElementById("hidd").style.cssText = "display: flex;";
        console.log("vhbjlsck");
    } else {
        document.getElementById("hidd").style.cssText = "display: none;";
        console.log("vhbjlsck2222");


    }
}