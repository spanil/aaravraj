<?php
namespace App\Repositories;

use App\Models\User; 
use App\Interfaces\UserRepositoryInterface;
use Yajra\DataTables\DataTables;

class UserRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function datatable()
    {
        $query = User::query();
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                return '<a href="'.route('admin.users.edit', $model->id).'" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                <form action="'.route('admin.users.destroy', $model->id).'" method="POST" style="display: inline;">
            '.csrf_field().method_field('DELETE').'
            <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
        </form>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
         if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        $model = $this->model->find($id);
        if ($model) {
            $model->update($data);
            return $model;
        }
        return null; 
    }

    public function delete($id)
    {
        $model = $this->model->find($id);
        if ($model) {
            return $model->delete();
        }
        return false;
    }
}
?>