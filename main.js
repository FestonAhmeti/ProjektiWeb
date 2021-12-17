//Kodi per sliderin e search bar

var fotoArray = [
    "furntiure1.jpg",
    "furntiure2.jpg",
    "furntiure3.jpg",
    "furntiure4.jpg",
    "furntiure6.jpg",
    "furntiure7.jfif",

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