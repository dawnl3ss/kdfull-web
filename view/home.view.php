<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/style.css">
        <title> KDFull :: Accueil </title>
    </head>

    <body>
        <nav class="navbar">
            <img class="menu-hamburger" src="../assets/img/menu-hamburger.png">
            <div class="nav-links">
                <ul>
                    <li><a href="/" class="active"> Accueil </a></li>
                    <li><a href="/tutoriels"> Tutoriels </a></li>
                    <li><a href="/reseaux"> Réseaux </a></li>
                    <li><a href="/posts"> Publications </a></li>
                </ul>
            </div>
            <a href="/" class="logo"> KDFull </a>
        </nav>

        <header>
        </header>

        <section>
            
        </section>

        <script>
            const menu = document.querySelector(".menu-hamburger");
            const nav = document.querySelector(".nav-links");

            menu.addEventListener('click', () => {
                nav.classList.toggle('mobile-menu');
            });
        </script>
    </body>
</html>