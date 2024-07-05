function stdform(){
    var std = document.getElementById("stdform")
    var tea = document.getElementById("teaform")
    var reg = document.getElementById("regform")
   
    std.classList.remove("hide"); 
    std.classList.add("unhide");
    
    tea.classList.remove("unhide");
    tea.classList.add("hide");

    reg.classList.remove("unhide");
    reg.classList.add("hide");
    
}
function teaform(){
    var std = document.getElementById("stdform")
    var tea = document.getElementById("teaform")
    var reg = document.getElementById("regform")
    
    std.classList.remove("unhide");
    std.classList.add("hide");

    tea.classList.remove("hide");
    tea.classList.add("unhide");

    reg.classList.remove("unhide");
    reg.classList.add("hide");
    
}
function regform(){
    var std = document.getElementById("stdform")
    var tea = document.getElementById("teaform")
    var reg = document.getElementById("regform")

    std.classList.remove("unhide");
    std.classList.add("hide");

    tea.classList.remove("unhide");
    tea.classList.add("hide");

    reg.classList.remove("hide");
    reg.classList.add("unhide");
}