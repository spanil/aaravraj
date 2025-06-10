<?php
namespace App\Repositories;

use App\Models\Category; 
use App\Interfaces\CategoryRepositoryInterface;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use App\Traits\StoreImageTrait;
use Illuminate\Support\Facades\Storage;

class CategoryRepository implements CategoryRepositoryInterface
{
    use StoreImageTrait;
    protected $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function datatable()
    {
        $query = Category::query();
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                return '<a href="'.route('admin.categories.edit', $model->id).'" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                <form action="'.route('admin.categories.destroy', $model->id).'" method="POST" style="display: inline;">
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
         if (isset($data['image']) && !empty($data['image'])) {
                if (Str::contains($data['image'], '/category/')) {
                    $image_name = explode('/', $data['image']);
                    $image = $image_name[count($image_name) - 1];
                } else {
                    $image = $this->StoreImage($data['image'], '/category/');
                }
            } else {
                $image = null;
            }
        $data['image'] = $image;
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $model = $this->model->find($id);
            if ($model) {
                if (isset($data['image']) && !empty($data['image'])) {
                    if (Str::contains($data['image'], '/category/')) {
                        $image_name = explode('/', $data['image']);
                        $image = $image_name[count($image_name) - 1];
                    } else {
                        $image = $this->StoreImage($data['image'], '/category/');
                    }
                } else {
                    $image = null;
                }
            $data['image'] = $image;
            $model->update($data);
            return $model;
        }
        return null; 
    }

    public function delete($id)
    {
        $model = $this->model->find($id);        
        if ($model) {
            Storage::disk('public')->delete('/category/'.$model->image);
            return $model->delete();
        }
        return false;
    }
}
?>