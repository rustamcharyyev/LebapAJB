<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\CatRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Categories;
use App\Models\Contact;
use App\Models\files;
use App\Models\images;
use App\Models\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function tasykla(AdminRequest $req)
    {

        $news = new News();
        $news->name = $req->input('name1');
        $news->name_ru = $req->input('name2');
        $news->name_en = $req->input('name3');
        $news->cat_id = $req->input('cat');
        $news->content = $req->input('message1');
        $news->content_ru = $req->input('message2');
        $news->content_en = $req->input('message3');
        if($req->hasFile('img_1')){
            $img = $req->file('img_1');
            $img->store('public/img');
            $path = $img->store('img');
            $news->img_1 = $path;
        }
        if($req->hasFile('img_2')){
            $img = $req->file('img_2');
            $img->store('public/img');
            $path = $img->store('img');
            $news->img_2 = $path;
        }
        if($req->hasFile('img_3')){
            $img = $req->file('img_3');
            $img->store('public/img');
            $path = $img->store('img');
            $news->img_3 = $path;
        }
        if($req->hasFile('img_4')){
            $img = $req->file('img_4');
            $img->store('public/img');
            $path = $img->store('img');
            $news->img_4 = $path;
        }
        if($req->hasFile('img_5')){
            $img = $req->file('img_5');
            $img->store('public/img');
            $path = $img->store('img');
            $news->img_5 = $path;
        }

        $news->save();

        return redirect()->route('dashboard')->with('success', 'Ugradan täzeligiňiz aňsatlyk bilen goşuldy');
    }

    public function catsubmit(CatRequest $req)
    {
//        dd($req);
        $cat = new Categories();
        $cat->cat_name = $req->input('name');
        $cat->save();

        return redirect()->route('admin-cat')->with('success', 'Ugradan Kategoriýaňyz aňsatlyk bilen goşuldy');
    }

    public function otherssubmit(Request $req)
    {
//        dd($req);
        $cat = Categories::where('id', $req->input('cat'))->pluck('cat_name');
//        dd($cat);
        if($cat[0] == 'Maglumatlar') {
            $req->validate([
                'cat' => 'required',
                'img_1' => 'required|mimes:rar,doc,docx,xlsx,pptx,xls,ppt,zip'
            ]);
            $file = new files();
        }
        else  {
            $req->validate([
            'cat' => 'required',
            'img_1' => 'required|image'
            ]);
            $file = new images();
        }

        if($req->hasFile('img_1')){
            $img = $req->file('img_1');
            $img->store('public/img');
            $path = $img->store('img');
            $file->path = $path;
        }
        $file->cat_id = $req->input('cat');
        $file->name = $req->input('name1');
        $file->name_ru = $req->input('name2');
        $file->name_en = $req->input('name3');
        $file->save();

        return redirect()->route('admin-others')->with('success', 'Ugradan Kategoriýaňyz aňsatlyk bilen goşuldy');
    }

    public function allDBnews()
    {
        $news = new News;
        return view('dashboard', ['news' => $news->all()]);
    }

    public function mainnews()
    {
        $cat = Categories::where('cat_name','=','Esasy Habarlar')->get()->pluck('id');

        $news = News::where('cat_id','=',$cat[0])->orderBy('updated_at','desc')->paginate(
            5, ['*'],'sahypa'
        );
//        dd($news);
        return view('main', ['news' => $news]);
    }

    public function mainpg()
    {
        $cat = Categories::where('cat_name','=','Esasy Habarlar')->get()->pluck('id');
//        dump($cat);
        $esasy = News::where('cat_id','=',$cat[0])->orderBy('created_at','desc')->take(4)->get();
//        dump($esasy);
        $kop = News::orderBy('view','desc')->take(6)->get();

        $cat = Categories::where('cat_name','=','Çäreler')->get()->pluck('id');

        $care = News::where('cat_id','=',$cat[0])->orderBy('created_at','desc')->take(3)->get();
//        dd($news);
        return view('index', ['esasy' => $esasy,'kop' => $kop,'care' => $care]);
    }

    public function news($name)
    {
        if($name != 'Ähli Habarlar')$cat = Categories::where('cat_name','=',$name)->get()->pluck('id');

        if($name != 'Ähli Habarlar')$news = News::where('cat_id','=',$cat[0])->orderBy('created_at','desc')->paginate(5, ['*'],'sahypa');
        else $news = News::orderBy('created_at','desc')->paginate(10, ['*'],'sahypa');
//        dd($news);
        return view('news', ['news' => $news,'name'=>$name]);
    }

    public function other($name1)
    {
        $cat = Categories::where('cat_name','=',$name1)->get()->pluck('id');

        if($name1 == 'Suratlar') $news = images::where('cat_id','=',$cat[0])->paginate(10, ['*'],'sahypa');
        else if($name1 == 'Maglumatlar')$news = files::where('cat_id','=',$cat[0])->paginate(10, ['*'],'sahypa');
        else $news = News::where('cat_id','=',$cat[0])->paginate(10, ['*'],'sahypa');
//        dd($news);
        return view('other', ['news' => $news,'name1'=>$name1]);
    }

    public function allDBcats()
    {
        $cat = new Categories;
        return view('categories', ['cat' => $cat->all()]);
    }

    public function addcats()
    {
        $cat = new Categories;
        $cat[6]='';
        $cat[7]='';
        unset($cat[6]);
        unset($cat[7]);
        return view('contac', ['cat' => $cat->all()]);
    }

    public function others()
    {
        $cat = Categories::latest()->take(4)->get();
        $cat[0]=$cat[2];
        $cat[1]=$cat[3];
        $cat[2]='';
        $cat[3]='';
        unset($cat[2]);
        unset($cat[3]);
        $files = files::all();
        $img = images::all();
//        dd($cat);
        return view('others', ['cat' => $cat->all(),'files' => $files,'img' => $img]);
    }


    public function updatenews($id)
    {
        $news = new News;
        $cat = new Categories;
        return view('updatenew', ['data' => $news->find($id),'cat'=> $cat->all()]);
    }

    public function updatecat($id)
    {
        $cat = new Categories;
        return view('updatecat', ['cat'=> $cat->find($id)]);
    }

    public function updatesubmit($id, AdminRequest $req)
    {
//        $validation = $req->validate([
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:15|max:500'
//        ]);
        $new = News::find($id);
        $new->name = $req->input('name1');
        $new->name_ru = $req->input('name2');
        $new->name_en = $req->input('name3');
        $new->cat_id = $req->input('cat');
        $new->content = $req->input('message1');
        if(!empty($req->input('message2')))$new->content_ru = $req->input('message2');
        if(!empty($req->input('message3')))$new->content_en = $req->input('message3');
        if($req->hasFile('img_1')){
            $img = $req->file('img_1');
            $img->store('public/img');
            $path = $img->store('img');
            $new->img_1 = $path;
        }
        if($req->hasFile('img_2')){
            $img = $req->file('img_2');
            $img->store('public/img');
            $path = $img->store('img');
            $new->img_2 = $path;
        }
        if($req->hasFile('img_3')){
            $img = $req->file('img_3');
            $img->store('public/img');
            $path = $img->store('img');
            $new->img_3 = $path;
        }
        if($req->hasFile('img_4')){
            $img = $req->file('img_4');
            $img->store('public/img');
            $path = $img->store('img');
            $new->img_4 = $path;
        }
        if($req->hasFile('img_5')){
            $img = $req->file('img_5');
            $img->store('public/img');
            $path = $img->store('img');
            $new->img_5 = $path;
        }

        $new->save();

        return redirect()->route('dashboard', $id)->with('success', 'Ugradan hatyňyz aňsatlyk bilen üýtgedildi');
    }

    public function updatecatsubmit($id, AdminRequest $req)
    {
//        $validation = $req->validate([
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:15|max:500'
//        ]);
        $cat = Categories::find($id);
        $cat->cat_name = $req->input('name');

        $cat->save();

        return redirect()->route('add', $id)->with('success', 'Ugradan hatyňyz aňsatlyk bilen üýtgedildi');
    }

    public function deletenew($id)
    {
        News::find($id)->delete();

        return redirect()->route('dashboard')->with('success', 'Ugradan hatyňyz aňsatlyk bilen pozuldy');
    }

    public function deletecat($id)
    {
        Categories::find($id)->delete();

        return redirect()->route('admin-cat')->with('success', 'Ugradan hatyňyz aňsatlyk bilen pozuldy');
    }

    public function deleteother($id,$ct)
    {
        $cat = Categories::find($ct);
        if($cat->cat_name == 'Maglumatlar') files::find($id)->delete();
        else  images::find($id)->delete();

        return redirect()->route('admin-others')->with('success', 'Ugradan hatyňyz aňsatlyk bilen pozuldy');
    }

    public function onepg($id2) {
        $contact = News::find($id2);

        $contact->view = $contact->view+1;
        $contact->save();

        $contact = News::find($id2);

        $kop = News::orderBy('view','desc')->take(8)->get();
//        dd($contact);



        return view('onepg', ['data' => $contact,'$id2'=>$id2,'kop' => $kop]);
    }

    public function search(Request $req) {

        if($req->ajax()){

            $data = News::where('id','like','%' .   $req->search . '%')
                ->orwhere('name','like','%' .   $req->search . '%')
                ->orwhere('name_en','like','%' .   $req->search . '%')
                ->orwhere('name_ru','like','%' .   $req->search . '%')->orderBy('created_at','desc')->get();
            $output='';
            if(count($data)>0) {

                $output = '
                        <ol class="list-group">
                ';
                foreach ($data as $key=>$el) {

                       if(\Illuminate\Support\Facades\App::getLocale() == 'en') {
                           if(!empty($el->name_en))
                           {
                                   $output .= '<li><a class="list-group-item inline-block container-fluid btn btn-success text-start" href="' . route('onepg', $el->id) . '">' . $el->name_en . ' ' . $el->created_at . '</a></li>';
                           }
                        }
                        else if(\Illuminate\Support\Facades\App::getLocale() == 'ru') {
                            if(!empty($el->name_ru)) {
                                $output .= '<li><a class="list-group-item inline-block container-fluid btn btn-success text-start" href="' . route('onepg', $el->id) . '">' . $el->name_ru . ' ' . $el->created_at . '</a></li>';
                            }
                        }
                        else{
                            if(!empty($el->name)) {
                                $output .= '<li><a class="list-group-item inline-block container-fluid btn btn-success text-start" href="' . route('onepg', $el->id) . '">' . $el->name . ' ' . $el->created_at . '</a></li>';
                            }
                        }
                }

                $output .= '</ol>';
            }
            else{
                $output .= 'Tapylmady';
            }
            return $output;
        }

    }

    public function contactsub(ContactRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->phone = $req->input('phone');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->content = $req->input('message');
        $contact->save();

        return redirect()->route('home');
    }

    public function allDB() {
        $contact = new Contact;
        return view('msg', ['data' => $contact->all()]);
    }

    public function deletecont($id) {
        Contact::find($id)->delete();

        return redirect()->route('contact-data')->with('success','Ugradan hatyňyz aňsatlyk bilen pozuldy');
    }

}
