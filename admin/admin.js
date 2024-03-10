const dashmenu = document.getElementById("dashboard");
const parking = document.getElementById("parking");
const parkingslot = document.getElementById("parkingslot");
const scanner =document.getElementById("scanner");

const motor = document.getElementById("motor");
const car = document.getElementById("car");

const upload = document.getElementById("upload");
const scan = document.getElementById("scan");

let display = 1

function dashhideshow(){
    if(display ==1){
        dashmenu.style.display ="block";
        parking.style.display ="none";
        parkingslot.style.display ="none";
        scanner.style.display ="none";
        display =1;
    }
}

function parkinghideshow(){
    if(display ==1){
        parking.style.display ="block";
        dashmenu.style.display ="none";
        parkingslot.style.display ="none";
        scanner.style.display ="none";
        display =1;
    }
}

function parkingslothideshow(){
    if(display ==1){
        parkingslot.style.display ="block";
        parking.style.display ="none";
        dashmenu.style.display ="none";
        scanner.style.display ="none";
        display =1;
    }
}
function scannerhideshow(){
    if(display ==1){
        scanner.style.display ="block";
        parkingslot.style.display ="none";
        parking.style.display ="none";
        dashmenu.style.display ="none";
        display =1;
    }
}


let layoutdisplay = 1

function motorview(){
    if(layoutdisplay ==1){
        motor.style.display ="block";
        car.style.display = "none";
        layoutdisplay =1;
    }
}
function carview(){
    if(layoutdisplay ==1){
        car.style.display = "block";
        motor.style.display ="none";
        layoutdisplay =1;
    }
}

let uploadScan = 1

function uploadQr(){
    if(uploadScan == 1){
        upload.style.display ="block";
        scan.style.display = "none";
        uploadScan =1;
    }
}
function scanQr(){
    if(uploadScan == 1){
        upload.style.display ="none";
        scan.style.display = "block";
        uploadScan =1;
    }
}
