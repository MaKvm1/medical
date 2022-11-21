<?php

class Func
{

    private $db;

    /**
     * Подключение к БД
     */
    public function __construct()
    {
        $this->db = new PDO('mysql:host=10.100.3.80;dbname=20095_medcenter', '20095', 'rkcmej');
    }

    // Удаление классификации

    public function deleteClass(int $id_class): bool
    {
        return ($this->db->prepare("DELETE FROM classification WHERE id_class = ?"))->execute([$id_class]);
    }

    // Удаление услуги

    public function deleteServ(int $id_serv): bool
    {
        return ($this->db->prepare("DELETE FROM service WHERE id_serv = ?"))->execute([$id_serv]);
    }    

    // Удаление услуги

    public function deleteCabinet(int $id_cabinet): bool
    {
        return ($this->db->prepare("DELETE FROM cabinet WHERE id_cabinet = ?"))->execute([$id_cabinet]);
    }    
}