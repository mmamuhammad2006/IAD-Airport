@extends('admin.layouts.app')

@section('content')
    <change-content :contents="{{ $contents }}"></change-content>
    {{-- <div class="container-fluid">
        <div class="container col-8">
            <div class="col-12 py-5">

                <form class="col-12" action="" method="POST">
                    @foreach ($contents as $content)
                        <div class="mb-3 col-12">
                            <label for="" class="form-label">{{ $content['key'] }}</label>
                            <input type="text" class="form-control" name="" id=""
                                aria-describedby="helpId" placeholder="" value="{{ $content['value'] }}" />
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>

                </form>
            </div>
        </div>
    </div> --}}
@endsection
