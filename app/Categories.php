<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    // Nombre de la tabla en MySQL.
    protected $table="categories";

    // Atributos que se pueden asignar de manera masiva.
    protected $fillable = array('nombre');

    // Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
    protected $hidden = ['created_at','updated_at'];

    // Relación de Categorias con Productos:
    public function products()
    {
        // 1 Categoria pertenece a muchos Productos
        return $this->belongsToMany('App\Products');
    }
}
