{{-- Đây là file layout chính của admin
là nơi đặt tất cả những gì dùng chung của giao diện admin
--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master layout</title>
</head>
<body>
    @include('partials.header')
    @include('partials.aside')

    {{-- 
    Xác định vùng hiển thị nội dung được kế thừa
    Tên yield phải trùng với section ở trang con
    1 master layout có thể có nhiều yield miễn là trong trang
    con có bằng đấy section
     --}}
    @yield('content')

    @include('partials.footer')

    {{-- 
    Lab 5: Xây dựng giao diện layout admin
    Đầy đủ các thành phần: Header, Aside, Footer
     --}}
</body>
</html>