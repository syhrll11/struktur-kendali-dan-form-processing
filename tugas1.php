<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Ujian</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 30px;
            background-color: #fff;
            padding: 15px;
            border-left: 5px solid #007bff;
            border-radius: 6px;
            max-width: 400px;
        }

        .status-lulus {
            color: green;
            font-weight: bold;
        }

        .status-remedial {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Form Nilai Ujian</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="nilai">Nilai Ujian:</label>
        <input type="number" id="nilai" name="nilai" required>

        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai'];

        echo '<div class="result">';
        echo "<h3>Hasil:</h3>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Nilai Ujian: " . htmlspecialchars($nilai) . "<br>";

        if ($nilai > 70) {
            echo '<span class="status-lulus">Status: Lulus</span>';
        } else {
            echo '<span class="status-remedial">Status: Remedial</span>';
        }
        echo '</div>';
    }
    ?>
</body>
</html>
