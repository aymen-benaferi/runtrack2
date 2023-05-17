<!DOCTYPE html>
<html>
<head>
  <title>Compteur de visites</title>
  <script>
    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      var expires = "expires=" + d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    function increaseVisits() {
      var nbVisites = parseInt(getCookie("nbvisites"));
      if (isNaN(nbVisites)) {
        nbVisites = 0;
      }
      nbVisites++;
      setCookie("nbvisites", nbVisites, 365);
      document.getElementById("visites").textContent = nbVisites;
    }

    function resetVisits() {
      setCookie("nbvisites", 0, 365);
      document.getElementById("visites").textContent = 0;
    }

    window.onload = function() {
      var nbVisites = parseInt(getCookie("nbvisites"));
      if (isNaN(nbVisites)) {
        nbVisites = 0;
      }
      document.getElementById("visites").textContent = nbVisites;
    };
  </script>
</head>
<body>
  <h1>Compteur de visites</h1>
  <p>Nombre de visites : <span id="visites"></span></p>
  <button onclick="increaseVisits()">Visiter</button>
  <button onclick="resetVisits()">Réinitialiser</button>
</body>
</html>
