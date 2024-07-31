<?php namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $allowedFields = [
        'name', 'email', 'country', 'age', 'message'
    ];

    protected $table      = 'message';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $returnType     = 'array';
    

}