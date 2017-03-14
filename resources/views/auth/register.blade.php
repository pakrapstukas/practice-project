@extends('welcome')

@section('content')
<div class="col-lg-8 col-sm-6 col-md-7 right-content">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Registracijos forma</h2></div>
                    <div class="panel-body">
                      <div class="container-fluid">
                        <div class="row vertical-align-container">
                          <div class="col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 vertical-align-box">
                            <div class="panel panel-default transparent-panel">
                              <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}"> {{ csrf_field() }}
                                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name"  class="col-sm-5 control-label">Slapyvardis</label>

                            <div class="col-sm-7">
                                <input id="name" type="text" placeholder="Slapyvardis" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-sm-5 control-label right-label">El. pašto adresas</label>
                                    <div class="col-sm-7">
                                      <input id="email" class="form-control" type="email" name="email" placeholder="El. pašto adresas" value="{{ old('email') }}" required>
                                      @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                  </div>
                                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-sm-5 control-label right-label">Slaptažodis</label>
                                    <div class="col-sm-7">
                                      <input id="password" class="form-control" type="password" name="password"   placeholder="Slaptažodis" required>
                                      @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="password-confirm" class="col-sm-5 control-label right-label">Pakartoti slaptažodį</label>
                                    <div class="col-sm-7">
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Pakartoti slaptažodį" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-xs-12">
                                      <button type="submit" class="btn btn-default btn-lg btn-block button-style">Registruotis</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
@endsection
