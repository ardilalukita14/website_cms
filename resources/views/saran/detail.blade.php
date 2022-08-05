@extends('layoutsadmin.app')
    <!-- Preloader Start-->
@include('layoutsadmin.header')
@extends('layoutsadmin.contents')
@section('content')
@include('layoutsadmin.sidebar')
                <td><b>{{ $saran->Nama }}</b><br><br>
                {{ $saran->Email }}<br><br>
                {{ $saran->Pesan }}


                {{-- <td>
                <form action="{{ route('saran.destroy',$saran->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('saran.show',$saran->id) }}">Show</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td> --}}
                </td>
            </tr>
            </table>
        </div>
        <br>
        <br>
@endsection