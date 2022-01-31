<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГАЛЕРИЈА</title>
    <link rel = "stylesheet" href = "./galerija.css">
    <?php 
    include_once ("../includes/header_gost.php");
    ?>
</head>
<body>
    <h3 class="naslov">ГАЛЕРИЈА ВИДЕО СНИМАКА</h3>
    <div class="container">
        <div class="main_video">
            <div class="video">
            <video src = "./video1.mp4" controls muted autoplay></video>
            <h3 class ="naslov_videa">Француска, Бретања</h3>
            </div>
        </div>
        <div class="video_lista">
        <div class="vid active">
            <video src = "./video2.mp4" controls muted autoplay></video>
            <h3 class="naslov_videa">Рашка, Србија</h3>
            </div>
            <div class="vid">
            <video src = "./video3.mp4" controls muted autoplay></video>
            <h3 class="naslov_videa">Никољача, Србија</h3>
            </div>
            <div class="vid">
            <video src = "./video4.mp4" controls muted autoplay></video>
            <h3 class="naslov_videa">Гњилица, Србија</h3>
            </div>
            <div class="vid">
            <video src = "./video5.mp4" controls muted autoplay></video>
            <h3 class="naslov_videa">Власинско језеро, Србија</h3>
            </div>
            <div class="vid">
            <video src = "./video2.mp4" controls muted autoplay></video>
            <h3 class="naslov_videa">Рашка, Србија</h3>
            </div>
            <div class="vid">
            <video src = "./video3.mp4" controls muted autoplay></video>
            <h3 class="naslov_videa">Никољача, Србија</h3>
            </div>
            <div class="vid">
            <video src = "./video8.mp4" controls muted autoplay></video>
            <h3 class="naslov_videa">Рашка, Србија</h3>
            </div>
            <div class="vid">
            <video src = "./video9.mp4" controls muted autoplay></video>
            <h3 class="naslov_videa">Космај, Србија</h3>
            </div>
        </div>
    </div>
    <script> 
    let listVideo = document.querySelectorAll ('.video_lista .vid');
    let mainVideo = document.querySelector ('.main_video video');
    let title = document.querySelector ('.main_video .naslov_videa');
    listVideo.foreach(video=> {
        video.onclick = () => {
            listVideo.foreach(vid => vid.classList.remove ('active'));
            video.classList.add ('active');
            if (video.classList.contains ('active')) {
                let src = video.children[0].getAttribute ('src');
                mainVideo.src = src;
                let Text = video.children[1].innerHTML;
                tittle.innerHTML = text;
            };
        };

    });
    </script>
</body>
</html>