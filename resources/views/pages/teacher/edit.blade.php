@extends('layouts.app', ['breadcrumbs' => [
        ['href'=> route('dashboard'), 'text'=> 'Tablero'],
        ['href'=> route('teachers.index'), 'text'=> 'teachers' , ],
        ['href'=> route('teachers.edit', $teacher->id), 'text'=> "Edit $teacher->name" , 'active']
]])
@section('title',  __("Edit $teacher->name"))

@section('page_heading',  __("Edit $teacher->name"))

@section('content')
    @livewire('edit-teacher-form', ['teacher' => $teacher])
@endsection
