const buttons = document.querySelectorAll(".book-btn");

buttons.forEach(function (btn) {
    btn.addEventListener("click", function () {
        const place = btn.getAttribute("data-place");
        const price = btn.getAttribute("data-price");
        alert("Booking selected at: " + place + "\nPrice: " + price + " LE");
    });
});
