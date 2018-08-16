<?php

namespace App\Http\Controllers;

use App\EmpBasicInfo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpAddressInfoController extends Controller
{
   public function edit(EmpBasicInfo $profile) {

       $profile = $profile->user;

       return view('profiles.address.edit',compact('profile'));
   }

   public function update(Request $request, $profile) {

       $basic = EmpBasicInfo::whereSlug($profile)->first();

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
       // if the client request to update the data single button (submit)
       //we just need to replace the update button to single button in the view
       for($i=0; $i < count($user_add['add_key']); ++$i ) {


           foreach ($basic->address as $address) {

               //if the database id is equal to the hidden input id
               if($address->id === (int)$user_add['add_key'][$i]) {

                   //update the database
                   $address->unit_num = $user_add['add_unit_num'][$i];

                   $address->block = $user_add['add_block'][$i];

                   $address->street_name = $user_add['add_street_name'][$i];

                   $address->subdivision = $user_add['add_subdivision'][$i];

                   $address->barangay = $user_add['add_barangay'][$i];

                   $address->city = $user_add['add_city'][$i];

                   $address->province = $user_add['add_province'][$i];

                   $address->zip_code = $user_add['add_zip_code'][$i];

                   $address->update();
               }
           }
       }

       return redirect(route('profile.address.edit', $profile))->with('flash', 'Updated successfully!');
   }
}
