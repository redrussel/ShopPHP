//Авторизация

$('.login-btn').click(function (e){
    e.preventDefault();

    $(`input`).removeClass('error');   //обращаемся ко всем инпутам и удаляемм класс, если поле было заполнено

    let login = $('input[name="login"]').val(),     //let login - задаем переменную, $('input[name="login"]') - селектор, val - позволяет получить данные
    password = $('input[name="password"]').val();

    $.ajax({
        url: 'vendor/signin.php',       //в объектах это свойства, они как переменные, но с другим синтаксисом
        type: 'POST',
        dataType: 'json',               //тут можно указать тип text, который указывается в форме, но мы будем использовать json
        data: {                         //объект
            login: login,
            password: password
        },
        success (data){
            if (data.status){                                       //if (data['status'] === ...){
                document.location.href = 'profile.php';
            } else {
                if(data.type ===1) {
                    data.fields.forEach(function (field){
                        $(`input[name="${field}"]`).addClass('error');      //проходимся по полям и придаем значение field, которое присваивает полю класс
                    });
                }
                $('.msg').removeClass('none').text(data.message);
            }

        }
    });
});


//Получение аватарки с поля

let avatar = false;
$('input[name="avatar"]').change(function (e) {
    avatar = e.target.files[0];         //В браузерной консоли этот параметр можно посмотреть, здесь мы присваиваем avatar - значение объекта, который добавляется при загрузке файла
});


//Регистрация

$('.register-btn').click(function (e){
    e.preventDefault();

    $(`input`).removeClass('error');

    let
        email = $('input[name="email"]').val(),
        login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();

    //для отправки файла нужно сымитировать форму

    let formData = new FormData();                  // класс имитирующий форму, в который мы занесём значения
    formData.append('email', email);
    formData.append('login', login);
    formData.append('password', password);
    formData.append('password_confirm', password_confirm);
    formData.append('avatar', avatar);

    $.ajax({
        url: 'vendor/signup.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        
        success (data){

            if (data.status){
                document.location.href = 'loginscreen.php';
            } else {
                if(data.type === 1) {
                    data.fields.forEach(function (field){
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }
                $('.msg').removeClass('none').text(data.message);
            }

        }
    });
});