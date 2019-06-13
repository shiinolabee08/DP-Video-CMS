<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Message;

use App\Events\MessageSent;

class ChatsController
{
	/**
	 * Show chats
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('chat');
	}

	/**
	 * Fetch all messages
	 *
	 * @return Message
	 */
	public function fetchMessages()
	{
		return Message::with('user')->get();
	}

	/**
	 * Persist message to database
	 *
	 * @param  Request $request
	 * @return Response
	 */
	public function sendMessage(Request $request)
	{
		$user = Auth::user();
	
	  	$message = $user->messages()->create([
	    	'name' => $request->input('name'),
	    	'email' => $request->input('email'),
	    	'message' => $request->input('message'),
	  	]);

	  	//broadcasting the chat app
	  	broadcast(new MessageSent($user, $message))->toOthers();

	  	return ['status' => 'Message Sent!'];
	}
}
