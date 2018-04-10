<?php
/**
* Hemsidan
*
* PHP version 5
* @category   Webbtjänst
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
    <!DOCTYPE html>
    <html lang="sv">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Resedagboken för dom ressugna</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>

    <body>
        <div class="kontainer">
            <header>
                <h1>Resedagboken</h1>
                <nav>
                    <ul>
                        <li><a href="index.php">Logga in</a></li>
                        <li><a class="aktuell" href="skapa_konto.php">Skapa konto</a></li>
                        <li><a href="#">Andras resor</a></li>
                        <li>
                            <form>
                                <input class="form-control" type="text" name="sok" placeholder="Sök">
                            </form>
                        </li>
                    </ul>
                </nav>
            </header>
            <main>
                <form class="kolumner" method="post">
                    <div>
                        <label>Förnamn</label>
                        <input class="form-control" type="text" name="fnamn">
                        <label>Efternamn</label>
                        <input class="form-control" type="text" name="enamn">
                        <label>Adress</label>
                        <input class="form-control" type="text" name="adress">
                        <label>Epost</label>
                        <input class="form-control" type="email" name="epost">
                        <label>Mobil</label>
                        <input class="form-control" type="text" name="mobil">
                        <button class="btn btn-primary">Registrera</button>
                    </div>
                    <div>
                        <label>Kön</label>
                        <input class="form-control" type="text" name="kon">
                        <label>Användarnamn</label>
                        <input class="form-control" type="text" name="anamn">
                        <label>Lösenord</label>
                        <input class="form-control" type="password" name="losen">
                        <label>Upprepa lösenord</label>
                        <input class="form-control" type="password" name="ulosen">
                    </div>
                </form>
            </main>
            <footer class="kolumner">
                <div>
                    <h4>Info</h4>
                    <p>...</p>
                </div>
                <div>
                    <h4>Kontakt</h4>
                    <p>...</p>
                </div>
            </footer>
        </div>
    </body>

    </html>
