<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class AdminDashboardController extends Controller
{
    public function index()
    {
        $data['contacts']=Contact::get();
        return view('admin.dashboard',$data);
    }
     public function contactDelete($id)
    {
        $flight = Contact::findOrFail($id);
        $flight->delete();
        $this->setSuccessMessage('Request Deleted!!');
        return redirect()->back();
        
    }
}
