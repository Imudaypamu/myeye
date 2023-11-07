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