// const cross = document.getElementById("flash-message-cross");

// cross.addEventListener("click", function(){
//     const message = document.getElementById("flash-message");
//     message.style.display = "none";
// });

const avatarDropdown = document.getElementById("dropdownAvatarNameButton");
console.log(avatarDropdown);

avatarDropdown.addEventListener("click", function() {
    const dropdownMenu = document.getElementById("dropdownAvatarName");
    if (dropdownMenu.classList.contains("hidden")) {
        dropdownMenu.classList.remove("hidden");
        dropdownMenu.classList.add("fixed");
    } else {
        dropdownMenu.classList.remove("fixed");
        dropdownMenu.classList.add("hidden");
    }
});