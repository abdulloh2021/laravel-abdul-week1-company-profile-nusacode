<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
class ContactController extends Controller
{
    public function index()
    {
        $list_contact = ContactModel::get();
        return view('pages.contact', ['list_contact' => $list_contact]);
    }
    public function simpan(Request $post)
    {
        $save_data = new ContactModel();
        $save_data->name = $post->name;
        $save_data->email = $post->email;
        $save_data->message = $post->message;
        $save_data->created_at = date('Y-m-d');
        $save_data->updated_at = date('Y-m-d');
        $save_data->save();

        return redirect('/contact')->with('success', 'Berhasil menyimpan data');
    }

    public function edit($id_contact)
    {
        $data_contact = ContactModel::where('id', $id_contact)->first();
        return view('pages.edit-contact', ['data_contact' => $data_contact]);
    }

    public function update(Request $post, $id_contact)
    {
        $data_contact = ContactModel::where('id', $id_contact)->first();
        $data_contact->name = $post->name;
        $data_contact->email = $post->email;
        $data_contact->message = $post->message;
        $data_contact->created_at = date('Y-m-d');
        $data_contact->updated_at = date('Y-m-d');
        $data_contact->save();

        return redirect('/contact')->with('success', 'Berhasil mengupdate data');
    }

    public function hapus($id_contact)
    {
        $data_contact = ContactModel::where('id', $id_contact)->delete();

        return redirect('/contact')->with('success', 'Berhasil menghapus data');
    }
}
