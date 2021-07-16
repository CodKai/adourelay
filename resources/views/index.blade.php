<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Adou Relay</title>
</head>
<body>
    <div class="navbar">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <a href="#">0601204040</a>
    </div>
    <div class="header">
        <div class="logo">
            <a href=""><img src="adourelay.png" alt=""></a>
        </div>
        <div class="nav">
            <a href="">Accueil</a>
            <a href="#form">S'enregistrer</a>
        </div>
    </div>

    <div class="content">
        <div class="content-header">
            <img src="ismael-paramo-tnVdQGmWtb0-unsplash2.jpg" alt="">
            <h1>عندك حانوت و بغيتي تزيد الربح ديالك <br> عن طريق خدمة جديدة و بلا راس المال</h1>
            <a href="#form" class="btn">تسجل دابا</a>
        </div>
        <div class="content-body">
            <form action='{{route("page.vendeurpost")}}'  method="post">
                <div class="form" id="form" >
                @csrf
                    <div class="title">Bienvenue</div>
                    <div class="subtitle">
                        Créons votre compte !</div>
                    <div class="input-container ic1">
                      <input name="inputnom" id="firstname" class="input" type="text" placeholder=" " />
                      <div class="cut"></div>
                      <label for="firstname" class="placeholder">Nom et prénom</label>
                    </div>
                    <div class="input-container ic2">
                      <input name="inputadresse" id="lastname" class="input" type="text" placeholder=" " />
                      <div class="cut"></div>
                      <label for="lastname" class="placeholder">Adresse du magasin</label>
                    </div>
                    <div class="input-container ic2">
                      <input name="inputtelephone" id="email" class="input" type="text" placeholder=" " />
                      <div class="cut cut-short"></div>
                      <label for="email" class="placeholder">Telephone</>
                    </div>
                    <button type="submit" class="submit">envoyer</button>
                  </div>
            </form>
        </div>
    </div>
</body>
</html>