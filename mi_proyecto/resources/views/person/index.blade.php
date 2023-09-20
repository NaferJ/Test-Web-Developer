@extends('layouts.app')

@section('template_title')
    Person
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Person') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('people.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Fecha Nacimiento</th>
										<th>Identificacion</th>
										<th>Profesion U Oficio</th>
										<th>Es Casado</th>
										<th>Ingresos Mensuales</th>
										<th>Vehiculo Actual</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($people as $person)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $person->nombres }}</td>
											<td>{{ $person->apellidos }}</td>
											<td>{{ $person->fecha_nacimiento }}</td>
											<td>{{ $person->identificacion }}</td>
											<td>{{ $person->profesion_u_oficio }}</td>
											<td>{{ $person->es_casado }}</td>
											<td>{{ $person->ingresos_mensuales }}</td>
											<td>{{ $person->vehiculo_actual }}</td>

                                            <td>
                                                <form action="{{ route('people.destroy',$person->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('people.show',$person->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('people.edit',$person->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $people->links() !!}
            </div>
        </div>
    </div>
@endsection
