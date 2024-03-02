@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Tablero'],
    ['href'=> route('students.index'), 'text'=> 'Students', 'active'],
]])

@section('title',  __('Students'))

@section('page_heading',   __('Students'))

@section('content', )
    @livewire('list-students-table')
@endsection