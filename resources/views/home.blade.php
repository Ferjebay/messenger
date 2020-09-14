@extends('layouts.app')

@section('content')
<b-container fluid style="height: calc(100vh - 56px);">
    <b-row class="py-2 h-100" no-gutters>
        <b-col cols="4">            
            <contact-list-component></contact-list-component>
        </b-col>

        <b-col cols="8">            
            <activate-conversation-component></activate-conversation-component>
        </b-col>
    </b-row>
</b-container>
@endsection
