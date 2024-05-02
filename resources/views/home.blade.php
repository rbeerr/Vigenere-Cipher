@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h2 class="text-center mb-4">VIGENERE CIPHER ENCRYPTION AND DECRYPTION</h2>
                    <p class="text-center mb-4">This is a final laboratory task for Information Assurance and Security 2.</p>
                    <p class="text-center mb-4">Submitted by: Menor, Arbhie C.</p>
                    <form method="post" action="{{ route('process') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="plainText" class="form-label">Text:</label>
                            <input type="text" class="form-control" id="plainText" name="plainText" required>
                        </div>
                        <div class="mb-3">
                            <label for="keyword" class="form-label">Keyword:</label>
                            <input type="text" class="form-control" id="keyword" name="keyword" required>
                        </div>
                        <div class="mb-3">
                            <label for="operation" class="form-label">Operation:</label>
                            <select class="form-control" id="operation" name="operation" required>
                                <option value="encrypt">Encrypt</option>
                                <option value="decrypt">Decrypt</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Execute</button>
                    </form>
                    @isset($result)
                    <div class="mt-4">
                        <h3 class="text-center mb-2">Result:</h3>
                        <p class="text-center">{{ $result }}</p>
                    </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
