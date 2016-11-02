var myIndex = 0;
carousel();

// function indexIncrease(n){
//   myIndex+=n-1;
//     for (i = 0; i < x.length; i++) {
//        x[i].style.display = "none";
//        y[i].style.display = "none";
//        z[i].style.display = "none";
//        t[i].style.display = "none";
//        cir[i].style.backgroundColor ="white";
//     }
//     x[myIndex-1].style.display = "block";
//     y[myIndex-1].style.display = "inline";
//     z[myIndex-1].style.display = "inline"; 
//     t[myIndex-1].style.display = "block"; 
//     cir[myIndex-1].style.backgroundColor = "rgba(122,157,150,1)";
// }


// function currentDiv(n) {
// 	myIndex=n-1;
//     for (i = 0; i < x.length; i++) {
//        x[i].style.display = "none";
//        y[i].style.display = "none";
//        z[i].style.display = "none";
//        t[i].style.display = "none";
//        cir[i].style.backgroundColor ="white";
//     }
//     x[myIndex-1].style.display = "block";
//     y[myIndex-1].style.display = "inline";
//     z[myIndex-1].style.display = "inline"; 
//     t[myIndex-1].style.display = "block"; 
//     cir[myIndex-1].style.backgroundColor = "rgba(122,157,150,1)";
// }

function carousel() {
    var i;
    var x = document.getElementsByClassName("image-slideitem");
    var y = document.getElementsByClassName("infor1-slideitem");
    var z = document.getElementsByClassName("infor2-slideitem");
    var t = document.getElementsByClassName("header-slideitem");
    var cir = document.getElementsByClassName("circle-slideitem");
    
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
       y[i].style.display = "none";
       z[i].style.display = "none";
       t[i].style.display = "none";
       cir[i].style.backgroundColor ="white";
    }

    myIndex++;
    if (myIndex > x.length) {myIndex = 1;}

    x[myIndex-1].style.display = "block";
  	y[myIndex-1].style.display = "inline";
  	z[myIndex-1].style.display = "inline"; 
  	t[myIndex-1].style.display = "block"; 
  	cir[myIndex-1].style.backgroundColor = "rgba(122,157,150,1)";

    setTimeout(carousel, 3000);
}