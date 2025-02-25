@extends('admin.layouts.app')

{{-- waitme --}}

<link rel="stylesheet" href="{{ asset('css/waitMe.min.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css"/>

<style>
    .badge.badge-danger {

        cursor: pointer;

    }

    td:nth-child(7) {
        display: flex;
        justify-content: space-around;
    }

    trix-editor {

        min-height: 400px!important;

    }

    .content-wrapper {
        margin-bottom: 3rem;
    }

    .gap-1{
        gap: 1rem;
    }

    .cards{
        border: 1px solid #ccc;
        padding: 1rem!important;
    }
</style>

@section('content')
    <div class="content">

        <div class="container-fluid">

            <div class="card p-4">

                <div class="row justify-content-between">

                    <h2>Empresas</h2>

                    <button class="btn btn-info" data-toggle="modal" data-target="#addEmpresa"><i
                            class="fas fa-plus mr-2"></i>Añadir empresa</button>

                </div>

                <div class="mt-5">

                    <table class="table table-stripped">

                        <thead>

                            <tr>

                                <td width="20%">Nombre de la empresa</td>

                                <td width="10%">Logo</td>

                                <td width="30%">Imagen fondo</td>

                                <td width="10%">Color</td>

                                <td width="10%">Descripción</td>

                                <td width="10%">Activo</td>

                                <td width="10%">Acciones</td>

                            </tr>

                        </thead>

                    </table>

                </div>

            </div>

        </div>

    </div>



    <!-- Modal addEmpresa -->

    <div class="modal fade" id="addEmpresa" tabindex="-1" aria-labelledby="addEmpresaLabel" aria-hidden="true">

        <div class="modal-dialog modal-xl">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="addEmpresaLabel">Añadir empresa</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <form id="form_add_empresa" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            <div class="col-12 col-md-6">
                                <div class="col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="nombre">Nombre <small class="text-red">(Requerido)</small></label>

                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                            placeholder="Nombre">

                                    </div>

                                </div>

                                <div class="col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="logo">Logo <small class="text-red">(Requerido)</small></label>

                                        {{-- Solo aceptar jpg y png --}}

                                        <input type="file" class="form-control" id="logo" name="logo"
                                            accept="image/png, image/jpeg, image/jpg">

                                        <div class="d-flex gap-1 mt-2">
                                            <small class="badge badge-warning">Tamaño máximo: 2MB</small>

                                            <small class="badge badge-warning">Formato: jpeg, jpg o png</small>

                                            <small class="badge badge-warning">Medidas: 300x300 pixeles</small>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="logo">Imagen de fondo <small
                                                class="text-red">(Requerido)</small></label>

                                        <input type="file" class="form-control" id="imagen_fondo" name="imagen_fondo"
                                            accept="image/png, image/jpeg, image/jpg">

                                        <div class="d-flex gap-1 mt-2">
                                            <small class="badge badge-warning">Tamaño máximo: 2MB</small>

                                            <small class="badge badge-warning">Formato: jpeg, jpg o png</small>

                                            <small class="badge badge-warning">Medidas: 1920x1080 pixeles</small>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="logo">Color principal <small
                                                class="text-red">(Requerido)</small></label>

                                        <input type="color" class="form-control" id="colores_principales"
                                            name="colores_principales" placeholder="Color principal">

                                    </div>

                                </div>

                                <div class="col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="logo">Descripción <small
                                                class="text-red">(Requerido)</small></label>

                                        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción"></textarea>

                                    </div>

                                </div>

                                <div class="col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="logo">Activo <small class="text-red">(Requerido)</small></label>

                                        <select class="form-control" id="activo" name="activo">
                                            <option value="">-- Selecciona una opción --</option>
                                            <option value="1">Si</option>

                                            <option value="0">No</option>

                                        </select>

                                    </div>

                                </div>
                            </div>



                            <div class="col-12 col-md-6">
                                {{-- <div class="col-12 col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="my-input">Tipo de puesto</label>

                                        <input type="hidden" name="tipo_puesto" value="1">

                                        <div class="form-group__content input-group mb-3 tipo_puesto">

                                            <div class="input-group-append">

                                                <span class="input-group-text">

                                                    <span class="badge badge-danger"
                                                        onclick="removeInput(0,'tipo_puesto')"><i
                                                            class="fas fa-times"></i></span>

                                                </span>

                                            </div>

                                            <input type="text" class="form-control" name="summaryPuesto_0">

                                        </div>

                                        <button class="btn btn-success btn-sm mb-2" type="button" id="addOption"
                                            onclick="addInput(this, 'tipo_puesto')"><i
                                                class="fas fa-plus mr-2"></i>Añadir</button>

                                    </div>

                                </div> --}}

                                <div class="col-12 col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="my-input">Área</label>

                                        <input type="hidden" name="area" value="1">

                                        <div class="form-group__content input-group mb-3 area">

                                            <div class="input-group-append">

                                                <span class="input-group-text">

                                                    <span class="badge badge-danger" onclick="removeInput(0,'area')"><i
                                                            class="fas fa-times"></i></span>

                                                </span>

                                            </div>

                                            <input type="text" class="form-control" name="summaryArea_0">

                                        </div>

                                        <button class="btn btn-success btn-sm mb-2" type="button" id="addOption"
                                            onclick="addInput(this, 'area')"><i
                                                class="fas fa-plus mr-2"></i>Añadir</button>

                                    </div>

                                </div>

                                <div class="col-12 col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="my-input">Tipo de contratación</label>

                                        <input type="hidden" name="tipo_contratacion" value="1">

                                        <div class="form-group__content input-group mb-3 tipo_contratacion">

                                            <div class="input-group-append">

                                                <span class="input-group-text">

                                                    <span class="badge badge-danger"
                                                        onclick="removeInput(0,'tipo_contratacion')"><i
                                                            class="fas fa-times"></i></span>

                                                </span>

                                            </div>

                                            <input type="text" class="form-control" name="summaryContratacion_0">

                                        </div>

                                        <button class="btn btn-success btn-sm mb-2" type="button" id="addOption"
                                            onclick="addInput(this, 'tipo_contratacion')"><i
                                                class="fas fa-plus mr-2"></i>Añadir</button>

                                    </div>

                                </div>

                                <div class="col-12 col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="my-input">Jornada de trabajo</label>

                                        <input type="hidden" name="jornada_trabajo" value="1">

                                        <div class="form-group__content input-group mb-3 jornada_trabajo">

                                            <div class="input-group-append">

                                                <span class="input-group-text">

                                                    <span class="badge badge-danger"
                                                        onclick="removeInput(0,'jornada_trabajo')"><i
                                                            class="fas fa-times"></i></span>

                                                </span>

                                            </div>

                                            <input type="text" class="form-control" name="summaryJornada_0">

                                        </div>

                                        <button class="btn btn-success btn-sm mb-2" type="button" id="addOption"
                                            onclick="addInput(this, 'jornada_trabajo')"><i
                                                class="fas fa-plus mr-2"></i>Añadir</button>

                                    </div>

                                </div>

                                {{-- Rotacion de turnos --}}
                                <div class="col-12 col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="my-input">Rotacion de turnos</label>

                                        <input type="hidden" name="rotacion_turnos" value="1">

                                        <div class="form-group__content input-group mb-3 rotacion_turnos">

                                            <div class="input-group-append">

                                                <span class="input-group-text">

                                                    <span class="badge badge-danger"
                                                        onclick="removeInput(0,'rotacion_turnos')"><i
                                                            class="fas fa-times"></i></span>

                                                </span>

                                            </div>

                                            <input type="text" class="form-control" name="summaryRotacion_0">

                                        </div>

                                        <button class="btn btn-success btn-sm mb-2" type="button" id="addOption"
                                            onclick="addInput(this, 'rotacion_turnos')"><i
                                                class="fas fa-plus mr-2"></i>Añadir</button>

                                    </div>

                                </div>
                                {{-- Rotacion de turnos --}}

                                {{-- Rotacion de personal --}}
                                {{-- <div class="col-12 col-md-12 mb-4 cards">

                                    <div class="form-group">

                                        <label for="my-input">Rotacion de personal</label>

                                        <input type="hidden" name="rotacion_personal" value="1">

                                        <div class="form-group__content input-group mb-3 rotacion_personal">

                                            <div class="input-group-append">

                                                <span class="input-group-text">

                                                    <span class="badge badge-danger"
                                                        onclick="removeInput(0,'rotacion_personal')"><i
                                                            class="fas fa-times"></i></span>

                                                </span>

                                            </div>

                                            <input type="text" class="form-control" name="summaryRotacionPersonal_0">

                                        </div>

                                        <button class="btn btn-success btn-sm mb-2" type="button" id="addOption"
                                            onclick="addInput(this, 'rotacion_personal')"><i
                                                class="fas fa-plus mr-2"></i>Añadir</button>

                                    </div>

                                </div> --}}
                                {{-- Rotacion de personal --}}
                            </div>

                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="aviso_privacidad">Aviso de privacidad</label>
                                    <input id="aviso" type="hidden" name="aviso">
                                    <trix-editor input="aviso"></trix-editor>
                                </div>
                            </div>

                            {{-- <input type="hidden" class="form-control" name="token" id="token" value="{{ Str::uuid() }}"> --}}

                            <input type="hidden" class="form-control" name="token" id="token" value="">

                        </div>

                        <div class="modal-footer px-0">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                            <button type="submit" class="btn btn-success guardarEmpresa">Guardar empresa</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection



