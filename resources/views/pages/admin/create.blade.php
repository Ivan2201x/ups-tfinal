@extends('layouts.app', ['breadcrumbs' => [
        ['href'=> route('dashboard'), 'text'=> 'Tablero'],
        ['href'=> route('admins.index'), 'text'=> 'Administrator'],
        ['href'=> route('admins.create'), 'text'=> 'create', 'active'],
]])

@section('title',  __('Create administrator'))

@section('page_heading',   __('Create Administrator'))

@section('content' )
    @livewire('create-admin-form')
@endsection