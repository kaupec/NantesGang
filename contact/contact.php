<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<title>Jawn contact page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="contact.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
</head>

<?php

$name="";

// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_name"])) {
        $nameErr = "Name is required";

    } else {
        $name = test_input($_POST["user_name"]);

// check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";

        }
    }
    if (empty($_POST["user_first_name"])) {
        $firstNameErr = "First name is required";

    } else {
        $firstName = test_input($_POST["user_first_name"]);

// check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
            $firstNameErr = "Only letters and white space allowed";

        }
    }
    if (empty($_POST["user_email"])) {
        $emailErr = "Email is required";

    } else {
        $email = test_input($_POST["user_email"]);

// check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";

        }
    }
    if (empty($_POST["user_number"])) {
        $numberErr = "Number is required";

    } else {
        $number = test_input($_POST["user_number"]);

// check if number  is well
        if (!preg_match("/^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/",$number)) {
            $numberErr = "Invalid number format";

        }
    }
    if (empty($_POST["user_message"])) {
        $commentErr = "Comment is required";

    }else {
        $comment = test_input($_POST["user_message"]);

// check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $comment)) {
            $commentErr = "Only letters and white space allowed";
        }
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<body class="bg">
	<header>
		<nav class="navbar navbar-expand-lg bg-dark navbar sticky-top">
			<img src="../Images/logo_jawn_v2_+sombre.png" alt="logo" class="logo" />
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link text-white" href="../index.html">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="../event.html">Events</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="../feature_culture.html">Culture</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="../feature_artists.html">Artistes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="container-fluid">
		<!--Qui sommes nous?-->
		<div class="row tope">
			<div class="col mt-2 titre">
					<h2>Où sommes-nous ?</h2>
			</div>
		</div>
		<div class="row  bottom">
			<div class="col-md-4 col-10 offset-md-2">
				<div id="map"></div>
			</div>
			<div class="col-md-4 col-10 offset-md-0 offset-1">
				<div class="jumbotron">
					<h3 class="display-5">Wild Code School Nantes</h3>
						<p class="lead">
								2bis quai François Mitterrand,
								3ème étage,
								44200 NANTES</p>
						<a class="btn btn-dark btn-lg" href="https://wildcodeschool.fr/nantes/" target="_blank" role="button">Plus d'infos</a>
				</div>
			</div>
		</div>
		<div class="row tope">
			<div class="col mt-2 titre">
				<h2>Une question? Deux? Trois? Pas plus svp</h2>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-8 col-10 offset-lg-2 offset-1">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div>
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="user_name" class="form-control mt-2" placeholder="Canon ou Nikon ?" required>
                        <span class="error">
                            <?php if (isset($nameErr)){
                                echo $nameErr;
                            }
                            ?>
                        </span>
                    </div>
                    <div>
                        <label for="firstName">Prénom :</label>
                        <input type="text" id="firstName" name="user_first_name" placeholder="Nikon ou Canon ?" class="form-control mt-2" required>
                        <span class="error">
                            <?php if (isset($firstNameErr)){
                                echo $firstNameErr;
                            }
                            ?>
                        </span>
                    </div>
                    <div>
                        <label for="mail">E-mail :</label>
                        <input type="email" id="mail" name="user_email" placeholder="Adresse Couriel ?" class="form-control mt-2" required>
                        <span class="error">
                            <?php if (isset($emailErr)){
                                echo $emailErr;
                            }
                            ?>
                        </span>
                    </div>
                    <div>
                        <label for="tel">Tel :</label>
                        <input type="tel" id="tel" name="user_number" placeholder="HE l'artist, ta 1 06 ?" class="form-control mt-2" required>
                        <span class="error">
                            <?php if (isset($numberErr)){
                                echo $numberErr;
                            }
                            ?>
                        </span>
                    </div>
                    <div>
                        <label for="subject">Sujet :</label>
                        <select name="subject" size="1" class="form-control mt-2">
                            <option> L'indentation</option>
                            <option> Le référencement</option>
                            <option selected> L'écosystème numérique français</option>
                            <option> La fin du film Interstellar</option>
                            <option> Le tri selectif</option>
                            <option> Les gens qui disent "comme même"</option>
                            <option> Le conflit israelo-palestinien si t'es déter</option>
                        </select>
                    </div>
                    <div>
                        <label for="msg">Message :</label>
                        <textarea id="msg" name="user_message" placeholder="Nous t'écoutons... soit bref par contre...On est que 4" required></textarea>
                        <span class="error">
                            <?php if (isset($commentErr)){
                                echo $commentErr;
                            }
                            ?>
                        </span>
                    </div>
                    <div class="button">
                        <button class="btn btn-dark" type="submit">Bah vasy envoie, allez !</button>
                    </div>
                    <?php
                    if ( isset($name) and isset($firstName) and isset($email) and isset($number) and isset($comment)) {
                        echo ' Bravo, tes informations sont entre de bonnes mains AHAHA';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <footer class="page-footer font-small stylish-color-dark pt-4 bg-dark TopFooter">
        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center julien">
            <li class="list-inline-item">
                <a href="#" class="btn-floating btn-fb mx-1">
                    <i class="fab fa-2x fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn-floating btn-tw mx-1">
                    <i class="fab fa-2x fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn-floating btn-instagram mx-1">
                    <i class="fab fa-2x fa-instagram"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn-floating btn-li mx-1">
                    <i class="fab fa-2x fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-2x fa-snapchat"> </i>
                </a>
            </li>
        </ul>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 footer_text">© 2019 Copyright:
            <a href="../index.html" class="footer_text"> Jawn.com</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="contact.js"></script>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
</body>

</html>