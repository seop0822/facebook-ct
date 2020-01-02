<?php

namespace App\Http\Controllers;

use App\Exceptions\FriendRequestNotFoundException;
use App\Friend;
use App\Http\Resources\Friend as FriendResouce;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class FriendResponseController extends Controller
{
    public function store()
    {
        $data = request()->validate([
           'user_id' => 'required',
           'status' => 'required',
        ]);

        try{
            $friendRequest = Friend::where('user_id', $data['user_id'])
                ->where('friend_id', auth()->user()->id)
                ->firstOrFail();
        }catch (ModelNotFoundException $e){
            throw new FriendRequestNotFoundException();
        }

        $friendRequest->update(array_merge($data, [
            'confirmed_at' => now()
        ]));

        return new FriendResouce($friendRequest);
    }


}
