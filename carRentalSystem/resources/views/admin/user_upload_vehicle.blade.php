@extends('layouts.dashboard')

@section('content')

    <div class="content-body">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Upload a Vehicle Details For Rent</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            Fill all fields

                            <div class="container">
                                <div>
                                    <strong>
                                        @if (Session::has('message'))
                                            <div class="alert alert-danger">{{ Session::get('message') }}</div>
                                        @endif
                                    </strong>
                                </div>
                                <form method="POST" action="{{ route('uploadImage') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="location"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                                        <div class="col-md-6">
                                            <select name="location" id="state"
                                                    class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}">
                                                <option value="" selected="selected">- Select -</option>
                                                <option value="Abuja FCT">Abuja FCT</option>
                                                <option value="Abia">Abia</option>
                                                <option value="Adamawa">Adamawa</option>
                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                <option value="Anambra">Anambra</option>
                                                <option value="Bauchi">Bauchi</option>
                                                <option value="Bayelsa">Bayelsa</option>
                                                <option value="Benue">Benue</option>
                                                <option value="Borno">Borno</option>
                                                <option value="Cross River">Cross River</option>
                                                <option value="Delta">Delta</option>
                                                <option value="Ebonyi">Ebonyi</option>
                                                <option value="Edo">Edo</option>
                                                <option value="Ekiti">Ekiti</option>
                                                <option value="Enugu">Enugu</option>
                                                <option value="Gombe">Gombe</option>
                                                <option value="Imo">Imo</option>
                                                <option value="Jigawa">Jigawa</option>
                                                <option value="Kaduna">Kaduna</option>
                                                <option value="Kano">Kano</option>
                                                <option value="Katsina">Katsina</option>
                                                <option value="Kebbi">Kebbi</option>
                                                <option value="Kogi">Kogi</option>
                                                <option value="Kwara">Kwara</option>
                                                <option value="Lagos">Lagos</option>
                                                <option value="Nassarawa">Nassarawa</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Ogun">Ogun</option>
                                                <option value="Ondo">Ondo</option>
                                                <option value="Osun">Osun</option>
                                                <option value="Oyo">Oyo</option>
                                                <option value="Plateau">Plateau</option>
                                                <option value="Rivers">Rivers</option>
                                                <option value="Sokoto">Sokoto</option>
                                                <option value="Taraba">Taraba</option>
                                                <option value="Yobe">Yobe</option>
                                                <option value="Zamfara">Zamfara</option>
                                                <option value="Outside Nigeria">Outside Nigeria</option>
                                            </select>

                                            @if ($errors->has('location'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <label for="Rent Price"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Rent Price per Hour') }}</label>
                                        <div class="col-md-6">
                                            <input id="text" type="number"
                                                   class="form-control{{ $errors->has('rent_price') ? ' is-invalid' : '' }}"
                                                   name="rent_price" value="{{ old('rent_price') }}" required autofocus
                                                   placeholder="Enter Renting Price">
                                            @if ($errors->has('rent_price'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rent_price') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <label for="upload-vehicle-image"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Upload Vehicle images') }}</label>

                                        <div class="col-md-6">
                                            <input id="file" type="file"
                                                   class="form-control{{ $errors->has('uploadImage') ? ' is-invalid' : '' }}"
                                                   name="uploadImage" value="{{ old('uploadImage') }}" required
                                                   autofocus>

                                            @if ($errors->has('uploadImage'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('uploadImage') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Upload') }}
                                            </button>
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
@endsection
