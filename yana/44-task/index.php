<?php


class User
{
    public $userName;
    public $channel;

    public function __construct($name, ChannelInterface $channel)
    {
        $this->userName=$name;
        $this->channel=$channel;
    }

    public function notification($message)
    {
        $this->channel->sendMessage($message);
    }
}

interface ChannelInterface
{
    public function sendMessage ($message);
}

class SmsChannel implements ChannelInterface
{
    public function sendMessage($message)
    {
        // РЕАЛИЗАЦИЯ ОТПРАВКИ КОДА ЧЕРЕЗ СМС
    }
}

class TelegramChannel implements ChannelInterface
{
    public function sendMessage($message)
    {
        // РЕАЛИЗАЦИЯ ОТПРАВКИ КОДА ЧЕРЕЗ ТЕЛЕГРАМ
    }
}

class ViberChannel implements ChannelInterface
{
    public function sendMessage($message)
    {
        // РЕАЛИЗАЦИЯ ОТПРАВКИ КОДА ЧЕРЕЗ ВАЙБЕР
    }
}

$newUser = new User("Яна", new TelegramChannel());
$newUser->notification("привет!");