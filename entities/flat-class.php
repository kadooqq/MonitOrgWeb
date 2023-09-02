<?php

class Flat
{
    private int $id = 0;
    private int $number = 0;
    private int $rooms_number = 0;
    private int $area = 0;
    private int $floor = 0;

    public function __construct($id = 0, $number = 0, $area = 0, $rooms_number = 0, $floor = 0)
    {
        $this->id = $id;
        $this->number = $number;
        $this->rooms_number = $rooms_number;
        $this->floor = $floor;
        $this->area = $area;
    }

    public static function PostMapping() : Flat
    {
        $flat = new Flat();
        if (!empty($_POST['area']))
            $flat->set_area($_POST['area']);

        if (!empty($_POST['number']))
            $flat->set_number($_POST['number']);

        if (!empty($_POST['rooms_number']))
            $flat->set_rooms_number($_POST['rooms_number']);

        if (!empty($_POST['floor']))
            $flat->set_floor($_POST['floor']);

        return $flat;
    }

    public function get_id() { return $this->id; }
    public function get_number() { return $this->number; }
    public function get_rooms_number() { return $this->rooms_number; }
    public function get_floor() { return $this->floor; }
    public function get_area() { return $this->area; }


    public function set_number($value) { $this->number = $value; }
    public function set_id($value) { $this->id = $value; }
    public function set_rooms_number($value) { $this->rooms_number = $value; }
    public function set_area($value) { $this->area = $value; }
    public function set_floor($value) { $this->floor = $value; }
}