<?php namespace App\Controllers;

use App\Models\TodoModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new TodoModel();

        $data['todo'] = $model->getTodo();
        echo view('home', $data);
    }

    public function add()
    {
        $model = new TodoModel();

        if (! $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required'
        ]))
        {
            echo view('add_todo');
        }
        else
        {
            $model->save([
                'title' => $this->request->getVar('title'),
                'body'  => $this->request->getVar('body'),
            ]);

            return redirect('/');
        }
    }

    public function markComplete()
    {
        $model = new TodoModel();

        if (! $this->validate([
            'todo_id' => 'required',
        ]))
        {
            echo view('home');
        }
        else
        {
            $data = [
                'is_complete' => true,
            ];
            $model->update($this->request->getVar('todo_id'), $data);

            return redirect('/');
        }

    }

    public function delete()
    {
        $model = new TodoModel();

        if (! $this->validate([
            'todo_id' => 'required',
        ]))
        {
            echo view('home');
        }
        else {
            $model->delete($this->request->getVar('todo_id'));

            return redirect('/');
        }
    }

//--------------------------------------------------------------------

}
