let costomize = document.getElementById("customee")
let editt = document.getElementById("lo7a")
let EXITT = document.getElementById("xsiqn")
let changeable = document.getElementById("supermain")
let maincolor = document.getElementById("mainclr")
let firstclr = document.getElementById("secdclr")
let seccolor = document.getElementById("thrdclr")
let thirdcolor = document.getElementById("frthclr")
let forthcolor = document.getElementById("fifthclr")
let fifthcolor = document.getElementById("oneclr")
let sixthcolor = document.getElementById("twoclr")
let seventhcolor = document.getElementById("threeclr")
let eightscolor = document.getElementById("fourclr")
let defalt = document.getElementById("smth")
let talk = document.querySelectorAll(".talk");
let changee= document.getElementById("poppinss");
let firstfnt= document.getElementById("oneee")
let secandfnt= document.getElementById("twoo")
let thirdfnt = document.getElementById("threee")
let fourthfnt = document.getElementById("foore")
let fivfnt = document.getElementById("une")
let sixfnt = document.getElementById("dous")
let sevfnt = document.getElementById("trous")
let eghtfnt = document.getElementById("qutre")
let defalty = document.getElementById("smthyy")



EXITT.addEventListener("click", function(e){
    editt.style.display="none"
    costomize.style.marginRight="0"
})

costomize.addEventListener("click",function(e){
    costomize.style.marginRight="12.5%"
    costomize.style.transition="0.5s"
    editt.style.display="block"
})

defalt.addEventListener("click", function(e){
    if(defalt.style.color == "lightgray"){
        defalt.style.cursor="no-drop"
    }else{ 
        changeable.style.backgroundColor="rgb(243, 231, 231)"
        defalt.style.color="lightgray"
        defalt.style.cursor="no-drop"
    }
})

maincolor.addEventListener("click" , function(e){
    changeable.style.backgroundColor="rgb(243, 231, 231)"
    defalt.style.cursor="no-drop"
    defalt.style.color="lightgray"
})


firstclr.addEventListener("click" , function(e){
changeable.style.backgroundColor="lightblue"
defalt.style.cursor="pointer"
defalt.style.color="blue"

})

seccolor.addEventListener("click" , function(e){
    changeable.style.backgroundColor="orange"
    defalt.style.cursor="pointer"
    defalt.style.color="blue"
    
})

thirdcolor.addEventListener("click" , function(e){
    changeable.style.backgroundColor="purple"
    defalt.style.cursor="pointer"
    defalt.style.color="blue"
    
})

forthcolor.addEventListener("click" , function(e){
    changeable.style.backgroundColor="lightpink"
    defalt.style.cursor="pointer"
    defalt.style.color="blue"
    
})

fifthcolor.addEventListener("click" , function(e){
    changeable.style.backgroundColor="lightgreen"
    defalt.style.cursor="pointer"
    defalt.style.color="blue"
    
})
sixthcolor.addEventListener("click" , function(e){
    changeable.style.backgroundColor="aqua"
    defalt.style.cursor="pointer"
    defalt.style.color="blue"
    
})

seventhcolor.addEventListener("click" , function(e){
    changeable.style.backgroundColor="gold"
    defalt.style.cursor="pointer"
    defalt.style.color="blue"
    
})

eightscolor.addEventListener("click" , function(e){
    changeable.style.backgroundColor="silver"
    defalt.style.cursor="pointer"
    defalt.style.color="blue"
    
})

function toggleClass(){
    const p = document.getElementById("heroo");
    p.classList.toggle('hide');
}


console.log(talk)
changee.addEventListener("click" , function(){
for(let i=0 ; i<talk.length; i++){
    talk[i].style.fontFamily = "poppins";
    defalty.style.color="lightgray"
    defalty.style.cursor="no-drop"
}
})

firstfnt.addEventListener("click" , function(){
for(let i=0 ; i<talk.length; i++){
    talk[i].style.fontFamily = "Franklin Gothic Medium";
    defalty.style.color="blue"
    defalty.style.cursor="pointer"
}
})
secandfnt.addEventListener("click" , function(){
    for(let i=0 ; i<talk.length; i++){
        talk[i].style.fontFamily = "sans-serif";
        defalty.style.color="blue"
        defalty.style.cursor="pointer"
}
})
thirdfnt.addEventListener("click" , function(){
    for(let i=0 ; i<talk.length; i++){
        talk[i].style.fontFamily = "Arial";
        defalty.style.color="blue"
        defalty.style.cursor="pointer"
}
})
fourthfnt.addEventListener("click" , function(){
    for(let i=0 ; i<talk.length; i++){
        talk[i].style.fontFamily = "cursive";
        defalty.style.color="blue"
        defalty.style.cursor="pointer"
}
})
fivfnt.addEventListener("click" , function(){
    for(let i=0 ; i<talk.length; i++){
        talk[i].style.fontFamily = "Impact";
        defalty.style.color="blue"
        defalty.style.cursor="pointer"
}
})
sixfnt.addEventListener("click" , function(){
    for(let i=0 ; i<talk.length; i++){
        talk[i].style.fontFamily = "monospace";
        defalty.style.color="blue"
        defalty.style.cursor="pointer"
}
})
    
sevfnt.addEventListener("click" , function(){
    for(let i=0 ; i<talk.length; i++){
        talk[i].style.fontFamily = "serif";
        defalty.style.color="blue"
        defalty.style.cursor="pointer"
}
})
eghtfnt.addEventListener("click" , function(){
    for(let i=0 ; i<talk.length; i++){
        talk[i].style.fontFamily = "Segoe UI";
        defalty.style.color="blue"
        defalty.style.cursor="pointer"
}
})

defalty.addEventListener("click", function(e){
    if(defalty.style.color == "lightgray"){
        defalt.style.cursor="no-drop"
    }else{ 
        for(let i=0 ; i<talk.length; i++){
            talk[i].style.fontFamily = "poppins";
        }
            defalty.style.color="lightgray"
            defalty.style.cursor="no-drop"
        }
})