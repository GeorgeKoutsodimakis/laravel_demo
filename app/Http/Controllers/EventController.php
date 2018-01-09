<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
use App\Category;
use App\User;
class EventController extends Controller
{
    //
    public function index(Event $event,Request $request){
        $event = Event::with(array('category'))->get();
		$event = $request->all();
		
        return view('events.index',compact('event','user'));
	}
	
    public function create(Category $category){

		$event = new Event;
        $category = Category::all()
		->pluck('title','id');
		
		$eventCategory = [];

		// return view('events.create',compact('category','event'));
		
        return view('events.create',[
            'category' => $category,
            'eventCategory'=>$eventCategory,
            'event'=>$event
        ]);  
    }
    public function store(Event $event, Request $request)
    {
        $this->validate($request,[
            'name'=>'required |min:2|max:10',
            'category_id'=>'required',
            'price'=>'required',
            'country'=>'required',
            'city'=>'required',
            'date_from'=>'required',
            'date_to'=>'required'
		]);

		// store logged in user
		$user = $request->user();
		
        // create a new event for a particular user
		$user->events()->create($request->all());

		return redirect()->route('home');
    }
    public function show($id)
    {
        //
        $event=Event::find($id);
        return view('events.show',compact('event'));
    }
    public function edit(Event $event)
    {
        $category = Category::all()
            ->pluck('title', 'id');
        $eventCategory = $event->category;
        return view('events.edit', [
            'event' => $event,
            'category' => $category,
            'eventCategory' => $eventCategory,
        ]);
    }
    public function update(Event $event,Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:2|max:10',
            'category_id'=>'required',
            'price'=>'required',
            'country'=>'required',
            'city'=>'required',
            'date_from'=>'required',
            'date_to'=>'required'
        ]);
        // $telephone->phone = $request->get('phone');
        // $telephone->save();
        $event->update($request->all());
        return redirect()->route('home');
    }
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('home');
        
	}
}
	
	