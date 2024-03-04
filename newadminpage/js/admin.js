let doctor = document.getElementById("card-for-doctor");
let nurse = document.getElementById("card-for-nurse");
let nat_doctor = document.getElementById("card-for-nat-doctor");
let pationt = document.getElementById("card-for-pationt");

let doctor_butt = document.getElementById("a");
let nurse_butt = document.getElementById("b");
let nat_doctor_butt = document.getElementById("c");
let pationt_butt = document.getElementById("d");
let aa = document.getElementById("aa");
// doctor.style.cssText = "display:none;";
// nurse.style.cssText = "display:none;";
// nat_doctor.style.cssText = "display:none;";
// pationt.style.cssText = "display:none;";
let a = 0,
    b = 0,
    c = 0,
    d = 0
console.log(a, b, c, d)

doctor_butt.onclick = function () {
    if (a === 0) {
        doctor.style.cssText = "display:flex;opacity: 1;";
        nurse.style.cssText = "display:flex; opacity: 0;";
        nat_doctor.style.cssText = "display:flex;opacity: 0;";
        pationt.style.cssText = "display:flex;opacity: 0;";
        a++;
    } else {
        doctor.style.cssText = "display:none;";
        nurse.style.cssText = "display:none;";
        nat_doctor.style.cssText = "display:none;";
        pationt.style.cssText = "display:none;";
        a = 0;
    }
}
nurse_butt.onclick = function () {
    if (b === 0) {
        doctor.style.cssText = "display:flex;opacity: 0;";
        nurse.style.cssText = "display:flex;opacity: 1;";
        nat_doctor.style.cssText = "display:flex;opacity: 0;";
        pationt.style.cssText = "display:flex;opacity: 0;";
        b++;
        console.log("t")
        console.log(b)
    } else {
        console.log("f");
        doctor.style.cssText = "display:none;";
        nurse.style.cssText = "display:none;";
        nat_doctor.style.cssText = "display:none;";
        pationt.style.cssText = "display:none;";
        b = 0;
    }

}
nat_doctor_butt.onclick = function () {
    if (c === 0) {
        doctor.style.cssText = "display:flex;opacity: 0;";
        nurse.style.cssText = "display:flex;opacity: 0;";
        nat_doctor.style.cssText = "display:flex;opacity: 1;";
        pationt.style.cssText = "display:flex;opacity: 0;";
        c++;
        console.log("t")
        console.log(b)
    } else {
        console.log("f");
        doctor.style.cssText = "display:none;";
        nurse.style.cssText = "display:none;";
        nat_doctor.style.cssText = "display:none;";
        pationt.style.cssText = "display:none;";
        c = 0;
    }
}
pationt_butt.onclick = function () {
    if (d === 0) {
        doctor.style.cssText = "display:flex;opacity: 0;";
        nurse.style.cssText = "display:flex;opacity: 0;";
        nat_doctor.style.cssText = "display:flex;opacity: 0;";
        pationt.style.cssText = "display:flex;opacity: 1;";
        d++;
        console.log("t")
        console.log(b)
    } else {
        console.log("f");
        doctor.style.cssText = "display:none;";
        nurse.style.cssText = "display:none;";
        nat_doctor.style.cssText = "display:none;";
        pationt.style.cssText = "display:none;";
        d = 0;
    }
}

// console.log(doctor);
// console.log(nurse);
// console.log(nat_doctor);
// console.log(pationt);


