var myIndex = 0;
carousel();

function leftarrow(){
  var llitem = document.getElementById("left-left-item");
  var litem = document.getElementById("left-item");
  var citem = document.getElementById("center-item");
  var ritem = document.getElementById("right-item");
  var rritem = document.getElementById("right-right-item");
  // llitem.style.transition="none";
  llitem.id = "right-right-item";
  litem.id = "left-left-item";
  citem.id = "left-item";
  ritem.id = "center-item";
  rritem.id = "right-item";
}

function rightarrow(){
  var llitem = document.getElementById("left-left-item");
  var litem = document.getElementById("left-item");
  var citem = document.getElementById("center-item");
  var ritem = document.getElementById("right-item");
  var rritem = document.getElementById("right-right-item");

  var item = document.getElementsByClassName("slideshow-item");
  // llitem.style.transition="none";
  // for (i = 0; i < 5; i++) {item[i].style.transition = "all .2s ease-in-out";}
  llitem.id = "left-item";
  litem.id = "center-item";
  citem.id = "right-item";
  ritem.id = "right-right-item";
  rritem.id = "left-left-item";
}

function carousel() {
    // var item = document.getElementsByClassName("slideshow-item");
    // for (i = 0; i < 5; i++) {item[i].classList.remove("slow-transition");}
    leftarrow();
    // for (i = 0; i < 5; i++) {item[i].classList.add("slow-transition");}

    var i;
    var cir = document.getElementsByClassName("circle-slideitem");
    for (i = 0; i < 5; i++) {
       cir[i].style.backgroundColor ="white";
    }

    myIndex++;
    if (myIndex > 5) {myIndex = 1;}

    cir[myIndex-1].style.backgroundColor = "rgba(122,157,150,1)";

    setTimeout(carousel, 5000);
}