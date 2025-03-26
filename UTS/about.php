<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        main {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1,
        h2 {
            color: #35424a;
        }

        img {
            border-radius: 20px;
            width: 180px;
            height: 180px;
            border: 4px solid #35424a;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            margin-top: 15px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .info-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .info-box {
            background: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        @media (max-width: 768px) {
            .info-container {
                flex-direction: column;
                align-items: center;
            }

            .info-box {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="programming.php">Programming Web</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>About Me</h1>
        <p>Halo! Saya <strong>Adhwa Pranaja Widyadana</strong>, seorang mahasiswa yang memiliki ketertarikan di dunia teknologi dan pengembangan web.</p>
        <img src="Gambar/Pas Foto.png" alt="Profile Picture">

        <div class="info-container">
            <div class="info-box">
                <h2>Nama & Pendidikan</h2>
                <p><strong>Nama:</strong> Adhwa Pranaja Widyadana</p>
                <p><strong>Pendidikan:</strong> Menempuh S1 Informatika Universitas Singaperbangsa Karawang</p>
            </div>

            <div class="info-box">
                <h2>Skills</h2>
                <ul>
                    <li>HTML, CSS, JavaScript</li>
                    <li>PHP & MySQL</li>
                    <li>UI/UX Design</li>
                    <li>Machine Learning Basics</li>
                </ul>
            </div>

            <div class="info-box">
                <h2>Minat</h2>
                <p>Saya memiliki minat dalam pengembangan aplikasi web, desain UI/UX, serta kecerdasan buatan.</p>
            </div>

            <div class="info-box">
                <h2>Experience</h2>
                <ul>
                    <li>Pengembangan Aplikasi Dessktop SPP Sekolah</li>
                    <li>Proyek UI/UX untuk aplikasi Web Base</li>
                    <li>Pengembangan chatbot dengan AI</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 Adhwa Pranaja Widyadana</p>
    </footer>
</body>

</html>