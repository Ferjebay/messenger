@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">        
        <b-col cols="8">             
            <b-card header="Inicio de sesión">
                <b-card-body>
                    <b-form method="POST" action="{{ route('login') }}">
                        @csrf

                        <b-form-group                         
                            label="Correo electronico:"
                            label-for="emsil"
                            description="Nunca compartiremos tu correo. estas seguro con nosotros.."
                        >
                            <b-form-input
                              id="email"                              
                              type="email"
                              required
                              placeholder="example@gmail.com"
                              autocomplete="off"
                            ></b-form-input>
                        </b-form-group>

                        <b-form-group                         
                            label="Password:"
                            label-for="emsil"
                            description="Ingresa tu contraseña"
                          >
                            <b-form-input
                              id="email"                              
                              type="password"
                              required                              
                            ></b-form-input>
                        </b-form-group>

                        <b-form-group id="input-group-4">
                            <b-form-checkbox-group id="checkboxes-4">
                              <b-form-checkbox value="me">Recuerdame</b-form-checkbox>
                            </b-form-checkbox-group>
                        </b-form-group>
                       
                        <b-button type="submit" variant="primary">Enviar</b-button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Registrarse
                        </a>                                               
                    </b-form>
                </b-card-body>
            </b-card>
        </b-col>        
    </b-row>
</b-container>
@endsection
