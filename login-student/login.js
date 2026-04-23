let buttons = document.querySelectorAll(".student,.faculty,.admin");
let role=document.getElementById("role");
buttons.forEach(btn => {
    btn.addEventListener("click", function() {
        buttons.forEach(btn => btn.classList.remove("active"));
        this.classList.add("active");
        role.value = this.innerText.toLowerCase();
    });
});

