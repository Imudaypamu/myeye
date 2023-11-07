 <!--Education -->
 <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Education') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">

              

                <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="school_name" class="form-control-label">{{ __('School Name') }}</label>
                                <div class="@error('user.school_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.school_name" class="form-control" type="text" placeholder="school_name"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->school_name}}</p>
                                </div>
                                @error('user.school_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="s_board" class="form-control-label">{{ __('SSC Board') }}</label>
                                <div class="@error('user.s_board')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.s_board" class="form-control" type="text"
                                        placeholder="ssc board" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->s_board}}</p>
                                </div>
                                @error('user.s_board') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="s_percentage" class="form-control-label">{{ __('SSC Percentage') }}</label>
                                <div class="@error('user.s_percentage')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.s_percentage" class="form-control" type="text" placeholder="Percentage"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->s_percentage}}</p>
                                </div>
                                @error('user.s_percentage') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="s_gpa" class="form-control-label">{{ __('SSC CGPA') }}</label>
                                <div class="@error('user.s_gpa')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.s_gpa" class="form-control" type="text"
                                        placeholder="s_gpa" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->s_gpa}}</p>
                                </div>
                                @error('user.s_gpa') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="s_location" class="form-control-label">{{ __('Location') }}</label>
                                <div class="@error('user.s_location')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.s_location" class="form-control" type="text"
                                        placeholder="School Location" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->s_location}}</p>
                                </div>
                                @error('user.s_location') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div> 
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="c_name" class="form-control-label">{{ __('12/Diploma College Name') }}</label>
                                <div class="@error('user.c_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.c_name" class="form-control" type="text"
                                        placeholder="c_name" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->c_name}}</p>
                                </div>
                                @error('user.c_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="c_board" class="form-control-label">{{ __('12/DIP Board') }}</label>
                                <div class="@error('user.c_board')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.c_board" class="form-control" type="text"
                                        placeholder="c_board" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->c_board}}</p>
                                </div>
                                @error('user.c_board') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="c_percentage" class="form-control-label">{{ __('12/DIP Percentage') }}</label>
                                <div class="@error('user.c_percentage')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.c_percentage" class="form-control" type="tel"
                                        placeholder="c_percentage" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->c_percentage}}</p>
                                </div>
                                @error('user.c_percentage') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="c_gpa" class="form-control-label">{{ __('12/DIP CGPA') }}</label>
                                <div class="@error('user.c_gpa')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.c_gpa" class="form-control" type="text" placeholder="D.No"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->c_gpa}}</p>
                                </div>
                                @error('user.c_gpa') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="c_location" class="form-control-label">{{ __('Location') }}</label>
                                <div class="@error('user.c_location')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.c_location" class="form-control" type="text"
                                        placeholder="c_location" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->c_location}}</p>
                                </div>
                                @error('user.c_location') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="b_name" class="form-control-label">{{ __('Btech College') }}</label>
                                <div class="@error('user.b_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.b_name" class="form-control" type="text" placeholder="b_name"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->b_name}}</p>
                                </div>
                                @error('user.b_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="b_board" class="form-control-label">{{ __('BTECH Board') }}</label>
                                <div class="@error('user.b_board')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.b_board" class="form-control" type="text"
                                        placeholder="b_board" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->b_board}}</p>
                                </div>
                                @error('user.b_board') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="b_percentage" class="form-control-label">{{ __('Btech Percentage') }}</label>
                                <div class="@error('user.b_percentage')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.b_percentage" class="form-control" type="text" placeholder="b_percentage"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->b_percentage}}</p>
                                </div>
                                @error('user.b_percentage') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="b_gpa" class="form-control-label">{{ __('BTECH CGPA') }}</label>
                                <div class="@error('user.b_gpa')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.b_gpa" class="form-control" type="text"
                                        placeholder="b_gpa" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->b_gpa}}</p>
                                </div>
                                @error('user.b_gpa') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="b_location" class="form-control-label">{{ __('Location') }}</label>
                                <div class="@error('user.b_location')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.b_location" class="form-control" type="text"
                                        placeholder="b_location" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->b_location}}</p>
                                </div>
                                @error('user.b_location') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> 