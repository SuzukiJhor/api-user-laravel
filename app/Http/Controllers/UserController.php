<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserFormRequest;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->get();

        return response()->json($users);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
              
        return response()->json($user, 201);
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        if (!$user = $this->user->find($id))
            return response()->json(['error'=> 'Not Found'], 404);

        $data = $request->only('name', 'email');
        
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);

        return response()->json($user);
    }
   
    public function destroy(string $id)
    {
        if (!$user = $this->user->find($id))
            return response()->json(['error' => 'Not Found'], 404);

        $user->delete();

        return response()->json(['sucess' => true]);
    }
}
