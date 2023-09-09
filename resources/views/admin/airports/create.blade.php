@extends('layouts.admin')

@section('title', 'Add new airport')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add new airport</h1>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="content">
        @if(session('success'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('success') }}
            </div>
        @endif

        <div class="card card-primary">
            <form action="{{ route('admin.airport.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Title">
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">Meta title</label>--}}
{{--                        <input type="text" name="meta_title" class="form-control" placeholder="Enter meta title">--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">Meta description</label>--}}
{{--                        <input type="text" name="meta_description" class="form-control" placeholder="Enter meta description">--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Continent</label>
                        <select class="form-control form-control" id="type" name="info[continent]">
                            <option value="">Select Continent</option>
                            @foreach(\App\Models\AirportInfo::CONTINENTS as $continent)
                                <option value="{{ $continent }}" >
                                    {{ $continent }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Country</label>
                        <select class="form-select form-control" name="info[country_id]">
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}-{{$country->code}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <input type="text" name="info[city]" class="form-control" placeholder="IATA">
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">Description</label>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="card card-outline card-info">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <textarea id="summernote" name="description"></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">IATA</label>
                        <input type="text" name="info[iata]" class="form-control" placeholder="IATA">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">OACI</label>
                        <input type="text" name="info[oaci]" class="form-control" placeholder="OACI">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Latitude</label>
                        <input type="text" name="info[latitude]" class="form-control" placeholder="Latitude">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Longitude</label>
                        <input type="text" name="info[longitude]" class="form-control" placeholder="Longitude">
                    </div>

                    <div class="form-group image_upload">
                        <label for="customFile">Image</label>
                        <div class="form-group">
                            <img src="" class="previewImage d-none"  height="200" width="200" style="object-fit: cover" alt=""/>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" class="form-control customFile" id="customFile1">
                            <label class="custom-file-label" for="customFile1">Choose file</label>
                        </div>
                    </div>

                    <div class="form-group image_upload">
                        <label for="customFile">Background Image</label>
                        <div class="form-group">
                            <img src="" class="previewImage d-none" height="200" width="200" style="object-fit: cover" alt=""/>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="bg_image" class="form-control customFile" id="customFile2">
                            <label class="custom-file-label" for="customFile2">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('footer')
{{--    <script>--}}
{{--        $(function () {--}}
{{--            $('#summernote').summernote()--}}
{{--        })--}}
{{--    </script>--}}
    <script>
        document.querySelectorAll(".image_upload").forEach(function (div){
            console.log(div);
            var preview = div.querySelector(".previewImage");
            var fileInput = div.querySelector(".customFile");
            fileInput.addEventListener("change",function (){
                var file = fileInput.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.classList.remove("d-none");
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.src = ""; // Сбросить изображение, если файл не выбран
                }
            })
        })
    </script>
@endsection
