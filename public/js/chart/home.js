const $ = document.querySelector.bind(document);
const navUser = $(".content-nav-user");
const userInfo = $(".user-info");
const userContentPass = $(".user-info-content-pass");
const overlay = $(".overlay");
const modal = $(".modal");
const modalClose = $(".modal-header-quit");
const modalUpdateBtn = $(".modal-form-update");
const passNotify = $(".password-notify");
const passNotifyBtn = $(".password-notify-btn");
let isOpen = false;

navUser.addEventListener("click", () => {
    if (isOpen) {
        isOpen = false;
        userInfo.classList.remove("active");
    } else {
        isOpen = true;
        userInfo.classList.add("active");
    }
});

userContentPass.addEventListener("click", () => {
    overlay.classList.add("active");
});

modalUpdateBtn.addEventListener("click", () => {
    passNotify.classList.add("active");
});

passNotifyBtn.addEventListener("click", () => {
    passNotify.classList.remove("active");
});

const closeModal = () => {
    overlay.classList.remove("active");
};

overlay.addEventListener("click", closeModal);
modalClose.addEventListener("click", closeModal);

modal.addEventListener("click", (e) => {
    e.stopPropagation();
});

passNotify.addEventListener("click", (e) => {
    e.stopPropagation();
});