// console.log(nurse_butt);
// console.log(nat_doctor_butt);
// console.log(pationt_butt);
let check_type_user_in_add = document.getElementById("depart");
// let type = document.getElementById("type");
let section = document.getElementById("section-for-info"); //القسم
let period = document.getElementById("period"); //الفترة
let locationn = document.getElementById("location"); //الموقع
let status = document.getElementById("status"); // الحالة المرضية
let age = document.getElementById("age")
// console.log(type);
// console.log(section);
// console.log(period);
// console.log(locationn);
// if (check_type_user_in_add.value === "doctor") {
//     // console.log("doctor");
//     age.style.cssText = "display:none;";
//     status.style.cssText = "display:none;";
//     type.style.cssText = "display:none;";
//     section.style.cssText = "display:none;";
//     period.style.cssText = "display:none;";
//     locationn.style.cssText = "display:flex;";
// } else if (check_type_user_in_add.value === "nat-doctor" || check_type_user_in_add.value === "nurse") {
//     age.style.cssText = "display:none;";
//     status.style.cssText = "display:none;";
//     type.style.cssText = "display:none;";
//     section.style.cssText = "display:none;";
//     period.style.cssText = "display:none;";
//     locationn.style.cssText = "display:flex;";
// } else {
//     // console.log("pationt")
//     age.style.cssText = "display:flex;";
//     status.style.cssText = "display:flex;";
//     type.style.cssText = "display:none;";
//     section.style.cssText = "display:none;";
//     period.style.cssText = "display:none;";
//     locationn.style.cssText = "display:flex;";
// }
check_type_user_in_add.onmouseleave = function () {
    if (check_type_user_in_add.value === "none") {
        document.getElementById("name").style.cssText = "display:none;";
        document.getElementById("age").style.cssText = "display:none;";
        document.getElementById("status").style.cssText = "display:none;";
        // document.getElementById("type").style.cssText = "display:none;";
        document.getElementById("section-for-info").style.cssText = "display:none;";
        document.getElementById("period").style.cssText = "display:none;";
        document.getElementById("location").style.cssText = "display:none;";
        document.getElementById("phone").style.cssText = "display:none;";
        document.getElementById("six").style.cssText = "display:none;";
        document.getElementById("contin").style.cssText = "display:none;";
        document.getElementById("ggga").style.cssText = "display:none;";
    } else if (check_type_user_in_add.value === "doctor") {
        // console.log("doctor");
        // age.style.cssText = "display:none;";
        // status.style.cssText = "display:none;";
        // type.style.cssText = "display:flex;";
        // section.style.cssText = "display:flex;";
        // period.style.cssText = "display:flex;";
        // locationn.style.cssText = "display:flex;";
        document.getElementById("name").style.cssText = "display:flex;";
        document.getElementById("age").style.cssText = "display:none;";
        document.getElementById("status").style.cssText = "display:none;";
        // document.getElementById("type").style.cssText = "display:none;";
        document.getElementById("section-for-info").style.cssText = "display:flex;";
        document.getElementById("period").style.cssText = "display:flex;";
        document.getElementById("location").style.cssText = "display:flex;";
        document.getElementById("phone").style.cssText = "display:flex;";
        document.getElementById("six").style.cssText = "display:flex;";
        document.getElementById("contin").style.cssText = "display:flex;";
        document.getElementById("ggga").style.cssText = "display:none;";


    } else if (check_type_user_in_add.value === "nutrition" ) {
        // status.style.cssText = "display:none;";
        // age.style.cssText = "display:none;";
        // type.style.cssText = "display:none;";
        // section.style.cssText = "display:none;";
        // period.style.cssText = "display:flex;";
        // locationn.style.cssText = "display:flex;";
        document.getElementById("name").style.cssText = "display:flex;";
        document.getElementById("age").style.cssText = "display:none;";
        document.getElementById("status").style.cssText = "display:none;";
        // document.getElementById("type").style.cssText = "display:none;";
        document.getElementById("section-for-info").style.cssText = "display:none;";
        document.getElementById("period").style.cssText = "display:flex;";
        document.getElementById("location").style.cssText = "display:flex;";
        document.getElementById("phone").style.cssText = "display:flex;";
        document.getElementById("six").style.cssText = "display:flex;";
        document.getElementById("contin").style.cssText = "display:flex;";
        document.getElementById("ggga").style.cssText = "display:none;";
        

    } else if(check_type_user_in_add.value === "nurse")
    {
        document.getElementById("name").style.cssText = "display:flex;";
        document.getElementById("age").style.cssText = "display:none;";
        document.getElementById("status").style.cssText = "display:none;";
        // document.getElementById("type").style.cssText = "display:none;";
        document.getElementById("section-for-info").style.cssText = "display:none;";
        document.getElementById("period").style.cssText = "display:flex;";
        document.getElementById("location").style.cssText = "display:flex;";
        document.getElementById("phone").style.cssText = "display:flex;";
        document.getElementById("six").style.cssText = "display:flex;";
        document.getElementById("contin").style.cssText = "display:flex;";
        document.getElementById("ggga").style.cssText = "display:flex;";
    }
    else {
        // console.log("pationt");
        age.style.cssText = "display:flex;";
        status.style.cssText = "display:flex;";
        type.style.cssText = "display:none;";
        section.style.cssText = "display:flex;";
        period.style.cssText = "display:none;";
        locationn.style.cssText = "display:flex;";
        document.getElementById("name").style.cssText = "display:flex;";
        document.getElementById("age").style.cssText = "display:flex;";
        document.getElementById("status").style.cssText = "display:flex;";
        // document.getElementById("type").style.cssText = "display:none;";
        document.getElementById("section-for-info").style.cssText = "display:none;";
        document.getElementById("period").style.cssText = "display:none;";
        document.getElementById("location").style.cssText = "display:flex;";
        document.getElementById("phone").style.cssText = "display:flex;";
        document.getElementById("six").style.cssText = "display:flex;";
        document.getElementById("contin").style.cssText = "display:flex;";
        document.getElementById("ggga").style.cssText = "display:none;";
        document.getElementById("location").style.cssText = "display:none;";


    }
}


let button_infoo = document.getElementById("submit-info");
let form_heden1 = document.getElementById("form-hiden1");
let form_heden2 = document.getElementById("form-hiden2");
let form_heden3 = document.getElementById("form-hiden3");
let button_users = document.getElementById("submit-users");
let check = 0;
console.log(form_heden1)
console.log(form_heden3)
let x = 0
document.getElementById("contin").onclick = function () {
    if (x === 0) {
        form_heden1.style.cssText = "display: flex;";
        form_heden2.style.cssText = "display: flex;";
        document.getElementById("contin").style.cssText = "display: none;";
        document.getElementById("add").style.cssText = "display: flex;";

        // ev.preventDefault();
        x = 1
    } else {
        form_heden1.style.cssText = "display: none;";
        form_heden2.style.cssText = "display: none;";
        document.getElementById("contin").style.cssText = "display: flex;";
        document.getElementById("add").style.cssText = "display: none;";
        // ev.preventDefault();
        x = 0
    }
}
document.forms[0].onsubmit = function (e) {
    e.preventDefault();

}
document.forms[1].onsubmit = function () {

}
console.log(document.forms[0])
document.getElementById("add").onclick = function () {
    document.forms[0].submit()
    document.forms[1].submit()
    console.log('k')
}