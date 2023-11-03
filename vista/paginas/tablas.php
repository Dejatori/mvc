<!-- Aquí irá todo el contenido de la página, preferiblemente usar solo HTML
    Si se necesita usar PHP, se recomienda modularizarlo -->

<!-- Ejemplo de página de tablas -->

<!-- Título de la página -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="content-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Tablas</h1>
                    <p>Esta es la página de tablas</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contenido de la página de tablas -->
    <section class="content">
        <!-- Tabla de contenido -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Tabla de contenido</h3>
                    </div>
                    <div class="box-body">
                        <table id="tabla-contenido" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Contenido</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Titulo 1</td>
                                    <td>Contenido 1</td>
                                    <td>
                                        <button class="btn btn-primary btn-xs">Editar</button>
                                        <button class="btn btn-danger btn-xs">Eliminar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Titulo 2</td>
                                    <td>Contenido 2</td>
                                    <td>
                                        <button class="btn btn-primary btn-xs">Editar</button>
                                        <button class="btn btn-danger btn-xs">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-success btn-sm pull-right">Agregar contenido</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> <!-- Cierre de la etiqueta <div class="content-wrapper"> -->