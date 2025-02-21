<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <link rel="stylesheet" href="assets/style/form.css">
</head>
<body>

<div class="container">
<form id="sumForm" method="POST" action="sum">
        @csrf  {{-- Thêm CSRF token để bảo vệ form --}}
        
        <label for="numA">Enter So A</label>
        <input type="number" id="numA" name="numA" required>
        
        <label for="numB">Enter So B</label>
        <input type="number" id="numB" name="numB" required>
        
        <button type="submit">Submit</button>
    </form>

    {{-- Kiểm tra nếu $kq tồn tại mới hiển thị kết quả --}}
    @if(isset($kq))
        <div class="result">Kết quả: {{ $kq }}</div>
    @endif
</div>

<!-- <script>
    document.getElementById("sumForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Ngăn chặn tải lại trang

        let numA = document.getElementById("numA").value;
        let numB = document.getElementById("numB").value;
        
        let sum = Number(numA) + Number(numB);
        document.getElementById("result").textContent = sum;
    });
</script> -->

</body>
</html>