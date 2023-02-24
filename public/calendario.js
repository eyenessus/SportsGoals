
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
              
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
                eventSources: [

    // your event source
    {
      events: [ // put the array in the `events` property
        {
          title  : 'event1',
          start  : '2023-02-01'
        },
        {
          title  : 'event2',
          start  : '2023-02-15',
          end    : '2023-02-30'
        },
        {
          title  : 'event3',
          start  : '2010-01-09T12:30:00',
        }
      ],
      color: 'yellow',   
      textColor: 'black' 
    }

  ]
               
            });
            calendar.setOption('locale', 'pt-br');
            calendar.render();

        });
    