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
    </div>  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
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