@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('js/waitMe.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

    <script>
        // Añadir campos
        function addInput(elem, type) {

            var inputs = $("." + type);

            if (inputs.length < 1000) {

                if (type == "area") {

                    $(elem).before(`

                        <div class="form-group__content input-group mb-3 area">

                            <div class="input-group-append">

                                <span class="input-group-text">

                                    <span class="badge badge-danger" onclick="removeInput(${inputs.length},'area')"><i class="fas fa-times"></i></span>

                                </span>

                            </div>

                            <input type="text" class="form-control" name="summaryArea_${inputs.length}">

                        </div>

                    `);

                }

                if (type == "tipo_contratacion") {

                    $(elem).before(`

                        <div class="form-group__content input-group mb-3 tipo_contratacion">

                            <div class="input-group-append">

                                <span class="input-group-text">

                                    <span class="badge badge-danger" onclick="removeInput(${inputs.length},'tipo_contratacion')"><i class="fas fa-times"></i></span>

                                </span>

                            </div>

                            <input type="text" class="form-control" name="summaryContratacion_${inputs.length}">

                        </div>

                    `);

                }

                if (type == "jornada_trabajo") {

                    $(elem).before(`

                        <div class="form-group__content input-group mb-3 jornada_trabajo">

                            <div class="input-group-append">

                                <span class="input-group-text">

                                    <span class="badge badge-danger" onclick="removeInput(${inputs.length},'jornada_trabajo')"><i class="fas fa-times"></i></span>

                                </span>

                            </div>

                            <input type="text" class="form-control" name="summaryJornada_${inputs.length}">

                        </div>

                    `);

                }

                if (type == "rotacion_turnos") {

                    $(elem).before(`

                        <div class="form-group__content input-group mb-3 rotacion_turnos">

                            <div class="input-group-append">

                                <span class="input-group-text">

                                    <span class="badge badge-danger" onclick="removeInput(${inputs.length},'rotacion_turnos')"><i class="fas fa-times"></i></span>

                                </span>

                            </div>

                            <input type="text" class="form-control" name="summaryRotacion_${inputs.length}">

                        </div>

                    `);

                }

                $('[name="' + type + '"]').val(inputs.length + 1);

            } else {

                alert("Maximo 1000 opciones");

                return;

            }

        }

        // Eliminar campos
        function removeInput(index, type) {

            var inputs = $("." + type);

            if (inputs.length > 1) {

                inputs.each(i => {

                    if (i == index) {

                        $(inputs[i]).remove();

                    }

                });

                $('[name="' + type + '"]').val(inputs.length - 1);

            } else {

                alert('Esta entrada no se puede eliminar');

                return;

            }

        }



        $(document).ready(function() {

            $('.table').DataTable({

                processing: true,

                serverSide: true,

                responsive: true,

                autoWidth: false,

                ajax: '{{ route('empresas') }}',

                columns: [{

                        data: 'nombre',

                        name: 'nombre'

                    },

                    {

                        data: 'logo',

                        name: 'logo'

                    },

                    {

                        data: 'imagen_fondo',

                        name: 'imagen_fondo'

                    },

                    {

                        data: 'colores_principales',

                        name: 'colores_principales'

                    },

                    {

                        data: 'descripcion',

                        name: 'descripcion'

                    },

                    {

                        data: 'activo',

                        name: 'activo'

                    },

                    {

                        data: 'action',

                        name: 'action',

                        orderable: false,

                        searchable: false

                    }

                ],

                columnDefs: [{

                        targets: 0,

                        render: function(data, type, row) {

                            return `<a target="_blank" href="empresa/${row.token}">${row.nombre}</a>`;

                        }

                    },

                    {

                        targets: 1,

                        render: function(data, type, row) {

                            return `<img src="/storage/${row.logo}" class="img-fluid w-25">`

                        }

                    },

                    {

                        targets: 2,

                        render: function(data, type, row) {

                            return `<img src="/storage/${row.imagen_fondo}" class="img-fluid w-25">`

                        }

                    },

                    {

                        targets: 3,

                        render: function(data, type, row) {

                            return `<div class="colores_principales">

                                        <div class="color_principal" style="background-color: ${row.colores_principales};width: 100%;height: 30px;"></div>`;

                        }

                    },

                    {

                        targets: 5,

                        render: function(data, type, row) {

                            if (row.activo == 1) {

                                return `<span class="badge badge-success">Activo</span>`;

                            } else {

                                return `<span class="badge badge-danger">Inactivo</span>`;

                            }

                        }

                    },

                ],

                "language": {

                    "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"

                }

            });

            // Generar token unico para la empresa cada X tiempo
            const generateId = () => Math.random().toString(36).substr(2, 8) + '-' + Math.random().toString(36)

                .substr(2, 4) + '-' + Math.random().toString(36).substr(2, 4) + '-' + Math.random().toString(36)

                .substr(2, 4) + '-' + Math.random().toString(36).substr(2, 12);

            // asignar uuid al campo token
            $('#token').val(generateId());

            // Actualizar token cada 10 segundos
            setInterval(() => {
                $('#token').val(generateId());
            }, 10000);

            // Mandamos los datos por ajax

            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });



            // Añadir empresa

            $("#form_add_empresa").on('submit', function(e) {

                e.preventDefault();

                var form = $(this);

                var formData = new FormData(form[0]);

                $.ajax({

                    url: '{{ route('empresas.store') }}',

                    type: 'POST',

                    data: formData,

                    contentType: false,

                    processData: false,

                    beforeSend: function() {

                        // Waitme

                        $('.guardarEmpresa').waitMe();

                    },

                    success: function(data) {

                        if (data.status == 'success') {

                            Swal.fire({

                                title: 'Empresa añadida',

                                icon: 'success',

                                text: 'La empresa se ha añadido correctamente',

                                type: 'success',

                                confirmButtonText: 'Aceptar'

                            }).then((result) => {

                                if (result.value) {

                                    $('.table').DataTable().ajax.reload();
                                    $('#addEmpresa').modal('hide');

                                    $('#form_add_empresa')[0].reset();

                                    $('body').removeClass('modal-open');

                                    $('.modal-backdrop').remove();

                                    $('#form_add_empresa').find('input[type="file"]')
                                        .val('');

                                }



                                // waitme

                                $('.guardarEmpresa').waitMe('hide');

                            });

                        } else {

                            Swal.fire({

                                title: 'Error',

                                icon: 'error',

                                text: 'Ha ocurrido un error al añadir la empresa, verifica que los datos sean correctos',

                                type: 'error',

                                confirmButtonText: 'Aceptar'

                            });

                            $('.guardarEmpresa').waitMe('hide');

                        }

                    },

                    error: function(data) {

                        console.log(data);

                    }

                });

            });

            // Eliminar empresa

            $(document).on('click', '.delete', function(e) {

                e.preventDefault();

                var id = $(this).data('id');

                Swal.fire({

                    title: '¿Estás seguro?',

                    text: "¡No podrás revertir esto!",

                    icon: 'warning',

                    showCancelButton: true,

                    confirmButtonColor: '#3085d6',

                    cancelButtonColor: '#d33',

                    confirmButtonText: 'Sí, eliminar',

                    cancelButtonText: 'Cancelar'

                }).then((result) => {

                    if (result.value) {

                        $.ajax({

                            url: '/empresas/delete/' + id,

                            type: 'GET',

                            success: function(data) {

                                if (data.status == 'success') {

                                    Swal.fire({

                                        title: 'Empresa eliminada',

                                        icon: 'success',

                                        text: 'La empresa se ha eliminado correctamente',

                                        type: 'success',

                                        confirmButtonText: 'Aceptar'

                                    }).then((result) => {

                                        if (result.value) {

                                            $('.table').DataTable().ajax

                                                .reload();

                                        }

                                    });

                                } else {

                                    Swal.fire({

                                        title: 'Error',

                                        icon: 'error',

                                        text: 'Ha ocurrido un error al eliminar la empresa, verifica que los datos sean correctos',

                                        type: 'error',

                                        confirmButtonText: 'Aceptar'

                                    });

                                }

                            },

                            error: function(data) {

                                console.log(data);

                            }

                        });

                    }

                });

            });

        });
    </script>
@endsection
