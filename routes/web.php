<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articleController;

Route::get('/', [articleController::class, 'index'])->name('article.index');

Route::get('/article/{article_id}', [articleController::class, 'blog_article'])->name('article.blog_article');

Route::get('/tag/{tag_id}', [articleController::class, 'tag'])->name('article.tag');

Route::get('/legal', [articleController::class, 'legal'])->name('article.legal');

Route::get('/articleSearch', [articleController::class, 'articleSearch'])->name('article.articleSearch');

Route::get('/categorySearch', [articleController::class, 'categorySearch'])->name('article.categorySearch');

Route::get('/category/{slug}', [articleController::class, 'category'])->name('article.category');

Route::get('/tagSearch', [articleController::class, 'tagSearch'])->name('article.tagSearch');

Route::get('/Search', [articleController::class, 'Search'])->name('article.search');

Route::get('/articleResults/{article_id}', [articleController::class, 'articleFind'])->name('article.articleShow');

Route::get('/NoCategory', [articleController::class, 'NoCategory'])->name('article.NoCategory');