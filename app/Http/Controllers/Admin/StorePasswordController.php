<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StorePasswordController extends Controller
{
    public function __invoke(ChangePasswordRequest $request)
    {
        $request->validated();

        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $user->fill([
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        $user->save();
        return redirect()->route('admin.index');
    }
}
