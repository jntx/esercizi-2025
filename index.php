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
		<input type="text" name="nome">
		<input type="text" name="cognome">
		<select name="action">
			<option value="add">Aggiungi persona</option>
			<option value="delete">Rimuovi persona</option>
		</select>
		<input type="submit" value="Esegui">
	</form>
</body>
</html>
