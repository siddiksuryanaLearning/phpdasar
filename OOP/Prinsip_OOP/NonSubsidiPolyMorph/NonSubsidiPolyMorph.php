<?php
class NonSubsidi extends Home
{
    private $luasTanah;

    public function getLuas()
    {
        return $this->luasTanah;
    }

    public function setLuas($luasTanah)
    {
        $this->luasTanah = $luasTanah;
    }
}
