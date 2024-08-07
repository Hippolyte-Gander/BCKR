O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:47:"C:\laragon\www\Github\BCKR\assets\css\style.css";s:10:"publicPath";s:54:"/assets/css/style-8dda866e3595f606d772e7d751d9d6d5.css";s:23:"publicPathWithoutDigest";s:21:"/assets/css/style.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:10875:"@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
    font-size: 1.15rem;
    color: rgb(255, 255, 255);
}

/* --------------- NAVBAR ---------------- */


header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: rgb(22, 22, 22);
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
    max-height: 80px;
    min-height: 80px;
    border-bottom: solid 2px white;
}

a {
    text-decoration: none;
    color: white;
}

.img-logo {
    max-height: 60px;
}

nav {
    font-size: 1.25rem;
    display: flex;
    justify-content: space-between;
}

.liens a:hover {
    text-decoration: underline;
    color:  rgb(255, 255, 255);
}

.liens a {
    padding: 0 10px;
}

header .menu-mobile {
    display: none;
}

/* --- Bouton barre --- */

.toggle-btn i {
    font-size: 2rem;
    color: white;
    cursor: pointer;
}

.toggle-btn i:hover {
    transition: 0.2s;
    color: red;
}

/* Menu mobile */

@media (max-width: 1000px) {

    header .menu-mobile {
        display: flex;
        flex-direction: column;
    }

    header {
        padding: 20px 0 20px 50px;
        gap: 0;
        max-height: none;
        justify-content: left;
    }

    header .login,
    header .logo,
    nav a,
    .login a {
        display: none;
    }

    .mobile-menu {
        display: none;
    }
    
    .mobile-croix {
        /* display: none; */
        text-align: end;
        width: 100%;
    }
}


/* --- Boutons connexion --- */
.login {
    display: flex;
    gap: 20px;
}

.deconnexion {
    background-color: white;
    color: black;
    border: solid 1px rgb(0, 0, 0);
    border-radius: 5px;
    padding: 10px 15px;
}

.connexion {
    background-color: rgb(0, 0, 0);
    border: solid 1px white;
    border-radius: 5px;
    padding: 9px 14px;
}

.inscription {
    background-color: white;
    color: black;
    border-radius: 5px;
    padding: 10px 15px;
}

.deconnexion:hover {
    text-decoration: none;
    color:  rgb(0, 0, 0);
    transition: 0.2s;
    box-shadow: 0 0 20px rgb(161, 161, 161);
}

.connexion:hover {
    text-decoration: none;
    color:  rgb(255, 255, 255);
    transition: 0.2s;
    box-shadow: 0 0 20px rgb(255, 255, 255);
}

.inscription:hover {
    text-decoration: none;
    color:  rgb(0, 0, 0);
    transition: 0.2s;
    box-shadow: 0 0 20px rgb(161, 161, 161);
}

/* --------------- FOOTER ---------------- */

footer {
    background: rgb(22, 22, 22);
    height: 70px;
    font-size: 1.25rem;
    display: flex;
    gap: 30px;
    align-items: center;
    justify-content: center;
}

footer a {
    color: rgb(255, 255, 255);
}

footer a:hover {
    text-decoration: underline;
    color:  rgb(255, 255, 255);
}

/* --------------- TITRE PRINCIPAL ---------------- */

.nom-club {
    width: 100%;
    padding: 50px 20px;
    align-items: center;
    text-align: center;
}

h1 {
    padding: 90px 0px;
    color: rgb(255, 255, 255);
    font-family: Poppins;
    font-weight: 800;
    font-size: clamp(2rem, 7.5vw + .5rem, 4rem);
}

h3 {
    font-size: clamp(1.5rem, 5vw + 0.5rem, 2.25rem);
}

h5 {
    font-size: clamp(1rem, 5vw, 1.75rem);
}

/* --------------- PAGE ACCUEIL ---------------- */

main {
    display: flex;
    flex-direction: column;
    background: url("../img/bg1-terrain-tres-sombre-758b3d0eebb2a67c9f05e4cd5121d108.jpg") no-repeat;
    background-size: cover;
}

.accueil {
    min-height: 100vh;
    display: flex;
    flex-direction: row-reverse;
    padding: 0px 20px;
}

.accueil h3, .accueil h5, .accueil p {
    color: white;
}

.accueil h3 {
    text-decoration: underline;
}

.a-venir {
    width: 30%;
    margin: 30px;
}

.a-venir h3 {
    margin: 50px 30px;
}

.boucle-for-evenement h5 {
    padding: 20px 0;
}

.boucle-for-evenement {
    padding: 20px 0;
}

.club {
    color: white;
    display: flex;
    flex-direction: column;
    width: 60%;
    margin: 30px;
    gap: 30px;
}

.a-venir,
.club-description,
.club-entrainements,
.club-activites {
    background-color: rgba(24, 25, 29, 0.7);
    border-radius: 3px;
}


