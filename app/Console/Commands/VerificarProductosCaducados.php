<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Producto;
use App\Notifications\ProductoCaducadoNotification;

class VerificarProductosCaducados extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:verificar-productos-caducados';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifica los productos caducados y envía notificaciones';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Obtener productos caducados
        $productosCaducados = Producto::whereDate('fecha_caducidad', '<=', now())->get();

        // Enviar notificaciones para cada producto caducado
        foreach ($productosCaducados as $producto) {
            $producto->user->notify(new ProductoCaducadoNotification($producto));
        }

        // Registrar información en el log
        $this->info('Se han verificado los productos caducados y se han enviado las notificaciones correspondientes.');
    }
}
