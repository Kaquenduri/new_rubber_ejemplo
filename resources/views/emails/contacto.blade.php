<H3>Contacto de cliente empresa</H3>
<p>Nombre: {{ $contenido['nombre'] }}</p>
<p>Correo: {{ $contenido['correo'] }}</p>
<p>Empresa: {{ $contenido['empresa'] ?? 'No especificada' }}</p>
<p>Teléfono: {{ $contenido['telefono'] ?? 'No proporcionado' }}</p>
<p>Servicio: {{ $contenido['servicio'] ?? 'No indicado' }}</p>
<p>Mensaje:<br>{{ $contenido['mensaje'] }}</p>