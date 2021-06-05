@extends('layouts.app')
@section('content')

    <h1>Centros de Formación</h1>
    <p>Aquí podrás encontrar todos los centros de Formación del sistema.</p>
    <a class="btn btn-primary btn-sm" href="{{ route('training_center.create') }}">Crear Nuevo</a>
    <div class="card-body">
        <div class="table-sm table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr class="bg-beanred text-white">
                    <th>#</th>
                    <th>Centro de Formación</th>
                    <th>Dirección</th>
                    <th>Nit</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($training_center as $training_center)
                    <tr class="active">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $training_center->name }}</td>
                        <td>{{ $training_center->address }}</td>
                        <td>{{ $training_center->nit }}</td>
                        <td name="buttons">
                            <div class=" pull-right">
                                <a  href="{{ route('training_center.edit', $training_center->id) }}" id="bEdit" type="button"
                                    class="btn btn-sm btn-soft-success btn-circle mr-2"
                                    onclick="rowEdit(this);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-pencil"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </a>
                                <form action="{{ route('training_center.destroy', $training_center->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button id="bElim" type="submit"
                                            class="btn btn-sm btn-soft-danger btn-circle"
                                            onclick="rowElim(this);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-trash"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd"
                                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </button>
                                </form>
                                <button id="bAcep" type="button"
                                        class="btn btn-sm btn-soft-purple mr-2 btn-circle"
                                        style="display:none;" onclick="rowAcep(this);"><i
                                        class="dripicons-checkmark"></i></button>
                                <button id="bCanc" type="button"
                                        class="btn btn-sm btn-soft-info btn-circle"
                                        style="display:none;" onclick="rowCancel(this);"><i
                                        class="dripicons-cross" aria-hidden="true"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
