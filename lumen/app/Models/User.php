<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';  // Nombre de la tabla en la base de datos
    protected $fillable = ['name', 'email', 'password']; // Campos asignables en la tabla
    protected $hidden = ['password']; // Campos que no se devuelven al serializar

    // Método para verificar la contraseña
    public function verifyPassword($password)
    {
        return password_verify($password, $this->password);
    }
}
