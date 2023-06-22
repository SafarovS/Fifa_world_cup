const close= document.querySelector(".close"),
addteambt= document.querySelector(".inser-chiqar"),
addteamform= document.querySelector(".insert-all-team");

addteambt.addEventListener("click", function(){
    addteamform.style.left="0px";
})

close.addEventListener("click", function(){
    addteamform.style.left="-670px"; 
});
