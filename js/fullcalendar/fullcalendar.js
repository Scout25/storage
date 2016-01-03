$(document).ready(function ()
{
	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

    $('#calendar').fullCalendar(
    {
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        eventLimit: true,
    	editable: false,
    	events: [
    		{
    			title: '17 Journée passage',
                start: new Date(y, m, 19, 9, 30),
                end: new Date(y, m, 19, 17, 0),
    			// allDay: true,
    		}
    	],
    });

	$(document).on('click', '.full-next', function(){
		$('#calendar').fullCalendar('next');
	});

	$(document).on('click', '.full-prev', function(e){
		e.stopPropagation();
		e.preventDefault();
		$('#calendar').fullCalendar('prev');
	});

});