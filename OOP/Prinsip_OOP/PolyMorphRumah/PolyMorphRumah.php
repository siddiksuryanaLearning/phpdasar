<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Home
{
    public $alamat;
    private $type;

    public function __construct(
        $alamat = "tidak ditemukan",
        $type = "tidak ditemukan",
    ) {
        $this->alamat = $alamat;
        $this->type = $type;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }
    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

class Subsidi extends Home
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

$subsidi = new Subsidi();
$subsidi->setAlamat("Jawa Barat");
$subsidi->setType("A");
$subsidi->setLuas("20 x 20 meter");

echo $subsidi->getAlamat();
echo $subsidi->getType();
echo $subsidi->getLuas();

echo "<br>";

$nonSubsidi = new NonSubsidi();
$subsidi->setAlamat("Jawa Timur");
$subsidi->setType("B");
$subsidi->setLuas("40 x 40 meter");

echo $subsidi->getAlamat();
echo $subsidi->getType();
echo $subsidi->getLuas();
