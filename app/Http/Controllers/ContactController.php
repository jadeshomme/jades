<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;



class ContactController extends Controller
{
    public function index()
    {
        return view('homeuser.contact.index');
    }

    public function create(Request $request)
    {
        $validate = Validator::make(

            $request->all(),
            [
                'name'        => 'required',
                'phone'       => 'required',
            ],
            [

                'name.required'    => 'Họ tên không được bỏ trống',
                'phone.required'   => 'Số điện thoại không được để trống',
            ]

        );

        if ($validate->fails()) {
            return redirect()->route('homePage.contact.index')->withErrors($validate);
        }

        $contact = new Contact;
        $contact->code        = $request->get('name');
        $contact->address     = '';
        $contact->email       = '';
        $contact->phone       = $request->get('phone');
        $contact->status      = 1;

        $contact->save();

        if ($contact->wasRecentlyCreated == true) {
            return redirect()->route('homePage.contact.index')->with('success', 'Đã đăng ký tư vấn thành công');
        } else {
            return redirect()->route('homePage.contact.index')->with('error', 'Có lỗi xảy ra');
        }
    }
}
