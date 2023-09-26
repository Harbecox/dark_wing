@extends('layouts.admin')

@section('title', 'Edit airport')

@section('content')
    <style>
        .port_text_main [class^='col-']{
            border: 1px dashed #252525;
        }
        .port_text {
            margin-top: 120px;
        }
        .port_text_title {
            padding: 0 155px;
        }
        h5 {
            margin-bottom: 27px;
        }
        .port_text_main img {
            width: 100%!important;
        }
        .section_text {
            text-align: justify;

        }
        .section_main {
            margin-bottom: 60px;
        }
        .section_title {
            padding: 0 165px;
            text-align: center;
            margin-bottom: 40px;
        }
    </style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit airport</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('success') }}
            </div>
        @endif

        <div class="card card-primary">
            <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method($method)
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{ $airport->title ?? old("title") }}" name="title" class="form-control" placeholder="Enter Title">
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">Meta title</label>--}}
{{--                        <input type="text" value="{{ $airport->meta_title }}" name="meta_title" class="form-control" placeholder="Enter Meta title">--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">Meta Description</label>--}}
{{--                        <input type="text" value="{{ $airport->meta_description }}" name="meta_description" class="form-control" placeholder="Enter Meta title">--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Continent</label>
                        <select class="form-control form-control" id="type" name="info[continent]">
                            <option value="">Select Continent</option>
                            @foreach(\App\Models\AirportInfo::CONTINENTS as $continent)
                                <option value="{{ $continent }}" {{ $continent == ($airport->info->continent ?? old("info.continent")) ? 'selected' : '' }}>
                                    {{ $continent }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Country</label>
                        <select class="form-control form-control" id="type" name="info[country_id]">
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" {{ $country->id == ( $airport->info->country_id ?? old("country_id") ) ? 'selected' : '' }}>
                                    {{ $country->name }}-{{$country->code}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <input type="text" value="{{ $airport->info->city ?? old("info.city") }}" name="info[city]" class="form-control" placeholder="IATA">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">IATA</label>
                        <input type="text" value="{{ $airport->info->iata ?? old("info.iata") }}" name="info[iata]" class="form-control" placeholder="IATA">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">ICAO</label>
                        <input type="text" value="{{ $airport->info->icao ?? old("info.icao") }}" name="info[icao]" class="form-control" placeholder="ICAO">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Latitude</label>
                        <input type="text" value="{{ $airport->info->latitude ?? old("info.latitude") }}" name="info[latitude]" class="form-control" placeholder="Latitude">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Longitude</label>
                        <input type="text" value="{{ $airport->info->longitude ?? old("info.longitude") }}" name="info[longitude]" class="form-control" placeholder="Longitude">
                    </div>

                    <div class="form-group image_upload">
                        <label for="customFile">Image</label>
                        <div class="form-group">
                            <img src="{{ isset($airport) ? Storage::url($airport->image) : "" }}" class="previewImage @empty($airport) d-none @endempty"  height="200" width="200" style="object-fit: cover" alt=""/>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" class="form-control customFile" id="customFile1">
                            <label class="custom-file-label" for="customFile1">Choose file</label>
                        </div>
                    </div>

                    <div class="form-group image_upload">
                        <label for="customFile">Background Image</label>
                        <div class="form-group">
                            <img src="{{ isset($airport) ? Storage::url($airport->bg_image) : "" }}" class="previewImage @empty($airport) d-none @endempty" height="200" width="200" style="object-fit: cover" alt=""/>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="bg_image" class="form-control customFile" id="customFile2">
                            <label class="custom-file-label" for="customFile2">Choose file</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta Title</label>
                        <input type="text" value="{{ $airport->meta_title ?? old("info.meta_title") }}" name="meta_title" class="form-control" placeholder="Meta Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta Description</label>
                        <input type="text" value="{{ $airport->meta_description ?? old("info.meta_description") }}" name="meta_description" class="form-control" placeholder="Meta Description">
                    </div>
                    @isset($airport)
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-outline card-info">
                                        <div class="card-body">
                                            <textarea id="summernote" name="description">
                                                 {{ $airport->description ?? old("info.description") }}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endisset
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('footer')
    <script>
        $(function () {
            $('#summernote').summernote()
        })
    </script>
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
