<?php

namespace App\Controllers\Admin;

use App\Models\Category;
use App\Classes\Request;
use App\Classes\CSRFToken;
use App\Classes\ValidateRequest;

class ProductCategoryController
{

    private $table = 'categories';
    private $categories;
    private $links;

    public function __construct()
    {
        $total = Category::all()->count();
        $object = new Category;

        list($this->categories, $this->links) = paginate(2, $total, $this->table, $object);
    }

    public function show()
    {

        return view('admin/products/categories', [
            'categories' => $this->categories,
            'links' => $this->links
        ]);
    }

    public function store()
    {
        if (Request::has('post')) {
            $request = Request::get('post');

            if(CSRFToken::verifyCSRFToken($request->token)) {
                $rules = [
                    'name' => [
                        'required' => true,
                        'maxLength' => 5,
                        'string' => true,
                        'unique' => 'categories'
                    ]
                ];

                $validate = new ValidateRequest();
                $validate->abide($_POST, $rules);

                if ($validate->hasError()) {
                    $errors = $validate->getErrorMessages();
                    return view('admin/products/categories', [
                        'categories' => $this->categories,
                        'links' => $this->links,
                        'errors' => $errors
                    ]);
                }

                Category::create([
                    'name' => $request->name,
                    'slug' => slug($request->name)
                ]);

                $total = Category::all()->count();
                $object = new Category;

                list($this->categories, $this->links) = paginate(2, $total, $this->table, $object);

                return view('admin/products/categories', [
                    'categories' => $this->categories,
                    'links' => $this->links,
                    'success' => 'Category created!'
                ]);
            }

            throw new \Exception('Token mismatch!');
        }

        return null;
    }
    
    public function edit($id)
    {
        // We have to assign json_decoded data to $_POST because PHP only decodes
        // application/x-www-form-urlencoded data automatically. The reason for it
        // is that we post application/json type from the fetch API.
        $_POST = json_decode(file_get_contents('php://input'), true);
        if (Request::has('post')) {
            $request = Request::get('post');

            if(CSRFToken::verifyCSRFToken($request->token, false)) {
                $rules = [
                    'name' => [
                        'required' => true,
                        'maxLength' => 5,
                        'string' => true,
                        'unique' => 'categories'
                    ]
                ];

                $validate = new ValidateRequest();
                $validate->abide($_POST, $rules);

                if ($validate->hasError()) {
                    $errors = $validate->getErrorMessages();
                    header('HTTP/1.1 422 Unprocessable Entity', true, 422);
                    echo json_encode($errors);
                    exit;
                }

                Category::where('id', $id)->update(['name' => $request->name]);
                echo json_encode(['success' => 'Record updated successfully']);
                exit;
            }

            throw new \Exception('Token mismatch!');
        }

        return null;
    }
    
    public function delete($id)
    {
        $_POST = json_decode(file_get_contents('php://input'), true);
        if (Request::has('post')) {
            $request = Request::get('post');

            if(CSRFToken::verifyCSRFToken($request->token, false)) {
                Category::destroy($id);
                Session::add('success', 'Record updated successfully');
                Redirect::to('admin/products/categories');
            }

            throw new \Exception('Token mismatch!');
        }

        return null;
    }

}
