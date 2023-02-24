<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/calendario.css">
    <script src="
    https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js
    "></script>
    <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js"></script>
    <link rel="stylesheet" href="/css/calendario.css">
    <title>Calendario</title>
    <script>
         document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                
                
                displayEventEnd: {
                    
                },
                
                initialView: 'dayGridMonth',
                eventDidMount: function(info) {
                    var tooltip = new Tooltip(info.el, {
                        title: info.event.extendedProps.description,
                        placement: 'top',
                        trigger: 'hover',
                        container: 'body'
                    });
                },
                
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,listWeek'
                },
                buttonText: {
                    today: 'Hoje',
                    month: 'Mês',
                    week: 'Semana',
                    listWeek: 'Lista'
                },
                navLinks: true,
                selectable: true,
                selectMirror: true,
                nowIndicator: true,
                dayMaxEvents: true,
                events: {!! $json !!},
                eventColor: 'blue',
                
              
            });
            
            calendar.setOption('locale', 'pt-br');
            
            calendar.render();
            
        });
    </script>
</head>

<body>
    
    
    <div class="container">
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary m-2" id="botaovoltar">
                <a href="/form">
                     < Voltar </a>
                </button>

            </div>
            
            <div id='calendar' class="bg-white p-md-5 m-md-5"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    
</body>

</html>
