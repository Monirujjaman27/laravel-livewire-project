<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalForm">
                        Add New Slider
                    </button>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=""><i>Dashboard</i></a></li>
                        <li class="breadcrumb-item active"><i>Slider</i></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->


    @livewire('slider.create')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>CounterText</th>
                                        <th>Counter</th>
                                        <th>ButtonName</th>
                                        <th>Url</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->subtitle }}</td>
                                        <td>{{ $data->counterText }}</td>
                                        <td>{{ $data->counter }}</td>
                                        <td>{{ $data->buttonName }}</td>
                                        <td><a class="badge badge-info" href="{{ $data->buttonUrl }}" target="_blank" rel="noopener noreferrer">{{ $data->buttonName }}</a></td>
                                        <td>{{ $data->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <button wire:click="selectItem({{$data->id}}, 'edit')" class="badge badge-info border-info mr-1"><i class="fas fa-edit"></i></button>
                                                <button onclick="return confirm('Are you sure to delete the Slider')" wire:click="delete({{$data->id}})" class="badge badge-danger border-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @php $i++ @endphp
                                    @endforeach
                                </tbody>
                            </table>

                            <div id="larapaginate" class="text-center"> {{ $datas->links() }}</div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    <!-- /.content -->
    <!-- /.content-wrapper -->
</div>