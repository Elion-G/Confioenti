<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    {{-- font awesome link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    {{-- mi archivo personalizado de css --}}
    <link rel="stylesheet" href="css/app.css" type="text/css">
    
</head>
<body>
    {{-- Inicio del header --}}

    <header class="header">
        <a href="#" class="logo">
            <img src="images/logo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="Busca aquí...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-1.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">100.000 Gs.</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-2.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">100.000 Gs.</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-3.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">100.000 Gs.</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-4.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">100.000 Gs.</div>
                </div>
            </div>
            <a href="#" class="btn">Salir ahora</a>
        </div>
    </header>

    {{-- Fin del header --}}

    {{-- Inicio del home --}}

    <section class="home" id="home">
        <div class="content">
            <h3>Cafe con leche</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, quibusdam dolor? A nam saepe recusandae?</p>
            <a href="#" class="btn">Obtén tu café</a>
        </div>
    </section>

    {{-- Fin del home --}}

    {{-- Inicio del about us --}}

    <section class="about" id="about">

        <h1 class="heading"> <span> Sobre </span> nosotros </h1>
        <div class="row">
            <div class="image">
                <img src="images/about-img.jpeg" alt="">
            </div>

            <div class="content">
                <h3>Qué hace que nuestra tienda sea especial?</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem enim culpa, molestias modi a labore exercitationem quis eligendi nam fugit corporis officiis tempora amet, reiciendis, voluptatibus quod cupiditate non unde?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum exercitationem placeat non voluptatibus! Illum recusandae molestias placeat voluptas aliquid expedita?</p>
                <a href="#" class="btn">Leer más</a>
            </div>
        </div>
        
    </section>

    {{-- Fin del about us --}}

    {{-- Inicio del menú --}}

    <section class="menu" id="menu">
        <h1 class="heading"> Nuestro <span> menu </span></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/menu-1.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price">125.000 Gs. <span> 90.000 Gs. </span> </div>
                <a href="#" class="btn"> Agregar al carrito </a>
            </div>

            <div class="box">
                <img src="images/menu-2.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price">125.000 Gs. <span> 90.000 Gs. </span> </div>
                <a href="#" class="btn"> Agregar al carrito </a>
            </div>

            <div class="box">
                <img src="images/menu-3.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price">125.000 Gs. <span> 90.000 Gs. </span> </div>
                <a href="#" class="btn"> Agregar al carrito </a>
            </div>

            <div class="box">
                <img src="images/menu-4.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price">125.000 Gs. <span> 90.000 Gs. </span> </div>
                <a href="#" class="btn"> Agregar al carrito </a>
            </div>

            <div class="box">
                <img src="images/menu-5.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price">125.000 Gs. <span> 90.000 Gs. </span> </div>
                <a href="#" class="btn"> Agregar al carrito </a>
            </div>

            <div class="box">
                <img src="images/menu-6.png" alt="">
                <h3>tasty and healty</h3>
                <div class="price">125.000 Gs. <span> 90.000 Gs. </span> </div>
                <a href="#" class="btn"> Agregar al carrito </a>
            </div>

        </div>
    </section>    

    {{-- Fin del menú --}}

    <section class="products" id="products">
        <h1 class="heading"> Nuestros <span> Productos </span> </h1>
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
                    <h3>fresh coffe</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">125.000 Gs. <span> 200.000 Gs. </span> </div>
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
                    <h3>fresh coffe</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">125.000 Gs. <span> 200.000 Gs. </span> </div>
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
                    <h3>fresh coffe</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">125.000 Gs. <span> 200.000 Gs. </span> </div>
                </div>
            </div>

        </div>
    </section>


    <section class="review" id="review">

        <h1 class="heading">Review <span> de clientes </span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolores sed vel beatae ab, illo natus doloremque eum impedit laborum!</p>
                <img src="images/pic-1.png" class="user" alt="">
                <h3>Elias Gonzalez</h3>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolores sed vel beatae ab, illo natus doloremque eum impedit laborum!</p>
                <img src="images/pic-2.png" class="user" alt="">
                <h3>Elias Gonzalez</h3>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolores sed vel beatae ab, illo natus doloremque eum impedit laborum!</p>
                <img src="images/pic-3.png" class="user" alt="">
                <h3>Elias Gonzalez</h3>
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

    <section class="contact" id="contact">

        <h1 class="heading"> <span> contacta con </span> nosotros </h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5092.3667300780335!2d-54.61029298615985!3d-25.510147142502746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f6854c573a7187%3A0x8598b961c21c034!2sDudu%20Empanadas%20-%20Mister%20Burger!5e0!3m2!1ses!2spy!4v1664889207518!5m2!1ses!2spy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="">

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

    <section class="blogs" id="blogs">

        <h1 class="heading">Nuestros <span> blogs </span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/blog-1.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21 may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quae consequuntur corrupti repudiandae beatae rerum ut! Adipisci ut architecto aliquid?</p>
                    <a href="#" class="btn">Leer más</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21 may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quae consequuntur corrupti repudiandae beatae rerum ut! Adipisci ut architecto aliquid?</p>
                    <a href="#" class="btn">Leer más</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/blog-3.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21 may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quae consequuntur corrupti repudiandae beatae rerum ut! Adipisci ut architecto aliquid?</p>
                    <a href="#" class="btn">Leer más</a>
                </div>
            </div>

        </div>

    </section>

    {{-- Inicio del footer --}}

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
        </div>

        <div class="credit"> Created by <span> Elias Gonzalez </span> | all rights reserved </div>

    </section>

    {{-- Fin del footer --}}





    {{-- mi archivo personalizado de javascript --}}
    <script src="js/script.js"></script>
</body>
</html>