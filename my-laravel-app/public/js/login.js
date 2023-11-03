document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();

    // Получите значения полей и выполните необходимую логику регистрации здесь
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Пример вывода данных
    console.log(`Email: ${email}`);
    console.log(`Password: ${password}`);
});