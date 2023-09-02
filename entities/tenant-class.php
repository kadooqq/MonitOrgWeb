<?php

class Tenant {
    private int $id = 0;
    private string $name = "";
    private string $surname = "";
    private string $patronymic = "";
    private string $profession = "";
    private string $phone_number = "";
    private Flat $flat;
    private string $avatar = "";

    public function __construct($id = 0, $name = "", $surname = "", $patronymic = "", $profession = "Не указана",
                                $phone_number="Не указан", $avatar="", $flat = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->profession = $profession;
        $this->phone_number = $phone_number;
        $this->avatar = $avatar;
        $this->flat = $flat ?? new Flat();
    }

    public static function PostMapping() : Tenant
    {
        $tenant = new Tenant();
        if (!empty($_POST['name']))
            $tenant->set_name($_POST['name']);

        if (!empty($_POST['surname']))
            $tenant->set_surname($_POST['surname']);

        if (!empty($_POST['patronymic']))
            $tenant->set_patronymic($_POST['patronymic']);

        if (!empty($_POST['profession']))
            $tenant->set_profession($_POST['profession']);

        if (!empty($_POST['phone_number']))
            $tenant->set_phone_number($_POST['phone_number']);

        if (!empty($_POST['id_flat'])) {
            $flat = new Flat();
            $flat->set_id($_POST['id_flat']);
            $tenant->set_flat($flat);
        }

        if ($_FILES['avatar']['name'] !== ""){
            $new_image_name = uniqid("IMG-", true).'.'
                .strtolower(pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION));
            $uploaded_image = "img/uploaded_images/";
            $tenant->set_avatar($uploaded_image.$new_image_name);
        }

        return $tenant;
    }

    public function get_id() { return $this->id; }
    public function get_name() { return $this->name; }
    public function get_surname() { return $this->surname; }
    public function get_patronymic() { return $this->patronymic; }
    public function get_profession() { return $this->profession; }
    public function get_phone_number() { return $this->phone_number; }
    public function get_flat() { return $this->flat; }
    public function get_avatar() { return $this->avatar; }


    public function set_id($value) { $this->id = $value; }
    public function set_name($value) { $this->name = $value; }
    public function set_surname($value) { $this->surname = $value; }
    public function set_patronymic($value) { $this->patronymic = $value; }
    public function set_profession($value) { $this->profession = $value; }
    public function set_phone_number($value) { $this->phone_number = $value; }
    public function set_flat($value) { $this->flat = $value; }
    public function set_avatar($value) { $this->avatar = $value; }
}