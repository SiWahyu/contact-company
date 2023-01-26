@extends('layouts.layouts')

@section('contact')
<h2 class="p-4 text-center fw-bolder">Message From User</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">Name</th>
                <th class="col-md-4">Email</th>
                <th class="col-md-2">Message</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $contact)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->message}}</td>
                <td>
                    <form action="{{url('contact/'.$contact->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick=" return confirm('Menghapus Pesan dari {{$contact->name}} ?')">Hapus</button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection
