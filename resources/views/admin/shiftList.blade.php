@extends('admin.partials.index')

@section('styles')
    @include('admin.partials.HDdatatables')
@endsection


@section('content')

<div class="container-fluid">
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
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-white">Manage Shift</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 align-self-start">
                            <div class="text-lg-start mt-4 mt-lg-0">
                                <a class="btn btn-outline-success btn-block mx-2" data-bs-toggle="modal"data-bs-target=".addShift-detailModal">Tambah Shift</a>
                                <a href="{{ route('admin.plots') }}" class="btn btn-outline-primary btn-block">Lihat Plottingan</a>
                            </div>
                        </div>
    
                        <div class="col-lg-6 align-self-end">
                            <div class="text-lg-end mt-4 mt-lg-0">
                                <a class="btn btn-outline-danger btn-block mx-2" data-bs-toggle="modal"data-bs-target=".deleteCon-Shift">Reset Shift</a>
                                <a class="btn btn-outline-danger btn-block mx-2" data-bs-toggle="modal"data-bs-target=".deleteCon-Plot">Reset Plot</a>
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
                        <table id="datatable" class="table table-striped table-bordered dt-responsive  nowrap w-100">
    
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Shift</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Kuota</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                @foreach ($shifts as $s)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $s->shift_name }}</td>
                                    <td>{{ $s->day }}</td>
                                    <td>{{ $s->start_hour." - ".$s->end_hour }}</td>
                                    <td>{{ $s->quota }}</td>
                                    <td>
                                        <a class="btn btn-success" data-bs-toggle="modal" data-bs-target=".editShift-{{ $s->id }}"><i class="bx bx-edit"></i></a>
                                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target=".deleteCon-{{ $s->id }}"><i class="bx bx-trash"></i></a>
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


@if (!$shifts->isEmpty())
    @foreach ($shifts as $d)
        <div class="modal fade editShift-{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="editShift-{{ $d->id }}"
        aria-hidden="true" id="editShift-{{ $d->id }}">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addShift-detailModal">Edit Shift</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.update.shift', $d->id) }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="NIM" class="form-label">Nama Shift</label>
                                <div class="input-group ">
                                    <input class="form-control form-control-md" type="text" name="shift_name" value="{{ $d->shift_name }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="NIM" class="form-label">Tanggal</label>
                                <div class="input-group ">
                                    <input class="form-control form-control-md" type="date" value="{{ $d->day }}" name="day" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="NIM" class="form-label">Waktu Mulai</label>
                                <div class="input-group ">
                                    <input class="form-control form-control-md" type="time" value="{{ $d->start_hour }}" name="start_hour" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="NIM" class="form-label">Waktu Selesai</label>
                                <div class="input-group ">
                                    <input class="form-control form-control-md" type="time" value="{{ $d->end_hour }}" name="end_hour" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="NIM" class="form-label">Kuota</label>
                                <div class="input-group ">
                                    <input class="form-control form-control-md" type="number" value="{{ $d->quota }}" name="quota" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                        <div class="row float-end">
                            <div class="">
                                <button type="submit" class="btn btn-primary">Update Shift</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end modal -->
        <!-- COnfirmation Modal -->
            <div class="modal fade deleteCon-{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteCon-{{ $d->id }}"
                aria-hidden="true" id="deleteCon-{{ $d->id }}">
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
                            <form action="{{ route('admin.delete.shift', $d->id) }}" method="POST">
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

<!-- Add Modal -->
 <div class="modal fade addShift-detailModal" tabindex="-1" role="dialog" aria-labelledby="addShift-detailModal"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addShift-detailModal">Tambah Shift</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('admin.create.shift') }}" method="POST">
                     @csrf
                     <div class="mb-3 row">
                         <label for="NIM" class="form-label">Nama Shift</label>
                         <div class="input-group ">
                             <input class="form-control form-control-md" type="text" name="shift_name" value="" required>
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="NIM" class="form-label">Tanggal</label>
                         <div class="input-group ">
                             <input class="form-control form-control-md" type="date" value="" name="day" required>
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="NIM" class="form-label">Waktu Mulai</label>
                         <div class="input-group ">
                             <input class="form-control form-control-md" type="time" value="" name="start_hour" required>
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="NIM" class="form-label">Waktu Selesai</label>
                         <div class="input-group ">
                             <input class="form-control form-control-md" type="time" value="" name="end_hour" required>
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="NIM" class="form-label">Kuota</label>
                         <div class="input-group ">
                             <input class="form-control form-control-md" type="number" value="" name="quota" required>
                         </div>
                     </div>
                    
                 </div>
                 <div class="modal-footer">
                 <div class="row float-end">
                     <div class="">
                         <button type="submit" class="btn btn-primary">Tambah Shift</button>
                     </div>
                 </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!-- end modal -->
@endsection

<!-- COnfirmation Modal -->
<div class="modal fade deleteCon-Shift" tabindex="-1" role="dialog" aria-labelledby="deleteCon-Shift"
    aria-hidden="true" id="deleteCon-Shift">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning bg-gradient text-center">
                <h4 class="modal-title text-bold text-white" >WARNING!!</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="mb-2">
                    <p>Setelah Reset Shift, data plottingan juga <br>
                        akan direset. Semangat inputnya kaka 😆</p>
                </div>
                <form action="{{ route('admin.resetShift') }}" method="GET">
                    @csrf
                </div>
                <div class="modal-footer">
                <div class="row float-end">
                    <div class="mr-2">
                        <button type="submit" class="btn btn-success bg-gradient">RESET</button>
                        <button type="button" class="btn btn-danger bg-gradient" data-bs-dismiss="modal">Gajadi</button>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- COnfirmation Modal -->
<div class="modal fade deleteCon-Plot" tabindex="-1" role="dialog" aria-labelledby="deleteCon-Plot"
    aria-hidden="true" id="deleteCon-Plot">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning bg-gradient text-center">
                <h4 class="modal-title text-bold text-white" >WARNING!!</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="mb-2">
                    <p>Kalo ini bakal menghapus semua plottingan.<br> 
                        Yakin mau direset?</p>
                </div>
                <form action="{{ route('admin.resetPlot') }}" method="GET">
                    @csrf
                </div>
                <div class="modal-footer">
                <div class="row float-end">
                    <div class="mr-2">
                        <button type="submit" class="btn btn-success bg-gradient">RESET</button>
                        <button type="button" class="btn btn-danger bg-gradient" data-bs-dismiss="modal">Gajadi</button>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal -->

@section('extras')
    @include('admin.partials.FTdatatables')
@endsection