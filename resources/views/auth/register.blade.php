@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">        
        <b-col cols="8">             
            <b-card header="Registrarse">
                <b-card-body class="pt-0">

                    @if ($errors->any())
                        <b-alert show variant="danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>                            
                        </b-alert>                        
                    @endif

                    <b-form method="POST" action="{{ route('register') }}">
                        @csrf

                        <b-form-group                         
                            label="Nombre:"
                            label-for="nombre"                            
                        >
                            <b-form-input
                              id="nombre"                              
                              type="text"
                              name="name"
                              required                              
                              autocomplete="off"
                            ></b-form-input>
                        </b-form-group>

                        <b-form-group                         
                            label="Correo electronico:"
                            label-for="email"                            
                          >
                            <b-form-input
                              id="email"                              
                              name="email"
                              type="email"                              
                              required 
                              autocomplete="off"                             
                            ></b-form-input>
                        </b-form-group>

                        <b-form-group                         
                            label="Contraseña:"
                            label-for="password"                            
                          >
                            <b-form-input
                              id="password"                              
                              name="password"
                              type="password"                              
                              required                                                           
                            ></b-form-input>
                        </b-form-group>

                         <b-form-group                         
                            label="Contraseña:"
                            label-for="password_confirmation"                            
                          >
                            <b-form-input
                              id="password_confirmation"                              
                              name="password_confirmation"
                              type="password"                              
                              required                                                           
                            ></b-form-input>
                        </b-form-group>                      
                       
                        <b-button type="submit" variant="primary">Enviar</b-button>
                                                            
                    </b-form>
                </b-card-body>
            </b-card>
        </b-col>        
    </b-row>
</b-container>

@endsection
