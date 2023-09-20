@extends('layouts.app')

@section('body')
    <div class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <form action="">
                        <div class="d-flex flex-column flex-md-row mb-4">
                            <div class="edit-avatar-wrapper mb-3 mb-md-0 mx-auto mx-md-0">
                                <div class="avatar-wrapper rounded-circle overflow-hidden flex-shrink-0 me-4 shadow p-2">
                                    <img src="{{ url('assets/images/user.png')}}" alt="" class="avatar" id="avatar">
                                </div>
                                <label for="upload-picture" class="btn p-0 edit-avatar-show bg-primary rounded-circle shadow p-2 d-flex align-items-center">
                                    <i class='bx bx-edit bx-sm' color='white' style="color: aliceblue"></i>
                                </label>
                                <input type="file" class="d-none" id="upload-picture" name="upload-picture" accept="image/*">
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="confirm-password" class="form-label">Confirm Password</label>
                                    <input type="text" class="form-control" id="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary me-4" type="submit">Save</button>
                            <a href="">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('after-script')
    <script>
        $('#upload-picture').on('change', function(event) {
            var output = $('#avatar');
            output.attr('src', URL.createObjectURL(event.target.files[0]));
            output.onload = function() {
                URL.revokeObjectURL(output.attr('src'))
            }
        })
    </script>
@endsection