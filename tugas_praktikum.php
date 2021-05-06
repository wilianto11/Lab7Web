<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <title>PHP Dasar</title> 
    </head> 
    <body> 
        <h2>Form Input</h2> 
        <form method="post" action="tugas.php">
            <fieldset>
            <labe>Nama : </labe>
            <input type="text" name="nama" ><br>
            <label>Tanggal lahir : </label>
            <input type="date" name="tgl_lahir"><br>
            <label>Pekerjaan : </label>
            <select id=pekerjaan name=pekerjaan>
            <option value="Android Developer">Android Developer</option>
            <option value="IOS Developer">IOS Developer</option>
            <option value="Desainer Grafis">Desainer Grafis</option>
            <option value="Web Desainer">Web Desainer</option>
            </select><br>
            <input type="submit" value=" Simpan ">
        </fieldset>
        </form> 
    </body> 
</html>