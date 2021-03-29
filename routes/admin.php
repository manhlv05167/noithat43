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
?>