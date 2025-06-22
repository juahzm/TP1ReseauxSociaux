@extends('layouts.app')
@section('title' )
@section('content')



<h5 class="text-primary text-center ">{{trans('lang.uploadfile')}}</h5>
<div class="mt-5 flex text-center">
    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">File Title:</label>
        <input type="text" name="title" required>

        <label for="document">PDF File:</label>
        <input type="file" name="document" accept="application/pdf" required>

        <button type="submit">Upload PDF</button>
    </form>

</div>



<div class="row mb-4 mt-5 ml-3 mr-3">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h5 class="text-primary text-center ">{{trans('lang.title_files')}}</h5>
            </div>
            <div class="card-body ">
                <table class="table table-striped ">

                    <thead>
                        <tr>
                            <th class="text-primary ">{{trans('lang.filestudent')}}</th>
                            <th class="text-primary ">{{trans('lang.filetitle')}}</th>
                            <th class="text-primary ">{{trans('lang.filepath')}}</th>


                        </tr>
                    </thead>

                    <tbody>


                        @foreach($files as $file)

                        <tr>
                            <td>{{$file->student->name}}</td>
                            <td>{{ $file->title }}</td>
                            <td> <a href="{{ asset('storage/' . $file->file_path) }}"
                                    target="_blank"
                                    class="text-blue-600 hover:underline">
                                    View PDF
                                </a></td>

                            @endforeach


                        </tr>


                    </tbody>

                </table>

            </div>





        </div>

    </div>



</div>



@endsection