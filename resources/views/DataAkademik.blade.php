{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Diri Dosen</title>
    <style>

    </style>--}}

    <x-layout>

    <div class="title">
    <h2 style="text-align: center;">Form Data Diri Dosen</h2>

    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>

        <label for="nidn">NIDN:</label>
        <input type="text" id="nidn" name="nidn" placeholder="Masukkan NIDN" required>

        <label for="program_studi">Program Studi:</label>
        <select id="program_studi" name="program_studi" required>
            <option value="">-- Pilih Program Studi --</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Teknik Industri</option>
        </select>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email" required>

        <label for="phone">Nomor Telepon:</label>
        <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon" required>

        <label for="address">Alamat:</label>
        <textarea id="address" name="address" rows="4" placeholder="Masukkan alamat lengkap"></textarea>

        <button type="submit">Submit</button>
    </form>
    </div>

</x-layout>

{{-- </body>
</html> --}}
