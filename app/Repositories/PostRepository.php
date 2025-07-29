<?php
namespace App\Repositories;

use App\Models\Post; 
use App\Interfaces\PostRepositoryInterface;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use App\Traits\StoreImageTrait;
use Illuminate\Support\Facades\Storage;

class PostRepository implements PostRepositoryInterface
{
    use StoreImageTrait;
    protected $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function datatable()
    {
        $query = Post::query();
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                return '<a href="'.route('admin.posts.edit', $model->id).'" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                <form action="'.route('admin.posts.destroy', $model->id).'" method="POST" style="display: inline;">
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
        $maxOrder = Post::max('order') ?? 0;
        $data['order'] = $maxOrder + 1;
        if (isset($data['image']) && !empty($data['image'])) {
            if (Str::contains($data['image'], '/post/')) {
                $image_name = explode('/', $data['image']);
                $image = $image_name[count($image_name) - 1];
            } else {
     
                $image = $this->StoreImage($data['image'], '/post/');
            }
        }
        $data['image'] = $image;
        $post =  $this->model->create($data);
        $post->translateOrNew('en')->title = $data['title_en'];
        $post->translateOrNew('en')->description = $data['description_en'];        
        $post->translateOrNew('np')->title = $data['title_np'];
        $post->translateOrNew('np')->description = $data['description_np'];        
        $post->save();
        return $post;
        
    }

    public function update($id, array $data)
    {
        $model = $this->model->find($id);
            if ($model) {
                if (isset($data['image']) && !empty($data['image'])) {
                    if (Str::contains($data['image'], '/page/')) {
                        $image_name = explode('/', $data['image']);
                        $image = $image_name[count($image_name) - 1];
                    } else {
                        $image = $this->StoreImage($data['image'], '/page/');
                    }
                } else {
                    $image = null;
                }
            $data['image'] = $image;
            $model->update($data);
            $model->translateOrNew('en')->title = $data['title_en'];
            $model->translateOrNew('en')->description = $data['description_en'];        
            $model->translateOrNew('np')->title = $data['title_np'];
            $model->translateOrNew('np')->description = $data['description_np'];        
            $model->save();
            return $model;
        }
        return null; 
    }

    public function delete($id)
    {
        $model = $this->model->find($id);        
        if ($model) {
            Storage::disk('public')->delete('/page/'.$model->image);
            return $model->delete();
        }
        return false;
    }
}
?>