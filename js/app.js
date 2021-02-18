function signupValidate() {
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPwd = document.getElementById("confirmPwd").value;

    if(username === "" || email === "" || password === "" || confirmPwd === "") {
        const formGroups = document.querySelectorAll("form .form-group");
        const formControls = document.querySelectorAll(".form-group .form-control");


    }
}

function togglePassword() {
    const password = document.getElementById("password");
    if(password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}

signupValidate();

document.getElementById("formSignup").addEventListener("submit", signupValidate); 
document.getElementById("togglePassword").addEventListener("change", togglePassword);
