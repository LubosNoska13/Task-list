document.addEventListener('DOMContentLoaded', function() {

    // Close Flash message
    const cross = document.getElementById("flash-message-cross");
    if (cross) {  
        cross.addEventListener("click", function(){
            const message = document.getElementById("flash-message");
            message.style.display = "none";
        });
    }

    // Show avatar menu dropdown
    const avatarDropdown = document.getElementById("dropdownAvatarNameButton");
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

    // Display and close Popup Modal
    const dangerBtn = document.getElementById("danger-button");
    const popupCancel = document.getElementById("popup-modal-cancel");
    const popupModal = document.getElementById("popup-modal");

    function togglePopup() {
        popupModal.classList.toggle("hidden");
    }

    if (dangerBtn) {
        dangerBtn.addEventListener("click", togglePopup);
    }
    if (popupCancel) {
        popupCancel.addEventListener("click", togglePopup);
    }

});