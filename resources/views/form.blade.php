<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/form.css">

</head>




<div class="container">

    <body>
        <h1 id="titulo" class="container-fluid text-center mt-5">Atividades Esportivas</h1>

        <div class="container">
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary m-2" id='agenda'>
                    <a href="{{ route('calendario') }}" id='agenda1'
                        class="text-center text-white text-decoration-none">AGENDA</a>
                </button>
            </div>
        </div>




        <form action="/atividades" method="POST" id="atividades" class=" bg-light rounded-2 border p-2 mt-2">
            @csrf
            <h3 id="faixa" class=" text-uppercase text-white bg-info p-3 rounded">Atividade esportiva</h3>
            <div class="container">

                <h6 id="exit" class="text-end float-end"> X </h6>

                <div class="mb-3">
                    <label for="title" class="form-label">Evento</label>
                    <input type="text" class="form-control" name="title" id="title" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição:</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>

            </div>

            <div class="container mt-5">

                <div class="row row-cols-2">


                    <div class="col-6">


                        <div class="col-12 col-md-7">

                            <div class="col">
                                <label for="">Início:</label>
                                <input type="datetime-local" class="form-control w-100" name="start" id="inicio"
                                    required>
                            </div>

                            <div class="col mt-md-3">
                                <label for="">Término:</label>
                                <input type="datetime-local" class="form-control w-100" name="end" id="fim"
                                    required>
                            </div>


                        </div>

                    </div>




                    <div class="col">
                        <div class="col-12">
                           
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repetir" id="repetir" value="0"  {{ old('repetir') ? 'checked="checked"' : '' }}  >
                                    <label class="form-check-label" for="repetir">
                                        Não se repete
                                    </label>
                                </div>
        
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repetir" id="repetir" value="1" {{ old('repetir') ? 'checked="checked"' : '' }}>
                                    <label class="form-check-label" for="repetir">
                                        Repetir
                                    </label>
                                </div>
                            
                           
                            <div class="col mt-2 m-md ">
                               <h6 class="mt-4">Repetir na semana:</h6>

                               <div class="d-flex align-content-start flex-wrap m-2">

                                <div class="form-check m-2">
                                    <input class="form-check-input" type="checkbox" value="1"  name="daysOfWeek[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Segunda
                                    </label>
                                  </div>
    
                                  <div class="form-check m-2">
                                    <input class="form-check-input" type="checkbox" value="2"  name="daysOfWeek[]">
                                    <label class="form-check-label" for="flexCheckChecked">
                                      Terça
                                    </label>
                                  </div>
                                  <div class="form-check m-2">
                                    <input class="form-check-input" type="checkbox" value="3"  name="daysOfWeek[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Quarta
                                    </label>
                                  </div>
    
                                  <div class="form-check m-2">
                                    <input class="form-check-input" type="checkbox" value="4"  name="daysOfWeek[]">
                                    <label class="form-check-label" for="flexCheckChecked">
                                      Quinta
                                    </label>
                                  </div>
                                  <div class="form-check m-2">
                                    <input class="form-check-input" type="checkbox" value="5"  name="daysOfWeek[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Sexta
                                    </label>
                                  </div>
    
                                
                               </div>
                               <h6>Finais de semana</h6>
                           <div class="d-flex flex-wrap">
                            <div class="form-check m-3">
                                <input class="form-check-input" type="checkbox" value="6"  name="daysOfWeek[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                  Sábado
                                </label>
                              </div>


                               <div class="form-check m-3">
                                <input class="form-check-input" type="checkbox" value="0"  name="daysOfWeek[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                  Domingo
                                </label>
                              </div>
                           </div>


                            </div>
                        </div>
                    </div>



                </div>

            </div>

            <div class="container">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary m-2 mt-5">Salvar Jornada</button>
                </div>
            </div>

        </form>
        <footer class="text-center text-white">
            <h2>Sports Goals Agenda - WiSpot</h2>
        </footer>
        <script src="/js/js.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <script src="/jquery/main.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
            crossorigin="anonymous"></script>
    </body>
</div>




</html>
