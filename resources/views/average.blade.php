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
    <title>Run : Virtual Run</title>
</head>
<body>
    <div class="py-12">
        <div class="container">  
            <div class="row">
                <div class="col-md-8">
                <div class="card-header">ค่าอุณหภูมิเฉลี่ย (ไม่รวมคนที่มีอุณหภูมิมากกว่า 37.5 และน้อยกว่า 35.0)</div>
                    <table class="table">
                        <thead>
                            <th scope="col">อุณหภูมิเฉลี่ย</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th >{{$temp}}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <form action="{{route('home')}}" method="get">
                    <br>
                    <input type="submit" value="กลับหน้าแรก" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div> 
</body>
</html>