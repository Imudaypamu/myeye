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