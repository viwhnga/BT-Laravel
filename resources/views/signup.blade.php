<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Ký</title>
    <link rel="stylesheet" href="assets/style/signup.css">
</head>
<body>
    <h2>Form Đăng Ký</h2>
    <form action="/signupkq" method="POST">
    @csrf
    <label>Họ Tên:</label>
    <input type="text" name="name">
    @error('name')
        <span style="color: red;">{{ $message }}</span>
    @enderror
    <br>

    <label>Tuổi:</label>
    <input type="number" name="age">
    @error('age')
        <span style="color: red;">{{ $message }}</span>
    @enderror
    <br>

    <label>Ngày Sinh:</label>
    <input type="text" name="date">
    @error('date')
        <span style="color: red;">{{ $message }}</span>
    @enderror
    <br>

    <label>Điện Thoại:</label>
    <input type="text" name="phone">
    @error('phone')
        <span style="color: red;">{{ $message }}</span>
    @enderror
    <br>

    <label>Website:</label>
    <input type="text" name="web">
    @error('web')
        <span style="color: red;">{{ $message }}</span>
    @enderror
    <br>

    <label>Địa Chỉ:</label>
    <input type="text" name="address">
    @error('address')
        <span style="color: red;">{{ $message }}</span>
    @enderror
    <br>

    <button type="submit">Oke</button>
</form>


    @if(isset($user))
        <h3>Thông Tin Đã Nhập:</h3>
        <p>Họ Tên: {{ $user['name'] }}</p>
        <p>Tuổi: {{ $user['age'] }}</p>
        <p>Ngày Sinh: {{ $user['date'] }}</p>
        <p>Điện Thoại: {{ $user['phone'] }}</p>
        <p>Website: {{ $user['web'] }}</p>
        <p>Địa Chỉ: {{ $user['address'] }}</p>
    @endif

   <h2>Danh Sách Người Đăng Ký</h2>
@if (session('users'))
    <ul>
        @foreach (session('users') as $user)
            <li>
                <strong>Họ Tên:</strong> {{ $user['name'] }} <br>
                <strong>Tuổi:</strong> {{ $user['age'] }} tuổi <br>
                <strong>Ngày Sinh:</strong> {{ $user['date'] }} <br>
                <strong>Điện Thoại:</strong> {{ $user['phone'] }} <br>
                <strong>Website:</strong> {{ $user['web'] }} <br>
                <strong>Địa Chỉ:</strong> {{ $user['address'] }}
            </li>
        @endforeach
    </ul>
@endif

</body>
</html>
