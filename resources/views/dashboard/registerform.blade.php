<form method="POST" action="{{ route('nysc') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <fieldset>
                        <legend>Fill In the Form to Enroll</legend>
                        @if (session('status'))

                        <!--session status-->
                                <div class="alert alert-success">
                                {{ session('status') }}
                                </div>
                                @endif



                        <div class="form-group row ">
                            <label for="name" class="col-md-3 col-form-label text-md-left padding-left">{{ __('First Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class=" padding-left form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                            <div class="form-group row">
                            <label for="lastName" class="col-md-3 col-form-label text-md-left padding-left">{{ __('Last Name') }}</label>

                            <div class="col-md-8">
                                <input id="lastName" type="text" class="input-group padding-left form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="stateCode" class="col-md-3 col-form-label text-md-left padding-left">{{ __('State Code') }}</label>

                            <div class="col-md-8">
                                <input id="stateCode" type="text" class="input-group padding-left form-control{{ $errors->has('statecode') ? ' is-invalid' : '' }}" name="stateCode" value="{{ old('statecode') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stateCode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-left padding-left">{{ __('Phone Number') }}</label>

                            <div class="col-md-8">
                                <input id="phone" type="text" class="input-group padding-left form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-left padding-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="input-group padding-left form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-left padding-left">{{ __('Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="text" class="input-group padding-left form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adrress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="education" class="col-md-3 col-form-label text-md-left padding-left">{{ __('Educational Qualification') }}</label>

                            <div class="col-md-8">
                                <input id="education" type="text" class="input-group padding-left form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="education" value="{{ old('education') }}" required>

                                @if ($errors->has('education'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="training" class="col-md-3 col-form-label text-md-left padding-left">{{ __('Training') }}</label>
                            <div class="col-md-8">
                                <select class="form-control padding-left" placeholder="select type of shot "name="training">
                                    <option value="photography">Photography</option>
                                    <option value="filmMaking">Film-Making</option>
                                    <option  value="Photo_video">Photography & videography</option>
                                    <option value="Pic_Editing">Picture Editing</option>
                                    <option value="Others">others-Please describe below</option>

                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="training sch" class="col-md-3 col-form-label text-md-left padding-left">{{ __('Training Schedule') }}</label>
                            <div class="col-md-8">
                                <select class="form-control padding-left" placeholder="select type of shot" name="schedule">
                                    <option value="morning">Morning<option>
                                    <option value="afternonoon">Afternoon<option>
                                    <option value="Remote">Remote<option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="starting" class="col-md-3 col-form-label text-md-left padding-left">{{ __('Starting on') }}</label>

                            <div class="col-md-6">
                                <input id="starting" type="date" class="form-control padding-left" name="start" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ending" class="col-md-3 col-form-label text-md-left padding-left">{{ __('Ending on') }}</label>

                            <div class="col-md-6">
                                <input id="ending" type="date" class="form-control padding-left" name="end" required>
                            </div>
                        </div>
                        <input id="ending" type="hidden" value="{{Auth::user()->id}}" class="form-control padding-left" name="user_id">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save">  </i>
                                     {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                        <fieldset>
                        
                    </form>