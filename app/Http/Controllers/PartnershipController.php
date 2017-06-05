<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PartnershipRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Partner;

class PartnershipController extends Controller
{
	public function __construct(){

		$this->middleware('auth');
		$this->middleware('admin', ['only' => 'showPartnershipForms']);

	}

    public function display(){

    	return view('form.partnership');

    }
    
	public function store(PartnershipRequest $request){
		$form = new Partner($request->all());
		$ext = $form->documentation->getClientOriginalExtension();
        $filename = 'doc'.rand(111111, 999999).'.'.$ext;
        $filepath = 'partnership-forms/'.$filename;
        Storage::disk('public')->put($filepath, file($form->documentation));
        $form->documentation = $filename;
        Auth::user()->partnershipforms()->save($form);
		return redirect('home');
	}

	public function showPartnershipForms(){
		$forms = Partner::latest('updated_at')->get();
    	return view('pages.partnershipforms', compact('forms'));
	}

	public function downloadDocument($id){
		$filename = Partner::findOrFail($id)->documentation;
		$filePath = storage_path().'/app/public/partnership-forms/'.$filename;
		if (file_exists($filePath)){
			return Response::download($filePath, $filename, ['Content-Length: ' . filesize($filePath)]);
		}
		else{
			exit('Requested file does not exist!');
		}
	}
}
