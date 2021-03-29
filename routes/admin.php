<?php
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('admin.index');
})->name('dashboard');


Route::prefix('category')->group(function () {

    Route::get('/', function () {
        return view('admin.category.index');
    })->name('list.cate');

    Route::get('/add', function () {
        return view('admin.category.add-form');
    })->name('add.cate');

    Route::get('/edit', function () {
        return view('admin.category.edit-form');
    })->name('edit.cate');

    Route::get('/delete', function () {
        echo "test";
    })->name('del.cate');
});

Route::prefix('product')->group(function () {
    Route::get('/', function () {
        return view('admin.product.index');
    })->name('list.pro');

    Route::get('/add', function () {
        return view('admin.product.add-form');
    })->name('add.pro');

    Route::get('/edit', function () {
        return view('admin.product.edit-form');
    })->name('edit.pro');

    Route::get('/delete', function () {
        echo "test2";
    })->name('del.pro');
});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('admin.user.index');
    })->name('list.user');

    Route::get('/add', function () {
        return view('admin.user.add-form');
    })->name('add.user');

    Route::get('/edit', function () {
        return view('admin.user.edit-form');
    })->name('edit.user');

    Route::get('/delete', function () {
        echo "test del";
    })->name('del.user');
});

Route::prefix('imgpro')->group(function () {
    Route::get('/', function () {
        return view('admin.imgpro.index');
    })->name('list.imgpro');

    Route::get('/add', function () {
        return view('admin.imgpro.add-form');
    })->name('add.imgpro');

    Route::get('/edit', function () {
        return view('admin.imgpro.edit-form');
    })->name('edit.imgpro');

    Route::get('/delete', function () {
        echo "test del2";
    })->name('del.imgpro');
});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('admin.user.index');
    })->name('list.user');

    Route::get('/add', function () {
        return view('admin.user.add-form');
    })->name('add.user');

    Route::get('/edit', function () {
        return view('admin.user.edit-form');
    })->name('edit.user');

    Route::get('/delete', function () {
        echo "test del";
    })->name('del.user');
});

Route::prefix('order')->group(function () {
    Route::get('/', function () {
        return view('admin.order.index');
    })->name('list.order');

    Route::get('/get', function () {
        return view('admin.order.detail');
    })->name('get.order');

    Route::get('/edit', function () {
        return view('admin.order.edit-form');
    })->name('edit.order');

    Route::get('/delete', function () {
        echo "test del order";
    })->name('del.order');
});

Route::prefix('slide')->group(function () {
    Route::get('/', function () {
        return view('admin.slide.index');
    })->name('list.slide');

    Route::get('/add', function () {
        return view('admin.slide.add-form');
    })->name('add.slide');

    Route::get('/edit', function () {
        return view('admin.slide.edit-form');
    })->name('edit.slide');

    Route::get('/delete', function () {
        echo "test del3";
    })->name('del.slide');
});

Route::prefix('size')->group(function () {
    Route::get('/', function () {
        return view('admin.size.index');
    })->name('list.size');

    Route::get('/add', function () {
        return view('admin.size.add-form');
    })->name('add.size');

    Route::get('/edit', function () {
        return view('admin.size.edit-form');
    })->name('edit.size');

    Route::get('/delete', function () {
        echo "test del4";
    })->name('del.size');
});

Route::prefix('type')->group(function () {
    Route::get('/', function () {
        return view('admin.type.index');
    })->name('list.type');

    Route::get('/add', function () {
        return view('admin.type.add-form');
    })->name('add.type');

    Route::get('/edit', function () {
        return view('admin.type.edit-form');
    })->name('edit.type');

    Route::get('/delete', function () {
        echo "test del5";
    })->name('del.type');
});

Route::prefix('setting')->group(function () {
    Route::get('/', function () {
        return view('admin.setting.index');
    })->name('list.setting');

    Route::get('/edit', function () {
        return view('admin.setting.edit-form');
    })->name('edit.setting');
});

Route::prefix('comment')->group(function () {
    Route::get('/', function () {
        return view('admin.comment.index');
    })->name('list.comment');
});
?>