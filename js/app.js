function signupValidate(e) {

    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPwd = document.getElementById("confirmPwd").value;

    const formGroups = document.querySelectorAll("form .form-group");
    const formControls = document.querySelectorAll(".form-group .form-control");

    formGroups.forEach(formGroup => {
        if(username === "" || email === "" || password === "" || confirmPwd === "") {
            e.preventDefault();
            formGroup.classList.add("has-danger");
        } else {
            formGroup.classList.remove("has-danger");
        }
        
    });

    formControls.forEach(formControl => {
        if(username === "" || email === "" || password === "" || confirmPwd === "") {
            e.preventDefault();
            formControl.classList.add("is-invalid");
        } else {
            formControl.classList.remove("is-invalid");
        }
        
    });
}

function togglePassword() {
    const password = document.getElementById("password");
    if(password.type === "password") {
        password.type = "text";
        document.getElementById('textPwd').textContent = 'Hide password';
        
    } else {
        password.type = "password";
        document.getElementById('textPwd').textContent = 'Show password';
    }
}

document.getElementById("formSignup").addEventListener("submit", signupValidate); 
document.getElementById("togglePassword").addEventListener("change", togglePassword);
