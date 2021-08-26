@extends('backend.partials.user_master')

@section('content')
<!-- <h1><p class="text-center" style="padding-top: 250px;"> tasks page</h1> -->
<!-- <h1><p class="text-center"> tasks page</h1> -->

<div>
  <h2><p class="text-center" style="padding-top: 20px;">Submit Tasks</h2>
</div>

<label class="form-label" for="customFile">Choose files to upload</label>
<input type="file" class="form-control" id="customFile" />
<input type="submit" class="btn btn-success" value="Upload">


<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection
