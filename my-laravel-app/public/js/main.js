$(document).ready(function() {
    // Получите CSRF-токен из мета-тега
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Обработчик события отправки формы
    $('#main-form').submit(function(event) {
        event.preventDefault(); // Предотвратить стандартное действие формы

        // Получить значения полей формы
        var name = $('#username').val();
        var passport = $('#passport').val();
        var email = $('#email').val();
        var about = $('#about-textarea').val(); // Получить значение поля "About"

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

        // Создать объект с данными для отправки на сервер
        var formData = {
            _token: csrfToken, // Включить CSRF-токен
            name: name,
            passport: passport,
            email: email,
            about: about // Добавить значение "About" из textarea
        };

        // Отправить POST-запрос на сервер
        $.ajax({
            type: 'POST',
            url: '/',
            data: formData,
            success: function(response) {
                // Обработать успешный ответ от сервера здесь
                if (response.success) {
                    alert('Data has been successfully updated.');
                }
            },
            error: function(error) {
                // Обработать ошибку здесь
                console.error('An error occurred while sending the request:', error);
                if (error.status === 400) {
                    alert(error.responseJSON.error);
                }
            }
        });
    });
});
