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

<form action="teste" method="POST">

<h6 id="faixa">Criação de atividade esportiva</h6>
<h6 id="exit"> X </h6>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Evento</label>
    <input type="text" class="form-control" id="evento" aria-describedby="emailHelp">
</div>

<div class="mb-3">
    <label for="descricao" class="form-label">Descrição</label>
    <br>
    <textarea rows="5" cols="80" id="descricao" style="height: 120px;"></textarea>
</div>

<div class="form-group col-md-6">
    <label for="inputEmail4">De:</label>
    <input type="date" class="form-control" id="inputEmail4" placeholder="19 de novembro de">
</div>

<div class="row">
    <div class="col">
        <label for="">Início:</label>
        <input type="time" class="form-control" placeholder="Nome">
    </div>
    <div class="col">
        <label for="">Término:</label>
        <input type="time" class="form-control" placeholder="Sobrenome">
    </div>
</div>

<div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
        checked>
    <label class="form-check-label" for="exampleRadios1">
        Não se repete
    </label>
</div>

<div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"
        checked>
    <label class="form-check-label" for="exampleRadios2">
        Repetir
    </label>
</div>

<label for="customRange2" class="form-label">Intervalo de semanas: 1</label>
<input type="range" class="form-range" max="3" id="customRange2">

<div id="botao">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>

</form>
</main>
<footer>
<p>Sports Goals</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>