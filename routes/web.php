<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClavesClienteController;
use App\Http\Controllers\ClavesWHMController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\InformeJornadasController;
use App\Http\Controllers\IngresosController;
use App\Http\Controllers\NcuentaController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\ProformaController;
use App\Http\Controllers\TerceroController;
use App\Http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/administrador', [AuthController::class, 'showLoginForm'])->name('admin.login.get');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
Route::get('/admin_logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'auth:admins'], function () {
        /*=============================== Usuarios Registrados =========================================================*/

        Route::get('/home', [HomeController::class, 'index'])->name('home.index');

        /*=============================== Terceros =========================================================*/

        Route::get('/clientes', [TerceroController::class, 'index'])->name('tercero.index');
        Route::get('/clientes/prueba', [TerceroController::class, 'index_prueba']);
        Route::get('/clientes/direccion', [TerceroController::class, 'mapaIndex'])->name('tercero.mapa.index');

        /*=============================== Proformas =========================================================*/

        Route::get('/proformas', [ProformaController::class, 'index'])->name('proforma.index');
        Route::get('/proformas/create', [ProformaController::class, 'createProforma'])->name('proforma.create');

        /*=============================== Notificaciones de Pago =========================================================*/

        Route::get('/notificaciones-pago', [NotificacionController::class, 'index'])->name('notificacion_pago.index');
        Route::get('/notificaciones-pago/create', [NotificacionController::class, 'createNotificacionPago'])->name('notificacion_pago.create');

        /*=============================== Calendario de pagos =========================================================*/

        Route::get('/calendario-pago', [CalendarioController::class, 'index'])->name('calendario_pago.index');
        Route::get('/calendario-pago/ocultos', [CalendarioController::class, 'verOcultos'])->name('calendario_pago.ocultos');

        /*=============================== Facturacion Ventas =========================================================*/

        Route::get('/facturacion-ventas', [FacturacionController::class, 'index'])->name('facturacion.index');
        Route::get('/ventas', [FacturacionController::class, 'createVenta'])->name('venta.create');
        Route::get('/nota-credito', [FacturacionController::class, 'notaCredito'])->name('nota.credito');

        /*=============================== Ingresos - Egresos =========================================================*/

        Route::get('/ingresos-egresos', [IngresosController::class, 'index'])->name('ingresos.egresos.index');

        /*=============================== N° Cuenta =========================================================*/

        Route::get('/cuenta-bancaria', [NcuentaController::class, 'index'])->name('cuenta.index');

        /*=============================== Claves Cliente =========================================================*/

        Route::get('/claves-cliente', [ClavesClienteController::class, 'index'])->name('clave_cliente.index');
        Route::get('/ocultos', [ClavesClienteController::class, 'ocultos'])->name('clave_cliente.ocultos');

        /*=============================== Claves WHM =========================================================*/

        Route::get('/claves-whm', [ClavesWHMController::class, 'index'])->name('clave_whm.index');

        /*=============================== Categorías de Servicios =========================================================*/

        Route::get('/categorias', [CategoriasController::class, 'index'])->name('categorias.index');
        Route::get('/categorias/subcategoria', [CategoriasController::class, 'subcategoria'])->name('subcategorias.index');

        /*=============================== Catálogo de Servicios =========================================================*/

        Route::get('/catalogo-servicios', [CatalogoController::class, 'index'])->name('catalogo.index');

        /*=============================== Usuarios - Asistencia =========================================================*/

        Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');

        /*=============================== Informe de Jornadas =========================================================*/

        Route::get('/informe-jornadas', [InformeJornadasController::class, 'index'])->name('informe.jornadas.index');

        /*=============================== Asistencia - Trabajador =========================================================*/

        Route::get('/asistencia', [AsistenciaController::class, 'asistenciaIndex'])->name('asistencia.index');
        Route::get('/calendario', [AsistenciaController::class, 'asistenciaCalendario'])->name('asistencia.calendario');
        Route::get('/videollamada', [AsistenciaController::class, 'videollamada'])->name('videollamada');
    });
});

Route::get('/', function () {
    return view('welcome');
});
