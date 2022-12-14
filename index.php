<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <!--<link rel="stylesheet" href="./css/styles.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Cebra</title>
</head>

<body>

    <div id="titles">
        <div class="title">
            <h1>CE<span style="color: #509e11;">BR</span>A</h1>
        </div>
        <div class="sub-title">
            <h3>Companhia Energética do Brasil</h3>
        </div>
    </div>

    <div class="btn-center">
        <ul>
            <a href="#home-container" class="btn" id="home"><span>Início</span></a>
            <a href="#" class="btn" id="profile"><span>Perfil</span></a>
            <a href="#" class="btn" id="contact"><span>Contato</span></a>
        </ul>
    </div>

    <div id="home-container" class="home-container">
        <p>Seja bem-vindo(a) ao site da maior companhia fornecedora de energia do Brasil! <br>
            Aqui tratamos a energia com o maior esforço e com a maior tecnologia já disponível!</p>

        <div class="slides-containe">

            <div class="slides FadeAnimation">
                <div class="slideNumberText">1 / 3</div>
                <img src="./img/1.jpeg">
                <div class="text">Com os nossos cuidados impecaveis, nós somos a escolha certa para fornecer energia!
                </div>
            </div>

            <div class="slides FadeAnimation">
                <div class="slideNumberText">2 / 3</div>
                <img src="./img/2.jpg">
                <div class="text">Com a nossa tecnologia de última geração, você uma experiência de outro mundo!</div>
            </div>

            <div class="slides FadeAnimation">
                <div class="slideNumberText">3 / 3</div>
                <img src="./img/3.png">
                <div class="text">Estamos presentes em quase todas as cidades ao redor do Brasil!</div>
            </div>

            <a class="previous" onclick="changeSlidesIndex(-1)">&#129092;</a>
            <a class="next" onclick="changeSlidesIndex(1)">&#129094;</a>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide()"></span>
            <span class="dot" onclick="currentSlide()"></span>
            <span class="dot" onclick="currentSlide()"></span>
        </div>

        <div id="about">
            <h1>Sobre Nós</h1>

            <p>Começamos como uma pequena empresa focada na parte de eletrônicos no geral. Daí tivemos um grande
                empecilho na nossa frente: Energia.
                <br>Quase acabando com a empresa, decidimos mudar para o ramo de energia para nos ajudar e ajudar
                pessoas como você!
            </p>
            <p>Em nossa equipe contamos com várias pessoas dedicadas a ajudar pessoas com dificil acesso a uma boa fonte
                de energia, ou que não possuem condições de acessar a mesma.
                <br>Para realizar esse tipo de serviço, a nossa equipe especializada conta com um total de 300+ pessoas
                dispostas para a tarefa: Entregar o melhor da energia para você.
            </p>
        </div>
    </div>

    <div id="profile-container" class="profile-container">
        <div class="login-page">
            <div class="form">
                <h1>Bem-vindo(a) de volta!</h1>
                <div>
                    <?php include("./controllers/register.php")?>
                </div>
                <div>
                    <?php include("./controllers/login.php")?>
                </div>
            </div>
        </div>
    </div>

    <div id="contact-container" class="contact-container">
        <h1>Nossos Contatos</h1>
        <ul>
            <li>Email:
                <ul>
                    <li>Comercial: contato@cebra.br</li>
                    <li>Franquiado: nome.cebra@cebra.br</li>
                </ul>
            </li>
            <br>
            <div>
                <p>Telefones:</p>
            </div>
            <p>Norte: (99) 91234-5678</p>
            <p>Nordeste: (99) 91234-5678</p>
            <p>Centro-oeste: (99) 91234-5678</p>
            <p>Sudeste: (99) 91234-5678</p>
            <p>Sul: (99) 91234-5678</p>
        </ul>
        <div class="locals">
            <p>Locais de Atendimento</p>
            <div class="box-local">
                <p>Minas Gerais:
                    <br>Belo Horizonte
                    <br>Uberlândia
                    <br>Juiz de Fora
                </p>
            </div>
            <div class="box-local">
                <p>São Paulo:
                    <br>Campinas
                    <br>São Paulo
                    <br>Guarulhos
                </p>
            </div>
            <div class="box-local">
                <p>Rio de Janeiro:
                    <br>Macaé
                    <br>Niterói
                    <br>Rio de Janeiro
                </p>
            </div>
            <div class="box-local">
                <p>Rio Grande do Sul:
                    <br>Porto Alegre
                    <br>Rio Grande
                    <br>Gramado
                </p>
            </div>
            <div class="box-local">
                <p>Bahia:
                    <br>Salvador
                    <br>Porto Seguro
                    <br>Ilhéus
                </p>
            </div>
            <div class="box-local">
                <p>Mato Grosso:
                    <br>Cuiabá
                    <br>Várzea Grande
                    <br>Cáceres
                </p>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-dynamic" id="footer-dynamic">
            <p>Cebra &copy; 2022</p>
        </div>
    </footer>

    <script src="./js/_jquery.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>