.club-description,
.club-entrainements,
.club-activites {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0 25px 0 15px;
}

.titre-texte {
    display: flex;
    flex-direction: column;
    padding: 30px;
    /* background: rgba(15, 15, 15, 0.555); */
    font-size: 1.5rem;
    text-align: justify;
    gap: 20px;
}

.titre-texte h3 {
    padding: 20px 0px;
}

/* ---------- IMAGES ---------- */

.club-description img,
.club-entrainements img,
.club-activites img {
    margin: 20px;
    border-radius: 5px;
    width: 30%;
    object-fit: cover;
}

/* --------------- GÉNÉRAL ---------------- */

h4 {
    color: rgb(255, 255, 255);
    padding: 100px 20px 20px 20px;
}

.texte-utilisateur {
    color: rgb(0, 0, 0);
}

/* --------------- LISTE UTILISATEUR ---------------- */

.utilisateurs-container {
    margin-top: 80px;
    min-height: 100vh;
    background: url("../img/terrain-bad-sombre-6373ae59d00b8f3ac4178d1eb3884aa6.jpg") no-repeat;
    background-size: cover;
}

.utilisateurs-container h4 {
    padding: 60px;
    margin: 60px;
    color: white;
}

.utilisateurs-container p {
    padding: 60px;
    margin: 60px;
    display: flex;
    flex-direction: column;
    width: 50%;
    background: #3a3a3a85;
    border-radius: 5px;
}

.utilisateurs-container a {
    color: white;
    margin: 10px;
}

.utilisateurs-container a:hover {
    text-decoration: underline;
}

/* --------------- DETAIL UTILISATEUR ---------------- */



/* --------------- LISTE MEMBRES ---------------- */

.membre-container {
    margin-top: 80px;
    min-height: 100vh;
    background: url("../img/terrain-bad-sombre-6373ae59d00b8f3ac4178d1eb3884aa6.jpg") no-repeat;
    background-size: cover;
}

.membre-container h4 {
    padding: 60px;
    margin: 60px;
    color: white;
}

.membre-container p {
    padding: 60px;
    margin: 60px;
    display: flex;
    flex-direction: column;
    width: 50%;
    background: #3a3a3a85;
    border-radius: 5px;
}

.membre-container a {
    color: white;
    margin: 10px;
}

.membre-container a:hover {
    text-decoration: underline;
}

/* --------------- LISTE ÉVÉNEMENTS ---------------- */

.liste-evenement-background {
    background: url("../img/volants-sur-terrain-sombre-4009340a42c79bf0e58014a6ca746bc4.jpg") no-repeat;
    background-size: cover;
    min-height: 90lvh;
    display: flex;
    flex-direction: column;
}

.liste-evenement-background a {
    color: white;
    padding: 20px;
}

table {
    width: 80%;
    border: solid 2px white;
    border-collapse: collapse;
    margin: 0 auto;
}

.titre-colonne {
    font-weight: 600;
}

td, tr {
    background-color: rgba(39, 39, 39, 0.700);
    padding: 30px;
    border: solid 1px white;
    text-align: center;
}

.btn-editer {
    color: black;
    padding: 10px;
    background-color: orange;
    border-radius: 10px;
}

.btn-supprimer {
    color: black;
    padding: 10px;
    background-color: rgb(226, 0, 0);
    border-radius: 10px;
}

/* --------------- DÉTAIL ÉVÉNEMENT ---------------- */

.det-evenement-background {
    background: url("../img/terrain-bad-sombre-6373ae59d00b8f3ac4178d1eb3884aa6.jpg") no-repeat;
    background-size: cover;
    min-height: 80lvh;
}

.det-evenement-background p {
    padding: 20px;
}

/* --------------- MENTIONS LÉGALES ---------------- */

.mentions-legales-background {
    background: url("../img/photo-lignes-sombre-5886afcbdae884216617e715fe27c95b.jpg") no-repeat;
    background-size: cover;
    min-height: 85lvh;
}

.mentions-bloc-texte {
    margin: 30px;
    background-color: rgba(24, 25, 29, 0.7);
    border-radius: 3px;
}

/* --------------- FORMULAIRE ---------------- */

.formulaire-background {
    background: url("../img/volant-sur-ligne-sombre-94f75172ad6fb30a799115b720edcd1d.jpg") no-repeat;
    background-size: cover;
}

.formulaire {
    display: flex;
    padding: 50px;
}

.formulaire form {
    width: 100%;
}

.required {
    color: rgb(255, 255, 255);
    padding-right: 20px;
}

.texte-formulaire {
    color: rgb(255, 255, 255);
}

.row-form {
    display: flex;
    flex-direction: row;
    width: 100%;
    margin: 20px 0px;
}

.col-form {
    display: flex;
    flex-direction: column;
    width: 50%;
}

.formulaire input[type=text] {
    width: 90%;
    padding: 12px 20px;
    margin: 10px 0;
    background-color: rgb(39, 39, 39);
    color: white;
    border: solid 1px rgb(165, 165, 165);
    border-radius: 5px;
}

