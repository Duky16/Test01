<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>                    
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Student Update Information</h1>
                        <form action="{{ route::get('')}}" method="post">
                            <div class="mb-3">
                                <label for="txtStuID" class="form-label">Mã học sinh:</label>
                                <input type="text" class="form-control bg-secondary" name="StuID" value="2" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="txtStuName" class="form-label">Tên học sinh:</label>
                                <input type="text" class="form-control" name="StuName" value="">
                            </div>
                            <div class="mb-3">
                                <label for="txtStuName" class="form-label">Ngày sinh:</label>
                                <input type="text" class="form-control" name="StuBDay" value="">
                            </div>
                            <div class="mb-3">
                                <label for="txtStuName" class="form-label">Địa chỉ:</label>
                                <input type="text" class="form-control" name="StuAdd" value="">
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu lại</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        <footer class="bg-primary">
            <p class="text-center">Footer</p>
        </footer>
    </body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>