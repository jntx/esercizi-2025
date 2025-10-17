<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
    <style>
        body {
    background-color: #ADFF2F;
    font-family: Arial, sans-serif;
    padding: 20px;
  }
    .form-group {
      margin-bottom: 10px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input, select {
      padding: 10px;
      width: 250px;
    }

    input[type="submit"] {
      width: 100px;
      background-color: #FFD700;
      color: red;
      border: none;
      cursor: pointer;
    }
    </style>


</head>
<body>
<form action="<?=$_SERVER["PHP_SELF"]?>">
		<input type="hidden" name="section" value="<?=basename($_SERVER["PHP_SELF"])?>">

        <div class="form-group">
            <label for="name_field">Nome:</label>
		<input id="name_field" type="text"name="nome" placeholder="inserisci il nome">
        </div>

        <div class="form-group">
            <label for="name_field">Cognome:</label>
		<input id="name_field" type="text" name="cognome" placeholder="inserisci il cognome">
        </div>
        
        <div class="form-group">
            <label for="name_field">Action:</label>
		<select id="name_field" name="action">
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
</html>
