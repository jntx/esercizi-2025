<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
</head>
<body>
	<form action="<?=$_SERVER["PHP_SELF"]?>">
		<input type="hidden" name="section" value="<?=basename($_SERVER["PHP_SELF"])?>">

        <div>
            <label>
            Nome:<br>
		<input type="text" name="nome" placeholder="inserisci il nome"><br><br>
            </label>
        </div>

        <div>
            <label>
            Cognome:<br>
		<input type="text" name="cognome" placeholder="inserisci il cognome"><br><br>
            </label>
        </div>
        
        <div>
            <label>
            Action:<br>
		<select name="action">
			<option value="add">Aggiungi persona</option>
			<option value="delete">Rimuovi persona</option>
		</select>
           </label>
       </div>
       <br>

       <div>
		<input type="submit" value="Esegui">
       </div>
	</form>
</body>
</html>