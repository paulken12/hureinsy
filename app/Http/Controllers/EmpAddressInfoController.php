<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpAddressInfoController extends Controller
{
   public function edit(User $profile) {
       return view('profiles.address.edit',compact('profile'));
   }

   public function update(Request $request, $profile) {

       $user_add = $request->validate([
            'add_key'=>'required',
            'add_unit_num'=>'nullable',
            'add_block'=>'nullable',
            'add_street_name'=>'nullable',
            'add_subdivision'=>'nullable',
            'add_barangay'=>'nullable',
            'add_city'=>'nullable',
            'add_province'=>'nullable',
            'add_zip_code'=>'nullable',
       ]);


       //using the for loop
       // if the client request to update the data at the same time
       //we just need to replace the update button to single button in the view
       for($i=0; $i < count($user_add['add_key']); ++$i ) {

           //get the user using the profile name
           $user = User::whereName($profile)->first();

           //iterate the profile to get the data and save
           foreach ($user->basicInfo as $info) {

               //iterate the relationship
               foreach ($info->address as $address) {

                   //if the database id is equal to the hidden input id
                   if($address->id === (int)$user_add['add_key'][$i]) {

                       //update the database
                       $address->unit_num = $request->input('add_unit_num')[$i];

                       $address->block = $request->input('add_block')[$i];

                       $address->street_name = $request->input('add_street_name')[$i];

                       $address->subdivision = $request->input('add_subdivision')[$i];

                       $address->barangay = $request->input('add_barangay')[$i];

                       $address->city = $request->input('add_city')[$i];

                       $address->province = $request->input('add_province')[$i];

                       $address->zip_code = $request->input('add_zip_code')[$i];

                       $address->update();
                   }
               }
           }
       }

       return back()->with($profile)->with('flash', 'Updated successfully!');
   }
}
