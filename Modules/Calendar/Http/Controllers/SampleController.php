<?php
namespace Modules\Calendar\Http\Controllers;

use Modules\Calendar\Models\CalendarEvent;
use Modules\Calendar\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SampleController extends Controller
{

    /**
     * @var CalendarEvent
     */
    private $calendarEvent;

    /**
     * @param CalendarEvent $calendarEvent
     */
    public function __construct(CalendarEvent $calendarEvent)
    {
        $this->calendarEvent = $calendarEvent;
    }

    public function calendar()
    {
        $staticEvent = \Calendar::event(
            'Today\'s Sample',
            true,
            Carbon::today()->setTime(0, 0),
            Carbon::today()->setTime(23, 59),
            null,
            [
                'color' => '#0F0',
                'url' => 'http://google.com',
            ]
        );

        $databaseEvents = $this->calendarEvent->all();

        $calendar = \Calendar::addEvent($staticEvent)->addEvents($databaseEvents);

        return view('calendar::calendar', compact('calendar'));
    }

}
