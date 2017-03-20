<?php

class FileMessage extends Message
{
    public function save()
    {
        try {
            $list = [];
            touch(static::getDatabase());
            $list = unserialize(file_get_contents(static::getDatabase()));
            if(!is_array($list)) {
                $list = [];
            }
            array_push($list, $this);

            file_put_contents(static::getDatabase(), serialize($list));
        } catch (\Exception $e) {
            throw $e;
        }

    }

    public static function getAll()
    {
        try {
            return unserialize(file_get_contents(static::getDatabase()));
        } catch (\Exception $e) {
            throw $e;
        }
    }

    function __toString()
    {
        return $this->getSubject() . ' : ' . $this->getText() . '(' . $this->user->getUsername() . ') at: ' . $this->created_at->format('d.m.Y h:i:s');
    }


}