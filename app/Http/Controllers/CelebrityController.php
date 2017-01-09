<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;

use App\Celebrity;
use App\Picture;


class CelebrityController extends Controller
{
  public function index() {
     $celebrities = Celebrity::all();

    return view('celebrity/index', [
      'celebrities' => $celebrities
    ]);
  }

  public function create(Request $request) {

    $pictures = Picture::all();

    if ($request->isMethod('post')) {

      $validator = Validator::make($request->all(), [
        'firstname' => 'required|min:2',
        'picture' => 'required',
        'lastname' => 'required|min:2',
        'gender' => 'required',
        'size' => 'required|integer|between:50,215'
      ]);

      if($validator->fails())
      {
        return redirect()
           ->route('celebrity.create')
           ->withErrors($validator)
           ->withInput();
      }
      else
      {
        $celebrity = new Celebrity();

        if($request->gender == 'male')
        {
          $genderRequest = 1;
        }
        else
        {
          $genderRequest = 0;
        }

        $celebrity->firstname = $request->firstname;
        $celebrity->lastname = $request->lastname;
        $celebrity->gender = $genderRequest;
        $celebrity->size = $request->size;
        $celebrity->picture_id = $request->picture;
        $celebrity->save();

        return redirect()->route('celebrity.create');
      }
    }

   return view('celebrity/create', [
     'pictures' => $pictures
   ]);
  }

  public function update($id, Request $request) {

    $pictures = Picture::all();
    $celebrity = Celebrity::find($id);

    if ($request->isMethod('post')) {

      $validator = Validator::make($request->all(), [
        'firstname' => 'required|min:2',
        'picture' => 'required',
        'lastname' => 'required|min:2',
        'gender' => 'required',
        'size' => 'required|integer|between:50,215'
      ]);

      if($validator->fails())
      {
        return redirect()
           ->route('celebrity.update')
           ->withErrors($validator)
           ->withInput();
      }
      else
      {
        if($request->gender == 'male')
        {
          $genderRequest = 1;
        }
        else
        {
          $genderRequest = 0;
        }

        $celebrity->firstname = $request->firstname;
        $celebrity->lastname = $request->lastname;
        $celebrity->gender = $genderRequest;
        $celebrity->size = $request->size;
        $celebrity->picture_id = $request->picture;
        $celebrity->save();

        return view('celebrity/update', [
          'celebrity' => $celebrity,
          'pictures' => $pictures
        ]);
      }
    }

    return view('celebrity/update', [
      'celebrity' => $celebrity,
      'pictures' => $pictures
    ]);
  }


  public function remove($id) {
    $celebrity = Celebrity::find($id);
    $celebrity->delete();

    return redirect()->back();
  }

}
