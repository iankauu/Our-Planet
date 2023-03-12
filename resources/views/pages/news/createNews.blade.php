@extends('layouts.adminBase')
@section('title', 'Create new post')
@section('content')
<div id="wrapper">
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="post-form">
                <form method="POST" enctype="multipart/form-data" name="myform" onsubmit="return validation()"
                    action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label for="title" class="form-label">News title</label>
                                <div class="input-group mb-3">
                                    <input type="text" placeholder="News title" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Photo preview</label><br />
                                <div class="gallery">
                                    <img id="output" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <div style="display: flex; gap: 8px">
                                    <div>
                                        <label class="form-label">Photo</label><br />
                                        <input type="file" name="image" accept="image/*" onchange="loadFile(event)" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
