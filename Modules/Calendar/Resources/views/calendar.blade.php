@extends('core::layouts.layout')

@section('content')
    <div id="calendar-myperfectcalendar"></div>
@stop

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#calendar-myperfectcalendar').fullCalendar({
                //weekends: false // will hide Saturdays and Sundays
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                },


                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    var title = prompt('Event Title:');
                    var eventData;
                    if (title) {
                        eventData = {
                            title: title,
                            start: start,
                            end: end
                        };
                        $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                    }
                    $('#calendar').fullCalendar('unselect');
                },
                editable: true,
                eventLimit: true, // allow "more" link when too many events

                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours

                nowIndicator: true,
                events: [
                    {
                        title: 'Business Lunch',
                        start: '2017-02-08T13:00:00',
                        constraint: 'businessHours'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-02-13T11:00:00',
                        constraint: 'availableForMeeting', // defined below
                        color: '#257e4a'
                    },
                    {
                        title: 'Conference',
                        start: '2017-02-18',
                        end: '2017-02-20'
                    },
                    {
                        title: 'Party',
                        start: '2017-02-27T20:00:00'
                    },

                    // areas where "Meeting" must be dropped
                    {
                        id: 'availableForMeeting',
                        start: '2017-02-21T10:00:00',
                        end: '2017-02-21T16:00:00',
                        rendering: 'background'
                    },
                    {
                        id: 'availableForMeeting',
                        start: '2017-02-23T10:00:00',
                        end: '2017-02-23T16:00:00',
                        rendering: 'background'
                    },

                    // red areas where no events can be dropped
                    {
                        start: '2017-02-24',
                        end: '2016-02-28',
                        overlap: false,
                        rendering: 'background',
                        color: '#ff9f89'
                    },
                    {
                        start: '2017-03-06',
                        end: '2017-03-08',
                        overlap: false,
                        rendering: 'background',
                        color: '#ff9f89'
                    }
                ]
            });
        });
    </script>
@stop