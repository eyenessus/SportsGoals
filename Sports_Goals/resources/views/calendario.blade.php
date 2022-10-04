
<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8' />
    <link href='fullcalendar/main.css' rel='stylesheet' />  
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>
    <link rel="stylesheet" href="/css/calendario.css">
    <script src="/js/calendario.js"></script>
</head>
<body>
<div class="container">
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary m-2" id="botaovoltar">
                <a href="/form"> < VOLTAR</a>
            </button>
        </div>
        </div>
<div id='calendar'></div>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
  
    var calendar = new FullCalendar.Calendar(calendarEl, {
      defaultDate: Date(),
      initialView: 'timeGridWeek',
      nowIndicator: true,
      headerToolbar: {
        right: 'prev,next today',
        left: 'title',
        center: 'dayGridMonth,timeGridWeek'
      },
      eventSources: {
        url: 'list_eventos',
        color: 'yellow',
        textColor: 'black',
      },
      locale:'pt-br',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      selectMirror: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: 'list_eventos.php',
      color: 'yellow',   // an option!
      textColor: 'black',
    extraParams: function() {
      return {
        cachebuster: new Date().valueOf()
      };
    }
    });
  
    calendar.render();
  });
  
</script>
</html>
