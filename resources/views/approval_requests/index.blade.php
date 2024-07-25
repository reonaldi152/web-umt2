<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Approval Requests</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Approval Requests</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Nama Surat</th>
                    <th>Notes</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($approvalRequests as $request)
                    <tr>
                        <td>{{ $request->user->name }}</td>
                        <td>{{ $request->document_name }}</td>
                        <td>{{ $request->notes }}</td>
                        <td>{{ $request->status }}</td>
                        <td class="actions">
                            @if ($request->status == 'pending')
                                <a href="{{ route('approval-request.downloadDocument', $request->id) }}"
                                    class="btn btn-info">View Document</a>
                                <a href="{{ route('approval-request.approve', $request->id) }}"
                                    class="btn btn-success">Approve</a>
                                <a href="{{ route('approval-request.reject', $request->id) }}"
                                    class="btn btn-danger">Reject</a>
                            @elseif ($request->status == 'approved' && !$request->signed_document_path)
                                <form action="{{ route('approval-request.uploadSignedDocument', $request->id) }}"
                                    method="POST" enctype="multipart/form-data" class="upload-form">
                                    @csrf
                                    <label for="file-{{ $request->id }}" class="file-label">Choose File</label>
                                    <input type="file" name="signed_document" id="file-{{ $request->id }}" required>
                                    <button type="submit" class="submit-button btn btn-primary">Upload Signed
                                        Document</button>
                                </form>
                            @elseif ($request->status == 'rejected')
                                Ditolak
                            @elseif ($request->signed_document_path)
                                <a href="{{ route('approval-request.downloadSignedDocument', $request->id) }}"
                                    class="btn btn-primary">Download Signed Document</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
