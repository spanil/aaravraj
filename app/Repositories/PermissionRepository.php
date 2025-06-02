<?php
namespace App\Repositories;

use App\Models\Permission; 
use App\Interfaces\PermissionRepositoryInterface;
use Yajra\DataTables\DataTables;

class PermissionRepository implements PermissionRepositoryInterface
{
    protected $model;

    public function __construct(Permission $model)
    {
        $this->model = $model;
    }

    public function datatable()
    {
        $query = Permission::query();
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                return '<a href="'.route('admin.permissions.edit', $model->id).'" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                <form action="'.route('admin.permissions.destroy', $model->id).'" method="POST" style="display: inline;">
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