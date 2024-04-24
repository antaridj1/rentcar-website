 <table class="table table-bordered datatable">
    <thead>
        <tr>
            <th class="text-center" scope="col" >No</th>
            <th class="text-center" scope="col">Nama</th>
            <th class="text-center" scope="col">Harga (Rp)</th>
            <th class="text-center" scope="col">Keterlibatan Driver</th>
            <th class="text-center" scope="col">Harga Dengan Driver</th>
            <th class="text-center" scope="col">Status</th>
            <th class="text-center" scope="col">Aksi</th> 
        </tr>
    </thead>
    <tbody>
    @forelse ($cars as $car)
        <tr>
            <td class="text-center" scope="col" >{{$loop->iteration}}</td>
            <td class="text-left" scope="col">{{$car->name}}</td>
            <td class="text-end" scope="col">{{number_format($car->price,2)}}</td>
            <td class="text-center" scope="col">
                @if($car->is_with_driver == 1)
                    <span class="badge rounded-pill bg-primary">Dengan Driver</span>
                @else 
                    <span class="badge rounded-pill bg-secondary">Tanpa Driver</span>
                @endif
            </td>
            <td class="text-end" scope="col">{{$car->price_with_driver ? number_format($car->price_with_driver,2) : '-'}}</td>
            <td class="text-center" scope="col">
                @if($car->is_available == 1)
                    <span class="badge rounded-pill bg-success">Tersedia</span>
                @else 
                    <span class="badge rounded-pill bg-danger">Tidak Tersedia</span>
                @endif
            </td>
            <td class="text-center" scope="col">
                <a href="{{route('car.edit',$car->id)}}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i>Edit</a>
                <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$car->id}}">
                    <i class="bi bi-trash-fill">Hapus</i>
                </button>
                @include('admin.car.modal')
            </td>
            
        </tr>
    @empty
        <tr>
            <td>Tidak ada data</td>
        </tr>
    @endforelse
    </tbody>
</table>