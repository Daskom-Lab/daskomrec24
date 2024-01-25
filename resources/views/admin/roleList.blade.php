@extends('admin.partials.index')

@section('styles')
    @include('admin.partials.HDdatatables')
@endsection


@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-white">Manage Role</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive ">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive  nowrap w-100" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Avatar</th>
                                    <th>Role</th>
                                    <th>Deskripsi</th>
                                    <th>Quota</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                @foreach ( $roles as $r)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td><img src="{{ asset($r->character_photo) }}" alt="{{ $r->roleName }}" width="80"></td>
                                        <td>{{ $r->roleName }}</td>
                                        <td class="text-left">{{ $r->desc }}</td>
                                        <td>{{ $r->quota }}</td>
                                        <td>
                                            <a href="" class="btn btn-success" data-bs-toggle="modal"data-bs-target=".editRole-{{ $r->id }}"><i class="bx bx-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
    
                </div>
            </div>
        </div>
    </div> <!-- end row -->

</div> <!-- container-fluid -->

@if (!$roles->isEmpty())
   @foreach ( $roles as $rs)
        <div class="modal fade editRole-{{ $rs->id }}" tabindex="-1" role="dialog" aria-labelledby="editRole-{{ $rs->id }}" aria-hidden="true" id="editRole-{{ $rs->id }}">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.update.role', $rs->id) }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="NIM" class="form-label">Role</label>
                                <div class="input-group ">
                                    <input class="form-control form-control-md" type="text" name="roleName" value="{{ $rs->roleName }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="NIM" class="form-label">Deskripsi</label>
                                <div class="input-group ">
                                    <textarea class="form-control form-control-md" name="desc" required>{{ $rs->desc }}</textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="NIM" class="form-label">Foto Karakter</label>
                                <div class="input-group ">
                                    <input class="form-control form-control-md" type="text" name="character_photo" value="{{ $rs->character_photo }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="NIM" class="form-label">Foto Profil</label>
                                <div class="input-group ">
                                    <input class="form-control form-control-md" type="text" name="profilepic" value="{{ $rs->profilepic }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="NIM" class="form-label">Quota</label>
                                <div class="input-group ">
                                    <input class="form-control form-control-md" type="quota" name="quota" value="{{ $rs->quota }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <div class="row float-end">
                            <div class="">
                                <button type="submit" class="btn btn-primary">Update Role</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   @endforeach 
@endif

@endsection

@section('extras')
    @include('admin.partials.FTdatatables')
@endsection