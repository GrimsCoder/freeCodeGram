<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Invitation;
use App\Http\Requests\StoreInvitationRequest;

class InvitationsController extends Controller
{
    
    public function store(StoreInvitationRequest $request)
{
    $invitation = new Invitation($request->all());
    $invitation->generateInvitationToken();
    $invitation->save();

    return redirect()->route('requestInvitation')
        ->with('success', 'Invitation to register successfully requested. Please wait for registration link.');
}
public function index()
{
    $invitations = Invitation::where('registered_at', null)->orderBy('created_at', 'desc')->get();
    return view('invitations.index', compact('invitations'));
}
}
