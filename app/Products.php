<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // Nombre de la tabla en MySQL.
    protected $table='products';

    // Eloquent asume que cada tabla tiene una clave primaria con una columna llamada id.
    // Si éste no fuera el caso entonces hay que indicar cuál es nuestra clave primaria en la tabla:
    protected $primaryKey = 'serie';

    // Atributos que se pueden asignar de manera masiva.
    protected $fillable = array('codigo','nombre','descripcion','imagen');

    // Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
    protected $hidden = ['created_at','updated_at'];

    // Relación de Producto con Categoria:
    public function category(){
        // 1 Producto pertenece a una muchas categorias.
        return $this->belongsToMany('App\Category');
    }
}