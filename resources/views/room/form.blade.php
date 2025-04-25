@php
  $photo = isset($room) ? $room->photo : null;
  $roomname = isset($room) ? $room->name : null;
  $description = isset($room) ? $room->description : null;
  $capacity = isset($room) ? $room->capacity : null;
  $status = isset($room) ? $room->status : null;

  $url = isset($room) ? "/admin/room/$room->id" : '/room';
  $method = isset($room) ? 'PUT' : 'POST';
  $title = isset($room) ? 'Ubah Data Room' : 'Tambah Data Room';
@endphp

@extends('layouts.app', ['title' => $title, 'page' => 'room'])

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Pages</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{ route('room.index') }}">List Room</a>
    </li>
    <li class="breadcrumb-item active">{{ $title }}</li>
  </ol>
</nav>
@endsection

@section('content')
  <div class="card">
    <div class="card-header">{{ $title }}</div>
    <div class="card-body">
      <form action="{{ $url }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method($method)
        <div class="mb-3">
          <label for="formFile" class="form-label">Photo Preview Room</label>
          <div class="input-group input-group-merge">
            <span id="formFile2" class="input-group-text"
              ><i class="bx bx-file"></i
            ></span>
            <input class="form-control" name="photo" type="file" value="{{ $photo }}" id="formFile" aria-describedby="formFile2" accept="image/*">
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-icon-default-roomname">Name Room</label>
          <div class="input-group input-group-merge">
            <span id="basic-icon-default-roomname2" class="input-group-text"
              ><i class="bx bx-user"></i
            ></span>
            <input
              type="text"
              class="form-control"
              id="basic-icon-default-roomname"
              name="name"
              value="{{ $roomname }}"
              placeholder="Meeting ..."
              aria-label="Meeting ..."
              aria-describedby="basic-icon-default-roomname2"
              required
            />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-icon-default-description">Deskripsi</label>
          <div class="input-group input-group-merge">
            <span id="basic-icon-default-description2" class="input-group-text"
              ><i class="bx bx-comment"></i
            ></span>
            <textarea
              id="basic-icon-default-description"
              class="form-control"
              name="description"
              placeholder="Room ..."
              aria-label="Room ..."
              aria-describedby="basic-icon-default-description2"
              required
            >{{ $description }}</textarea>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="capacity-input">Capacity</label>
          <div class="input-group input-group-merge">
            <span id="capacity-input2" class="input-group-text"
              ><i class="bx bx-group"></i
            ></span>
            <input 
              class="form-control" 
              type="number" 
              name="capacity"
              value="{{ $capacity }}" 
              min="2" 
              id="capacity-input" 
              aria-describedby="capacity-input2"
              required
              />
          </div>
        </div>
        <div class="mb-3">
          <label for="status-input" class="form-label">Status</label>
          <div class="input-group input-group-merge">
            <span id="basic-icon-default-room2" class="input-group-text">Select Status Room</span>
            <select class="form-select" name="status" id="basic-icon-default-room">
              <option selected="">Choose...</option>
              <option value="able" @if($status == 'able') selected @endif>Can be used</option>
              <option value="disable" @if($status == 'disable') selected @endif>Cannot be used / Under repair</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
    </div>
  </div>
@endsection