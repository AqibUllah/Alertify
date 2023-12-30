const alert = document.querySelector(".alert")
const close_btn = document.querySelectorAll(".alert")
for (let i = 0; i < close_btn.length; i++) {
    close_btn[i].querySelector('button').addEventListener("click",function () {
        close_btn[i].classList.add("animate__flipOutX")
        setTimeout(function () {
            close_btn[i].style.display = "none";
        },500)
    });
}
