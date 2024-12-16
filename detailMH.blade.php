<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết môn học</title>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết môn học</h3>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b>Mã môn học:</b>
                    {{$monhocw->MaMH}}
                </p>
                <p>
                    <b>Tên môn học:</b>
                    {{$monhocw->TenMH}}
                </p>
                <p>
                    <b>Số tiết:</b>
                    {{$monhocw->SoTiet}}
                </p>
            </div>
                <div class="card-footer">
                    <a href="/MonHocw" class="btn  btn-primary">Back</a>
                </div>
        </div>
    </section>
</body>
</html>