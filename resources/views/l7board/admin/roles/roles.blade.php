@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User roles</h1>

    <div class="row">
        <div class="col-12">
            <a href="{{ route('roles.create') }}"><button class="btn btn-primary float-right mb-3">Add User role</button></a>
        </div>
        <div class="col-12">
            <x-errors />
        </div>
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Role List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Create At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Create At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse($roles as $role)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $role["title"] }}</td>
                                    <td>{{ date("Y, d M h:i", strtotime($role["created_at"]))  }}</td>
                                    <td>{{ date("Y, d M h:i", strtotime($role["updated_at"]))  }}</td>
                                    <td>
                                        <a href="{{ route('roles.edit', $role['id']) }}"><i class="fas fa-pencil-alt btn-edit"></i></a>
                                        <i class="fas fa-trash btn-delete ml-2" onclick="if(confirm('Are you really want to delete this role?')) { document.getElementById('delform_{{ $loop->index }}').submit() }"></i>
                                        <form action="{{ route('roles.destroy', $role['id']) }}" method="POST" id="delform_{{ $loop->index }}">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{$role['id']}}">
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">
                                        <h3 class="text-center">
                                            No Record Found
                                        </h3>
                                        </td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>

                        <div class="float-left mt-2 ml-3">
                            {{ $roles->count() }} OF {{ $roles->total() }}
                        </div>
                        <div class="float-right mr-3">
                            {{ $roles->links() }}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->


@endsection