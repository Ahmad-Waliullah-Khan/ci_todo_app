<?php namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model
{
    protected $table = 'todo';

    protected $allowedFields = ['title', 'body', 'is_complete'];

    public function getTodo()
    {
        return $this->findAll();

    }
}