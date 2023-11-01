<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['nome'])) {
    // Usuário não está autenticado, redireciona para a página de login
    header('Location: ../erro404.php');
    exit();
}

// Se o usuário estiver autenticado, exiba o conteúdo do painel
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Life</title>

    <!-- Font by CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Link costumizado CSS  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- Header start's  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/Logo.jpg" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>

    </nav>

    <div class="icons">

        <a class="btn" href="../Coffee/index.html">Account</a>
        <div class="fas login-page" id="login-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-1.png" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-2.png" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-3.png" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-4.png" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">Veja mais</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Café fresco pela manhã</h3>
        <p>O café é a prova de que pequenos momentos podem ser grandes fontes de prazer.</p>
        <a href="#" class="btn">Adiquira já o seu!!</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Sobre</span> nós </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpeg" alt="">
        </div>

        <div class="content">
            <h3>Oque torna nosso café especial?</h3>
            <p>Nosso café acompanha uma grande quantia de nós.</p>

            <p>Sendo em sentimentos ou nas memórias, quem não gosta de sentir o cheirinho do café feito na hora pela vovó?  </p>
            <a href="#" class="btn">Saiba Mais</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> Seu <span>Menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/menu-1.png" alt="">
            <h3>Cappuccino</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">Adicione ao carrinho</a>
        </div>

        <div class="box">
            <img src="images/menu-2.png" alt="">
            <h3>Café Mocha</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">Adicione ao carrinho</a>
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>Café Espresso</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">Adicione ao carrinho</a>
        </div>

        <div class="box">
            <img src="images/menu-4.png" alt="">
            <h3>Café Macchiato</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">Adicione ao carrinho</a>
        </div>

        <div class="box">
            <img src="images/menu-5.png" alt="">
            <h3>Café Duplo</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">Adicione ao carrinho</a>
        </div>

        <div class="box">
            <img src="images/menu-6.png" alt="">
            <h3>Caffè Latte.</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">Adicione ao carrinho</a>
        </div>

    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> Outros <span>Produtos</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-1.png" alt="">
            </div>
            <div class="content">
                <h3>Traditional Nicaragua 100% Organic</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-2.png" alt="">
            </div>
            <div class="content">
                <h3>Traditional Columbia 100% Organic</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-3.png" alt="">
            </div>
            <div class="content">
                <h3>traditional Peru whole bean Coffee 100% organic</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> Avaliações <span>dos</span> Clientes </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Minha experiência ao pedir para retirar no balcão foi tranquila, pedi pelo emular e aguardei dar o tempo e fui retirar o pedido, e não houve nenhum problema. E o app é super simples de mexer, não tem segredo.</p>
            <img src="images/pic-1.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Um Ótimo site de benefícios, simples e fácil basta comprar com seu cartão, e acompanhar sua evolução pelo site. Um atrativo que eu acharia interessante seriam "conquistas". exemplo: (após a 5 compra genhe.. "algum prémio") </p>
            <img src="images/pic-2.png" class="user" alt="">
            <h3>Lara Miller</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Muito bacana receber bebidas de recompensa de tempos em tempos, além da praticidade. Mas, uma observação: Por duas vezes recebi notificação no celular sobre promoção do dobro de estrelas, porém o aplicativo não me deu o brinde.</p>
            <img src="images/pic-3.png" class="user" alt="">
            <h3>jhonattan Stanley</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Contate</span> nos </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>Entrar em contato</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> Nossos <span>Blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/blog-1.jpeg" alt="">
            </div>
            <div class="content">
                <a href="https://www.gazetadopovo.com.br/bomgourmet/receitas-pratos/10-dicas-para-fazer-cafe-coado-perfeito/" class="title">Você realmente sabe como fazer o café perfeito?</a>
                <span>By Thiago / 21st may, 2023</span>
                <p>Veja a melhor forma para fazer-lo</p>
                <a href="https://www.gazetadopovo.com.br/bomgourmet/receitas-pratos/10-dicas-para-fazer-cafe-coado-perfeito/" class="btn">Veja mais</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-2.jpeg" alt="">
            </div>
            <div class="content">
                <a href="https://www.canalrural.com.br/noticias/agricultura/bahia-ganha-principal-concurso-de-qualidade-de-cafe-no-mundo/#:~:text=O%20caf%C3%A9%20especial%20produzido%20por,do%20Brasil%20na%20safra%202022." class="title">Onde são produzidos os melhores cafés do Brasil   a>
                <span>by Thiago / 21st may, 2023</span>
                <p>Veja onde são os melhores locais</p>
                <a href="https://www.canalrural.com.br/noticias/agricultura/bahia-ganha-principal-concurso-de-qualidade-de-cafe-no-mundo/#:~:text=O%20caf%C3%A9%20especial%20produzido%20por,do%20Brasil%20na%20safra%202022." class="btn">Veja mais</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-3.jpeg" alt="">
            </div>
            <div class="content">
                <a href="https://blog.trocodocafe.com.br/e-preciso-usar-balanca-para-o-preparo-de-cafe-especial/#:~:text=Essa%20%C3%A9%20uma%20quest%C3%A3o%20muito,N%C3%B3s%20pessoalmente%20recomendamos." class="title">É Preciso usar Balança para o Preparo de Café...</a>
                <span>by Thiago / 21st may, 2023</span>
                <p>Click e veja o por quê..</p>
                <a href="https://blog.trocodocafe.com.br/e-preciso-usar-balanca-para-o-preparo-de-cafe-especial/#:~:text=Essa%20%C3%A9%20uma%20quest%C3%A3o%20muito,N%C3%B3s%20pessoalmente%20recomendamos." class="btn">Veja mais</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/x1.porcentagem_/" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">menu</a>
        <a href="#">products</a>
        <a href="#">review</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
    </div>

    <div class="credit">created by <span>mr. Porcentagem</span> | all copyright</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>