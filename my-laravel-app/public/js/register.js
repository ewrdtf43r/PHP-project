$(document).ready(function() {
    $('#register-button').click(function(e) {
        e.preventDefault();

        // Получите CSRF-токен из мета-тега
        const csrfToken = $('meta[name="csrf-token"]').attr('content');
        
        // Получите значения полей
        const username = $('#username').val();
        const email = $('#email').val();
        const passport = $('#passport').val();

        // Проверьте, что все обязательные поля заполнены
        if (username === '' || email === '' || passport === '') {
            alert('Please fill in all required fields.');
            return;
        }

        // Проверьте email с использованием регулярного выражения
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!email.match(emailPattern)) {
            alert('Please enter a valid email address.');
            return;
        }

        // Остальной код для отправки AJAX-запроса
        $.ajax({
            type: 'POST',
            url: '/register',
            data: {
                _token: csrfToken, // Передайте CSRF-токен в данных запроса
                username: username,
                email: email,
                passport: passport
            },
            dataType: 'json',
            success: function(data, textStatus, xhr) {
                if (xhr.status === 200) {
                    const generatedPassword = data.password;
        
                    // Скрытие формы и ссылки "Already have an account"
                    $('#registration-form').addClass('hidden');
                    $('a[href="/login"]').addClass('hidden');
        
                    // Отображение сгенерированного пароля и кнопки "Enter"
                    $('#password-container').removeClass('hidden');
                    $('#password-result').text(generatedPassword);
                    $('#enter-button').removeClass('hidden');
        
                    $('body').addClass('validated-styles');
                }
            },
            error: function(xhr) {
                if (xhr.status === 409) {
                    alert('User with this email already exists.');
                } else {
                    alert('An error occurred during registration. Please try again later.');
                }
            }
        });        
    });
});