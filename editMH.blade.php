<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sửa thông tin môn học</title>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<section class="container my-3">
<div class="card">
<div class="card-header">
<h3>Sửa thông tin môn học: <b class="text-danger"> {{$monhocw->MaMH}} </b></h3>
</div>
<div class="card-body">
<form action="{{route('MonHoc.editMHSubmit')}}" method="POST">
@csrf
<div class="input-group input-group-sm mb-3">
<span class="input-group-text" id="MaMH">Mã môn học</span>
<input type="text" class="form-control" aria-describedby="MaMH" name="MaMH" value="{{$monhocw->MaMH}}" readonly>
</div>

<div class="input-group input-group-sm mb-3">
<span class="input-group-text" id="TenMH">Tên môn học</span>
<input type="text" class="form-control" aria-describedby="TenMH" name="TenMH" value="{{$monhocw->TenMH}}">
</div>

<div class="input-group input-group-sm mb-3">
<span class="input-group-text" id="SoTiet">Số tiết</span>
<input type="number" class="form-control" aria-describedby="SoTiet" name="SoTiet" value="{{$monhocw->SoTiet}}">
</div>

<div class="card-footer">
<input type="submit" class="btn btn-primary" name="editMHSubmit" value="Cập nhật">
<a href="/MonHocw" class="btn btn-secondary">Trở về</a>
</div>

</form>
</div>
</div>
</section>
</body>
</html>