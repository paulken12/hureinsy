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
            'key'=>'required',
            'unit_num'=>'nullable',
            'block'=>'nullable',
            'street_name'=>'nullable',
            'subdivision'=>'nullable',
            'barangay'=>'nullable',
            'city'=>'nullable',
            'province'=>'nullable',
            'zip_code'=>'nullable',
       ]);

       $user = User::whereName($profile)->first();
       //iterate the profile to get the address and save
       foreach ($user->basicInfo as $info) {
           foreach ($info->address as $address) {
                if($address->master_address_key === $user_add['key'])
                {
                    $address->master_address_key = $request->key;
                    $address->unit_num = $request->unit_num;
                    $address->block = $request->block;
                    $address->street_name = $request->street_name;
                    $address->subdivision = $request->subdivision;
                    $address->barangay = $request->barangay;
                    $address->city = $request->city;
                    $address->province = $request->province;
                    $address->zip_code = $request->zip_code;
                    $address->update();
                }
           }
       }

       return back()->with($profile);
   }
}
