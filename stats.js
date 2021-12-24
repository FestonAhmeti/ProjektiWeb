const stats = document.querySelectorAll(".statistics");
const countBtn = document.getElementById("count-btn");

window.addEventListener("scroll",btnClick)
//  TE if duhet me ndrru vleren per me fillu ma von mu numru numret te stats
function btnClick(){
    if (window.scrollY > 10) {
    countBtn.click();
    countBtn.disabled = true}
}


function startCount(){
stats.forEach(function(statistics){
    
    statistics.innerText = "0";

    function updateCounter(){
        var target = parseInt(statistics.getAttribute("data-stop-count"));
        var counter = parseInt(statistics.innerText);
        var increment = target / 1000;


        if (counter < target) {
            statistics.innerText = Math.ceil(counter + increment);
            setTimeout(updateCounter,1);
        } else {
            statistics.innerText = target;
        }
    };
    updateCounter();
  
})};