.formulaire textarea {
    margin-top: 10px;
    padding: 10px;
    min-width: 190%;
    max-width: 190%;
    min-height: 15lvh;
    background-color: rgb(39, 39, 39);
    color: white;
    border: solid 1px rgb(165, 165, 165);
    border-radius: 5px;
}

.formulaire input[type=datetime-local] {
    width: 90%;
    padding: 12px 20px;
    margin: 10px 0;
    background-color: rgb(39, 39, 39);
    color: white;
    border: solid 1px rgb(165, 165, 165);
    border-radius: 5px;
}

.formulaire select {
    width: 90%;
    padding: 12px 20px;
    margin: 10px 0;
    background-color: rgb(39, 39, 39);
    color: white;
    border: solid 1px rgb(165, 165, 165);
    border-radius: 5px;
}

.formulaire select option{
    color: rgb(255, 255, 255);
}


.valider-btn-formulaire {
    background-color: #04AA6D;
    border: 2px solid black;
    border-radius: 5px;
    color: rgb(0, 0, 0);
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

.valider-btn-formulaire:hover {
    background-color: #08d48a;
}

/* input[type=text]{
}
input[type=date]{
}

input[type=password]{
}

input[type=number]{
} */";s:6:"digest";s:32:"8dda866e3595f606d772e7d751d9d6d5";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:7:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:65:"C:\laragon\www\Github\BCKR\assets\img\bg1-terrain-tres-sombre.jpg";s:10:"publicPath";s:72:"/assets/img/bg1-terrain-tres-sombre-758b3d0eebb2a67c9f05e4cd5121d108.jpg";s:23:"publicPathWithoutDigest";s:39:"/assets/img/bg1-terrain-tres-sombre.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"758b3d0eebb2a67c9f05e4cd5121d108";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:31:"img/bg1-terrain-tres-sombre.jpg";}i:1;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:60:"C:\laragon\www\Github\BCKR\assets\img\terrain-bad-sombre.jpg";s:10:"publicPath";s:67:"/assets/img/terrain-bad-sombre-6373ae59d00b8f3ac4178d1eb3884aa6.jpg";s:23:"publicPathWithoutDigest";s:34:"/assets/img/terrain-bad-sombre.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"6373ae59d00b8f3ac4178d1eb3884aa6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:26:"img/terrain-bad-sombre.jpg";}i:2;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:60:"C:\laragon\www\Github\BCKR\assets\img\terrain-bad-sombre.jpg";s:10:"publicPath";s:67:"/assets/img/terrain-bad-sombre-6373ae59d00b8f3ac4178d1eb3884aa6.jpg";s:23:"publicPathWithoutDigest";s:34:"/assets/img/terrain-bad-sombre.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"6373ae59d00b8f3ac4178d1eb3884aa6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:26:"img/terrain-bad-sombre.jpg";}i:3;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:68:"C:\laragon\www\Github\BCKR\assets\img\volants-sur-terrain-sombre.jpg";s:10:"publicPath";s:75:"/assets/img/volants-sur-terrain-sombre-4009340a42c79bf0e58014a6ca746bc4.jpg";s:23:"publicPathWithoutDigest";s:42:"/assets/img/volants-sur-terrain-sombre.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"4009340a42c79bf0e58014a6ca746bc4";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:34:"img/volants-sur-terrain-sombre.jpg";}i:4;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:60:"C:\laragon\www\Github\BCKR\assets\img\terrain-bad-sombre.jpg";s:10:"publicPath";s:67:"/assets/img/terrain-bad-sombre-6373ae59d00b8f3ac4178d1eb3884aa6.jpg";s:23:"publicPathWithoutDigest";s:34:"/assets/img/terrain-bad-sombre.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"6373ae59d00b8f3ac4178d1eb3884aa6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:26:"img/terrain-bad-sombre.jpg";}i:5;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:61:"C:\laragon\www\Github\BCKR\assets\img\photo-lignes-sombre.jpg";s:10:"publicPath";s:68:"/assets/img/photo-lignes-sombre-5886afcbdae884216617e715fe27c95b.jpg";s:23:"publicPathWithoutDigest";s:35:"/assets/img/photo-lignes-sombre.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"5886afcbdae884216617e715fe27c95b";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:27:"img/photo-lignes-sombre.jpg";}i:6;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:65:"C:\laragon\www\Github\BCKR\assets\img\volant-sur-ligne-sombre.jpg";s:10:"publicPath";s:72:"/assets/img/volant-sur-ligne-sombre-94f75172ad6fb30a799115b720edcd1d.jpg";s:23:"publicPathWithoutDigest";s:39:"/assets/img/volant-sur-ligne-sombre.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"94f75172ad6fb30a799115b720edcd1d";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:31:"img/volant-sur-ligne-sombre.jpg";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:13:"css/style.css";}