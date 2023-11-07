<div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Profile Information') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">

                <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">{{ __('First Name') }}</label>
                                <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.name" class="form-control" type="text" placeholder=""
                                    id="copied" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->name}}</p>
                                </div>
                              
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name" class="form-control-label">{{ __('Last Name') }}</label>
                                <div class="@error('user.last_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.last_name" class="form-control" type="text"
                                        placeholder="" id="copied" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->last_name}}</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="father_name" class="form-control-label">{{ __('Father Name') }}</label>
                                <div class="@error('user.father_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.father_name" class="form-control" type="text" placeholder="Father Name"
                                    id="copied" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->father_name}}</p>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mother_name" class="form-control-label">{{ __('Mother Name') }}</label>
                                <div class="@error('user.mother_name')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.mother_name" class="form-control" type="text"
                                        placeholder="Mother Name" id="copied" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->mother_name}}</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-control-label">{{ __('Email') }}</label>
                                <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.email" class="form-control" type="email"
                                        placeholder="@example.com" id="copied" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->email}}</p>
                                </div>
                                
                            </div>
                        </div> 
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="alt_email" class="form-control-label">{{ __('Alternative Email') }}</label>
                                <div class="@error('user.alt_email')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.alt_email" class="form-control" type="email"
                                        placeholder="@example.com" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->alt_email}}</p>
                                </div>
                               
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone" class="form-control-label">{{ __('Phone') }}</label>
                                <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.phone" class="form-control" type="tel"
                                        placeholder="40770888444" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->phone}}</p>
                                </div>
                             
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alt_mobile" class="form-control-label">{{ __('Alternative Phone') }}</label>
                                <div class="@error('user.alt_mobile')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.alt_mobile" class="form-control" type="tel"
                                        placeholder="40770888444" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->alt_mobile}}</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="aadhar_no" class="form-control-label">{{ __('Adhar Number') }}</label>
                                <div class="@error('user.aadhar_no')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.aadhar_no" class="form-control" type="tel"
                                        placeholder="4077 0888 0444" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->aadhar_no}}</p>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pan_no" class="form-control-label">{{ __('Pan Number') }}</label>
                                <div class="@error('user.pan_no')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.pan_no" class="form-control" type="tel"
                                        placeholder="GMQ995W2D" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->last_name}}</p>
                                </div>
                                @error('user.pan_no') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="voter_id" class="form-control-label">{{ __('Voter Id') }}</label>
                                <div class="@error('user.voter_id')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.voter_id" class="form-control" type="tel"
                                        placeholder="40770888444" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->voter_id}}</p>
                                </div>
                                @error('user.voter_id') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="idf_moles" class="form-control-label">{{ __('Identification Proof') }}</label>
                                <div class="@error('user.idf_moles')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.idf_moles" class="form-control" type="tel"
                                        placeholder="40770888444" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->idf_moles}}</p>
                                </div>
                                @error('user.idf_moles') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    </div>
                   
                </form>

            </div>
        </div>
    </div>
    <!-- Address -->
     <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Address Proof') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">

              

                <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="d_no" class="form-control-label">{{ __('D No') }}</label>
                                <div class="@error('user.d_no')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.d_no" class="form-control" type="text" placeholder="D.No"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->d_no}}</p>
                                </div>
                                @error('user.d_no') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="landmark" class="form-control-label">{{ __('Landmark') }}</label>
                                <div class="@error('user.landmark')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.landmark" class="form-control" type="text"
                                        placeholder="Land Mark"onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->landmark}}</p>
                                </div>
                                @error('user.landmark') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="street" class="form-control-label">{{ __('Street') }}</label>
                                <div class="@error('user.street')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.street" class="form-control" type="text" placeholder="Street"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->street}}</pp>
                                </div>
                                @error('user.Street') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="village" class="form-control-label">{{ __('Village') }}</label>
                                <div class="@error('user.village')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.village" class="form-control" type="text"
                                        placeholder="Village" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->village}}</p>
                                </div>
                                @error('user.village') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="mandal" class="form-control-label">{{ __('Mandal') }}</label>
                                <div class="@error('user.mandal')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.mandal" class="form-control" type="text"
                                        placeholder="Mandal" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->mandal}}</p>
                                </div>
                                @error('user.mandal') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div> 
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="district" class="form-control-label">{{ __('District') }}</label>
                                <div class="@error('user.district')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.district" class="form-control" type="text"
                                        placeholder="District" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->district}}</p>
                                </div>
                                @error('user.distirct') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="state" class="form-control-label">{{ __('State') }}</label>
                                <div class="@error('user.state')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.state" class="form-control" type="text"
                                        placeholder="State" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->state}}</p>
                                </div>
                                @error('user.state') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country" class="form-control-label">{{ __('Nationality') }}</label>
                                <div class="@error('user.country')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.country" class="form-control" type="tel"
                                        placeholder="Country" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->country}}</p>
                                </div>
                                @error('user.country') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="p_address" class="form-control-label">{{ __('Permanent Address') }}</label>
                                <div class="@error('user.p_address')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.p_address" class="form-control" type="tel"
                                        placeholder="Permnent address" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->p_address}}</p>
                                </div>
                                @error('user.p_address') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>

                   
                    
                </form>

            </div>
        </div>
    </div> 
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
    <!-- Achivements -->
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
                                    <p wire:model="user.cu2_due" class="form-control" type="text"
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
    <!-- Social Links -->
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Profile Information') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">

              

                <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="github" class="form-control-label">{{ __('Github') }}</label>
                                <div class="@error('user.github')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.github" class="form-control" type="text" placeholder="Github"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->github}}</p>
                                </div>
                                @error('user.github') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="linkedin" class="form-control-label">{{ __('Last Name') }}</label>
                                <div class="@error('user.linkedin')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.linkedin" class="form-control" type="text"
                                        placeholder="Last Name" onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->linkedin}}</p>
                                </div>
                                @error('user.linkedin') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="portfolio" class="form-control-label">{{ __('Portfolio') }}</label>
                                <div class="@error('user.portfolio')border border-danger rounded-3 @enderror">
                                    <p wire:model="user.portfolio" class="form-control" type="text" placeholder="Father Name"
                                    onclick="copy(this); funcBtns.alertOK2()">{{Auth::user()->portfolio}}</p>
                                </div>
                                @error('user.portfolio') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                 </form>

            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script>
    function copy(that){
var inp =document.createElement('input');
document.body.appendChild(inp)
inp.value =that.textContent
inp.select();
document.execCommand('copy',false);
inp.remove();
}
</script>
<!-- <script type="text/javascript">
  
      $(document).ready(function() {
        toastr.options.timeOut = 1500; // 1.5s
        $('#copied').click(function() {
           toastr.success('Text Copied!');
        });
      });
    </script>  -->
      <script>
var funcBtns ={
  // Display a warning toast, with no title
   alertWarning: function(){
    toastr.warning('Benim adim ömer halisdemir');
  },
  alertOK2:function(){
    // Display a success toast, with a title
    toastr.success('Text Copied', 'Successfully')
  },
  alertError:function(){
    // Display an error toast, with a title
    toastr.error('I do not think that word means what you think it means.', 'Inconceivable!');
  },
  alertOK:function(){
    // Override global options
  toastr.success('We do have the Kapua suite available.', 'Turtle Bay Resort', {timeOut: 5000});
  }
};

$(function() {

    function Toast(type, css, msg) {
        this.type = type;
        this.css = css;
        this.msg = 'This is positioned in the ' + msg + '. You can also style the icon any way you like.';
    }

    var toasts = [
        new Toast('error', 'toast-bottom-full-width', 'This is positioned in the bottom full width. You can also style the icon any way you like.'),
        new Toast('info', 'toast-top-full-width', 'top full width'),
        new Toast('warning', 'toast-top-left', 'This is positioned in the top left. You can also style the icon any way you like.'),
        new Toast('success', 'toast-top-right', 'top right'),
        new Toast('warning', 'toast-bottom-right', 'bottom right'),
        new Toast('error', 'toast-bottom-left', 'bottom left')
    ];

    toastr.options.positionClass = 'toast-top-right';
    toastr.options.extendedTimeOut = 0; //1000;
    toastr.options.timeOut = 1000;
    toastr.options.fadeOut = 250;
    toastr.options.fadeIn = 250;

    var i = 0;

    $('#tryMe').click(function () {
        $('#tryMe').prop('disabled', true);
        delayToasts();
    });

    function delayToasts() {
        if (i === toasts.length) { return; }
        var delay = i === 0 ? 0 : 2100;
        window.setTimeout(function () { showToast(); }, delay);

        // re-enable the button        
        if (i === toasts.length-1) {
            window.setTimeout(function () {
                $('#tryMe').prop('disabled', false);
                i = 0;
            }, delay + 1000);
        }
    }

    function showToast() {
        var t = toasts[i];
        toastr.options.positionClass = t.css;
        toastr[t.type](t.msg);
        i++;
        delayToasts();
    }
})
</script>