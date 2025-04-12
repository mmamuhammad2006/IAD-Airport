@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid py-5 p-0">
        <div class="m-auto">
            <div class="col-12 p-0">
                <div class="table-cont px-5">
                    <div class="col-12 bg-white p-3 rounded-4">
                        <table class="table table-striped table-hover">
                            <thead>
                          <tr>
                            <th class="bg-white" scope="col">#</th>
                            <th class="bg-white" scope="col">Title</th>
                            <th class="bg-white" scope="col">Posted</th>
                            <th class="bg-white" scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                             $x = 1;
                            ?>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td class="bg-white py-3">{{ $x++ }}</td>
                                <td class="bg-white py-3">{{ $blog->title }}</td>
                                <td class="bg-white py-3">{{ $blog->date }}</td>
                                <td class="bg-white py-3">
                                    <div class="btn-group">
                                    <button type="button" class="btn bg-cyan rounded" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa-solid fa-ellipsis-vertical text-white border-0 border-active-none"></i>
                                    </button>
                                    <div class="dropdown-menu shadow bg-white border-0">
                                      <a class="dropdown-item" href="{{ route('blogs.edit', ['blog' => $blog->id]) }}">Edit</a>
                                      <a class="dropdown-item" href="{{ route('blogs.show', ['blog' => $blog->id]) }}">Show</a>
                                      <a class="dropdown-item" href="{{ route('blogs.delete', ['blog' => $blog->id]) }}">Delete</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            @endforeach

                        </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
