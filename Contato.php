<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio</title>
    <link href="CascadingPort.css" rel="stylesheet">
</head>

<body>
    <div id="box">
        <div id="box-content">
            <div id="navigation" class="half-middle">
                <nav>
                    <ul class="no-bullets">

                    </ul>
                </nav>
            </div>
            <div id="contents">
                <div id="left" class="half-flex">
                    <h1>Hello World</h1>
                    <img id="photo" class="circle" src="/img/me/Me.jpg" alt="Minha-foto">
                    <div id="info">
                        <p>Contact Me</p>
                        <ul class='no-bullets'>
                            <li>Email: jeangabriel0990@gmail.com</li>
                            <li><a href="https://www.linkedin.com/in/jean-gabriel-henicka-tormes-0482382ab/" target="_blank">LinkedIN</a></li>

                        </ul>
                    </div>
                </div>
                <div id="right" class="half-flex">
                    <h1 id="hello">Your Feedback</h1>
                    <div id="form">
                        <form action="">
                            <Fieldset>
                                <label for="name">Seu Nome</label>
                                <input type="text" id='name'>
                                <br>
                                <label for="menssage">Mensagem</label>
                                <textarea name="menssage" id="menssage" rows="5" cols="10" maxlength="256"></textarea>
                                <input type="submit">
                            </Fieldset>
                        </form>
                    </div>
                    <div id="return" >
                        <ul class="no-bullets">
                            <li><a href="./Portifólio.php" class="link">Return</a></li>
                        </ul>
                    </div>
                    <div>
                        <img id="robot" class="" src="/img/Robots/Piano.png" alt="robot">
                    </div>
                </div>
            </div>
        </div>
</body>

</html>