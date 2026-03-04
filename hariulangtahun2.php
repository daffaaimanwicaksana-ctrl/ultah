<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Ulang Tahun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #ffecd2, #fcb69f); /* Gradien latar belakang */
            color: #333;
            text-align: center;
            padding: 50px;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 2.5em;
            color: #ff6b6b;
            animation: fadeInBounce 2s ease-in-out;
        }
        p {
            font-size: 1.2em;
            line-height: 1.6;
            animation: fadeIn 3s ease-in-out;
        }
        .signature {
            margin-top: 30px;
            font-style: italic;
            animation: fadeIn 4s ease-in-out;
        }
        /* Animasi CSS */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInBounce {
            0% { opacity: 0; transform: translateY(-50px) scale(0.8); }
            50% { opacity: 1; transform: translateY(0) scale(1.1); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Variabel PHP untuk pesan dinamis
        $name = "dekw yikksc"; // dedekw/ade yikksch
        $age = 15; // 15
        ?>
        
        <h1>Selamat Ulang Tahun, <?php echo htmlspecialchars($name); ?>!</h1>
        <p>
            Duarr, cie cieeew hari ini ada yang ulang tahun yahhw. 
            Selamat Ulang yaahhw adekk/de yik  <?php echo $age; ?> uwes nambah usia aja nics 15.
        </p>
        <p>
            semoga kamu makin jago ke prestasi mu dek, dan yapk tentunya hati hati sama guru guru penguji di ujian kelas 9 ini dek.
            ya paling dari aku jangan kaget sama penguji kelas 9 nanti dek...selamat menyantap makan kamu dek hehehehe

            sekali lagi Happy Birthday yahhw dede (tamat lah digempur hahaha)
        </p>
        <div class="signature">
            tamat ujian kelas 9<br>
            [strong] <!-- Dari kakel -->
        </div>
    </div>
</body>
</html>
