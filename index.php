<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 220px;
            height: auto;
            z-index: 990;
        
        }

        body{
            text-align: center;
            font-family: "Young Serif", serif;
            background-color: black;
        }
        .bodyBkg{
            background-image: url("back1.jpg");
            background-size:cover;
            
            filter: blur(80px);
            width: 100%;
            height: 100vh;
            z-index:-1;
            position: fixed;
            top:0px;
            left: 0px;
        }

        .title {
        background: linear-gradient(to right , rgb(43, 43, 43), rgb(68, 68, 124) );
    
        font-family: "Young Serif", serif;
        font-weight: 400;
        font-size: 100px;
        text-align: center;
        background-clip: text;
        -webkit-text-fill-color: transparent;

}

    .container{
        display: flex;
        width: 80%;
        height: fit-content;
        margin-left: auto;
        margin-right: auto;
        flex-direction: row;
        gap: 10%;

    }

    .container-flex{
        width:30%;
        align-items: center;
        justify-content: centers;
        font-display: box;padding: 20px;
        box-shadow: 10px 0px 20px rgb(34, 34, 62),
                    0px 0px 35px inset rgb(0, 0, 0)
                    ;
        border-radius: 15px;
        background-image: url("back.jpg");
            background-size:cover;
            
            width: 100%;
            height: 100%;
            color: rgb(34, 34, 62);

    }

    .container-flex a{
        text-decoration: none;
        color: rgb(122, 122, 221);
    }
    .animated-element-dash {
    opacity: 0; 
    transform: translateY(50px); /* Move the element down initially */
        transition: opacity 5s ease, transform 3s ease; /* Add transitions for opacity and transform */
        display: flex;
        color: aliceblue;
        justify-content: center;
        align-items: center;

    }

    .animate-dash {
        opacity: 1; /* Make the element visible */
        transform: translateY(0); /* Move the element up */
    }
    .animated-element-test {
    opacity: 0; /* Initially hide the element */
    transform: translateY(50px); /* Move the element down initially */
        transition: opacity 5s ease, transform 3s ease; /* Add transitions for opacity and transform */
        display: flex;
        color: aliceblue;
        justify-content: center;
        align-items: center;

    }

    .animate-test {
        opacity: 1; /* Make the element visible */
        transform: translateY(0); /* Move the element up */
    }

    .animated-element-buton {
    opacity: 0; /* Initially hide the element */
    transform: translateY(50px); /* Move the element down initially */
        transition: opacity 5s ease, transform 3s ease; /* Add transitions for opacity and transform */
        display: flex;
        justify-content: center;
        align-items: center;
            padding: 15px 30px;
            background: linear-gradient(135deg, rgb(25, 38, 59), rgb(103, 121, 237), rgb(25, 38, 59));
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            box-shadow: 5px 4px 15px rgb(103, 121, 237);

    }

    .animate-buton {
        opacity: 1; /* Make the element visible */
        transform: translateY(0); /* Move the element up */
        box-shadow: 5px 4px 35px rgba(103, 121, 237, 0.449);
    }

        .login-button:hover {
            background-color:rgb(103, 121, 237);
        }

    .nav-bar{
        position: fixed;
        margin-right: auto;
        margin-left: auto;
        flex-direction: row;

        width: 0px;
        background-color: rgb(25, 38, 59);
        padding: 10px;
        animation: nav linear;
        text-align: center;
        justify-content: center;
        align-items: center;
        animation-timeline: scroll();
        top:0px;
        mask-origin: center;
        z-index: 9999;
    }

    @keyframes nav{
        to{width: 100%}
    }
    </style>
