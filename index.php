<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>guichet</title>
</head>
<body>
    <div class="bar">
    <h1>e-Ticket</h1></div>
    <div class="content">
    <form class="theatre" action="Ticket.php" method="POST">
        <h2>e-Theatre</h2>
    <label for="dateId"><h3>Date</h3></label>    
    <input type="date" name="date" id="dateId">
    <label for="placeId"><h3>Place</h3></label>    
    <input type="number" name="place" id="placeId">
    <label for="tarifId"><h3>Tarif</h3></label>    
    <select name="tarif" id="tarifId">
        <option value="Adult">Adult</option>
        <option value="Enfant">Enfant</option>
    </select>
    <label for="pieceId"><h3>La pièce</h3></label>
    <select name="piece" id="pieceId">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
</select>

<input type="submit" value="Acheter">
    </form>

<form class="cine" action="Ticket.php" method="POST">
    <h2>e-Cinema</h3>

    <label for="dateId"><h3>Date</h3></label>    
    <input type="date" name="date" id="dateId">
    <label for="placeId"><h3>Place</h3></label>    
    <input type="number" name="place" id="placeId">
    <label for="tarifId"><h3>Tarif</h3></label>    
    <select name="tarif" id="tarifId">
    <option value="Adult">Adult</option>
        <option value="Enfant">Enfant</option>
    </select>
    <label for="filmId"><h3>Films</h3></label>
    <select name="film" id="filmId">
    <option value="film1">film1</option>
    <option value="film2">film2</option>
    <option value="film3">film3</option>
    <option value="film4">film4</option>
</select>

    <label for="salleId"><h3>La salle</h3></label>
    <select name="salle" id="salleId">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select>

<input type="submit" value="Acheter">
    </form>


</div>


    
</body>
</html>