<?php

namespace App\Repositories\Contracts;

interface MessageRepositoryInterface
{
    public function getAllMessages();
    public function createMessage($request);
    public function getMessageById($serviceId);
    public function updateMessage($request, $serviceId);
    public function deleteMessage($serviceId);
}
