<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách Môn Học</title>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh Sách Môn Học</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã Môn Học</th>
                            <th>Tên Môn Học</th>
                            <th>Số Tiết</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($monhocw as $item)
                            <tr>
                                <td>1</td>
                                <td>{{$item->MaMH}}</td>
                                <td>{{$item->TenMH}}</td>
                                <td>{{$item->SoTiet}}</td>
                                <td class="text-center">
                                    <a href="/MonHocw/detailMH/{{$item->MaMH}}" class="btn btn-success">Chi tiết <i class="fa-solid fa-calendar-week"></i></a>

                                    <a href="/MonHocw/editMH/{{$item->MaMH}}" class="btn btn-primary">Sửa <i class="fa-solid fa-user-pen"></i></a>

               
                                    <a href="/MonHocw/deleteMH/{{$item->MaMH}}" class="btn btn-danger"  
                                    onclick="return  confirm('Bạn có chắc chắn xóa Môn HọcHọc này không ?')" 
                                    >xóa <i class="fa-solid fa-trash"></i> </a>
                                </td>
                            </tr>   
                            
                        @endforeach
                    </tbody>
                    <tfoot>
                       <tr>
                        <th colspan="5">
                             <h3>Tổng số môn học: {{$monhocw->count( )}}</h3>
                        </th>
                       </tr>
                    </tfoot>
                </table>
                <a href="/MonHocw/insertMH" class="btn btn-primary">Thêm mới <i class="fa-solid fa-plus"></i></a>
            </div>
        </div>

    </section>
</body>
</html>