@extends('layouts.app')

@section('content')
<style>
     @media only screen and (min-width: 1101px){
        .d-grid{
            grid-template-columns: repeat(2,1fr);
            height:100%;

        }
        #left{
            width:100%;
        }
        
    }
    #left{
        background-color: #046c3c;}
    @media only screen and (max-width:1100px){
        .d-grid{
            grid-template-columns: repeat(1,1fr);  
            width: 100%;
            height:auto;     
        }
        #left{
               background-color: #046c3c;
               width:100%;
            }
        #right{
            height:100%
        }
    }
    #gmb{
       width: 100%;
    }
     #id{
        text-decoration: none;
     }
     #id:hover{
        text-decoration: underline;
     }

</style>
    <div class="d-grid">
        <div id="right" class="d-flex align-items-center">
            <img id="gmb" class="w-100 mx-auto my-auto d-block" src="/img/login2.png" alt="">
        </div>
        <div id="left" class="p-5">
           
                    <h2 class="text-center fw-bold mb-5 text-light fs-1">{{ __('Entry Your Account') }}</h2>
                    
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}"> 
                            @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-form-label text-md-start text-light fs-4">{{ __('Username') }}</label>

                            <div>
                                <input placeholder="Username" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password" class="text-light fs-4 col-form-label text-md-start">{{ __('Password') }}</label>

                            <div>
                                <input placeholder="*********" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-5">
                           
                                <div class="form-check">
                                    <input class="form-check-input m-auto" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-light fs-6 ml-3" for="remember">
                                        {{ __(' Remember Me') }}
                                    </label>
                         
                            </div>
                        </div>
                                <button type="submit" class="btn btn-warning w-100">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    
                                @endif
          
                    </form>
                </div>
@endsection
