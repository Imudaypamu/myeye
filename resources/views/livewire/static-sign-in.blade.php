<div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Achievments') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">

             

                <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="p1_name" class="form-control-label">{{ __('1.Project Name') }}</label>
                                <div class="@error('user.p1_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.p1_name" class="form-control" type="text" placeholder="Project Name"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->p1_name}}</p>
                                </div>
                                @error('user.p1_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="p1_des" class="form-control-label">{{ __('Project Description') }}</label>
                                <div class="@error('user.p1_des')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.p1_des" class="form-control" type="text"
                                        placeholder="p1_des" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->p1_des}}</p>
                                </div>
                                @error('user.p1_des') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="p1_due" class="form-control-label">{{ __('Project Duration') }}</label>
                                <div class="@error('user.p1_due')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.p1_due" class="form-control" type="text" placeholder="Duration"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->p1_due}}</p>
                                </div>
                                @error('user.p1_due') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="p2_name" class="form-control-label">{{ __('2.Project Name') }}</label>
                                <div class="@error('user.p2_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.p2_name" class="form-control" type="text"
                                        placeholder="Project Name" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->p2_name}}</p>
                                </div>
                                @error('user.p2_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="p2_des" class="form-control-label">{{ __('Project Description') }}</label>
                                <div class="@error('user.p2_des')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.p2_des" class="form-control" type="text"
                                        placeholder="Project Des" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->p2_des}}</p>
                                </div>
                                @error('user.p2_des') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div> 
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="p2_due" class="form-control-label">{{ __('Project Duration') }}</label>
                                <div class="@error('user.p2_due')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.p2_due" class="form-control" type="text"
                                        placeholder="p2_due" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->p2_due}}</p>
                                </div>
                                @error('user.p2_due') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cu1_name" class="form-control-label">{{ __('1.Course Name') }}</label>
                                <div class="@error('user.cu1_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.cu1_name" class="form-control" type="text"
                                        placeholder="cu1_name" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->cu1_name}}</p>
                                </div>
                                @error('user.cu1_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cu1_des" class="form-control-label">{{ __('Course Description') }}</label>
                                <div class="@error('user.cu1_des')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.cu1_des" class="form-control" type="tel"
                                        placeholder="cu1_des" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->cu1_des}}</p>
                                </div>
                                @error('user.cu1_des') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cu1_due" class="form-control-label">{{ __('Course Duration') }}</label>
                                <div class="@error('user.cu1_due')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.cu1_due" class="form-control" type="text" placeholder="cu1_due"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->cu1_due}}</p>
                                </div>
                                @error('user.cu1_due') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cu2_name" class="form-control-label">{{ __('2.Course Name') }}</label>
                                <div class="@error('user.cu2_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.cu2_name" class="form-control" type="text"
                                        placeholder="cu2_name" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->cu2_name}}</p>
                                </div>
                                @error('user.cu2_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cu2_des" class="form-control-label">{{ __('Course Description') }}</label>
                                <div class="@error('user.cu2_des')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.cu2_des" class="form-control" type="text" placeholder="des"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->cu2_des}}</p>
                                </div>
                                @error('user.cu2_des') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cu2_due" class="form-control-label">{{ __('Course Duration') }}</label>
                                <div class="@error('user.cu2_due')border border-danger rounded-3 @enderror">
                                    <input wire:model="user.cu2_due" class="form-control" type="text"
                                        placeholder="cu2_due" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->cu2_due}}</p>
                                </div>
                                @error('user.cu2_due') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="i1_name" class="form-control-label">{{ __('1.Internship Name') }}</label>
                                <div class="@error('user.i1_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.i1_name" class="form-control" type="text" placeholder="i1_name"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->i1_name}}</p>
                                </div>
                                @error('user.i1_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="i1_des" class="form-control-label">{{ __('Internship Description') }}</label>
                                <div class="@error('user.i1_des')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.i1_des" class="form-control" type="text"
                                        placeholder="i1_des" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->i1_des}}</p>
                                </div>
                                @error('user.i1_des') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="i1_due" class="form-control-label">{{ __('Internship Duration') }}</label>
                                <div class="@error('user.i1_due')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.i1_due" class="form-control" type="text"
                                        placeholder="i1_due" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->i1_due}}</p>
                                </div>
                                @error('user.i1_due') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="i2_name" class="form-control-label">{{ __('2.Internship Name') }}</label>
                                <div class="@error('user.i2_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.i2_name" class="form-control" type="text"
                                        placeholder="iu2_name" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->i2_name}}</p>
                                </div>
                                @error('user.12_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="i2_des" class="form-control-label">{{ __('Internship Description') }}</label>
                                <div class="@error('user.i2_des')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.i2_des" class="form-control" type="text" placeholder="des"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->i2_des}}</p>
                                </div>
                                @error('user.i2_des') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="i2_due" class="form-control-label">{{ __('Internship Duration') }}</label>
                                <div class="@error('user.i2_due')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.i2_due" class="form-control" type="text"
                                        placeholder="i2_due" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->i2_due}}</p>
                                </div>
                                @error('user.i2_due') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
            
                   
                </form>

            </div>
        </div>
    </div>