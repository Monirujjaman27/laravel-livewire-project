<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold text-success px-3 bg-success" id="exampleModalLabel">Add New Slider</h5>
                    <button wire:click="close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card p-3">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="title">Title:</label>
                                    @if($errors->has('title'))
                                    <span class="text-danger">{{$errors->first('title')}}</span>
                                    @endif
                                    <input wire:model="title" id="title" type="text" class="form-control">
                                </div>
                                <div class="col-6">

                                    <label for="subtitle">Subtitle:</label>
                                    @if($errors->has('subtitle'))
                                    <span class="text-danger">{{$errors->first('subtitle')}}</span>
                                    @endif
                                    <input wire:model="subtitle" id="subtitle" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="counterText">Counter Text:</label>
                                    @if($errors->has('counterText'))
                                    <span class="text-danger">{{$errors->first('counterText')}}</span>
                                    @endif
                                    <input wire:model="counterText" id="counterText" type="text" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label for="counter">Counter:</label>
                                    @if($errors->has('counter'))
                                    <span class="text-danger">{{$errors->first('counter')}}</span>
                                    @endif
                                    <input wire:model="counter" id="counter" type="number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sliderbg">Image:</label>
                            @if($errors->has('sliderbg'))
                            <span class="text-danger">{{$errors->first('sliderbg')}}</span>
                            @endif
                            <input wire:model="sliderbg" id="sliderbg" type="file" class="py-0 px-0 form-control">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4">
                                    <label for="buttonName">ButtonName:</label>
                                    @if($errors->has('buttonName'))
                                    <span class="text-danger">{{$errors->first('buttonName')}}</span>
                                    @endif
                                    <input wire:model="buttonName" id="buttonName" type="text" class="form-control">
                                </div>
                                <div class="col-8">
                                    <label for="buttonUrl">Button Url:</label>
                                    @if($errors->has('buttonUrl'))
                                    <span class="text-danger">{{$errors->first('buttonUrl')}}</span>
                                    @endif
                                    <input wire:model="buttonUrl" id="buttonUrl" type="url" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button wire:click="close" type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                    <button wire:click="save" class="btn btn-sm btn-info"> Save</button>
                </div>
            </div>
        </div>
    </div>
</div>