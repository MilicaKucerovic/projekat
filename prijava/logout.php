<style>
    body {
    width: 100vh;
    height: 100%;
    font-family: 'Mochiy Pop P One', sans-serif;
    background-image: url("./dron.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    }
    .logout {
    width: 50%;
    background: #272b25;
    opacity: 0.8;
    color: #ddd;
    text-align: center;
    padding: 30px;
    margin-top: 35px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
    .logout h1 {
    padding-bottom: 10px;
    font-size: 22px;
}
    a {
    text-decoration: none;
    list-style: none;
    color: #ddd;
}
    a:hover {
    color: black;
}

   .logout {box-shadow: 0px 0px 3px 3px #ddd;}
</style>
<?php 
session_start();

unset($_COOKIE['user']);
setcookie('user','',time()-3600);

session_destroy();
?>

<div class="logout">
    <h1>Успешно сте се излоговали. Кликните <a href='./login.php'>овде</a> да бисте се поново пријавили на сајт.</h1>
</div>
