<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ศูนย์เทคโนโลยีสารสนเทศและการสื่อสารเขต 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #b1b1b1; /* สีพื้นหลังเทาตามภาพต้นฉบับ */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .intro-image {
            max-width: 100%;
            max-height: 80vh;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        .btn-enter {
            margin-top: 30px;
            background-color: #8faecb;
            border: 3px solid #e0c879;
            color: white;
            border-radius: 25px;
            padding: 10px 40px;
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s;
        }
        .btn-enter:hover {
            background-color: #6a8ba8;
            color: white;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <img src="https://via.placeholder.com/800x500?text=Intro+Image+Banner" alt="Intro Banner" class="intro-image">

    <a href="{{ url('/home') }}" class="btn-enter">เข้าสู่เว็บไซต์</a>

</body>
</html>