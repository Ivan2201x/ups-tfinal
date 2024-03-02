@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Tablero'],
    ['href'=> route('exams.index'), 'text'=> 'Exams', 'active'],
]])

@section('title',  __('Exams'))

@section('page_heading',   __('Exams'))

@section('content', )
    @livewire('list-exams-table')
@endsection