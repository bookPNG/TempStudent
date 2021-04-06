<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab : Temperature</title>
</head>
<body>
<div class="py-12">
        <div class="container">  
            <div class="row">
                @if(session("success"))
                    <div class="alert-success">{{session('success')}}</div>
                @endif
                <div class="card-header">แบบฟอร์มเก็บข้อมูลอุณหภูมิผู้เข้าใช้บริการห้องแล็บ</div>
                <div class="card-body">
                    <form action="{{route('addtemp')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="student_id">รหัสนักศึกษา</label>
                            <input type="text" class="form-control" name="student_id"><br>

                            <label for="student_temp">อุณหภูมิ</label>
                            <input type="text" class="form-control" name="student_temp"><br>
                        </div>
                        @error('student_id')
                            <span class="text-danger my-2">{{$message}}</span>
                        @enderror
                        @error('student_temp')
                            <span class="text-danger my-2">{{$message}}</span>
                        @enderror
                        <br>
                        <input type="submit" value="บันทึกข้อมูล" class="btn btn-primary">
                    </form>
                    
                    <form action="{{route('avgtemp')}}" method="get">
                        <br>
                        <input type="submit" value="แสดงค่าอุณหภูมิเฉลี่ย" class="btn btn-primary">
                    </form>
                    <form action="{{route('toptemp')}}" method="get">
                        <br>
                        <input type="submit" value="ค่าอุณหภูมิสูงสุด" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>