<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Des web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="contato.css">
    <script src="./scripts.js" defer></script>
</head>

<body>

    <video class="video" autoplay muted loop>
        <source src="./movie/production ID_4210523.mp4" type="video/mp4">
    </video>
    
    <div class="container">



        <header class="header">
            <div class="header__share">
                <div class="header__icons">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-youtube"></a>
                </div>
            </div>
            <div class="navigation">
                <ul>
                    <li class="list">
                        <a href="home.php">
                            <span class="icon">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="text">Home</span>
                        </a>
                    </li>

                    <li class="list active">
                        <a href="contato.php">
                            <span class="icon">
                                <ion-icon name="person-outline"></ion-icon>
                            </span>
                            <span class="text">Contato</span>
                        </a>
                    </li>

                    <li class="list">
                        <a href="traducao.php">
                            <span class="icon">
                                <ion-icon name="language-outline"></ion-icon>
                            </span>
                            <span class="text">Traduções</span>
                        </a>
                    </li>

                    <li class="list">
                        <a href="albuns.php">
                            <span class="icon">
                                <ion-icon name="musical-notes-outline"></ion-icon>
                            </span>
                            <span class="text">Albuns</span>
                        </a>
                    </li>

                    <li class="list">
                        <a href="configuracoes.php">
                            <span class="icon">
                                <ion-icon name="settings-outline"></ion-icon>
                            </span>
                            <span class="text">Configurações</span>
                        </a>
                    </li>
                    <div class="indicator"></div>
                </ul>
            </div>
        </header>


        <section class="principal">


              <form action="https://api.staticforms.xyz/submit" method="post" class="card"> 
                <input type="hidden" name="accessKey" value="76c608a1-14c1-4b93-af94-f0d7c218f23f">
                <input type="hidden" name="redirectTo" value="contato.html"> 
                <!-- Professor, esse segundo INPUT, não vai funcionar, porque não publiquei a página-->

                <h3>Contato</h3>
                <br>

                <label for="inputNome">Primeiro Nome:</label>
                <input type="text" name="name" id="inputNome" required maxlength="25" minlength="3">
                <span></span>

                <label for="inputEmail">Endereço de Email:</label>
                <input type="email" id="inputEmail" name="email" required maxlength="50">
                <span></span>

                <label for="textAreaMensagem">Mensagem:</label>
                <textarea name="message" id="textAreaMensagem" required maxlength="140"></textarea>
                <span></span>

                <button>Enviar mensagem</button>
            </form>
        </section><!-- principal -->


        <footer class="footer">
            <div class="footer__share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-youtube"></a>
            </div>
            <div class="footer__credit">&copy; copyright @ 2022 by <span>Desenhevolvedores</span> │ all rights reserved!</div>
        </footer>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        const list = document.querySelectorAll('.list');
        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item) =>
            item.addEventListener('click', activeLink));
    </script>
</body>

</html>