</head>
<body>
    <div class="nav-bar">
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
    </div>
    <div class="bodyBkg"></div>
    <img src="logooo.png" alt="Logo" class="logo">
        <h1 class="title"><b>SmartBuddy</b></h1>

            <h2 style="color:rgb(123, 123, 155)">Ce oferă platforma:</h2>
            <div class="container">
                <div class="container-flex">
                    <h3>Teste</h3>
                    <p>Teste care evaluează inteligența și tipurile de învățare care se potrivesc fiecăruia. Aceste instrumente pot oferi o perspectivă asupra capacităților și preferințelor individuale, facilitând astfel un proces mai eficient de dezvoltare personală.</p>
                    <a href="ind.php">Mai mult...</a>

                </div>
                <div class="container-flex">
                    <h3>Ghiduri</h3>
                    <p>Fiecare individ are un set unic de inteligențe și preferințe în învățare. Prin evaluarea acestor aspecte și identificarea celor mai bine dezvoltate modalități de învățare, se poate crea un ghid personalizat pentru fiecare persoană. Acest ghid poate oferi strategii și sfaturi adaptate pentru a maximiza potențialul individual și pentru a facilita progresul în direcția dorită, fie în domeniul personal, fie în cel profesional.
                    </p>
                    <a href="ind.php">Mai mult...</a>

                </div>
                <div class="container-flex">
                    <h3>Analize si rapoarte</h3>
                    <p>paragraf</p>
                    <p>paragraf</p>
                    <a href="ind.php">Mai mult...</a>

                </div>
            </div>

                <br><br><br><br><br><br>
        
                <div class="animated-element-dash">
                    <div style="float:left;">
                        <h3>Un dashboard pentru vizualizarea rezultatelor testelor care oferă:</h3>
                        <ul style="list-style-type: circle;text-align:left">
                            <li>O pagină de pornire cu un panou de bord interactiv care prezintă o vedere de ansamblu a rezultatelor testelor recente.</li>
                            <li>Grafice și diagrame dinamice care arată tendințele în rezultatele testelor și distribuția acestora.</li>
                            <li>O secțiune dedicată pentru analiza detaliată a fiecărui test, oferind informații despre scoruri, răspunsuri corecte și greșite și alte metrici relevante.</li>
                            <li>Un panou de setări personalizabile care permit utilizatorilor să-și ajusteze preferințele și să modifice parametrii testelor.</li>
                            <li>O interfață adaptabilă, compatibilă cu diferite dispozitive și ecrane, pentru o experiență uniformă pe orice platformă.</li>
                            <li>Un sistem robust de securitate pentru a proteja datele utilizatorilor și a asigura confidențialitatea informațiilor lor.</li>
                        </ul>
                        </div>
                    <img src="dash.png" alt="dashboard" style="width: 40vw; height:40vh; float: right; margin: 40px; border-radius: 14px;box-shadow: 10px 0px 20px rgb(34, 34, 62),
                    0px 0px 35px inset rgb(0, 0, 0)
                    ;">
                </div>
                <br><br><br>
                <div class="animated-element-test">

                    <img src="dash.png" alt="dashboard" style="width: 40vw; height:40vh; float: left; margin: 40px; border-radius: 14px;box-shadow: 10px 0px 20px rgb(34, 34, 62),
                    0px 0px 35px inset rgb(0, 0, 0)
                    ;">
                    <p style="float:right;text-align: right;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam veniam possimus unde eaque dolores. At ipsam iste aut quia ex deserunt perferendis hic facilis dolor, voluptate ad nihil dicta rerum?
                    
                    </p>
                    
                </div>
                <br><br><br><br><br><br>
              
                <a href="ind.html" class="animated-element-buton">Accesează platforma</a>

                <br><br><br><br><br><br>

                <script>
                    $(document).ready(function() {
                        $(window).scroll(function() {
                            var scroll = $(window).scrollTop();
                            var windowHeight = $(window).height();
                            var dashElementTop = $('.animated-element-dash').offset().top;
                            var testElementTop = $('.animated-element-test').offset().top;
                
                            // Check if the elements are in the viewport
                            if (scroll + windowHeight > dashElementTop) {
                                $('.animated-element-dash').addClass('animate-dash');
                            }
                            if (scroll + windowHeight > testElementTop) {
                                $('.animated-element-test').addClass('animate-test');
                            }
                            if (scroll + windowHeight > testElementTop) {
                                $('.animated-element-buton').addClass('animate-buton');
                            }
                        });
                    });
                </script>
                


    
</body>
</html>