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
        if ($this->channel == SmsChannel::class)
        {
            $this->channel->sendMessage($message);
        }
        else if ($this->channel == TelegramChannel::class)
        {
            $this->channel->sendMessage($message);
        }
        else if ($this->channel == ViberChannel::class)
        {
            $this->channel->sendMessage($message);
        }
        else
        {
            die;
        }

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