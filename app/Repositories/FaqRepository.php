<?php
namespace App\Repositories;

use App\Models\Faq; 
use App\Interfaces\FaqRepositoryInterface;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use App\Traits\StoreImageTrait;
use Illuminate\Support\Facades\Storage;

class FaqRepository implements FaqRepositoryInterface
{
    use StoreImageTrait;
    protected $model;

    public function __construct(Faq $model)
    {
        $this->model = $model;
    }

    public function datatable()
    {
        $query = Faq::query();
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                return '<a href="'.route('admin.faqs.edit', $model->id).'" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                <form action="'.route('admin.faqs.destroy', $model->id).'" method="POST" style="display: inline;">
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
                if (Str::contains($data['image'], '/faq/')) {
                    $image_name = explode('/', $data['image']);
                    $image = $image_name[count($image_name) - 1];
                } else {
                    $image = $this->StoreImage($data['image'], '/faq/');
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
                    if (Str::contains($data['image'], '/faq/')) {
                        $image_name = explode('/', $data['image']);
                        $image = $image_name[count($image_name) - 1];
                    } else {
                        $image = $this->StoreImage($data['image'], '/faq/');
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
            Storage::disk('public')->delete('/faq/'.$model->image);
            return $model->delete();
        }
        return false;
    }
}
?>