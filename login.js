function submitForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == " " || password == " ") {
        alert("Field Kosong");
    } else {
        document.getElementById("myForm").submit();
    }
}

function isVisible() {
    var y = document.getElementById("password");
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }
}