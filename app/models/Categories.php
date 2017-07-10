<?php

use Phalcon\Mvc\Model;

class Categories extends Model
{
    public function initialize()
    {
        $this->hasMany(
            'parent_id',
            'Categories',
            'id',
            [
                'foreignKey' => [
                    'message' => 'The part cannot be deleted because other robots are using it',
                ]
            ]
        );
    }
    public $id;

    public $nom;

    public $parent_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param mixed $parent_id
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;
    }



}