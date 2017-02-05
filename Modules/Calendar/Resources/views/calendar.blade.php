@extends('core::layouts.layout')

@section('content')
    <div id="calendar-myperfectcalendar"></div>
@stop

@section('scripts')
    <script>
        $(document).ready(function () {


            $('#calendar-myperfectcalendar').fullCalendar({
                //weekends: false // will hide Saturdays and Sundays
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                },


                selectable: true,
                selectHelper: true,
                select: function (start, end) {
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
                droppable: true,
                eventLimit: true, // allow "more" link when too many events

                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours

                nowIndicator: true,

                eventSources: [
                    // your event source
                    // your event source
                    {
                        events: function (start, end, timezone, callback) {
                            jQuery.ajax({
                                url: 'schedule.php/load',
                                type: 'POST',
                                dataType: 'json',
                                data: {
                                    start: start.format(),
                                    end: end.format()
                                },
                                success: function (doc) {
                                    var events = [];
                                    if (!!doc.result) {
                                        $.map(doc.result, function (r) {
                                            events.push({
                                                id: r.id,
                                                title: r.title,
                                                start: r.date_start,
                                                end: r.date_end
                                            });
                                        });
                                    }
                                    callback(events);
                                }
                            });
                        },
                        color: 'yellow',   // an option!
                        textColor: 'black' // an option!
                    }
                    // any other sources...
                ],

                /*events: {
                 url: '/myfeed.php',
                 type: 'POST',
                 data: {
                 custom_param1: 'something',
                 custom_param2: 'somethingelse'
                 },
                 error: function() {
                 alert('there was an error while fetching events!');
                 },
                 color: 'yellow',   // a non-ajax option
                 textColor: 'black' // a non-ajax option
                 }*/
            });
        });
    </script>
@stop