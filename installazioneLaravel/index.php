<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Form zeke</title>
</head>
<?php
print "sucas"
?>
<body>
<h3>Dati Anagrafici</h3>
<form name="Esercizio" method="post" action="/cgi-bin/storedata"></form>
<table>
  <tr>
    <td><em>Nome:</em></td>
    <td><input type="text" size="20" maxlength="18"
               name="nome"></td>
  </tr>
  <tr>
    <td><em>Cognome:</em></td>
    <td><input type="text" size="20" maxlength="18" name="cognome"></td>
  </tr>
  <tr>
    <td><em>Sesso:</em></td>
    <td>
      <input type="radio" value="m" name="sesso"> Maschio
      <input type="radio" value="f" name="sesso"> Femmina
    </td>
  </tr>
  <tr>
    <td><em>Luogo di nascita:</em></td>
    <td><input type="text" size="20" maxlength="18" name="cittaNatale"></td>
  </tr>
  <tr>
    <td><em>Data di nascita:</em></td>
    <td><input type="text" value="gg/mm/aaaa" size="20" maxlength="18" name="nome"></td>
  </tr>
</table>
<h3>Password Personale</h3>
<table>
  <tr>
    <td><em>Password:</em></td>
    <td><input type="password" size="20" maxlength="18" name="password"></td>
  </tr>
</table>
<h3>Dati Personali</h3>
<table>
  <tr>
    <td><em>Patente:</em></td>
    <td>
      <input type="checkbox" name="AM">auto
      <input type="checkbox" name="B">moto
      <input type="checkbox" name="A">aereo
    </td>
  </tr>
  <tr>
<textarea rows="10" cols="20" name="commenti">Inserisci qui i tuoi commenti</textarea>
  </tr>
</table>
<input type="submit" value="Invia">
<input type="reset" value="Cancella">
</body>
</html>