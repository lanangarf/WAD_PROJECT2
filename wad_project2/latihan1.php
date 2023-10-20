<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Selamat datang</title>
    </head>
    <body>
    <form method="post" action="hasil.php">
        <label for="input1">Angka :</label>
        <input type="number" name="input1" id="input1" />
        <br/>

        <label for="input2">Pangkat :</label>
        <select name="input2" id="input2">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="2">3</option>
        </select>
        <br/>

        <button type="submit" name="hitung">Hitung</button>
    </form>
    </body>
</html>