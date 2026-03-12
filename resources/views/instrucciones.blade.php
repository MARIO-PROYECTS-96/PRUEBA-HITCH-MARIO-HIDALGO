@extends('layout')
@section('content')
    <div class="p-4" style="text-align: justify">
        <h4 class="mb-4 text-uppercase">Prueba Técnica: Implementación CRUD de Pagos</h4>

        <div class="alert alert-info">
            <h4 class="alert-heading">Objetivo</h4>
            <p>El objetivo de esta prueba técnica es que completes la funcionalidad de un CRUD (Crear, Leer,
                Actualizar, Eliminar) para una tabla de pagos en un proyecto básico de Laravel. Se te
                proporciona una estructura inicial del proyecto, y tu tarea será completar las
                funcionalidades faltantes para gestionar los pagos.</p>
        </div>

        <div class="alert alert-secondary">
            <h4 class="alert-heading">Descripción del Proyecto</h4>
            <p>Ya existe un controlador básico llamado <code>PaymentsController</code>, que tiene las
                siguientes funciones:</p>
            <ul>
                <li><code>index()</code>: Para mostrar la lista de pagos.</li>
                <li><code>create()</code>: Para mostrar el formulario de creación de pagos.</li>
            </ul>
            <p>Debes completar el CRUD siguiendo los pasos indicados a continuación.</p>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Paso 1: Configuración de la Base de Datos (MySQL o SQLite)
            </div>
            <div class="card-body">
                <p>Como parte de esta prueba, tendrás la flexibilidad de elegir entre usar
                    <strong>MySQL</strong> o <strong>SQLite</strong> como tu base de datos.</p>

                <div class="accordion" id="databaseSetupAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingMySQL">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMySQL" aria-expanded="true"
                                aria-controls="collapseMySQL">
                                <b>Opción A: Usar MySQL como Base de Datos</b>
                            </button>
                        </h2>
                        <div id="collapseMySQL" class="accordion-collapse collapse show"
                            aria-labelledby="headingMySQL" data-bs-parent="#databaseSetupAccordion">
                            <div class="accordion-body">
                                <p><strong>Asegurarte de que MySQL esté instalado y corriendo</strong> en tu
                                    máquina (por ejemplo, a través de <em>XAMPP</em> o <em>WAMP</em>).</p>
                                <h5>1. Crear la base de datos:</h5>
                                <ul>
                                    <li>Abre tu cliente MySQL o phpMyAdmin.</li>
                                    <li>Crea una base de datos nueva: <code>prueba_tecnica</code>.</li>
                                </ul>
                                <h5>2. Configurar el archivo <code>.env</code>:</h5>
                                <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prueba_tecnica
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña</code></pre>
                                <h5>3. Verificar la Configuración:</h5>
                                <p>Corre una migración y revisa si la base de datos <code>prueba_tecnica</code> es modificada con las tablas creadas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSQLite">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseSQLite"
                                aria-expanded="false" aria-controls="collapseSQLite">
                                <b>Opción B: Usar SQLite como Base de Datos</b>
                            </button>
                        </h2>
                        <div id="collapseSQLite" class="accordion-collapse collapse"
                            aria-labelledby="headingSQLite" data-bs-parent="#databaseSetupAccordion">
                            <div class="accordion-body">
                                <p><strong>SQLite</strong> es una base de datos ligera que no requiere instalación de servidor.</p>
                                <h5>1. Crear el archivo de base de datos:</h5>
                                <pre><code>New-Item -Path .\database\database.sqlite -ItemType File</code></pre>
                                <h5>2. Configurar el archivo <code>.env</code>:</h5>
                                <pre><code>DB_CONNECTION=sqlite
DB_DATABASE=database\database.sqlite</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Paso 2: Crear la Migración y el Modelo</div>
            <div class="card-body">
                <p>Crea una migración para la tabla <code>payments</code> con los campos:</p>
                <ul>
                    <li><code>id INT AUTO_INCREMENT PK</code></li>
                    <li><code>description VARCHAR(255)</code></li>
                    <li><code>price INT</code></li>
                </ul>
                <p>También genera el modelo <code>Payment</code> correctamente configurado.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Paso 3: Completar la Funcionalidad del Listado (index)</div>
            <div class="card-body">
                <p>En el método <code>index()</code> obtén todos los pagos y muéstralos en <code>list.blade.php</code> con opciones de editar y eliminar.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Paso 4: Implementar la Funcionalidad de Creación</div>
            <div class="card-body">
                <ul>
                    <li>Valida los campos <code>description</code> y <code>price</code>.</li>
                    <li>Si falla, redirige al formulario con el error.</li>
                    <li>Si es exitoso, redirige al listado con <code>alert-success</code>.</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Paso 5: Implementar la Funcionalidad de Edición</div>
            <div class="card-body">
                <ul>
                    <li>Método <code>edit</code>: muestra el formulario con los datos actuales.</li>
                    <li>Método <code>update</code>: valida y actualiza el registro.</li>
                    <li>Redirige al listado con <code>alert-success</code> o al formulario con <code>alert-error</code>.</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Paso 6: Implementar la Funcionalidad de Eliminación</div>
            <div class="card-body">
                <ul>
                    <li>Método <code>destroy</code>: verifica que el pago exista antes de eliminar.</li>
                    <li>Si existe, elimina y redirige con <code>alert-success</code>.</li>
                    <li>Si no existe, redirige con <code>alert-error</code>.</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Paso 7: Manejo de Notificaciones</div>
            <div class="card-body">
                <ul>
                    <li><code>alert-success</code>: operación realizada correctamente.</li>
                    <li><code>alert-error</code>: ocurrió algún problema.</li>
                </ul>
                <pre><code>return redirect()->route('payments')->with('alert-success', 'Pago creado correctamente.');</code></pre>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Paso 8: Asegurarse de las Rutas y Navegación</div>
            <div class="card-body">
                <p>Asegúrate de que el flujo entre vistas funcione correctamente para:</p>
                <ul>
                    <li>Ver el listado de pagos.</li>
                    <li>Crear nuevos pagos.</li>
                    <li>Editar pagos existentes.</li>
                    <li>Eliminar pagos.</li>
                </ul>
            </div>
        </div>

        <div class="alert alert-warning">
            <h4 class="alert-heading">Conclusión</h4>
            <p>Al completar esta prueba técnica, deberás haber implementado un CRUD completo para la gestión
                de pagos, validando correctamente los datos, mostrando mensajes de notificación y permitiendo
                la navegación fluida entre las diferentes partes del sistema.</p>
        </div>
    </div>
@endsection
