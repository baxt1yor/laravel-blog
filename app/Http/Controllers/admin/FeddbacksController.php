<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
class FeddbacksController extends Controller
{
        public function index ()
        { 
            $pagi_size = env('PAGINATE_SIZE', 15);
            $items = Feedback::latest()->paginate($pagi_size);
            $links = $items->links();
            return view('admin.feedback.index', compact('items', 'links'));
        } 

        
        public function show($id)
        {
            $item = Feedback::findOrFail($id);
            $item->update([
                'status' => Feedback::STATUS_READED
            ]);
            return view('admin.feedback.show', compact('item'));
        }

        public function destroy($id)
        {
            $delete = Feedback::findOrFail($id);
            $delete->delete();

            return redirect()->route('admin.feedback.index')->with('delete', 'Xabaringiz o`chirildi');
        }
}
