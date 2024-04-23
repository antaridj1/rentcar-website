 <table class="table table-bordered datatable">
    <thead>
        <tr>
            <th class="text-center" scope="col" style="width: 100px; overflow: hidden;">No</th>
            <th class="text-center" scope="col">Nama</th>
            <th class="text-center" scope="col">Seat</th>
            <th class="text-center" scope="col">Harga (Rp)</th>
            <th class="text-center" scope="col">Status</th>
            <th class="text-center" scope="col">Aksi</th> 
        </tr>
    </thead>
    <tbody>
    @forelse ($cars as $car)
        <tr>
            <td class="text-center" scope="col" style="width: 100px; overflow: hidden;">{{$loop->iteration}}</td>
            <td class="text-left" scope="col">{{$car->name}}</td>
            <td class="text-left" scope="col">{{$car->seat}}</td>
            <td class="text-right" scope="col">{{$car->price}}</td>
            <td class="text-right" scope="col">{{$car->is_available}}</td>
           
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