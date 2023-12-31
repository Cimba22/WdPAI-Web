<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&display=swap" rel="stylesheet">
    
    <title>Dashboard</title>
</head>
<body>
    

    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a class="header__logo" href="#"> <img src="public/img/logo_dashboard.svg"></a>
                
                <div class="header__user">


                    <span><img class="avatar__circle" src="public/img/userAvatar.svg"
                         alt size="48" height="48" width="48" >
                    </span>
                </div>
                 
            </div>
        </div>
    </header>

    


    <div class="project__page">
        <div class="container">
            <div class="main__inner">

                <div class="main__header">
                    <div class="day__hello">
                            <h2 class="msg__hello">Good morning</h2>
                    </div>
                        
                    <div class="day__quote">
                        <h4 class="msg_quote">Did I ever tell you 
                            what the definition of insanity is?</h4>
                    </div>
                </div>

                <section class="theme__boxes">
                    <div class="theme__box" id="box1">
                        <img src="public/img/boxFoto.svg" alt="book">
                        <span><h3 class="box__name">Books</h3></span>
                    </div>

                    <div class="theme__box" id="box2">
                        <img class="theme__img" src="public/img/boxFoto.svg" alt="films">
                        <span><h3 class="box__name">Films</h3></span>
                    </div>

                    <div class="theme__box" id="box3">
                        <img class="theme__img" src="public/img/boxFoto.svg" alt="serials">
                        <span><h3 class="box__name">Serials</h3></span>
                    </div>

                    <div class="theme__box" id="box4">
                        <img class="theme__img" src="public/img/boxFoto.svg" alt="games">
                        <span><h3 class="box__name">Games</h3></span>
                    </div>

                    <div class="theme__box" id="box5">
                        <img class="theme__img" src="public/img/boxFoto.svg" alt="podcasts">
                        <span><h3 class="box__name">Podcasts</h3></span>
                    </div>
                </section>


            </div>
        </div>
    </main>


    
</body>
</html>