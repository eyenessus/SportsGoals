<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<h1>Atividades Esportivas - Formulario</h1>
<main>
<form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Evento</label>
    <input type="text" class="form-control" id="evento" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="Descricao" class="form-label" >Descrição:</label>
    <br>
    <textarea rows="5" cols="80" id="Descricao" style="height: 193px;"></textarea>
  </div>
  <p>De:</p>
  <input type="date" name="data" id="data">
  <div id="tempo">
  <p>Início </p>
  <p>Término</p>
  </div>
  <input type="time" id="inicio">
  <input type="time" id="fim">
  <div id="botao">
  <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
  
</form>
</main>
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>