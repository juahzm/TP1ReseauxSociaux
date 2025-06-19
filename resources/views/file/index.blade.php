<form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">File Title:</label>
    <input type="text" name="title" required>

    <label for="document">PDF File:</label>
    <input type="file" name="document" accept="application/pdf" required>

    <label for="student_id">Student ID:</label>
    <input type="number" name="student_id" required>

    <button type="submit">Upload PDF</button>
</form>



@foreach ($files as $file)
<p>{{ $file->title }}</p>
<a href="{{ asset('storage/' . $file->file_path) }}" target="_blank">View PDF</a>
@endforeach