<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Web</title>
    <link rel="stylesheet" href="styles.css">
    
    <style>
        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            text-align: center;
        }

        h1, h2 {
            color: #35424a;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        /* Styling untuk card */
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }

        /* Hover */
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .card a {
            text-decoration: none;
            color:rgb(51, 154, 116);
            font-weight: bold;
        }

        .card a:hover {
            color:rgb(42, 119, 48);
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
        <h1>Programming Web</h1>
        <h2>Materi Setiap Pertemuan</h2>

        <!-- Container untuk Card -->
        <div class="card-container">
            <div class="card">
                <h3>Materi 1</h3>
                <p>HTML Dasar</p>
                <a href="materi/Pertemuan1.html">Pelajari</a>
            </div>
            <div class="card">
                <h3>Materi 2</h3>
                <p>CSS</p>
                <a href="materi/pertemuan2.html">Pelajari</a>
            </div>
            <div class="card">
                <h3>Materi 3</h3>
                <p>Javascript</p>
                <a href="materi/pertemuan3.html">Pelajari</a>
            </div>
            <div class="card">
                <h3>Materi 4</h3>
                <p>Pengenalan PHP</p>
                <a href="materi/pertemuan4.html">Pelajari</a>
            </div>
            <div class="card">
                <h3>Materi 5</h3>
                <p>Mengontrol Alur Program</p>
                <a href="materi/pertemuan5.html">Pelajari</a>
            </div>
            <div class="card">
                <h3>Materi 6</h3>
                <p>Perulangan</p>
                <a href="materi/pertemuan6.html">Pelajari</a>
            </div>
            <div class="card">
                <h3>Materi 7</h3>
                <p>Array</p>
                <a href="materi/pertemuan7.html">Pelajari</a>
            </div>
        </div>

    </main>

    <footer>
        <p>&copy; 2025 Adhwa Pranaja Widyadana</p>
    </footer>
</body>
</html>
