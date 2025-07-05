<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nome', 'email', 'telefone', 'foto'];

    // Configurar para usar timestamps automáticos, se quiser (opcional)
    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
}