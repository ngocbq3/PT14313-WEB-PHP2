<?php

class CategoryController extends Controller
{
    public function list($id)
    {

        $productInCate = Product::productInCategory($id);

        $this->render('layouts/category', ['products' => $productInCate]);
    }

    public function add()
    {
        if (isset($_POST['addcate'])) {
            extract($_REQUEST); //Lấy dữ liệu từ form
            if ($cate_name == "" && $desc == "") {
                $thongbao = "bạn cần nhập dữ liệu vào form để tiếp tục";
                $this->render('admin/createCategory', ['thongbao' => $thongbao]);
            } else {
                $c = new Category;
                $created_at = date('Y-m-d H:i:s');
                //Insert dữ liệu vào bảng categories
                $c->insert([
                    'cate_name' => $cate_name,
                    'desc' => $desc,
                    'created_at' => $created_at
                ]);
                //Tao biến thông báo
                $thongbao = "Thêm dữ liệu thành công";
                $this->render('admin/createCategory', ['thongbao' => $thongbao]);
            }
        } else {
            $this->render('admin/createCategory', []);
        }
    }
    //Hiển thị danh mục
    public function view()
    {
        $cate = Category::all();
        $this->render('admin/listCategory', ['cate' => $cate]);
    }

    //Cập nhật danh mục
    public function update($id)
    {
        //Kiểm tra nếu người dùng nhấp vào lưu thì tiến hành cập nhật
        if (isset($_POST['savecate'])) {
            extract($_REQUEST);
            $updated_at = date('Y-m-d H:i:s');
            $cate = new Category;
            $cate->update([
                "cate_name" => $cate_name,
                "desc" => $desc,
                "updated_at" => $updated_at
            ], $id);
            $category = Category::find_id($id);
            $thongbao = "Cập nhật dữ liệu thành công";
            $this->render('admin/updateCategory', ['thongbao' => $thongbao, 'cate' => $category]);
        } else {
            //Hiển thị dữ liệu cũ 
            $category = Category::find_id($id);
            $this->render('admin/updateCategory', ['cate' => $category]);
        }
    }
    //Xóa danh mục
    public function delete($id)
    {
        $cate = new Category;
        $cate->delete($id);
        header("Location: " . BASE_URL . "category/view");
    }
}
