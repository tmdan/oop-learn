<?php

class Human extends Channel {


}

abstract class Channel {

    private $channel;

    public function setChannel(ChannelInterface $channel){
        $this->channel=$channel;
    }

    public function notification(string $message){
        $this->channel->sendMessage($message);
    }
}


interface ChannelInterface
{
    public function sendMessage(string $message);
}


class SmsChannel implements ChannelInterface
{
    public function sendMessage(string $message)
    {
        echo "Отправленно SMS c текстом" . $message;
    }
}


class ViberChannel implements ChannelInterface
{
    public function sendMessage(string $message)
    {
        echo "Отправленно в Viber c текстом" . $message;
    }
}



class TelegramChannel implements ChannelInterface
{
    public function sendMessage(string $message)
    {
        echo "Отправленно сообщение в телеграм c текстом" . $message;
    }
}

$Ivan=new Human();
$Ivan->setChannel(new ViberChannel());
$Ivan->notification("Привет");
