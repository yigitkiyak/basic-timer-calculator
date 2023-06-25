<!-- Coded by yigitkiyak -->
<!DOCTYPE html>
<html>
<head>
    <title>Timer Hesaplayıcı</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
        }
        .form-container {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .form-container input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
        .form-container input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .alert {
            padding: 10px;
            border-radius: 5px;
        }
        .alert.success {
            background-color: #d4edda;
            color: #155724;
        }
        .alert.error {
            background-color: #f8d7da;
            color: #721c24;
        }
        .form-container input[type="submit"].clear {
            background-color: #ccc;
            color: #333;
        }
    </style>
    <script>
        function hesapla() {
            var saniye = parseInt(document.getElementById('saniye').value);

            var timerSaniye = saniye * 1000;

            var sonuc = document.getElementById('sonuc');
            sonuc.innerHTML = "Timer süresi: " + timerSaniye + " timer saniye";
            sonuc.classList.add("alert", "success");
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Timer Hesaplayıcı</h1>
        <div class="form-container">
            <label for="saniye">Saniye:</label>
            <input type="number" id="saniye" placeholder="Saniye girin">
            <br>
            <input type="submit" value="Hesapla" onclick="hesapla()">
        </div>
        <div id="sonuc"></div>
    </div>
</body>
</html>
