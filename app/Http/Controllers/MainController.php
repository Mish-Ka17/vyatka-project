<?php
namespace App\Http\Controllers;

class MainController extends Controller
{
    public function createMainPageData () {
        for($i=1; $i<=4; $i++)
            {
            $category= new \stdClass();
            $category->title="Название категории {$i}";
            $category->description="Описание категории {$i}";
            $category->image="images/category.jpg";

            $categories[]=$category;

            $new= new \stdClass();
            $new->title="Название новости {$i}";
            $new->description="Место под короткое описание новости__ {$i}. Очевидно, что эффективный
                            диаметр астатически притягивает космический поперечник__ {$i}";
            $new->image=null;
            $new->url='/blog/article';

            $news[]=$new;

            $product= new \stdClass();
            $product->title="Название товара {$i}";
            $product->price=1000+$i*100;
            $product->oldPrice=1500+$i*15;
            $product->image=null;
            $product->url='/category/product';

            $products[]=$product;
            }
            array_pop($news);

        return view('pages.home', compact('products', 'categories','news'));
    }

    public function createCatalogData () {
        for($i=1; $i<=4; $i++)
            {
            $category= new \stdClass();
            $category->title="Название категории {$i}";
            $category->description="Описание категории {$i}";
            $category->image="images/category.jpg";

            $categories[]=$category;
            }
        return view('pages.catalog', compact('categories'));
    }

    public function createBlogData () {
        for($i=1; $i<=12; $i++)
            {
            $new= new \stdClass();
            $new->title="Название новости {$i}";
            $new->description="Место под короткое описание новости__ {$i}. Очевидно, что эффективный
                            диаметр астатически притягивает космический поперечник__ {$i}";
            $new->image=null;
            $new->url='/blog/article';

            $news[]=$new;
            }
        return view('pages.blog', compact('news'));
    }

    public function createCategoryData () {
        for($i=1; $i<=12; $i++)
            {
            $product= new \stdClass();
            $product->title="Название товара {$i}";
            $product->price=1000+$i*100;
            $product->oldPrice=1500+$i*15;
            $product->image=null;
            $product->url='/category/product';

            $products[]=$product;
            }

        return view('pages.category', compact('products'));
    }

    public function createCategoryExtraData () {
        for($i=1; $i<=4; $i++)
            {
            $product= new \stdClass();
            $product->title="Название товара {$i}";
            $product->price=1000+$i*100;
            $product->oldPrice=1500+$i*15;
            $product->image=null;
            $product->url='/category/product';

            $products[]=$product;
            }

        return view('pages.product', compact('products'));
    }
}
