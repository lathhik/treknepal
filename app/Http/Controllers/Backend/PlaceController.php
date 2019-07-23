<?php

namespace App\Http\Controllers\Backend;

use App\Place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class PlaceController extends Controller
{
    public function addPlaces()
    {
        return view('Backend.pages.places.add-places');
    }

    public function addPlace(Request $request)
    {
        $place = new Place();
        $place->title = $request->title;
        $place->country = $request->country;
        $place->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = str_random(20) . '.' . $file->getClientOriginalExtension();

            $image = Image::make($file);

            if (!file_exists(public_path('/custom/Backend/img/places'))) {
                mkdir(public_path('/custom/Backend/img/places'));
            }

            $image->resize(480, 650)->save(public_path('/custom/Backend/img/places/' . $newName));
        }

        $place->image = $newName;

        $place->save();

        return redirect('admin/view-places');
    }

    public function viewPlaces()
    {
        $places = Place::all();
        return view('Backend.pages.places.view-places')->with('places', $places);
    }

    public function editPlace($id)
    {
        $singlePlace = Place::find($id);

        return view('Backend.pages.places.edit-places')->with('singlePlace', $singlePlace);
    }

    public function updatePlace(Request $request, $id)
    {
        $singlePlace = Place::find($id);

        $singlePlace->title = $request->title;
        $singlePlace->country = $request->country;
        $singlePlace->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = str_random(20) . '.' . $file->getClientOriginalExtension();
            $image = Image::make($file);

            if (!file_exists(public_path('custom/Backend/img/places'))) {
                mkdir(public_path('custom/Backend/img/places'));
            }

            if ($singlePlace->image) {
                if (file_exists(public_path('custom/Backend/img/places/' . $singlePlace->image))) {
                    unlink(public_path('custom/Backend/img/places/' . $singlePlace->image));
                }
            }

            $image->resize(480, 650)->save(public_path('custom/Backend/img/places/' . $newName));

            $singlePlace->image = $newName;
            $singlePlace->save();

            return redirect('admin/view-places');


        } else {

            $singlePlace->save();

            return redirect('admin/view-places');
        }


    }

    public function deletePlace($id)
    {
        $singlePlace = Place::find($id);

        if (file_exists(public_path('custom/Backend/img/places/' . $singlePlace->image)) && unlink(public_path('custom/Backend/img/places/' . $singlePlace->image))) {

            $singlePlace->delete();
        }
        $singlePlace->delete();
        $places = Place::all();
        return view('Backend.pages.places.view-places')->with('places', $places);
    }

}
