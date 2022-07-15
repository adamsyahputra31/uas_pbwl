<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/', 'DashboardController@index')->name('/');

    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/create', 'MenuController@create')->name('menu.create');
    Route::post('menu', 'MenuController@insert')->name('menu.store');
    Route::get('menu/edit/{menu}', 'MenuController@edit')->name('menu.edit');
    Route::put('menu', 'MenuController@update')->name('menu.update');
    Route::delete('menu', 'MenuController@delete')->name('menu.delete');

    Route::get('customer', 'CustomerController@index')->name('customer');
    Route::get('customer/create', 'CustomerController@create')->name('customer.create');
    Route::post('customer', 'CustomerController@insert')->name('customer.store');
    Route::get('customer/edit/{customer}', 'CustomerController@edit')->name('customer.edit');
    Route::put('customer', 'CustomerController@update')->name('customer.update');
    Route::delete('customer', 'CustomerController@delete')->name('customer.delete');

    Route::get('transaction', 'TransactionController@index')->name('transaction');
    Route::get('transaction/create', 'TransactionController@create')->name('transaction.create');
    Route::post('transaction', 'TransactionController@insert')->name('transaction.store');
    Route::get('transaction/edit/{transaction}', 'TransactionController@edit')->name('transaction.edit');
    Route::put('transaction', 'TransactionController@update')->name('transaction.update');
    Route::delete('transaction', 'TransactionController@delete')->name('transaction.delete');

    Route::get('transaction_detail', 'TransactionDetailController@index')->name('transaction_detail');
    Route::get('transaction_detail/create', 'TransactionDetailController@create')->name('transaction_detail.create');
    Route::post('transaction_detail', 'TransactionDetailController@insert')->name('transaction_detail.store');
    Route::get('transaction_detail/edit/{transaction_detail}', 'TransactionDetailController@edit')->name('transaction_detail.edit');
    Route::put('transaction_detail', 'TransactionDetailController@update')->name('transaction_detail.update');
    Route::delete('transaction_detail', 'TransactionDetailController@delete')->name('transaction_detail.delete');

    Route::get('user', 'userController@index')->name('user');
    Route::get('user/create', 'userController@create')->name('user.create');
    Route::post('user', 'userController@insert')->name('user.store');
    Route::get('user/edit/{user}', 'userController@edit')->name('user.edit');
    Route::put('user', 'userController@update')->name('user.update');
    Route::delete('user', 'userController@delete')->name('user.delete');
});

