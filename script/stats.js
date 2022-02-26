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

/* ------------------------ Quote of the day ------------------ */
const quotes =
[
    '"The most honest form of filmmaking is to make a film for yourself."', 
    '"When I’m working on a problem, I never think about beauty. But when I’ve finished, if the solution is not beautiful I know it’s wrong."',
    '"To create, one must first question everything."',
    '"I don’t dream at night, I dream at day, I dream all day I’m dreaming for living."',
    '"Do what you do so well that they will want to see it again and bring their friends too"',
    '"There are 360 degrees, so why stick to one"',
    '"I don’t believe that the public knows what it wants; this is the conclusion that I have drawn from my career."',
    '"Whatever good things we build end up building us."',
    '"If you look at what you have in life, you’ll always have more. If you look at what you don’t have in life, you’ll never have enough."'];


const authors = 
[
    '- Peter Jackson', 
    '- Buckminster Fuller', 
    '- Eileen Gray', 
    '- Steven Spielberg', 
    '- Walt Disney', 
    '- Zaha Hadid', 
    '- Charlie Chaplin', 
    '- Jim Rohn', 
    '- Oprah Winfrey' ];


const quoteBtn = document.getElementById("generate-btn");
const quote = document.querySelector(".quote");
const author = document.querySelector(".author");
const tweetBtn = document.querySelector(".tweet-quote");

var index = 1;

function shuffleQuotes(){
    index = Math.floor(Math.random()*quotes.length);                  //generates a random index
    quote.innerHTML = quotes[index];
    author.innerHTML = authors[index];
    quote.style.webkitFilter = "blur(2px)";
    author.style.webkitFilter = "blur(2px)";
}

var currentDate = new Date();                                       //gets current date
var strCurrentDate = String(currentDate.getDate());                  //gets the day from current date and converts it to a string

if (strCurrentDate == localStorage.getItem("yourQuoteDate") && localStorage.getItem("yourQuote") != null && localStorage.getItem("yourAuthor") != null) {     // checks: if current date == the date you picked a quote (so you can't pick more than once a day), if a quote and an author exist
    var definedQuote = localStorage.getItem("yourQuote");             // gets "yourQuote" value from localStorage 
    var definedAuthor = localStorage.getItem("yourAuthor");            
    quote.innerHTML = definedQuote;          // sets the gotten value 
    author.innerHTML = definedAuthor;
    quote.style.webkitFilter = "blur(0px)";
    author.style.webkitFilter = "blur(0px)";
    quoteBtn.style.display = "none";
    tweetBtn.style.display = "block";
}
else {         // if not => pick a quote
var shuffle = setInterval(shuffleQuotes,100);
}

quoteBtn.addEventListener("click", pickQuote);

function pickQuote(){                   // picks a quote by stopping the shuffle
    clearInterval(shuffle);
    quote.style.webkitFilter = "blur(0px)";
    author.style.webkitFilter = "blur(0px)";
    quoteBtn.style.display = "none";
    tweetBtn.style.display = "block";

    if (typeof(Storage) !== "undefined") {      
        localStorage.setItem("yourQuote", quotes[index]);    // saves the picked quote to localStorage
        localStorage.setItem("yourAuthor", authors[index]);
        localStorage.setItem("yourQuoteDate", strCurrentDate);
      } ;
}
