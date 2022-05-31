@include('header')

<!-- banner -->
<div class="container-fluid banner">
    <div class="container text-center">
        <h4 class="display-6 mt-3 mb-3">Master Data IRD</h4>
    </div>
</div>
<!-- Data IRD -->
<div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="/input">
                <span class="badge bg-success">Tambah Data +</span>
            </a>
        </div>

        <div class="col-md-4 ms-auto">
            <form action="/list_ird">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...." name="search"
                    value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>



    <div class="container text-center">
        <div class="row pt-4 gx-4 gy-4 table-responsive">
            <table class="table table-stripe">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>Serial Number</th>
                        <th>IP Control</th>
                        <th>Owner</th>
                        <th>Used</th>
                        <th class="col-2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    
                @foreach ($irds as $no => $rd)
                        <tr>
                            <td align="center">{{ $no + $irds->firstItem() }}</td>
                            <td align="center">{{ $rd->merk }}</td>
                            <td align="center">{{ $rd->type }}</td>
                            <td align="center">{{ $rd->sn }}</td>
                            <td align="center">{{ $rd->control }}</td>
                            <td align="center">{{ $rd->owner }}</td>
                            <td align="center">{{ $rd->channel }}</td>
                            <td>
                                <span class="badge bg-warning text-dark">Edit</span>
                                <span class="badge bg-danger">Delete</span>
                            </td>
                            
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="d-flex justify-content-end">
        {{ $irds->links() }}
    </div>
</div>

@include('footer')