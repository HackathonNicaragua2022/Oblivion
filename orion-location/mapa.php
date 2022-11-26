<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>orion</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/nav-css/nav.css">
        <link rel="stylesheet" href="css/index-css/index.css">
        <link rel="stylesheet" type="text/css" href="./API/Maps/estilo.css">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark>
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <!--<img src="./src/Logo/orion.png" alt=""  class="justify-content-around">-->
                    <span class="fs-4 px-5 fw-bold" id="textorion">ORIÓN</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Index.html">Mapa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cronología</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">dispositivo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cuenta</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <section>
            <div class="container-fluid w-100 p-0 ">
            
                <div id="map">
                    <div class="container-fluid panel-map" >         
                        <div id="floating-panel">
                            <input id="latlng" type="text" value="40.714224,-73.961452" />
                            <input id="submit" type="button" value="Reverse Geocode" />
                        </div>
                    </div>

                </div>

                
            </div>

            
        </section>




        <script src="./API/Maps/script.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxHavE4G2yXCgCNJJCP6tnIv3WfOBL0pE&callback=initMap"></script>
    </body>
</html>