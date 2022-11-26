<!DOCTYPE html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<html>
  <head>
    <meta charset="UTF-8">
        <title>orion</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/nav-css/nav.css">
        <link rel="stylesheet" href="css/index-css/index.css">
        <link rel="stylesheet" type="text/css" href="./API/Maps/estilo.css">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>


    <script type="module" crossorigin>
      (function () {
        const o = document.createElement("link").relList;
        if (o && o.supports && o.supports("modulepreload")) return;
        for (const e of document.querySelectorAll('link[rel="modulepreload"]'))
          s(e);
        new MutationObserver((e) => {
          for (const t of e)
            if (t.type === "childList")
              for (const n of t.addedNodes)
                n.tagName === "LINK" && n.rel === "modulepreload" && s(n);
        }).observe(document, { childList: !0, subtree: !0 });
        function r(e) {
          const t = {};
          return (
            e.integrity && (t.integrity = e.integrity),
            e.referrerpolicy && (t.referrerPolicy = e.referrerpolicy),
            e.crossorigin === "use-credentials"
              ? (t.credentials = "include")
              : e.crossorigin === "anonymous"
              ? (t.credentials = "omit")
              : (t.credentials = "same-origin"),
            t
          );
        }
        function s(e) {
          if (e.ep) return;
          e.ep = !0;
          const t = r(e);
          fetch(e.href, t);
        }
      })();
      /**
       * @license
       * Copyright 2019 Google LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */ function c() {
        const l = new google.maps.Map(document.getElementById("map"), {
            zoom: 8,
            center: { lat: 40.731, lng: -73.997 },
          }),
          o = new google.maps.Geocoder(),
          r = new google.maps.InfoWindow();
        document.getElementById("submit").addEventListener("click", () => {
          d(o, l, r);
        });
      }
      function d(l, o, r) {
        const e = document.getElementById("latlng").value.split(",", 2),
          t = { lat: parseFloat(e[0]), lng: parseFloat(e[1]) };
        l.geocode({ location: t })
          .then((n) => {
            if (n.results[0]) {
              o.setZoom(11);
              const i = new google.maps.Marker({ position: t, map: o });
              r.setContent(n.results[0].formatted_address), r.open(o, i);
            } else window.alert("No results found");
          })
          .catch((n) => window.alert("Geocoder failed due to: " + n));
      }
      window.initMap = c;
    </script>
    <style>
      #map,
      body,
      html {
        height: 100%;
      }
      body,
      html {
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        background-color: #fff;
        border: 1px solid #999;
        font-family: Roboto, "sans-serif";
        left: 50%;
        line-height: 30px;
        margin-left: -180px;
        padding: 5px;
        position: absolute;
        text-align: center;
        top: 5px;
        width: 350px;
        z-index: 5;
      }
      #latlng {
        width: 225px;
      }
    </style>
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








    <div id="floating-panel">
      <input id="latlng" type="text" value="40.714224,-73.961452" />
      <input id="submit" type="button" value="Reverse Geocode" />
    </div>
    <div id="map"></div>

    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script>
  </body>
</html>
