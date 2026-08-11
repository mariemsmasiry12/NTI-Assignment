const queryBox = document.getElementById("query");
const charCount = document.getElementById("charCount");

queryBox.addEventListener("input", function () {
    charCount.textContent = queryBox.value.length + "/200";
});

const form = document.getElementById("appointmentForm");
const message = document.getElementById("formMessage");

form.addEventListener("submit", function (e) {
    e.preventDefault();

    let valid = true;

    const fname = document.getElementById("fname");
    const phone = document.getElementById("phone");

    fname.classList.remove("invalid");
    phone.classList.remove("invalid");
    message.textContent = "";

    if (fname.value.trim() === "") {
        fname.classList.add("invalid");
        valid = false;
    }

    const phonePattern = /^[0-9]+$/;
    if (!phonePattern.test(phone.value.trim())) {
        phone.classList.add("invalid");
        valid = false;
    }

    if (valid) {
        message.style.color = "green";
        message.textContent = "Booking submitted successfully ✔";
        form.reset();
        charCount.textContent = "0/200";
    } else {
        message.style.color = "red";
        message.textContent = "Please check the required fields.";
    }
});
