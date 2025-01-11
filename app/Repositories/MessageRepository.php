<?php

namespace App\Repositories;

use App\Models\Message;
use App\Repositories\Contracts\MessageRepositoryInterface;

class MessageRepository implements MessageRepositoryInterface
{
    protected $model;
    
    public function __construct(Message $model)
    {
        $this->model = $model;
    }

    public function getAllMessages()
    {
        return $this->model->paginate(6);
    }

    public function createMessage($request)
    {
        $this->model->create($request->validated());
    }
    
    public function getMessageById($messageId)
    {
        return $this->model->findOrFail($messageId);
    }
    
    public function updateMessage($request, $messageId)
    {
        $this->getMessageById($messageId)->update([
            'name'=> $request->name,
            'description'=> $request->description
        ]);
    }
    
    public function deleteMessage($messageId)
    {
        $this->getMessageById($messageId)->delete();
    }
    
}
