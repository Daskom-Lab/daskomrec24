@extends('admin.partials.index')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-white">Dashboard</h4>

                <!-- <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div> -->

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="flex-grow-1 align-self-center">
                                    <div class="text-muted">
                                        <p class="mb-2">Welcome Back!!</p>
                                        <h5 class="mb-1">{{ auth()->guard('admin')->user()->name }}</h5>
                                        <p class="mb-0">Role Adversary</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 align-self-center">
                            <div class="text-lg-center mt-4 mt-lg-0">
                                <div class="row">
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Tahap</p>
                                            <h5 class="mb-0">{{ auth()->guard('admin')->user()->stages()->stagesName }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Pengumuman</p>
                                           <h5 class="mb-0 {{ auth()->guard('admin')->user()->announcecheck()->isMessageActive == 1 ? 'text-success' : 'text-danger' }}">
                                                {{ auth()->guard('admin')->user()->announcecheck()->isMessageActive == 1 ? 'on' : 'off' }}
                                            </h5>
                                            
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Isi Jadwal</p>
                                            <h5 class="mb-0 {{ auth()->guard('admin')->user()->announcecheck()->isPlotActive == 1 ? 'text-success' : 'text-danger' }}">
                                                {{ auth()->guard('admin')->user()->announcecheck()->isPlotActive == 1 ? 'on' : 'off' }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <form action="{{ route('admin.setMsg') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="clearfix">
                            <h4 class="card-title mb-4">Pengumuman</h4>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Pesan Lulus</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="4" id="example-text-input" name="pass_msg" required>{{ $message->pass_msg }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label" name="failed_msg" >Pesan Gagal</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="4" id="example-text-input" name="failed_msg" required>{{ $message->failed_msg }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Link</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $message->link }}" id="example-text-input" name="link">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row float-end mb-3">
                            <div class="mt-3">
                                <button class="btn btn-outline-primary waves-effect waves-light" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-xl-4">
            <form action="{{ route('admin.setStatus') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Konfigurasi</h4>

                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Tahap</label>
                            <div class="col-md-10">
                                <select class="form-select" name="id">
                                    @foreach ($stages as $s)
                                    <option value="{{ $s->id }}" {{ auth()->guard('admin')->user()->stages()->id == $s->id ? 'selected' : '' }}>{{ $s->stagesName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                    <label class="form-check-label" for="SwitchCheckSizemd">Pengumuman</label>
                                    <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd" name="isMessageActive" value="1" {{ auth()->guard('admin')->user()->announcecheck()->isMessageActive == 1 ? 'checked' : '' }}>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                    <label class="form-check-label" for="SwitchCheckSizemd">Isi Jadwal</label>
                                    <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd" name="isPlotActive" value="1" {{ auth()->guard('admin')->user()->announcecheck()->isPlotActive == 1 ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row float-end">
                            <div class="mt-3">
                                <button class="btn btn-outline-danger waves-effect waves-light" type="submit">
                                    <i class="bx bx-error font-size-16 align-middle me-2"></i>Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <h4 class="card-title mb-4">Preview Pengumuman</h4>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3 row">
                                    <div class="col-md-10 text-left">
                                        <h5>Pesan Lolos</h5>
                                        <p>{!! $message->pass_msg !!}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-3 row">
                                    <div class="col-md-10 text-left">
                                        <h5>Pesan Gagal</h5>
                                        <p>{!! $message->failed_msg !!}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-3 row">
                                    <div class="col-md-10 text-left">
                                        <h5>Link</h5>
                                        <p>{{ $message->link }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->

</div> <!-- container-fluid -->
@endsection