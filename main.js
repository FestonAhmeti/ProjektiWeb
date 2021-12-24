//Kodi per sliderin e search bar


var fotoArray = [
    "images/furntiure1.jpg",
    "images/furntiure2.jpg",
    "images/furntiure3.jpg",
    "images/furntiure4.jpg",
    "images/furntiure6.jpg",
    "images/furntiure7.jfif",

];
var i = 0;
function ndrroImg(){
    document.getElementById('slide1').src=fotoArray[i];
    if (i<fotoArray.length-1){
        i++
    }else{
        i=0;
    }
    setTimeout('ndrroImg()', 6000);
}
document.body.addEventListener('load' , ndrroImg());


