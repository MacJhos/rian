<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Saya</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="card">
        <div class="card-header">
            <img src="{{ asset('images/rian.jpeg') }}" alt="Foto Profil" class="profile-img">
        </div>

        <div class="card-body">
            <span class="tag">Web Developer</span>
            <h2>rian alvredo</h2>
            <p>saya suka bermain bola karena ingin seperti cristiano ronaldo .</p>

            <div class="stats">
                <div>
                    <h3>12+</h3>
                    <small>Projects</small>
                </div>
                <div>
                    <h3>2th</h3>
                    <small>Exp</small>
                </div>
                <div>
                    <h3>50+</h3>
                    <small>Clients</small>
                </div>
            </div>

            <div class="buttons">
                <a href="#" class="btn btn-primary">Contact Me</a>
                <a href="#" class="btn btn-outline">My CV</a>
            </div>
        </div>
    </div>

</body>
</html>
