<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body background ="https://static-cse.canva.com/blob/194831/Green-Financial-Services-Corporate-Zoom-Background.png">
@if(session('status'))
    {{session('status')}}
@endif
<div class="container mt-5">
    <div class="row">
        <div class="col-6">

            <form action="{{route('user.create')}}" method="post">
                @csrf
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Имя : </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="text" name="name" class="form-control" placeholder="Введите имя: " required="required">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Почта : </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="email" name="email" class="form-control" placeholder="Введите почту: " required="required">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Пароль : </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="password" name="password" class="form-control" placeholder="Введите пароль: " required="required">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Потвердите пароль : </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="password" name="confirm_password" class="form-control" placeholder="Потвердите пароль: " required="required">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <button style="border-color: black;" class="btn btn-light">Зарегистрироваться</button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                         <a class="nav-link" href="{{route('auth')}}">Уже есть аккаунт? - Войти в существующий аккаунт</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>
