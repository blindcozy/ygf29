<?php namespace App\Models;

use CodeIgniter\Model;

class MerchandiseModel extends Model
{
    protected $allowedFields = [
        'name', 'price', 'picture', 'materials'
    ];

    protected $table      = 'merchandise';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    

}