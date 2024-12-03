@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 max-w-4xl">

    <h2 class="text-4xl font-extrabold text-blue-700 mb-10 text-center tracking-wide">Transferencias</h2>

    <!-- Simulación del Saldo -->
    <div class="bg-white text-black shadow-xl rounded-lg p-10 mb-8 border-t-4 border-blue-500">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-2xl font-medium text-gray-900 mb-1">Saldo de Cuenta</h3>
                <p class="text-gray-500">Número de Cuenta: 1234-5678-9012-3456</p>
            </div>
            <p id="saldo" class="text-3xl font-bold text-blue-800">$5,000.00</p>
        </div>
    </div>

    <!-- Formulario de transferencia -->
    <div class="bg-white shadow-xl rounded-lg p-10 mb-8 border-t-4 border-blue-500">
        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Transferencia a otra Cuenta</h3>
        <input type="text" id="cuenta-destino" placeholder="Número de cuenta destino" class="w-full p-4 rounded-lg border border-gray-300 text-gray-900 mb-6 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition duration-200">
        <input type="number" id="monto-transferencia" placeholder="Monto a transferir" class="w-full p-4 rounded-lg border border-gray-300 text-gray-900 mb-6 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition duration-200">
        <button onclick="realizarTransferencia()" class="w-full bg-blue-600 text-white py-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
            Transferir
        </button>
    </div>

    <!-- Historial de Transferencias -->
    <div class="bg-white shadow-xl rounded-lg p-10 mt-8 border-t-4 border-blue-500">
        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Historial de Transferencias</h3>
        <ul id="historial-transferencias" class="list-none space-y-4 text-gray-800">
            <!-- Las transferencias aparecerán aquí -->
        </ul>
    </div>
</div>


<script>
    let saldo = 5000.00;

    function actualizarSaldo() {
        document.getElementById('saldo').textContent = `$${saldo.toFixed(2)}`;
    }

    function agregarHistorialTransferencia(cuenta, monto) {
        const historial = document.getElementById('historial-transferencias');
        const item = document.createElement('li');
        item.className = "border-b border-gray-300 py-2 flex justify-between";
        item.innerHTML = `<span>Transferencia a la cuenta ${cuenta}</span><span>-$${monto.toFixed(2)}</span>`;
        historial.prepend(item);
    }

    function realizarTransferencia() {
        const cuenta = document.getElementById('cuenta-destino').value;
        const monto = parseFloat(document.getElementById('monto-transferencia').value);

        if (cuenta && !isNaN(monto) && monto > 0) {
            if (monto <= saldo) {
                // Realizar la transferencia
                saldo -= monto;
                actualizarSaldo();
                agregarHistorialTransferencia(cuenta, monto);

                // Alerta de confirmación
                alert(`Has transferido $${monto.toFixed(2)} a la cuenta ${cuenta}.`);

                // Limpiar campos
                document.getElementById('cuenta-destino').value = '';
                document.getElementById('monto-transferencia').value = '';
            } else {
                alert("Saldo insuficiente para realizar la transferencia.");
            }
        } else {
            alert("Por favor, ingresa un número de cuenta y un monto válido.");
        }
    }

    actualizarSaldo();
</script>
@endsection
