const toggleForm = document.querySelectorAll('#login-btn, #signup-btn');
const toggleLink = document.querySelectorAll('.toggle-link');
const form = document.getElementById('form-wrap');
const login = document.getElementById('login');
const signup = document.getElementById('signup');
const input = document.querySelectorAll('input');

function slideForm(e) {
    e.preventDefault();
    form.classList.toggle('slide');

    if (this.id === 'signup-btn') {
        login.classList.remove('active');
        signup.classList.add('active');
    } else {
        signup.classList.remove('active');
        login.classList.add('active');
    }
}

toggleForm.forEach(el => { el.addEventListener('click', slideForm)});
toggleLink.forEach(link => {
    link.addEventListener('click', () => {
        login.classList.toggle('active');
        signup.classList.toggle('active');
    })
});