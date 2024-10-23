const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const registerBtn2 = document.getElementById('register2');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});