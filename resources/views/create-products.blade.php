
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body background ="https://static-cse.canva.com/blob/194831/Green-Financial-Services-Corporate-Zoom-Background.png">

<div class="container mt-5">
    <div class="row">
        <div class="col-6">

            <form action="{{route('store')}}" method="post" enctype="multipart/form-data" style="display: flex;flex-direction: column">
                @csrf
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Название товара : </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="text" placeholder="введите название сумки" name="title">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Количество : </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="number" placeholder="введите количество" name="quantity">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Цена : </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="number" placeholder="введите цену сумки" name="price">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Категория : </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <select name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Фотография товара : </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="file" placeholder="выберите фото сумки" name="image">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <button style="border-color: black;" class="btn btn-light">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>

