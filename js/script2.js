

document.querySelector(".fa-bars").addEventListener("click", show_sidebar);
function show_sidebar() {
     var sidebar = document.querySelector(".sidebar");
     var xmark = document.querySelector(".fa-rectangle-xmark");
     var bars = document.querySelector(".fa-bars");
     sidebar.style.left = "0px";
     xmark.style.transition = "all 1.4s ease-in";
     xmark.style.opacity = "1";
     bars.style.opacity = "0";
}
document.querySelector(".fa-rectangle-xmark").addEventListener("click", close_sidebar);
function close_sidebar() {
     let sidebar = document.querySelector(".sidebar");
     var xmark = document.querySelector(".fa-rectangle-xmark");
     var bars = document.querySelector(".fa-bars");
     xmark.style.transition = "0.2s";
     sidebar.style.left = "-250px";
     bars.style.opacity = "1";
     xmark.style.opacity = "0";
}


function death_yes() {
     document.querySelector(".death-whole").style.display = "block";
    
}
function death_no()
{
     document.querySelector(".death-whole").style.display = "none";
}




function func_buffalo()
{
     document.querySelector(".buffalo").style.display = "block";
     document.getElementById("none").checked = false;
}
function func_goat()
{
     document.querySelector(".goat").style.display = "block";
     document.getElementById("none").checked = false;
}
function func_cow()
{
     document.querySelector(".cow").style.display = "block";
     document.getElementById("none").checked = false;
}
function func_sheep()
{
     document.querySelector(".sheep").style.display = "block";
     document.getElementById("none").checked = false;
}
function func_yak()
{
     document.querySelector(".yak").style.display = "block";
     document.getElementById("none").checked = false;
}
function func_pig()
{
     document.querySelector(".pig").style.display = "block";
     document.getElementById("none").checked = false;
}
function func_none()
{
    document.getElementById("buffalo").checked = false;
    document.getElementById("cow").checked = false;
    document.getElementById("goat").checked = false;
    document.getElementById("sheep").checked = false;
    document.getElementById("pig").checked = false;
    document.getElementById("yak").checked = false;
    document.querySelector(".buffalo").style.display = "none";
    document.querySelector(".goat").style.display = "none";
    document.querySelector(".cow").style.display = "none";
    document.querySelector(".sheep").style.display = "none";
    document.querySelector(".yak").style.display = "none";
    document.querySelector(".pig").style.display = "none";
}