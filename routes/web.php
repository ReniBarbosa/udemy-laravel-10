<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VendaController;
use App\Models\User;
use App\Models\Venda;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});

http: //localhost:8989/produtos
Route::prefix('produtos')->group(function () {
    Route::get('/',[ProdutosController::class,'index'])->name('produto.index');
    /*Cadastrar*/ 
    Route::get('/cadastrarProduto',[ProdutosController::class,'cadastrarProduto'])->name('cadastrar.produto');
    Route::post('/cadastrarProduto',[ProdutosController::class,'cadastrarProduto'])->name('cadastrar.produto');
    /*Atualizar*/
    Route::get('/atualizarProduto/{id}',[ProdutosController::class,'atualizarProduto'])->name('atualizar.produto');
    Route::put('/atualizarProduto/{id}',[ProdutosController::class,'atualizarProduto'])->name('atualizar.produto');
    /*Deletar*/
    Route::delete('/',[ProdutosController::class,'delete'])->name('produto.delete');

});

Route::prefix('clientes')->group(function () {
    
    Route::get('/',[ClientesController::class,'index'])->name('clientes.index');
    /*Cadastrar*/ 
    Route::get('/cadastrarCliente',[ClientesController::class,'cadastrarCliente'])->name('cadastrar.cliente');
    Route::post('/cadastrarCliente',[ClientesController::class,'cadastrarCliente'])->name('cadastrar.cliente');
    /*Atualizar*/
    Route::get('/atualizarCliente/{id}',[ClientesController::class,'atualizarCliente'])->name('atualizar.cliente');
    Route::put('/atualizarCliente/{id}',[ClientesController::class,'atualizarCliente'])->name('atualizar.cliente');
    /*Deletar*/ 
    Route::delete('/',[ClientesController::class,'delete'])->name('cliente.delete');

});

Route::prefix('vendas')->group(function () {
    Route::get('/', [VendaController::class, 'index'])->name('vendas.index');
    //Cadastro Create
    Route::get('/cadastrarVenda', [VendaController::class, 'cadastrarVendas'])->name('cadastrar.venda');
    Route::post('/cadastrarVenda', [VendaController::class, 'cadastrarVendas'])->name('cadastrar.venda');
    Route::get('/enviaComprovantePorEmail/{id}', [VendaController::class, 'enviaComprovantePorEmail'])->name('enviaComprovantePorEmail.venda');
});

Route::prefix('usuario')->group(function () {
    
    Route::get('/',[UsuarioController::class,'index'])->name('usuario.index');
     /*Cadastrar*/ 
     Route::get('/cadastrarUsuario',[UsuarioController::class,'cadastrarUsuario'])->name('cadastrar.usuario');
     Route::post('/cadastrarUsuario',[UsuarioController::class,'cadastrarUsuario'])->name('cadastrar.usuario');
     /*Atualizar*/
     Route::get('/atualizarUsuario/{id}',[UsuarioController::class,'atualizarUsuario'])->name('atualizar.usuario');
     Route::put('/atualizarUsuario/{id}',[UsuarioController::class,'atualizarUsuario'])->name('atualizar.usuario');
     /*Deletar*/ 
     Route::delete('/',[UsuarioController::class,'delete'])->name('usuario.delete');
});