@extends('layouts.app')

@section('template_title')
    Registro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro de Usuarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
<!---
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Gerencia</th>
										<th>Cargo</th>
										<th>Nombre</th>
										<th>Appaterno</th>
										<th>Apmaterno</th>
										<th>Carnet</th>
										<th>Face</th>
										<th>Insta</th>
										<th>Twi</th>
										<th>Regional</th>
										<th>Cel</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registros as $registro)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $registro->gerencia }}</td>
											<td>{{ $registro->cargo }}</td>
											<td>{{ $registro->nombre }}</td>
											<td>{{ $registro->appaterno }}</td>
											<td>{{ $registro->apmaterno }}</td>
											<td>{{ $registro->carnet }}</td>
											<td>{{ $registro->face }}</td>
											<td>{{ $registro->insta }}</td>
											<td>{{ $registro->twi }}</td>
											<td>{{ $registro->regional }}</td>
											<td>{{ $registro->cel }}</td>
											<td>{{ $registro->email }}</td>

                                            <td>
                                                <form action="{{ route('registros.destroy',$registro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registros.show',$registro->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registros.edit',$registro->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>--->
                </div>
                {!! $registros->links() !!}
            </div>
        </div>
    </div>
@endsection
