l0=["lvn1.jpg","lvn2.jpg","lvn3.jpg","lvn7.jpg"]
l1=["bth1.jpg","bth2.jpg","bth3.jpg","bth4.jpg"]
l2=["bdr3.jpg","bdr1.jpg","bdr2.jpg","bdr4.jpg"]
l3=["off1.jpg","off4.jpg","off3.jpg","off2.jpg"]
function fn(i){
switch(i){
    case 1:x=l0
         break;
    case 2:x=l1;
        break;
    case 3:x=l2;
        break;
    case 4:x=l3;
        break;
        
}
var y=document.querySelectorAll("#im1")
for(var j=0;j<x.length;j++){
    y[j].setAttribute("src",x[j])
}
}

var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal1 = document.getElementById('id02');
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

ims=["fb1.png","gog1.png","inst1.png","twt1.png","ml1.png","yt1.png"]

ims1=["fb.png","gog.png","inst.png","twt.png","ml.png","yt.png"]
function change(x,i){
    var y=document.getElementById(x);
    y.src=ims[i];
}

function back(x,i){
    var y=document.getElementById(x);
    y.src=ims1[i];
}

