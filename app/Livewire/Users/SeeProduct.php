<?php

namespace App\Livewire\Users;

use App\Models\Comments;
use App\Models\features_products;
use App\Models\products;
use App\Models\User;
use App\Models\users_products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SeeProduct extends Component
{
    public $see_products;
    public $sub_cat;
    public $fe_pros;
    public $comments;
    public $users;

    public $users_products;
    public $users_products_2;

    public $find_mark_id;
    public $delete_mark;
    public $products;

//    For Search In DateBase For Find or Defind Record
    public $producs_2;

    public $test;
    public $page_mark = 0;

    public $comment;
    public $number_of_product;
    public $find_product_id;
    public $p_price;
    public $p_code;



    public function mount($id)
    {
        $this->see_products = products::find($id);
        $this->sub_cat = $this->see_products->sub_cat;

    }
    #[Layout('layouts.app')]
    public function render()
    {
        $this->fe_pros = features_products::all();
        $this->users_products_2 = users_products::all();
        $this->products = products::all();
        $this->comments = Comments::all();
        $this->users = User::all();
        return view('livewire.users.see-product');
    }

    public function mark($id)
    {
        $this->find_mark_id = DB::table('users_products')->insert([
            'products_id' => $id,
            'users_id' => Auth::id(),
            'mark' => 0
        ]);
    }

    public function delete($id)
    {
        $this->delete_mark = users_products::find($id)->delete();
    }

    public function open_card_mark()
    {
        $this->page_mark = 1;
    }

    public function close()
    {
        $this->page_mark = 0;
    }
//
//    public function send_comment()
//    {
//        DB::table('comments')->insert([
//            'comments' => $this->comment,
//            'user_id' => Auth::id(),
//            'product_id' => $this->see_products['id']
//        ]);
//
//        $this->reset('comment');
//    }

    public function save($id)
    {
//        $this->producs_2 = users_products::all();
//        foreach ($this->producs_2 as $product_2){
//            if ($product_2->users_id == \auth()->user()->id and $product_2->products_id == $id) {
//                // اگر محصول وجود دارد، آن را به‌روزرسانی کنید
//                DB::table('users_products')->find($product_2->id)->update([
//                    'products_id' => $id,
//                    'users_id' => Auth::id(),
//                    'number_of_product' => $this->number_of_product,
//                    'price' => $this->p_price,
//                    'code_product' => $this->p_code
//                ]);
//
//            } else {
//                // در غیر این صورت، یک رکورد جدید درج کنید
//                DB::table('users_products')->insert([
//                    'products_id' => $id,
//                    'users_id' => Auth::id(),
//                    'number_of_product' => $this->number_of_product,
//                    'price' => $this->p_price,
//                    'code_product' => $this->p_code
//                ]);
//            }
//        }
//        $this->reset();


















        $this->producs_2 = users_products::all();
        $found = false; // متغیر برای پیگیری اینکه آیا رکوردی پیدا شده است یا خیر

        foreach ($this->producs_2 as $product_2) {
            if ($product_2->users_id == \auth()->user()->id && $product_2->products_id == $id) {
                users_products::find($product_2->id)->update([
                    'products_id' => $id,
                    'users_id' => Auth::id(),
                    'number_of_product' => $this->number_of_product,
                    'price' => $this->p_price,
                    'code_product' => $this->p_code
                ]);
                $found = true; // رکوردی پیدا شده است
                break; // از حلقه خارج می‌شویم
            }
        }

        if (!$found) {
            // اگر رکوردی پیدا نشده، یک رکورد جدید درج کنید
            DB::table('users_products')->insert([
                'products_id' => $id,
                'users_id' => Auth::id(),
                'number_of_product' => $this->number_of_product,
                'price' => $this->p_price,
                'code_product' => $this->p_code
            ]);

        }

        $this->reset();



        return redirect(\Illuminate\Support\Facades\URL::signedRoute('see_products', ['id' => $id]));





















    }
}
