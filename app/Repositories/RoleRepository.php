<?php
namespace App\Repositories;

use App\Models\Role; 
use App\Interfaces\RoleRepositoryInterface;
use Yajra\DataTables\DataTables;

class RoleRepository implements RoleRepositoryInterface
{
    protected $model;

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function datatable()
    {
        $query = Role::query();
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                return '<a href="'.route('admin.roles.edit', $model->id).'" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                <form action="'.route('admin.roles.destroy', $model->id).'" method="POST" style="display: inline;">
            '.csrf_field().method_field('DELETE').'
            <button class="resetbtn btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
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
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
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