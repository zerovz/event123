<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use DB;

class EventsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('events.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\EventRequest $request)
    {
        flash()->success('Događaj dodan!','Vas dogadaj je uspjesno dodan');
        Event::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($date, $title)
    {
        $title = str_replace('-',' ', $title);
        $event = Event::where(compact('date','title'))->first();

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function sell($id)
    {
        $event = Event::findOrFail($id);
        return view('events.sell', compact('event'));
    }

    public function generate($id,$price)
    {
        $barcode1 = barcode();
        DB::insert('insert into tickets (event_id, price, barcode) values (?, ?, ?)', [$id, $price, $barcode1]);
        $event = Event::findOrFail($id);
        return view('events.generate', compact('event','price','barcode1'));
    }
}
