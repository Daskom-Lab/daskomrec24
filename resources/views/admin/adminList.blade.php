@extends('admin.partials.index')

@section('styles')
    @include('admin.partials.HDdatatables')
@endsection

@section('content')
<div class="container-fluid">
   <!-- start page title -->
   @if (session('success'))
       <div  class="alert alert-success fade show mt-1" data-timeout="5000" role="alert">
            {{  session('success') }}
        </div>
   @endif
   @if (session('error'))
       <div class="alert alert-danger fade show mt-1" data-timeout="5000" role="alert">
            {{  session('error') }}
        </div>
   @endif
  
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-white">Manage Admin</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
     <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 pb-0">
                        </div>
                        
                        <div class="col-lg-4 align-self-end">
                            <div class="text-end">
                                <button class="btn btn-outline-danger w-md bg-gradient" data-bs-toggle="modal"data-bs-target=".setAdmin-detailModal">Set Password</button>
                                <button class="btn btn-outline-warning w-md bg-gradient" data-bs-toggle="modal"data-bs-target=".addAdmin-detailModal">Tambah Akun</button>
                            </div>
                        </div>
    
    
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">            
                    <div class="table-responsive">                   
                        <table id="datatable" class="table table-striped table-bordered dt-responsive text-center nowrap w-100">
                            <thead>
                                <tr class="">
                                    <th>No</th>
                                    <th>Code</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @foreach ($admins as $a)
                                <tr>    
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{ $a->ascod }} </td>
                                    <td>{{ $a->name }}</td>
                                    <td>
                                        <button class="btn btn-success bg-gradient" data-bs-toggle="modal" data-bs-target="#editAdmin-{{ $a->id }}"><i class="bx bx-edit"></i></button>
                                        <a class="btn btn-danger waves-effect waves-light bg-gradient"  data-bs-toggle="modal"data-bs-target="#deleteCon-{{ $a->id }}"><i class="bx bx-trash"></i></a>
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
@if (!$admins->isEmpty())

    @foreach ($admins as $cm)
        
    <!-- Update Modal -->
    <div class="modal fade editAdmin-{{ $cm->id }}" tabindex="-1" role="dialog" aria-labelledby="editAdmin-{{ $cm->id }}"
        aria-hidden="true" id="editAdmin-{{ $cm->id }}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Edit Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.update.admin', $cm->id) }}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="NIM" class="col-md-2 col-form-label">Code</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="ascode" oninput="this.value = this.value.toUpperCase();" style="text-transform: uppercase;" maxlength="3" value="{{ $cm->ascod }}" required readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NIM" class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $cm->name }}" name="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <div class="row float-end">
                        <div class="">
                            <button type="submit" class="btn btn-secondary">Update</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal -->
    
    <!-- COnfirmation Modal -->
    <div class="modal fade deleteCon-{{ $cm->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteCon-{{ $cm->id }}"
        aria-hidden="true" id="deleteCon-{{ $cm->id }}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning bg-gradient text-center">
                    <h4 class="modal-title text-bold text-white"  >WARNING!!</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-2">
                        <p>Setelah di hapus, data yang sudah dihapus <br>
                            tidak dapat kembali. Seperti dia</p>
                    </div>
                    <form action="{{ route('admin.delete.admin', $cm->id) }}" method="POST">
                        @csrf
                    </div>
                    <div class="modal-footer">
                    <div class="row float-end">
                        <div class="mr-2">
                            <button type="submit" class="btn btn-success bg-gradient">Yakin kok</button>
                            <button type="button" class="btn btn-danger bg-gradient" data-bs-dismiss="modal">Gajadi</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal -->
    
    @endforeach
@endif


<!-- set pass Modal -->
<div class="modal fade setAdmin-detailModal" tabindex="-1" role="dialog" aria-labelledby="setAdmin-detailModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="setAdmin-detailModal">Set Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.set.admin') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label class="form-label">Code</label>
                    <div class="input-group auth-pass-inputgroup">
                        <input type="text" name="ascode" class="form-control" oninput="this.value = this.value.toUpperCase();" style="text-transform: uppercase;" maxlength="3" placeholder="DHY">
                    </div>
                </div>
                    <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group auth-pass-inputgroup">
                        <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <div class="row float-end">
                    <div class="">
                        <button type="submit" class="btn btn-secondary">Save</button>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- Add Modal -->
 <div class="modal fade addAdmin-detailModal" tabindex="-1" role="dialog" aria-labelledby="addAdmin-detailModal"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addAdmin-detailModal">Tambah Admin</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('admin.create.admin') }}" method="POST">
                     @csrf
                     <div class="mb-3 row">
                         <label for="NIM" class="col-md-2 col-form-label">Code</label>
                         <div class="col-md-10">
                             <input class="form-control" type="text" name="ascode" oninput="this.value = this.value.toUpperCase();" style="text-transform: uppercase;" maxlength="3" placeholder="DHY" required>
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="NIM" class="col-md-2 col-form-label">Name</label>
                         <div class="col-md-10">
                             <input class="form-control" type="text" value="" name="name" id="name" required>
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="NIM" class="col-md-2 col-form-label">Password</label>
                         <div class="col-md-10">
                             <input class="form-control" type="password" value="" name="password" id="passworod" required>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                 <div class="row float-end">
                     <div class="">
                         <button type="submit" class="btn btn-secondary">Save</button>
                     </div>
                 </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!-- end modal -->


@endsection

@section('extras')
    @include('admin.partials.FTdatatables')
@endsection