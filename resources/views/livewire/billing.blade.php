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