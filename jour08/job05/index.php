<!DOCTYPE html>
<html>
<head>
  <title>Jeu du morpion</title>
  <style>
    table {
      border-collapse: collapse;
      margin: 50px auto;
    }
    td {
      border: 1px solid black;
      width: 50px;
      height: 50px;
      text-align: center;
      font-size: 30px;
      cursor: pointer;
    }
  </style>
  <script>
    function playTurn(row, col) {
      var cell = document.getElementById("cell-" + row + "-" + col);
      var currentPlayer = document.getElementById("current-player").textContent;

      if (cell.textContent === "") {
        cell.textContent = currentPlayer;

        // Switch player
        if (currentPlayer === "X") {
          document.getElementById("current-player").textContent = "O";
        } else {
          document.getElementById("current-player").textContent = "X";
        }
      }
    }
  </script>
</head>
<body>
  <h1>Jeu du morpion</h1>

  <p>À votre tour, joueur <span id="current-player">X</span> :</p>

  <table>
    <tr>
      <td id="cell-0-0" onclick="playTurn(0, 0)"></td>
      <td id="cell-0-1" onclick="playTurn(0, 1)"></td>
      <td id="cell-0-2" onclick="playTurn(0, 2)"></td>
    </tr>
    <tr>
      <td id="cell-1-0" onclick="playTurn(1, 0)"></td>
      <td id="cell-1-1" onclick="playTurn(1, 1)"></td>
      <td id="cell-1-2" onclick="playTurn(1, 2)"></td>
    </tr>
    <tr>
      <td id="cell-2-0" onclick="playTurn(2, 0)"></td>
      <td id="cell-2-1" onclick="playTurn(2, 1)"></td>
      <td id="cell-2-2" onclick="playTurn(2, 2)"></td>
    </tr>
  </table>
</body>
</html>
