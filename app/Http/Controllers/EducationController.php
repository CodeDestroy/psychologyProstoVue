<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Tests;

use function GuzzleHttp\default_ca_bundle;

class EducationController extends Controller
{
    //
    public function index() {
        return view("education.index");
    }

    public function showEvent(Request $request, $id)
    {
        $user = User::find($request->user());
        
        $event = Event::find($id);
        switch ($event->type) {
            case 'lection':
                return view('education.events.lection', compact('event'));
            case 'test':
                        
                $test = Tests::where(['event_id' => $id])->first();
                return redirect()->route('education.showTest', ['id' => $test->id]);
            default:
                return view('education.events.lection', compact('event'));
            
        
        }
    }

    public function showTest(Request $request, $id)
    {
        $user = User::find($request->user());
        $test = Tests::find($id);
        return view('education.events.tests.testPreview', compact('test'));
    }
}
