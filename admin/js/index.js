var acc = document.getElementsByClassName("accordion_a");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
// vẫn mở menu khi click sau khi đã mở
$(document).ready(function() {
    $('.sidebar_con').addClass('active');
});