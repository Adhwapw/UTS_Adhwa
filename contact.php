<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function validateForm(event) {
            event.preventDefault(); // Mencegah submit langsung
            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let subject = document.getElementById("subject").value.trim();
            let message = document.getElementById("message").value.trim();

            if (name === "" || email === "" || subject === "" || message === "") {
                alert("Semua bidang harus diisi!");
                return false;
            }

            alert("Pesan Anda telah dikirim!");
            document.getElementById("contact-form").reset(); // Reset form setelah submit
        }
    </script>
    <style>
        main {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #35424a;
        }

        form {
            display: flex;
            flex-direction: column;
            text-align: left;
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
        }

        input,
        textarea {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        button {
            margin-top: 15px;
            padding: 12px;
            background-color: rgb(51, 154, 116);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        button:hover {
            background-color: rgb(42, 119, 48);
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="programming.php">Programming Web</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Contact Me</h1>
        <p>Silahkan hubungi saya jika memiliki pertanyaan atau ingin bekerja sama.</p>

        <form action="mailto:2310631170061@student.unsika.ac.id" method="post" enctype="text/plain">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subjek:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2025 Adhwa Pranaja Widyadana</p>
    </footer>
</body>

</html>