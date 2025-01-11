<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use App\Repositories\Contracts\MessageRepositoryInterface;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected  $repository;
    public function __construct(MessageRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        $messages = $this->repository->getAllMessages();
        return view('admin.messages.index', compact('messages'));
    }
    public function store(MessageRequest $request)
    {
        $this->repository->createMessage($request);
        return redirect()->back();
    }
    public function destroy($messagesId)
    {
        $this->repository->deleteMessage( $messagesId);
        $messages = $this->repository->getAllMessages();
        return redirect(route("admin.messages.index"))->with(["messages" => $messages]);
    }}
