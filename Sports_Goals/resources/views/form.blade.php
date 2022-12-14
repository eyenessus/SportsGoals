<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/form.css">

</head>

<body>
    <h1 id="titulo">Atividades Esportivas</h1>
    <div class="container">
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary m-2" id='agenda'>
                <a href="/agenda" id='agenda1'>AGENDA</a>
            </button>
        </div>
        </div>
    <main>
    
        <form action="/atividades" method="POST" id="atividades">
            @csrf
            <div class="container">
                <h6 id="faixa">Criação de atividade esportiva</h6>
                <h6 id="exit"> X </h6>

                <div class="mb-3">
                    <label for="title" class="form-label">Evento</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <br>
                    <textarea rows="5" cols="80" id="descricao" style="height: 120px;" name="descricao"></textarea>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="col">
                            <label for="data">De:</label>
                            <input type="date" class="w-100 form-control " id="start" name="start">
                        </div>


                        <div class="row mt-2 mb-3">
                            <div class="col">
                                <label for="">Início:</label>
                                <input type="time" class="w-10 form-control" name="inicio" id="inicio">
                            </div>
                            <div class="col">
                                <label for="">Término:</label>
                                <input type="time" class="w-10 form-control" name="fim" id="fim">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repetir" id="repetir" value="0" checked>
                            <label class="form-check-label" for="norepet">
                                Não se repete
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repetir" id="repetir" value="1">
                            <label class="form-check-label" for="repetir">
                                Repetir
                            </label>
                        </div>
                        <div class="col-4">
                            <label for="customRange2" class="form-label">Intervalo de semanas: <span id="valor">0</span></label>
                            <input type="range" class="form-range" min="1" max="3" id="nivelintervalo" name="intervalo">
                        </div>
                    </div>

                </div>
            </div>
            </div>

            <div class="container">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary m-2">Salvar</button>
                </div>
            </div>

        </form>
    </main>
    <footer>
        <h2>Sports Goals Agenda - WiSpot</h2>
    </footer>
    <script src="/js/js.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="/jquery/main.js" defer></script>
   <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>

</html>