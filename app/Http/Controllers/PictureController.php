<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Picture;

class PictureController extends Controller
{

  public function index() {
     $pictures = Picture::all();

    return view('picture/index', [
      'pictures' => $pictures
    ]);
  }

  public function create(Request $request) {

    if ($request->isMethod('post')) {

      $validator = Validator::make($request->all(), [
        'url' => 'url|required_without:pictureUpload',
        'pictureUpload' => 'file|image|between:0,4000|required_without:url',
        'alias' => 'required|regex:/^([a-z0-9]*(\-)?)+$/'
      ]);

      if($validator->fails())
      {
        return redirect()->route('picture.create')
           ->withErrors($validator)
           ->withInput();
      }
      else
      {

        $picture = new Picture();

        if ($request->hasFile('pictureUpload')) {

          $ext = $request->file('pictureUpload')->getClientOriginalExtension();
          $destinationPath = public_path() . "/uploads/";
          $file = $request->file('pictureUpload')->move($destinationPath, $request->alias.".".$ext);
          $picture->url = asset("uploads/".$request->alias.".".$ext);
        }
        else {
          $picture->url = $request->url;
        }

        $picture->alias = $request->alias;

        $picture->save();

        return redirect()->route('picture.create');
      }
    }

   return view('picture/create');
  }

  public function update($id, Request $request) {

    $picture = Picture::find($id);

    if ($request->isMethod('post')) {

      $validator = Validator::make($request->all(), [
        'url' => 'url|required_without:pictureUpload',
        'pictureUpload' => 'file|image|between:0,4000|required_without:url',
        'alias' => 'required|regex:/^([a-z0-9]*(\-)?)+$/'
      ]);

      if($validator->fails())
      {
        return redirect()->route('picture.update')
           ->withErrors($validator)
           ->withInput();
      }
      else
      {
        if ($request->hasFile('pictureUpload')) {

          $ext = $request->file('pictureUpload')->getClientOriginalExtension();
          $destinationPath = public_path() . "/uploads/";
          $file = $request->file('pictureUpload')->move($destinationPath, $request->alias.".".$ext);
          $picture->url = asset("uploads/".$request->alias.".".$ext);
        }
        else {
          $picture->url = $request->url;
        }

        $picture->alias = $request->alias;

        $picture->save();

        return redirect()->route('picture.index');
      }
    }

    return view('picture/update', [
      'picture' => $picture
    ]);
  }

  public function remove($id) {
    $picture = Picture::find($id);
    $picture->delete();

    return redirect()->back();
  }
}
