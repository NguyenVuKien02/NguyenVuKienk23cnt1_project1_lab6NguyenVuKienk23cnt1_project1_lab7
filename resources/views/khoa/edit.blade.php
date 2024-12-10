<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('khoa.nvkEditsubmitl')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin chi tiết khoa cần sửa</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nvkMaKhoa" class="col-sm-2 col-form-label">Mã khoa</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control"
                                id="nvkMaKhoa" name="nvkMaKhoa"
                                value="{{$khoa->nvkMaKhoa}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkTenKhoa" class="col-sm-2 col-form-label">Tên khoa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="nvkTenKhoa" name="nvkTenKhoa"
                                value="{{$khoa->nvkTenKhoa}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Submit</button>
                    <a href="/khoa" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
