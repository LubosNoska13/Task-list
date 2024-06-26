const cross = document.getElementById("flash-message-cross");

cross.addEventListener("click", function(){
    const message = document.getElementById("flash-message");
    message.style.display = "none";
});
