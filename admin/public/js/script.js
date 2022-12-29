function Alert(params) {
    alert("hello");
}

var navbar = document.querySelector(".sidebar-drawer").querySelectorAll("a");

function CheckDelete() {
    return confirm('apakah kamu ingin menghapus database ini?');
}

navbar.forEach(
    element => {
        element.addEventListener("click", function () {
            navbar.forEach(nav => nav.classList.remove("item-selected"))

            this.classList.add("item-selected");
        })
    }
)
console.log(window.location.href);