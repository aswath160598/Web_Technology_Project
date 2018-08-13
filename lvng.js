function fn(x){
    x.style.width="20%";
}
var img = document.getElementsByTagName("li")
for(var i=0;i<img.length;i++){
    img[i].addEventListener("mouseover",function(){
        fn(this.id)
    },false)
}
