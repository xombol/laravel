<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact_new;

class ContactController extends Controller {
    // Создание записи в базе данных!
    public function submit(ContactRequest $reg) {

        $contact = new Contact_new();
        $contact->login = $reg->input('login');
        $contact->name = $reg->input('name');
        $contact->email = $reg->input('email');
        $contact->message = $reg->input('message');

        $contact->save();
        return redirect()->route('home')->with('success','Сообщение было давлено');
    }
    // Изменение записи в базе данных!
    public function contactUpdatePost($id, ContactRequest $reg) {
        $contact = Contact_new::find($id);
        $contact->login = $reg->input('login');
        $contact->name = $reg->input('name');
        $contact->email = $reg->input('email');
        $contact->message = $reg->input('message');

        $contact->save();
        return redirect()->route('contact-data-one', $id)->with('success','Сообщение было обновлено');
    }
    // Удаление записи в базе данных!
    public function contactDelete($id) {
        Contact_new::find($id)->delete();
        return redirect()->route('contact-data')->with('success','Сообщение было удалено');
    }

    // Вывод всех элементов из бд
    public function allData(){
        $contact = new Contact_new;
        return view('messages',['data' => $contact->all()]);
       // return view('messages',['data' => $contact->orderBy('id','asc')->take(2)->skip(1)->get()]);
       // return view('messages',['data' => $contact->where('login','=','21412412')->get()]);
      //  dd($contact = Contact_new::all());
    }

    // Вывод элемента из бд  (по ID )
    public function showOneMessage($id){
        $contact = new Contact_new;
        // return view('messages',['data' => $contact->orderBy('id','asc')->take(2)->skip(1)->get()]);
        return view('message_detail',['data' => $contact->find($id)]);
        //  dd($contact = Contact_new::all());
    }

    // Вывод данных и формы страницы
    public function contactUpdate($id){
        $contact = new Contact_new;
        // return view('messages',['data' => $contact->orderBy('id','asc')->take(2)->skip(1)->get()]);
        return view('ontact_update',['data' => $contact->find($id)]);
        //  dd($contact = Contact_new::all());
    }
}
