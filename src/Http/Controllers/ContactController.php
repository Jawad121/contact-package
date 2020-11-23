<?php
namespace Hexasol\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hexasol\Contact\Models\Contact;

class ContactController extends Controller
{
	/**
	 * 
	 */
	public function index(){
		return view('contact::contact');
	}

	/**
	 * 
	 */
	public function store(Request $request){
		Contact::create($request->all());
		return redirect()->route('contact');
	}
}