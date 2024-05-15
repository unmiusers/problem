// DOM elements
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');

// Function to handle form submission
function handleLoginForm(event) {
    event.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;
    // Add validation logic if needed
    // For now, just submit the form
    loginForm.submit();
}

function handleRegisterForm(event) {
    event.preventDefault();
    const email = registerForm.email.value;
    const phone = registerForm.phone.value;
    const username = registerForm.username.value;
    const password = registerForm.password.value;
    const confirmPassword = registerForm.confirm_password.value;
    const id = registerForm.id.value;
    const gender = registerForm.gender.value;
    const dob = registerForm.dob.value;
    // Add validation logic here
    // For now, just submit the form
    registerForm.submit();
}

// Event listeners
if (loginForm) {
    loginForm.addEventListener('submit', handleLoginForm);
}

if (registerForm) {
    registerForm.addEventListener('submit', handleRegisterForm);
}
