@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Edit role</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <form method="POST" action="{{ route('roles.update', $role->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $role->id }}"/>
                    <table class="table table-bordered datatable">
                        <tbody>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <td>
                                    <input class="form-control" name="name" value="{{ $role->name }}" type="text"/>
                                </td>
                            </tr>
                            <tr>
                              <th>Permissions</th>
                              <td>
                                <div class="form-check checkbox mt-3">
                                  <input class="form-check-input" type="checkbox" value="true" name="read" checked>
                                  <label class="form-check-label">Enable Show button in table</label>
                                </div>
                                <div class="form-check checkbox">
                                  <input class="form-check-input" type="checkbox" value="true" name="edit" checked>
                                  <label class="form-check-label">Enable Edit button in table</label>
                                </div>
                                <div class="form-check checkbox">
                                  <input class="form-check-input" type="checkbox" value="true" name="add" checked>
                                  <label class="form-check-label">Enable Add button in table</label>
                                </div>
                                <div class="form-check checkbox mb-3">
                                  <input class="form-check-input" type="checkbox" value="true" name="delete" checked>
                                  <label class="form-check-label">Enable Delete button in table</label>
                                </div>
                              </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a class="btn btn-primary" href="{{ route('roles.index') }}">Return</a>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')


@endsection