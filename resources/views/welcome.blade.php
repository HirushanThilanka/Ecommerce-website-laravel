<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Commerce</title>

        <link href = "https://fonts.googeapis.com/css?family=Montserrat|Roboto:300,400,700" rel = "Stylesheet">
        <link rel="stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/responsive.css') }}">
        

       
    </head>
    <body>
        
        <header>
            
            <div class="top-nav-container container">
                <div class="logo">E-Commenrce</div>
                    <ul>

                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Cart</a></li>

                    </ul>
            </div>
             {{-- top nav eend --}}
            <div class="hero container">
                <div class="hero-copy">

                    <h1> E-Commerce Website</h1>
                    <p> This is a demo site </p>
                    <div class="hero-button">
                        <a href="#" class = "button-white button">Order</a>
                        <a href="#" class = "button-white button">Order 1</a>
                    </div>
                </div>
                    <div class="hero-image">
                        <img src="img/laptop.png" alt="Buy Laptops">
                    </div>
                </div> 
                {{-- End of hero hero-container --}} 
        </header>
        
        <div class="featured-selection">
            <div class="container">
                <h1 class = "text-center" > Shopping List </h1>
                <p Class = "section-description">  This is the description of the product that your going to by </p>

                <div class="text-center button-container">
                    <a href="#" class = "button">Featured</a>
                    <a href="#" class = "button">On Sale</a>
                </div>
            

            <div class="products text-center">
                <div class="product">
                    <img src="img/laptop-grid.png" alt="Buy Laptop">
                    <a href="#" class = "product-name"> MSI Laptop</a>
                    <div class = "product-price"> $899</div>

                </div>

                <div class="product">
                    <img src="img/laptop-grid.png" alt="Buy Laptop">
                    <a href="#" class = "product-name"> MSI Laptop</a>
                    <div class = "product-price"> $899</div>

                </div>

                <div class="product">
                    <img src="img/laptop-grid.png" alt="Buy Laptop">
                    <a href="#" class = "product-name"> MSI Laptop</a>
                    <div class = "product-price"> $899</div>

                </div>

                <div class="product">
                    <img src="img/laptop-grid.png" alt="Buy Laptop">
                    <a href="#" class = "product-name"> MSI Laptop</a>
                    <div class = "product-price"> $899</div>

                </div>

                <div class="product">
                    <img src="img/laptop-grid.png" alt="Buy Laptop">
                    <a href="#" class = "product-name"> MSI Laptop</a>
                    <div class = "product-price"> $899</div>

                </div>

                <div class="product">
                        <img src="img/laptop-grid.png" alt="Buy Laptop">
                        <a href="#" class = "product-name"> MSI Laptop</a>
                        <div class = "product-price"> $899</div>
    
                </div>

                    <div class="product">
                        <img src="img/laptop-grid.png" alt="Buy Laptop">
                        <a href="#" class = "product-name"> MSI Laptop</a>
                        <div class = "product-price"> $899</div>
    
                </div>

                    <div class="product">
                        <img src="img/laptop-grid.png" alt="Buy Laptop">
                        <a href="#" class = "product-name"> MSI Laptop</a>
                        <div class = "product-price"> $899</div>
    
                </div>

                    <div class="product">
                        <img src="img/laptop-grid.png" alt="Buy Laptop">
                        <a href="#" class = "product-name"> MSI Laptop</a>
                        <div class = "product-price"> $899</div>
    
                </div>

                    <div class="product">
                        <img src="img/laptop-grid.png" alt="Buy Laptop">
                        <a href="#" class = "product-name"> MSI Laptop</a>
                        <div class = "product-price"> $899</div>
    
                </div>
            
            </div>

            <div class="text-center button-container">
                    <a href="#" class="button"> View more Products </a>
            </div>

            </div>
                {{-- end container --}}
        </div>
            {{-- End feature --}}

            <div class="blog-section">
                <div class="container">
                    <h1 class = "text-container"> From Our blog</h1>

                    <p class="Section-description"> This is blog section. add what you want </p>
                    <div class="blog-posts">
                        <div class="blog-post">
                            <img src="img/blog.png" alt="Blog Post">
                            <a href="#"><h2 class="blog-title">blog post tile 1</h2></a>
                            <div class="blog-description">type anything suitable</div>
                        </div>
                    <div class="blog-post">
                            <img src="img/blog.png" alt="Blog Post">
                            <a href="#"><h2 class="blog-title">blog post tile 1</h2></a>
                            <div class="blog-description">type anything suitable</div>
                        </div>
                    <div class="blog-post">
                            <img src="img/blog.png" alt="Blog Post">
                            <a href="#"><h2 class="blog-title">blog post tile 1</h2></a>
                            <div class="blog-description">type anything suitable</div>
                        </div>
                    </div>
                    {{-- end of blog section --}}
                </div>
                    {{-- End of container --}}
            </div>

            <footer>
                <div class="footer-content container">
                    <div class="made-with">Made with <i class= "fa fa heart"> By HNL </i></div>
                </div>
            </footer>
        
    </body>
</html>

